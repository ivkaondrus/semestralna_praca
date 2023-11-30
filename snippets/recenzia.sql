CREATE TABLE IF NOT EXISTS vaiicko_db.recenzias (
    id INTEGER NOT NULL AUTO_INCREMENT,
    prihlaseny_username TEXT NOT NULL,
    text_r TEXT NOT NULL,
    obrazok TEXT NOT NULL,
    PRIMARY KEY (id)

);
INSERT INTO vaiicko_db.recenzias (prihlaseny_username, text_r, obrazok) VALUES ('janka12', 'Som velmi spokojna', 'pexels-vlada-karpovich-9969158.jpg');

COMMIT;
