# Sound7ocke - Plataforma de Música Online

O **Sound7ocke** é uma plataforma de música online que permite aos usuários ouvir músicas, fazer upload de suas próprias faixas e pesquisar por artistas e músicas. Desenvolvido com tecnologias modernas, o projeto oferece uma experiência de usuário intuitiva e segura, com integração a um banco de dados e uma API em PHP para gerenciar as funcionalidades do sistema.

---

## Funcionalidades Principais

1. **Ouvir Músicas**:
   - Os usuários podem pesquisar e ouvir músicas diretamente na plataforma.

2. **Upload de Músicas**:
   - Usuários podem fazer upload de suas próprias músicas em formatos como MP3.
   - Validação de arquivos e armazenamento seguro no banco de dados.

3. **Pesquisa de Músicas e Artistas**:
   - Funcionalidade de busca por músicas e artistas.
   - Resultados exibidos dinamicamente com base em consultas ao banco de dados.

4. **Autenticação de Usuários**:
   - Sistema de login e cadastro seguro.

5. **Integração com Banco de Dados**:
   - Utilização de um banco de dados relacional (MySQL) para armazenar informações de usuários, músicas e artistas.
   - Consultas eficientes para recuperação e manipulação de dados.

6. **API em PHP**:
   - Back-end desenvolvido em PHP para gerenciar requisições e interações com o banco de dados.
   - Endpoints para buscar músicas, artistas e gerenciar uploads.

---

## Tecnologias Utilizadas

- **Front-end**:
  - HTML5, CSS3 e JavaScript para a interface do usuário.
  - Design responsivo e moderno com efeitos visuais atraentes.
  - Uso de `fetch` para requisições assíncronas à API.

- **Back-end**:
  - PHP para a lógica do servidor e integração com o banco de dados.
  - API RESTful para gerenciar as funcionalidades do sistema.

- **Banco de Dados**:
  - MySQL para armazenamento de dados de usuários, músicas e artistas.
  - Consultas SQL otimizadas para melhor desempenho.

- **Segurança**:
  - Utilizado emscripten para garantir que o usuário crie uma senha forte.
    
---

## Estrutura do Projeto

### Front-end
- **HTML**: Estrutura das páginas (login, cadastro, upload, busca).
- **CSS**: Estilos personalizados para cada página (`buscar.css`, `cadastro.css`, `login.css`, `upload.css`, `style.css`).
- **JavaScript**: Interatividade e requisições à API.

### Back-end
- **API em PHP**: Endpoints para:
  - Buscar músicas e artistas.
  - Gerenciar uploads de músicas.
  - Autenticação de usuários.

### Banco de Dados
- Tabelas para:
  - Usuários: Armazena informações de login e cadastro.
  - Músicas: Armazena detalhes das músicas e links para os arquivos.
  - Artistas: Armazena informações sobre os artistas.
