CREATE TABLE trabalhos 
( 
 trabalhos_id INT PRIMARY KEY AUTO_INCREMENT,  
 trabalhos_nome CHAR(100) NOT NULL,  
 trabalhos_img VARCHAR(200) NOT NULL,  
 trabalhos_link VARCHAR(200) NOT NULL,  
 trabalhos_descricao VARCHAR(200) NOT NULL,  
); 

CREATE TABLE login 
( 
 login_id INT PRIMARY KEY AUTO_INCREMENT,  
 login_usuario VARCHAR(100) NOT NULL,  
 login_senha VARCHAR(100 NOT NULL),  
); 

