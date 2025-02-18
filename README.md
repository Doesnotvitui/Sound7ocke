# Sound7ocke - Plataforma de Música Online

O **Sound7ocke** é uma plataforma de música online que permite aos usuários ouvir músicas, faz upload de suas próprias faixas e pesquisa por artistas e músicas. Desenvolvimento com tecnologias modernas, o projeto de uma experiência de uso intuitiva e segura, com integração a um banco de dados e uma API em PHP para gestão como funções do sistema.

---

## Funcionalidades Principais

1. **Ouvir Músicas**:
   - Os usuários podem pesquisar e ouvir músicas diretas na plataforma.
   - Controles de áudio integrados para uma experiência de reprodução fluida.

2. **Carregar de Músicas**:
   - Usuários podem fazer upload de suas próprias músicas em formatos como MP3.
   - Validação de arquivos e armamento seguro no banco de dados.

3. **Pesquisa de Músicas e Artistas**:
   - Funcionalidade de busca por músicas e artistas.
   - Resultados exibidos dinâmicos com base em consultas ao banco de dados.

4. **Autenticação de Usuários**:
   - Sistema de login e cadastro seguro.

5. **Integração com Banco de Dados**:
   - Utilização de um banco de dados relacional (MySQL ou similar) para armazenar informações de usuários, músicas e artistas.
   - Consultas eficientes para recuperação e manipulação de dados.

6. **API em PHP**:
   - Back-end desenvolvido em PHP para gerenciar requisições e interações com o banco de dados.
   - Endpoints para buscar músicas, artistas e gerenciar uploads.

---

## Tecnologias Utilizadas

- **Front-end**:
  - HTML5, CSS3 e JavaScript para uma interface do usuário.
  - Design responsivo e moderno com efeitos visuais atraentes.
  - Uso de `fetch` para requissões assíncronas à API.

- **Back-end**:
  - PHP para a lógica do servidor e integração com o banco de dados.
  - API RESTful para gerenciar as funções do sistema.

- **Banco de Dados**:
  - MySQL para armamento de dados de usuários, músicas e artistas.
  - Consultas SQL otimizadas para melhor desempenho.

- **Segurança**:
  - Utilizado emscripten para garantir que o usuário crie uma senhora forte.

- **Outras Ferramentas**:
  - Git para controle de versão.
  - Hospedagem em servidor web compatível com PHP e MySQL.

---

## Estrutura do Projeto

### Front-end
- **HTML**: Estrutura das páginas (login, cadastro, upload, busca).
- **CSS**: Estilos personalizados para cada pagina (`buscar.css`, `cadastro.css`, `login.css`, `carregar.css`, `estilo.css`).
- **JavaScript**: Interatividade e exigências à API.

### Back-end
- **API em PHP**: Pontos finais para:
  - Buscar músicas e artistas.
  - Gerenciar carrega de músicas.
  - Autenticação de usuários.

### Banco de Dados
- Tabelas par:
  - Usuários: Armazena informações de login e cadastro.
  - Músicas: Armazena detalhes das músicas e links para os arquivos.
  - Artistas: Armazena informações sobre os artistas.
