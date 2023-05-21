CREATE DATABASE login;
USE login;
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);
INSERT INTO users (username, password) VALUES ('admin', '$2y$10$xC6FsMd4Q.xoevVgYF6dQOH2CLtz7WQk3H60jJqIYp4icb4TJm/jK');