DROP TABLE IF EXISTS Country CASCADE;
DROP TABLE IF EXISTS Gender CASCADE;
DROP TABLE IF EXISTS City CASCADE;
DROP TABLE IF EXISTS Species CASCADE;
DROP TABLE IF EXISTS Race CASCADE;
DROP TABLE IF EXISTS User CASCADE;
DROP TABLE IF EXISTS FriendRequest CASCADE;
DROP TABLE IF EXISTS Friendship CASCADE;
DROP TABLE IF EXISTS Group CASCADE;
DROP TABLE IF EXISTS User_Group CASCADE;
DROP TABLE IF EXISTS Event CASCADE;
DROP TABLE IF EXISTS Badge CASCADE;
DROP TABLE IF EXISTS Participation CASCADE;
DROP TABLE IF EXISTS ActivityType CASCADE;
DROP TABLE IF EXISTS Post CASCADE;
DROP TABLE IF EXISTS Activity_Post CASCADE;
DROP TABLE IF EXISTS Comment CASCADE;
DROP TABLE IF EXISTS Like CASCADE;
DROP TABLE IF EXISTS Chat CASCADE;
DROP TABLE IF EXISTS User_Chat CASCADE;
DROP TABLE IF EXISTS Message CASCADE;

CREATE TABLE Country(
	countryID BIGSERIAL PRIMARY KEY,
	name VARCHAR(30) UNIQUE NOT NULL
);
/*CREATE INDEX Country_index ON public.Country USING btree(countryID ASC NULLS LAST);*/

CREATE TABLE City(
	cityID BIGSERIAL PRIMARY KEY,
	countryID BIGINT REFERENCES Country(countryID),
	name VARCHAR(30) NOT NULL
);
/*CREATE INDEX City_index ON public.City USING btree(cityID ASC NULLS LAST, countryID ASC NULLS LAST);
ALTER TABLE public.City CLUSTER ON City_index;*/

CREATE TABLE Gender(
	genderID BIGSERIAL PRIMARY KEY,
	name VARCHAR(1) NOT NULL
);
/*CREATE INDEX Gender_index ON public.Gender USING btree(genderID ASC NULLS LAST); */

CREATE TABLE Species(
	speciesID BIGSERIAL PRIMARY KEY,
	name VARCHAR(30) NOT NULL
);

CREATE TABLE Race(
	raceID BIGSERIAL PRIMARY KEY,
	speciesID BIGINT REFERENCES Species(speciesID),
	name VARCHAR(30) NOT NULL
);

CREATE TABLE User(
	userID BIGSERIAL PRIMARY KEY,
	cityID BIGINT REFERENCES City(cityID) NOT NULL,
	raceID BIGINT REFERENCES Race(raceID) NOT NULL,
	genderID BIGINT REFERENCES Gender(genderID) NOT NULL,
	name VARCHAR(30) NOT NULL,
	birthday DATE NOT NULL,
	email VARCHAR(30) NOT NULL,
	password VARCHAR(30) NOT NULL,
	username VARCHAR(30) UNIQUE NOT NULL
	/*picture PHOTO NOT NULL,*/
);

CREATE TABLE FriendRequest(
	senderID BIGINT REFERENCES User(userID) PRIMARY KEY,
	receiverID BIGINT REFERENCES User(userID) PRIMARY KEY,
	accepted BOOLEAN
);

CREATE TABLE Group(
	groupID BIGSERIAL PRIMARY KEY,
	userID BIGINT REFERENCES User(userID),
	name VARCHAR(30) NOT NULL,
	description VARCHAR(30)
);

CREATE TABLE User_Group(
	userID BIGINT REFERENCES User(userID) PRIMARY KEY,
	groupID BIGINT REFERENCES Group(groupID) PRIMARY KEY
);

CREATE TABLE Event(
	eventID BIGSERIAL PRIMARY KEY,
	userID BIGINT REFERENCES User(userID) NOT NULL,
	name VARCHAR(30) NOT NULL,
	description VARCHAR(30) NOT NULL,
	maxParticipants INTEGER,
	date DATE NOT NULL,
	local VARCHAR(30) NOT NULL
);

CREATE TABLE Badge(
	badgeID BIGSERIAL PRIMARY KEY,
	description VARCHAR(20) NOT NULL
	/*image PHOTO NOT NULL*/
);

CREATE TABLE Participation(
	userID BIGINT REFERENCES User(userID) PRIMARY KEY,
	eventID BIGINT REFERENCES Event(eventID) PRIMARY KEY,
	badgeID BIGINT REFERENCES Badge(badgeID)
);

CREATE TABLE ActivityType(
	activityTypeID BIGSERIAL PRIMARY KEY,
	name VARCHAR(30) NOT NULL
);

CREATE TABLE Post(
	postID BIGSERIAL PRIMARY KEY,
	userID BIGINT REFERENCES User(userID) NOT NULL,
	activityTypeID BIGINT REFERENCES ActivityType(activityTypeID),
	date DATE NOT NULL,
	description VARCHAR(150) NOT NULL,
	privacy BOOLEAN NOT NULL
);

CREATE TABLE Comment(
	commentID BIGSERIAL PRIMARY KEY,
	userID BIGINT REFERENCES User(userID) NOT NULL,
	postID BIGINT REFERENCES Post(postID) NOT NULL,
	description VARCHAR(100) NOT NULL,
	date DATE NOT NULL
);

CREATE TABLE Like(
	userID BIGINT REFERENCES User(userID) PRIMARY KEY,
	postID BIGINT REFERENCES Post(postID) PRIMARY KEY
);

CREATE TABLE Chat(
	chatID BIGSERIAL PRIMARY KEY,
	name VARCHAR(30) NOT NULL
);

CREATE TABLE User_Chat(
	userID BIGINT REFERENCES User(userID) PRIMARY KEY,
	chatID BIGINT REFERENCES Chat(chatID) PRIMARY KEY
);

CREATE TABLE Message(
	messageID BIGSERIAL PRIMARY KEY,
	chatID BIGINT REFERENCES Chat(chatID) NOT NULL,
	userID BIGINT REFERENCES User(userID) NOT NULL,
	description VARCHAR(150) NOT NULL,
	date DATE NOT NULL
);


SELECT userID FROM User WHERE username = 'username' AND password = 'password';

SELECT (*) FROM User WHERE name = 'name';

SELECT (*) FROM User WHERE username = 'username';

SELECT (*) FROM Event WHERE name = 'name';

SELECT (*) FROM Event WHERE local = 'local';

SELECT (*) FROM Group WHERE name = 'name';


SELECT COUNT(*) as count FROM Like WHERE postID = 'postID';

SELECT (*) FROM Comment WHERE postID = 'postID';

SELECT badgeID FROM Participation WHERE userID = 'userID' AND eventID = 'eventID';

SELECT description FROM Message WHERE messageID = 'messageID';


UPDATE Comment
SET description = 'new_description'
WHERE commentID = 'commentID';

UPDATE Event
SET name = 'new_name', description = 'new_description', maxParticipants = 'new_maxParticipants', date = 'new_date', local = 'new_local'
WHERE eventID = 'eventID';


UPDATE group
SET name = 'new_name', description = "new_description"
WHERE groupID = 'groupID';

///////// USER DEFINED FUNCTIONS

//ver numero de likes

CREATE FUNCTION getLikesInPost {
	@p_postID BIGINT
} RETURNS INT
BEGIN
	RETURN (SELECT COUNT(*) FROM Like WHERE postID = @p_postID)
END



CREATE FUNCTION getEventsInAGivenData {
 @p_date DATE
} RETURNS INT
BEGIN
	RETURN (SELECT COUNT(*) FROM Event WHERE date = @p_date)
END

//Ver animais da raça cão
CREATE FUNCTION pets_By_Race(@raceID BIGSERIAL)
RETURNS TABLE
AS
RETURN(
	SELECT username FROM User WHERE raceID = @raceID
)


Update User
Set <cityID>='<new_cityID>', <raceID>='<new_cityID>',
 <genderID>='<new_genderID>', <name>="<new_name>",
 <birthday>='<new_birthday>', <email>="<new_email>"
 WHERE userID='<userID>';

UPDATE Post
SET description='<new_description>'
WHERE postID='<postID>';


DELETE FROM User
WHERE username='<username>';

DELETE FROM Post
WHERE postID='<postID>';

DELETE FROM Group
WHERE groupID='<groupID>';

DELETE FROM Event
WHERE eventID='<eventID>';

DELETE FROM Comment WHERE commentID = 'commentID';

//Trigger(verifica se o user pode entrar na competiçao ou o numero de participantes já é igual ao maximo)


CREATE  OR REPLACE FUNCTION add_participant()
  RETURNS TRIGGER AS $add_participant$
BEGIN
  IF (SELECT COUNT(userID) FROM Event = maxParticipants)
  THEN
    RAISE EXCEPTION 'Max number of participants reached';
    RETURN NULL;
  END IF;
  RETURN NEW;
END;

CREATE TRIGGER add_participant
  BEFORE INSERT ON Participation
  FOR EACH ROW
  EXECUTE PROCEDURE add_participant();
