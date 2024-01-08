CREATE TABLE IF NOT EXISTS vaiicko_db.recenzias (
    id INTEGER NOT NULL AUTO_INCREMENT,
    author varchar(100) NOT NULL,
    rating INTEGER NOT NULL,
    text_r TEXT NOT NULL,
    picture VARCHAR(300) NOT NULL,
    PRIMARY KEY (id)

);
INSERT INTO vaiicko_db.recenzias (author, rating, text_r, picture) VALUES ('hanka46', '5', 'Som velmi spokojna', 'Fialová_tabuľka2.jpg');

CREATE TABLE IF NOT EXISTS vaiicko_db.users (
    id INTEGER NOT NULL AUTO_INCREMENT,
    login TEXT NOT NULL,
    password TEXT NOT NULL,
    role ENUM('admin', 'customer') NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO vaiicko_db.users (login, password, role) VALUES ('pivyon48', 'bjvzjlibv86456', 'admin');
INSERT INTO vaiicko_db.users (login, password, role) VALUES ('hanka46', 'adkfdhk', 'customer');

CREATE TABLE IF NOT EXISTS vaiicko_db.products (
    id INTEGER NOT NULL AUTO_INCREMENT,
    name TEXT NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL NOT NULL,
    picture VARCHAR(300) NOT NULL,
    PRIMARY KEY (id)
);

COMMIT;
