CREATE DATABASE db_estacio_library;

CREATE TABLE tb_category (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE tb_book (
    id INT NOT NULL AUTO_INCREMENT,
    category_id INT NOT NULL,
    title VARCHAR(100) NOT NULL,
    isbn VARCHAR(30) NOT NULL,
    language VARCHAR(5) NOT NULL,
    created_at DATETIME NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (category_id) REFERENCES tb_category(id)
);
