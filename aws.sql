CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO Utente (username, password) VALUES ('riccardo', 'andronaco');
INSERT INTO Utente (username, password) VALUES ('ruben', 'scopacasa');
