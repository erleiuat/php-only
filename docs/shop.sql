CREATE DATABASE IF NOT EXISTS PHPshop;

CREATE TABLE IF NOT EXISTS users (
    ID INT NOT NULL AUTO_INCREMENT,
    Username VARCHAR(45) NOT NULL,
    Pin INT NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Language VARCHAR(2),
    CreationDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    ChangeDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY unique_username(Username),
    PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS categories (
    ID INT NOT NULL AUTO_INCREMENT,
    Title VARCHAR(45) NOT NULL,
    Image VARCHAR(255),
    CreationDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    ChangeDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY unique_title(Title),
    PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS subcategories (
    ID INT NOT NULL AUTO_INCREMENT,
    CategoryID INT NOT NULL,
    Title VARCHAR(45) NOT NULL,
    Image VARCHAR(255),
    CreationDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    ChangeDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY unique_title_per_category(Title, CategoryID),
    PRIMARY KEY (ID),
    FOREIGN KEY (CategoryID) REFERENCES categories(ID)
);

CREATE TABLE IF NOT EXISTS items (
    ID INT NOT NULL AUTO_INCREMENT,
    CategoryID INT NOT NULL,
    SubcategoryID INT NOT NULL,
    Title VARCHAR(45) NOT NULL,
    Image VARCHAR(255),
    Price DOUBLE NOT NULL,
    CreationDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    ChangeDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (ID),
    FOREIGN KEY (CategoryID) REFERENCES categories(ID),
    FOREIGN KEY (SubcategoryID) REFERENCES subcategories(ID)
);