/*
Lakshita Madhavan October 3, 2024
IT 202 001  || Phase 1 Assignment*/

CREATE TABLE SmartGardeningToolsManagers (
 SmartGardeningToolsManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(64)    NOT NULL,
 pronouns               VARCHAR(60)    NOT NULL,
 firstName              VARCHAR(60)    NOT NULL,
 lastName               VARCHAR(60)    NOT NULL,
 dateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (SmartGardeningToolsManagerID)
);

INSERT INTO SmartGardeningToolsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('taylor@SmartGarden.com', SHA2('myL0ngP@ssword', 256), 'She/Her', 'Taylor', 'Swift', NOW());


INSERT INTO SmartGardeningToolsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('emma@SmartGarden.com', SHA2('password123', 256), 'She/Her', 'Emma', 'Let', NOW());



INSERT INTO SmartGardeningToolsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('Daisy@SmartGarden.com', SHA2('password456', 256), 'She/Her', 'Daisy', 'Stone', NOW());


INSERT INTO SmartGardeningToolsManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('Leo@SmartGarden.com', SHA2('password789', 256), 'He/Him', 'Leo', 'Ski', NOW());


