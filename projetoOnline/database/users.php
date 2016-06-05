<?php

  function checkLogin($username, $password)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM User_user
                            WHERE username = ? AND password = ?");

    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() == true;
  }

  function getNumberOfUsers()
  {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM User_user");
    $stmt->execute();

    return $stmt->rowCount();
  }

  function createUser($cityID, $raceID, $genderID, $name, $birthday, $email, $password, $username)
  {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO User_user (cityID, raceID, genderID, name, birthday, email, password, username, points)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    return $stmt->execute(array($cityID, $raceID, $genderID, $name, $birthday, $email, sha1($password), $username,0));
  }

  function getUserID($username)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT userID
                            FROM User_user
                            WHERE username = ?");

    $stmt->execute(array($username));

    if($stmt->rowCount() > 0)
      return $stmt->fetch();
    else
      return false;
  }

  function getUsername($userID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT username
                            FROM User_user
                            WHERE userID = ?");

    $stmt->execute(array($userID));

    return $stmt->fetch();
  }

  function createPost($userID, $description, $privacy)
  {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Post (userID, description, privacy)
                            VALUES (?, ?, ?)");

    return $stmt->execute(array($userID, $description, $privacy));
  }

  function getUserPosts($userID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM Post
                            WHERE userID = ?
                            ORDER BY postID DESC");

    $stmt->execute(array($userID));

    return $stmt->fetchAll();
  }

  function getLastPost($userID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT *, User_user.username
                            FROM Post
                            INNER JOIN User_user ON (User_user.userID = Post.userID)
                            WHERE Post.userID = ?
                            ORDER BY postID DESC");

    $stmt->execute(array($userID));

    return $stmt->fetch();
  }

  function getAllPosts()
  {
    global $conn;
    $stmt = $conn->prepare("SELECT *, User_user.username
                            FROM Post
                            INNER JOIN User_user ON (User_user.userID = Post.userID)
                            ORDER BY postID DESC");

    $stmt->execute();

    return $stmt->fetchAll();
  }

  function getFeedPosts($userID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT *, User_user.username, FriendRequest.senderID, FriendRequest.receiverID
                             FROM Post
                             INNER JOIN User_user ON (User_user.userID = Post.userID)
						INNER JOIN FriendRequest ON (FriendRequest.senderID = ? AND FriendRequest.receiverID = Post.userID)
						UNION SELECT *, User_user.username, FriendRequest.senderID, FriendRequest.receiverID
                             FROM Post
                             INNER JOIN User_user ON (User_user.userID = Post.userID)
						INNER JOIN FriendRequest ON (FriendRequest.receiverID = ? AND FriendRequest.senderID = Post.userID)
                            ORDER BY postID DESC");

	$stmt->execute(array($userID, $userID));

    return $stmt->fetchAll();
  }

  function getUserInfo($username)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT Race.name AS race_name, Species.name AS species_name, Gender.name AS gender_name, City.name AS city_name, Country.name AS country_name, User_user.name AS user_name, birthday, email
                            FROM User_user
                            INNER JOIN City ON (User_user.cityID = City.cityID)
                            INNER JOIN Country ON (City.countryID = Country.countryID)
                            INNER JOIN Race ON (User_user.raceID = Race.raceID)
                            INNER JOIN Species ON (Race.speciesID = Species.speciesID)
                            INNER JOIN Gender ON (User_user.genderID = Gender.genderID)
                            WHERE username = ?");

    $stmt->execute(array($username));

    return $stmt->fetch();
  }

  function getUserDetails($username)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT cityID, raceID, genderID, name, birthday, email
                            FROM User_user
                            WHERE username = ?");

    $stmt->execute(array($username));

    return $stmt->fetch();
  }

  function sendFriendRequest($senderID, $receiverID)
  {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO FriendRequest (senderID, receiverID, accepted)
                            VALUES (?, ?, ?)");

    return $stmt->execute(array($senderID, $receiverID, 0));
  }

  function acceptFriendRequest($senderID, $receiverID)
  {
    global $conn;
    $stmt = $conn->prepare("UPDATE FriendRequest
                            SET accepted = ?
                            WHERE senderID = ? AND receiverID = ?");

    return $stmt->execute(array(1, $senderID, $receiverID));
  }

  function updateFriendRequest($newDescription, $chatID, $oldDescription)
  {
    global $conn;
    $stmt = $conn->prepare("UPDATE Message
                            SET description = ?
                            WHERE chatID = ? AND description LIKE ?");

    return $stmt->execute(array($newDescription, $chatID, $oldDescription));
  }

  function sendMessage($chatID, $userID, $description)
  {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Message (chatID, userID, description)
                            VALUES (?, ?, ?)");

    return $stmt->execute(array($chatID, $userID, $description));
  }

  function createChat($name)
  {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Chat (name)
                            VALUES(?)");

    return $stmt->execute(array($name));
  }

  function createUserChat($userID, $chatID)
  {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO User_Chat (userID, chatID)
                            VALUES(?, ?)");

    return $stmt->execute(array($userID, $chatID));
  }

  function getChatID($name)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT chatID
                            FROM Chat
                            WHERE name = ?");

    $stmt->execute(array($name));

    return $stmt->fetch();
  }

  function getLastMessage($chatID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT userID, description, date::timestamp(0)
                            FROM Message
                            WHERE chatID = ?
                            ORDER BY messageID DESC");

    $stmt->execute(array($chatID));

    return $stmt->fetch();
  }

  function getAllMessages($chatID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT userID, description, date::timestamp(0)
                            FROM Message
                            WHERE chatID = ?
                            ORDER BY messageID ASC");

    $stmt->execute(array($chatID));

    return $stmt->fetchAll();
  }

  function getChats($userID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT User_chat.chatID, MAX(Message.date)
                            FROM User_Chat
                            JOIN Message ON (User_chat.chatID = Message.chatID)
                            WHERE User_chat.userID = ?

                            GROUP BY User_chat.chatID
                            ORDER BY MAX(Message.date) DESC
                            ");

    $stmt->execute(array($userID));

    return $stmt->fetchAll();
  }

  function getChatName($chatID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT name
                            FROM chat
                            WHERE chatID = ?
                            ");

    $stmt->execute(array($chatID));

    return $stmt->fetch();
  }

  function getFriends($userID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT senderID AS userID
                            FROM FriendRequest
                            WHERE accepted = ? AND receiverID = ?
                            UNION
                            SELECT receiverID AS userID
                            FROM FriendRequest
                            WHERE accepted = ? AND senderID = ?");

    $stmt->execute(array(1, $userID, 1, $userID));

    return $stmt->fetchAll();
  }
?>
