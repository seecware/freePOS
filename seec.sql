CREATE TABLE `contracts` (
  `contract_id` integer PRIMARY KEY AUTO_INCREMENT,
  `client_id` integer NOT NULL,
  `contract_identifier` varchar(15) UNIQUE NOT NULL,
  `details` text NOT NULL,
  `created_at` datetime DEFAULT (now()),
  `zone_id` integer NOT NULL,
  `payment_ammount` decimal(5,2) NOT NULL
);

CREATE TABLE `clients` (
  `client_id` integer PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email` varchar(100) UNIQUE,
  `created_at` datetime DEFAULT (now())
);

CREATE TABLE `zones` (
  `zone_id` integer PRIMARY KEY AUTO_INCREMENT,
  `state_id` integer,
  `mun_id` integer,
  `pc_number` varchar(5)
);

CREATE TABLE `states` (
  `state_id` integer PRIMARY KEY AUTO_INCREMENT,
  `state_name` varchar(100) UNIQUE NOT NULL,
  `state_code` varchar(3) UNIQUE NOT NULL
);

CREATE TABLE `municipalities` (
  `mun_id` integer PRIMARY KEY AUTO_INCREMENT,
  `state_id` integer NOT NULL,
  `mun_name` varchar(100) UNIQUE NOT NULL,
  `mun_code` varchar(100)
);

CREATE TABLE `postal_code` (
  `cp_number` varchar(5) PRIMARY KEY,
  `identifier` varchar(100) UNIQUE NOT NULL
);

CREATE TABLE `colonies` (
  `colonie_id` integer PRIMARY KEY,
  `cp_number` varchar(5) NOT NULL,
  `mun_id` int NOT NULL,
  `colonie_name` varchar(100) UNIQUE NOT NULL
);

CREATE TABLE `payments` (
  `payment_id` int PRIMARY KEY AUTO_INCREMENT,
  `contract_id` int NOT NULL,
  `type` ENUM ('partial', 'full') NOT NULL,
  `month` ENUM ('jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec') NOT NULL,
  `year` ENUM ('2020', '2021', '2022', '2023', '2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033', '2034', '2035', '2036', '2037', '2038', '2039', '2040') NOT NULL,
  `ammount` integer NOT NULL,
  `current_ammount` decimal(5,2)
);


CREATE UNIQUE INDEX `payments_index_0` ON `payments` (`contract_id`, `month`, `year`);

ALTER TABLE `contracts` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

ALTER TABLE `zones` ADD FOREIGN KEY (`zone_id`) REFERENCES `contracts` (`zone_id`);

ALTER TABLE `municipalities` ADD FOREIGN KEY (`state_id`) REFERENCES `states` (`state_id`);

ALTER TABLE `colonies` ADD FOREIGN KEY (`mun_id`) REFERENCES `municipalities` (`mun_id`);

ALTER TABLE `colonies` ADD FOREIGN KEY (`cp_number`) REFERENCES `postal_code` (`cp_number`);

ALTER TABLE `payments` ADD FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`contract_id`);
