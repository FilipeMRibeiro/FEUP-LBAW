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

  function createGroupPost($userID, $description, $privacy, $groupID)
  {
	  global $conn;
	  $stmt = $conn->prepare("INSERT INTO Post (userID, description, privacy, communityID)
								VALUES (?, ?, ?, ?)");

	return $stmt->execute(array($userID, $description, $privacy, $groupID));
  }

  function createEventPost($userID, $description, $privacy, $eventID)
  {
	  global $conn;
	  $stmt = $conn->prepare("INSERT INTO Post (userID, description, privacy, eventID)
								VALUES (?, ?, ?, ?)");

	return $stmt->execute(array($userID, $description, $privacy, $eventID));
  }


  function getUserPosts($userID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT *, description, date::timestamp(0), User_user.username
                            FROM Post
                            INNER JOIN User_user ON (User_user.userID = Post.userID)
                            WHERE Post.userID = ?
                            ORDER BY postID DESC");

    $stmt->execute(array($userID));

    return $stmt->fetchAll();
  }
  function getLastComment($postID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT *, User_user.username
                            FROM Comment
                            JOIN User_user ON (Comment.userID = User_user.userID)
                            WHERE postid = ?
                            ORDER BY date DESC");

    $stmt->execute(array($postID));

    return $stmt->fetch();
  }

  function getLastPost($userID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT description, date::timestamp(0), User_user.username
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
    $stmt = $conn->prepare("SELECT description, date::timestamp(0), User_user.username
                            FROM Post
                            INNER JOIN User_user ON (User_user.userID = Post.userID)
                            ORDER BY postID DESC");

    $stmt->execute();

    return $stmt->fetchAll();
  }

  function getFeedPosts($userID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT *, description, date::timestamp(0)
                            FROM Post
                            INNER JOIN User_user ON (User_user.userID = Post.userID)
                  					INNER JOIN FriendRequest ON (FriendRequest.senderID = ? AND FriendRequest.receiverID = Post.userID AND FriendRequest.accepted = 'TRUE')

                  					UNION

                            SELECT *, description, date::timestamp(0)
                            FROM Post
                            INNER JOIN User_user ON (User_user.userID = Post.userID)
						                INNER JOIN FriendRequest ON (FriendRequest.receiverID = ? AND FriendRequest.senderID = Post.userID AND FriendRequest.accepted = 'TRUE')

                            UNION

                            SELECT *, description, date::timestamp(0)
                            FROM Post
                            INNER JOIN User_user ON (User_user.userID = Post.userID)
                            INNER JOIN FriendRequest ON (FriendRequest.receiverID = FriendRequest.receiverID AND FriendRequest.senderID = FriendRequest.senderID)
                            WHERE Post.userID = ?

                            ORDER BY postID DESC");

	$stmt->execute(array($userID, $userID, 1));

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

  function hasjoined($userID, $groupID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT communityID
								FROM User_Community
								WHERE userID = ?
								AND communityID = ?");
	  $stmt->execute(array($userID, $groupID));

	  return $stmt->fetchAll();
  }

   function joinGroup($userID, $groupID)
  {
	  global $conn;
	  $stmt = $conn->prepare("INSERT INTO User_Community(userID, communityID)
								VALUES (?, ?)");

	  return $stmt->execute(array($userID, $groupID));
  }

  function hasjoinedevent($userID, $eventID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT eventID
								FROM Participation
								WHERE userID = ?
								AND eventID = ?");
	  $stmt->execute(array($userID, $eventID));

	  return $stmt->fetchAll();
  }

   function joinEvent($userID, $eventID)
  {
	  global $conn;
	  $stmt = $conn->prepare("INSERT INTO Participation(userID, eventID)
								VALUES (?, ?)");

	  return $stmt->execute(array($userID, $eventID));
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

    if($stmt->rowCount() > 0)
      return $stmt->fetch();
    else
      return false;
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
  function updateInfo($userID, $genderID, $birthday, $email, $raceID, $cityID)
  {
    global $conn;
    $stmt = $conn->prepare("UPDATE User_user
                            SET genderID = ?, birthday = ?, email = ?, raceID= ?, cityID = ?
                            WHERE userID = ?");
    return $stmt->execute(array($genderID,$birthday, $email, $raceID,$cityID,$userID));
  }
  function getSpecies(){
    global $conn;
    $stmt = $conn->prepare("SELECT name
                            FROM Species");
    $stmt->execute();
    return $stmt->fetchAll();
  }
  function getRaces($speciesName){
    global $conn;
    $stmt = $conn->prepare("SELECT Race.name AS race_name , Race.raceID AS race_id
                            FROM Race
                            JOIN Species ON (Race.speciesID = Species.speciesID)
                            WHERE Species.name = ?");
    $stmt->execute(array($speciesName));
    return $stmt->fetchAll();
  }
  function getCountry(){
    global $conn;
    $stmt = $conn->prepare("SELECT name
                            FROM Country");
    $stmt->execute();
    return $stmt->fetchAll();
  }
  function getCities($countryName){
    global $conn;
    $stmt = $conn->prepare("SELECT City.name AS city_name , City.cityID AS city_id
                            FROM City
                            JOIN Country ON (City.countryID = Country.countryID)
                            WHERE Country.name = ?");
    $stmt->execute(array($countryName));
    return $stmt->fetchAll();
  }

  function getPostUpvotes($post){
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM Upvote
                            WHERE postID = ?");
    $stmt->execute(array($post));

    return $stmt->rowCount();
  }

  function getNumberOfComments($post)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM Comment
                            WHERE postID = ?");
    $stmt->execute(array($post));

    return $stmt->rowCount();
  }

  function createUpvote($user, $post)
  {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Upvote (userid, postid)
                            VALUES (?, ?)");

    return $stmt->execute(array($user, $post));
  }

  function deleteUpvote($user, $post)
  {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM Upvote
                            WHERE userid = ? AND postid = ?");

    return $stmt->execute(array($user, $post));
  }

  function checkLikedPost($user,$post)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM Upvote
                            WHERE postid = ? AND userid = ?");

    $stmt->execute(array($post, $user));
    if($stmt->rowCount() > 0)
      return true;
    else {
      return false;
    }
  }

  function getComments($post)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT *, User_user.username
                            FROM Comment
                            JOIN User_user ON (Comment.userID = User_user.userID)
                            WHERE postid = ?
                            ORDER BY date ASC");

    $stmt->execute(array($post));

    if($stmt->rowCount() > 0)
      return $stmt->fetchAll();
    else {
      return false;
    }
  }

  function searchUsers($search)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT userID FROM User_user
                            WHERE to_tsvector(username|| ' ' || name) @@ plainto_tsquery(?)");

    $stmt->execute(array($search));

    return $stmt->fetchAll();
  }

  function searchEvents($search)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT eventid FROM Event
                            WHERE to_tsvector(textsearch) @@ plainto_tsquery(?)");

    $stmt->execute(array($search));

    return $stmt->fetchAll();
  }

  function searchGroups($search)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT communityID FROM Community
                            WHERE to_tsvector(textsearch) @@ plainto_tsquery(?)");

    $stmt->execute(array($search));

    return $stmt->fetchAll();
  }

  function createComment($user, $post, $description)
  {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Comment(userid, postid, description)
                            Values(?,?,?)");

    return $stmt->execute(array($user, $post, $description));
  }

  function getEventName($eventID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT name
                            FROM Event
                            WHERE eventID = ?");

    $stmt->execute(array($eventID));

    return $stmt->fetch();
  }

  function getGroupName($GroupID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT name
                            FROM Community
                            WHERE communityID = ?");

    $stmt->execute(array($GroupID));

    return $stmt->fetch();
  }

  function getGroupDescription($GroupID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT description
                            FROM Community
                            WHERE communityID = ?");

    $stmt->execute(array($GroupID));

    return $stmt->fetch();
  }

  function getEventDescription($eventID)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT description
                            FROM Event
                            WHERE eventID = ?");

    $stmt->execute(array($eventID));

    return $stmt->fetch();
  }

  function createGroup($userID, $name, $description, $date)
  {
	  global $conn;
	  $stmt = $conn->prepare("INSERT INTO Community (userID, name, description, textSearch) VALUES (?, ?, ?, ?)");
	  $textSearch = $name . " " . $description;

	  return $stmt->execute(array($userID, $name, $description, $textSearch));
  }

  function getCreatedCommunities($userID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT communityID, name, description
								FROM Community
								WHERE userID = ?");

	  $stmt->execute(array($userID));

	  return $stmt->fetchAll();
  }

  function getJoinedCommunities($userID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT Community.communityID, Community.name, description, username
								FROM Community, User_Community, User_user
								WHERE Community.userID = User_user.userID
								AND Community.communityID = User_Community.communityID
								AND User_Community.userID = ?");
	  $stmt->execute(array($userID));

	  return $stmt->fetchAll();
  }


  function getCommunitiesExamples($userID)
  {
	global $conn;

	$stmt=$conn->prepare("SELECT DISTINCT(Community.communityID), name
										FROM Community, User_Community
										WHERE Community.userID = ?
										OR (User_Community.communityID = Community.communityID
										AND User_Community.userID = ?)
										LIMIT 3");

	$stmt->execute(array($userID, $userID));

	return $stmt->fetchAll();
  }

    function getEventsExamples($userID)
  {
	global $conn;

	$stmt=$conn->prepare("SELECT DISTINCT(Event.eventID), name
										FROM Event, Participation
										WHERE Event.userID = ?
										OR (Participation.eventID = Event.eventID
										AND Participation.userID = ?)
										LIMIT 3");

	$stmt->execute(array($userID, $userID));

	return $stmt->fetchAll();
  }

  function createEvent($userID, $name, $description, $date, $local, $maxParticipants)
  {
	  global $conn;
	  $stmt = $conn->prepare("INSERT INTO Event (userID, name, description, date, local, maxparticipants, textSearch) VALUES (?, ?, ?, ?, ?, ?, ?)");
	  $textSearch = $name ." ". $description. " " . $local;

	  return $stmt->execute(array($userID, $name, $description, $date, $local, $maxParticipants, $textSearch));
  }

  function getCreatedEvents($userID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT eventID, name, description, date, local, maxParticipants
								FROM Event
								WHERE Event.userID = ?");

	  $stmt->execute(array($userID));

	  return $stmt->fetchAll();
  }

  function getJoinedEvents($userID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT Event.eventID, Event.name, Event.description, User_user.username, Event.date, Event.local, Event.maxParticipants
								FROM Event, Participation, User_user
								WHERE Event.userID = User_user.userID
								AND Event.eventID = Participation.eventID
								AND Participation.userID = ?");
	  $stmt->execute(array($userID));

	  return $stmt->fetchAll();
  }

  function getGroupPosts($groupID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT User_user.username, Post.date, Post.description
								FROM Post, User_user
								WHERE Post.userID = User_user.userID
								AND Post.communityID = ?");
	  $stmt->execute(array($groupID));

	  return $stmt->fetchAll();
  }

  function getGroupInfo($groupID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT User_user.username, Community.description, Community.name
								FROM Community, User_user
								WHERE Community.userid = User_user.userID
								AND Community.communityid = ?");

	$stmt->execute(array($groupID));

	return $stmt->fetch();
  }

  function getEventPosts($eventID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT User_user.username, Post.date, Post.description
								FROM Post, User_user
								WHERE Post.userID = User_user.userID
								AND Post.eventID = ?
								ORDER BY Post.date DESC");
	  $stmt->execute(array($eventID));

	  return $stmt->fetchAll();
  }

  function getEventInfo($eventID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT User_user.username, Event.description, Event.name, Event.date, Event.local, Event.maxParticipants
								FROM Event, User_user
								WHERE Event.userid = User_user.userid
								AND Event.eventid = ?");

	$stmt->execute(array($eventID));

	return $stmt->fetch();
  }

  function getEventAwards($eventID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT Badge.description, User_user.username
								FROM Badge, Participation, User_user
								WHERE Participation.eventID = ?
								AND Participation.userID = User_user.userID
								AND Participation.badgeID = Badge.badgeID");
	  $stmt->execute(array($eventID));

	  return $stmt->fetchAll();
  }

  function getEventMembers($eventID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT User_user.username
								FROM User_user, Participation
								WHERE Participation.eventID = ?
								AND Participation.badgeID IS NULL
								AND User_user.userID = Participation.userID");

	  $stmt->execute(array($eventID));

	  return $stmt->fetchAll();
  }

  function createBadge($description)
  {
	  global $conn;
	  $stmt = $conn->prepare("INSERT INTO Badge (description)
								VALUES (?)");

	  return $stmt->execute(array($description));
  }

  function getLastBadgeID()
  {
	  global $conn;
	  $stmt=$conn->prepare("SELECT MAX(badgeID) FROM Badge");
	  $stmt->execute();

	  return $stmt->fetch();
  }

  function getLastUsername()
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT username
										FROM User_user
										ORDER BY userID DESC");
	  $stmt->execute();

	  return $stmt->fetch();
  }

  function updateParticipation($badgeID, $eventID, $userID)
  {
	  global $conn;
	  $stmt = $conn->prepare("UPDATE Participation
								SET badgeID = ?
								WHERE eventID = ?
								AND userID = ?");

	  return $stmt->execute(array($badgeID, $eventID, $userID));
  }

  function getUserAwards($userID)
  {
	  global $conn;
	  $stmt = $conn->prepare("SELECT Badge.description, Event.name
										FROM  Badge, Event, Participation
										WHERE Participation.userID = ?
										AND Participation.badgeID IS NOT NULL
										AND Participation.eventID = Event.eventID
										AND Participation.badgeID = Badge.badgeID");

		$stmt->execute(array($userID));

		return $stmt->fetchAll();
  }


?>
