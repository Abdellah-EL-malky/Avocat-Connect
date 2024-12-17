CREATE TABLE users(
	user_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    mot_de_passe VARCHAR(500) NOT NULL,
    role ENUM('Customer', 'Lawyer')
);

CREATE TABLE info(
	info_id INT PRIMARY KEY AUTO_INCREMENT,
    lawyer_id INT NOT NULL,
    speciality VARCHAR(50),
    biography TEXT,
    years_of_experience VARCHAR(50),
    picture BLOB,
    location VARCHAR(150),
    FOREIGN KEY (lawyer_id) REFERENCES users(user_id)
    	ON DELETE CASCADE
    	ON UPDATE CASCADE
);

CREATE TABLE disponibility(
	disponibility_id INT PRIMARY KEY AUTO_INCREMENT,
    lawyer_id INT NOT NULL,
    disponibility_date DATE,
    statut ENUM('Available','Unavailable') DEFAULT 'Available',
    FOREIGN KEY (lawyer_id) REFERENCES info(info_id)
    	ON DELETE CASCADE
    	ON UPDATE CASCADE
);

CREATE TABLE reservations(
    reservation_id INT PRIMARY KEY AUTO_INCREMENT,
    lawyer_id INT NOT NULL,
    customer_id INT NOT NULL,
    disponibility_id INT NOT NULL,
    reservation_date DATE,
    FOREIGN KEY (lawyer_id) REFERENCES info(info_id)
    	ON DELETE CASCADE
    	ON UPDATE CASCADE,
    FOREIGN KEY (customer_id) REFERENCES users(user_id)
    	ON DELETE CASCADE
    	ON UPDATE CASCADE,
   FOREIGN KEY (disponibility_id) REFERENCES disponibility(disponibility_id)
    	ON DELETE CASCADE
    	ON UPDATE CASCADE
);