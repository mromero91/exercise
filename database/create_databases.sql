-- This script is used by the development docker compose setup to create the
-- development and testing databases
CREATE DATABASE IF NOT EXISTS dorlan_dev CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE DATABASE IF NOT EXISTS dorlan_app CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

GRANT ALL PRIVILEGES ON *.* TO 'developer'@'%';