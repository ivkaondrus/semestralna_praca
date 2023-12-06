CREATE TABLE IF NOT EXISTS vaiicko_db.recenzias (
    id INTEGER NOT NULL AUTO_INCREMENT,
    rating INTEGER NOT NULL,
    text_r TEXT NOT NULL,
    PRIMARY KEY (id)

);
INSERT INTO vaiicko_db.recenzias (rating, text_r) VALUES ('5', 'Som velmi spokojna');
INSERT INTO vaiicko_db.recenzias (rating, text_r) VALUES ('5', 'Super obchod som velmi spokojna');
INSERT INTO vaiicko_db.recenzias (rating, text_r) VALUES ('5', 'Skvely nakup velmi sa tesim dakujem');

COMMIT;
