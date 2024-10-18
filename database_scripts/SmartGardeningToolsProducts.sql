/*
Lakshita Madhavan October 17, 2024 lm66@njit.edu
IT 202 001  || Phase 2 Assignment*/


CREATE TABLE SmartGardeningToolsProducts (
ToolProductID        INT(11)        NOT NULL,
ToolProductCode      VARCHAR(10)    NOT NULL   UNIQUE,
ToolProductName      VARCHAR(255)   NOT NULL,
ToolProductColor      VARCHAR(255)   NOT NULL,
ToolDescription      TEXT           NOT NULL,
ToolCategoryID       INT(11)        NOT NULL,
ToolWholesalePrice   DECIMAL(10,2)  NOT NULL,
ToolListPrice        DECIMAL(10,2)  NOT NULL,
DateCreated            DATETIME       NOT NULL,
PRIMARY KEY ( ToolProductID )
);

/*SWS Category Items*/
INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(1000, 'WEDIK', 'Wi-Fi Enabled Drip Irrigation Kit', 'Forest Green','Control your watering schedules remotely through a mobile app for optimal plant moisture.
', 100, 79.99, 129.99, NOW());

INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(2000, 'BST', 'Bluetooth Sprinkler Timer', 'Navy Blue','Easily customize watering times and durations via smartphone connectivity for tailored plant care.', 100, 39.99, 69.99, NOW());


INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(3000, 'SMBWS', 'Soil Moisture-Based Watering System', 'Terracotta','Automatically activates watering based on real-time soil moisture readings, preventing overwatering.', 100, 89.99, 149.99, NOW());


/*SMS Category Items*/
INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(4000, 'WSMM', 'Wireless Soil Moisture Meter', 'Sage Green','Battery-operated device that provides real-time moisture readings and alerts you via smartphone when its time to water.', 200, 24.99, 44.99, NOW());

INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(5000, 'MSSP', 'Multi-Sensor Soil Probe', 'Charcoal Gray','Measures moisture, pH, and temperature, offering comprehensive data to ensure optimal plant health.', 200, 34.99, 59.99, NOW());

INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(6000, 'SPSMS', 'Solar-Powered Soil Moisture Sensor', 'Sunflower Yellow','Eco-friendly sensor that uses solar energy to monitor soil moisture levels and syncs with a mobile app for easy tracking.', 200, 29.99, 49.99, NOW());

/*APP Category Items*/
INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(7000, 'SWP', 'Self-Watering Planter', 'Slate Blue','Stylish pot with an integrated reservoir that automatically waters plants based on their specific needs, ideal for busy plant lovers.', 300, 44.99, 79.99, NOW());

INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(8000, 'SPAC', 'Smart Planter with App Control', 'Pearl White','Connects to an app to monitor soil moisture and send reminders for essential care tasks.', 300, 54.99, 89.99, NOW());

INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(9000, 'LGLIP', 'LED Grow Light Integrated Pot', 'Matte Black','Features built-in LED grow lights that adjust according to the plants light requirements, ensuring optimal growth indoors.', 300, 69.99, 119.99, NOW());



/*SGL Category Items*/
INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(10000, 'SPLGL', 'Solar-Powered LED Garden Lights', 'Brushed Silver','Eco-friendly lights that charge during the day and provide adjustable brightness for nighttime illumination of your garden.', 400, 34.99, 59.99, NOW());


INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(11000, 'MSGPL', 'Motion-Sensor Garden Path Lights', 'Bronze','Activate automatically when motion is detected, enhancing safety and ambiance in outdoor spaces.', 400, 39.99, 69.99, NOW());


INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(12000, 'SRGS', 'Smart RGB Garden Spotlights', 'Glossy Black','Color-changing spotlights controlled via a smartphone app, allowing users to customize lighting effects for various occasions.', 400, 49.99, 84.99, NOW());


/*WRIC Category Items*/
INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(13000, 'SIH', 'Smart Irrigation Hub', 'Mint Green','Central unit that connects to multiple irrigation systems, adjusting schedules based on local weather forecasts for efficient watering.', 500, 79.99, 129.99, NOW());

INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(14000, 'RSA', 'Rain Sensor Attachmen', 'Sky Blue','Detects rainfall and pauses watering automatically, conserving water and preventing over-irrigation.', 500, 19.99,34.99, NOW());

INSERT INTO SmartGardeningToolsProducts
(ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated)
VALUES
(15000, 'MACIT', 'Mobile App-Controlled Irrigation Timer', 'Graphite Gray','Syncs with weather data to optimize watering schedules based on current conditions and forecasts.', 500, 59.99, 99.99, NOW());


SELECT * from SmartGardeningToolsProducts;
