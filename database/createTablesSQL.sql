CREATE DATABASE task_manager

CREATE TABLE task_manager.users (
	id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY UNIQUE,
	nome varchar(200) NULL,
	email varchar(200) NOT NULL UNIQUE,
	userpassword varchar(250) NOT NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci ;


CREATE TABLE task_manager.tasks (
	id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome_task varchar(250) NOT NULL,
	descricao TEXT NULL,
	file LONGBLOB NULL,
	userid BIGINT NOT NULL,
	CONSTRAINT fk_tasks_users FOREIGN KEY (userid) REFERENCES task_manager.users(id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci ;
