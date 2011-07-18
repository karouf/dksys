CREATE TABLE member (id INTEGER PRIMARY KEY AUTOINCREMENT, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, birth_date DATE NOT NULL, birth_place VARCHAR(255), citizenship VARCHAR(255), address VARCHAR(255), postcode VARCHAR(255), city VARCHAR(255), ssn VARCHAR(255), insurance VARCHAR(255), phone VARCHAR(255), mobile VARCHAR(255), email VARCHAR(255), job VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL);
CREATE TABLE membership (id INTEGER PRIMARY KEY AUTOINCREMENT, member_id INTEGER NOT NULL, season_id INTEGER NOT NULL, membership_type_id INTEGER NOT NULL, membership_status_id INTEGER NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL);
CREATE TABLE membership_status (id INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL);
CREATE TABLE membership_type (id INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR(255) NOT NULL UNIQUE, price INTEGER NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL);
CREATE TABLE season (id INTEGER PRIMARY KEY AUTOINCREMENT, year INTEGER NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL);
CREATE UNIQUE INDEX unique_membership_idx ON membership (member_id, season_id);