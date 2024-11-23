CREATE TABLE disciplinas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL
);

CREATE TABLE assuntos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    disciplina_id INT,
    FOREIGN KEY (disciplina_id) REFERENCES disciplinas(id)
);

CREATE TABLE questoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    enunciado TEXT NOT NULL,
    assunto_id INT,
    nivel_dificuldade ENUM('Fácil', 'Médio', 'Difícil'),
    FOREIGN KEY (assunto_id) REFERENCES assuntos(id)
);

CREATE TABLE alternativas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    texto TEXT NOT NULL,
    correta BOOLEAN,
    questao_id INT,
    FOREIGN KEY (questao_id) REFERENCES questoes(id)
);
