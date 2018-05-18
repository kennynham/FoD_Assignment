CREATE TABLE clients (
	id TINYINT unsigned NOT NULL UNIQUE,
	name CHAR(20) NOT NULL,
	PRIMARY KEY (id)
) ENGINE = InnoDB;

CREATE TABLE sections (
	id TINYINT unsigned NOT NULL UNIQUE,
	client_id TINYINT unsigned NOT NULL,
	name VARCHAR(255) NOT NULL,
	PRIMARY KEY (id), 
	INDEX (client_id),
	FOREIGN KEY (client_id) REFERENCES clients (id) ON UPDATE CASCADE ON DELETE CASCADE 
) ENGINE = InnoDB;

CREATE TABLE links (
	id TINYINT unsigned NOT NULL UNIQUE,
	section_id TINYINT unsigned NOT NULL,
	name VARCHAR(255) NOT NULL,
	PRIMARY KEY (id), 
	INDEX (section_id),
	FOREIGN KEY (section_id) REFERENCES sections (id) ON UPDATE CASCADE ON DELETE CASCADE 
) ENGINE = InnoDB;

