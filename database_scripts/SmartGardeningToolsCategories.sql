/*
Lakshita Madhavan October 17, 2024 lm66@njit.edu
IT 202 001  || Phase 2 Assignment*/


CREATE TABLE SmartGardeningToolsCategories (
ToolCategoryID       INT(11)        NOT NULL,
ToolCategoryCode     VARCHAR(255)   NOT NULL   UNIQUE,
ToolCategoryName     VARCHAR(255)   NOT NULL,
ToolShelfNumber       INT(11)        NOT NULL,
DateCreated            DATETIME       NOT NULL,
PRIMARY KEY ( ToolCategoryID )
);

INSERT INTO SmartGardeningToolsCategories
(ToolCategoryID, ToolCategoryCode, ToolCategoryName, ToolShelfNumber, DateCreated)
VALUES
(100, 'SWS', 'Smart Watering System', 1 , NOW());

INSERT INTO SmartGardeningToolsCategories
(ToolCategoryID, ToolCategoryCode, ToolCategoryName, ToolShelfNumber, DateCreated)
VALUES
(200, 'SMS', 'Soil Moisture Sensor', 2 , NOW());

INSERT INTO SmartGardeningToolsCategories
(ToolCategoryID, ToolCategoryCode, ToolCategoryName, ToolShelfNumber, DateCreated)
VALUES
(300, 'APP', 'Automated Plant Pot', 3 , NOW());

INSERT INTO SmartGardeningToolsCategories
(ToolCategoryID, ToolCategoryCode, ToolCategoryName, ToolShelfNumber, DateCreated)
VALUES
(400, 'SGL', 'Smart Garden Light', 4 , NOW());

INSERT INTO SmartGardeningToolsCategories
(ToolCategoryID, ToolCategoryCode, ToolCategoryName, ToolShelfNumber, DateCreated)
VALUES
(500, 'WRIC', 'Weather Responsive Irrigation Controller', 5 , NOW());


SELECT * from SmartGardeningToolsCategories;
