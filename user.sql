USE `group17`;
CREATE TABLE IF NOT EXISTS user (
    user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,

    user_FirstName varchar(100) DEFAULT NULL,


    user_LastName varchar(100) DEFAULT NULL,


    user_IdentityNumber varchar(100) DEFAULT NULL,


    user_Email  varchar(100) DEFAULT NULL,


    user_Password varchar(100) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO user (user_FirstName,      user_LastName,        user_IdentityNumber,    user_Email,                  user_Password) VALUES
                 ('Sicelo',            'Mduna',              '9508265794082',        'sicelomduna@gmail.com',     'Sicelo123');