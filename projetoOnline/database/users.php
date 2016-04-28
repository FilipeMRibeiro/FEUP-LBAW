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
    $stmt = $conn->prepare("INSERT INTO User_user (cityID, raceID, genderID, name, birthday, email, password, username, points) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    return $stmt->execute(array($cityID, $raceID, $genderID, $name, $birthday, $email, sha1($password), $username,0));
  }

  function getUserID($username)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT userID
                            FROM User_user
                            WHERE username = ?");

    $stmt->execute(array($username));

    return $stmt->fetch();
  }

  function createPost($userID, $description, $privacy)
  {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO Post (userID, date, description, privacy)
                            VALUES (?, ?, ?, ?)");

    return $stmt->execute(array($userID, date("Y-m-d"), $description, $privacy));
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

  function getUserInfo($username)
  {
    global $conn;
    $stmt = $conn->prepare("SELECT Race.name AS race_name, Species.name AS species_name, Gender.name AS gender_name, City.name AS city_name, Country.name AS country_name, User_user.name AS user_name, birthday
                            FROM User_user
                            INNER JOIN City ON (User_user.cityID = City.cityID)
                            INNER JOIN Country ON (City.cityID = Country.countryID)
                            INNER JOIN Race ON (User_user.raceID = Race.raceID)
                            INNER JOIN Species ON (Race.speciesID = Species.speciesID)
                            INNER JOIN Gender ON (User_user.genderID = Gender.genderID)
                            WHERE username = ?");

    $stmt->execute(array($username));

    return $stmt->fetch();
  }
?>
