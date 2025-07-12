CREATE DATABASE site_modular;
USE site_modular;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE site_modules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content TEXT,
    image VARCHAR(255),
    position INT NOT NULL,
    is_active BOOLEAN DEFAULT TRUE
);

-- Insira o usuário admin (senha: admin123)
INSERT INTO users (username, password, email) VALUES (
    'admin',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    'admin@seusite.com'
);

-- Módulos exemplo
INSERT INTO site_modules (title, content, position) VALUES 
    ('Banner Principal', 'Edite este texto no painel', 1),
    ('Destaque 1', 'Conteúdo editável aqui', 2);
