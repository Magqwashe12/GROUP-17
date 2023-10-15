USE `group17`;
CREATE TABLE IF NOT EXISTS adidas (
    shoe_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

    shoe_description varchar(100) DEFAULT NULL,


    shoe_price INT NOT NULL,


    shoe_image varchar(100) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO admin (admin_IdentityNumber,             admin_Email,            admin_Password) VALUES
                  ('9608265794082',                  'admin@ru.ac.za',       'admin@123');