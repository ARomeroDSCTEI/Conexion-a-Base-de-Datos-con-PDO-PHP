CREATE DATABASE jornada_vi_frases_celebres;

/c jornada_vi_frases_celebres;

CREATE TABLE frases_celebres ( id SERIAL primary key, autor VARCHAR(30) NOT NULL, frase TEXT NOT NULL, imagen VARCHAR(100) NOT NULL, visto INT DEFAULT NOT NULL  );