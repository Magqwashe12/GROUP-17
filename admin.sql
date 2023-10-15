USE `group17`;
CREATE TABLE IF NOT EXISTS admin (
    admin_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

    admin_IdentityNumber varchar(100) DEFAULT NULL,


    admin_Email  varchar(100) DEFAULT NULL,


    admin_Password varchar(100) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO admin (admin_IdentityNumber,             admin_Email,            admin_Password) VALUES
                  ('9608265794082',                  'admin@ru.ac.za',       'admin@123');