CREATE DATABASE railway;
USE railway;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100),
  email VARCHAR(100),
  password VARCHAR(255),
  is_admin TINYINT(1) DEFAULT 0
);

CREATE TABLE trains (
  id INT AUTO_INCREMENT PRIMARY KEY,
  train_name VARCHAR(100),
  source VARCHAR(100),
  destination VARCHAR(100),
  departure_time TIME,
  arrival_time TIME,
  seats_total INT,
  seats_left INT
);

CREATE TABLE bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  train_id INT,
  seats_booked INT,
  booking_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (train_id) REFERENCES trains(id)
);
