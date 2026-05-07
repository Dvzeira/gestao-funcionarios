# Sistema de Gestão de Funcionários

Projeto desenvolvido em Laravel para gerenciamento de funcionários, utilizando Docker para padronização e facilidade de execução do ambiente.

---

# Tecnologias Utilizadas

* Laravel
* PHP 8.4
* MySQL 8
* Docker
* Docker Compose
* Nginx
* Blade
* HTML/CSS

---

# Funcionalidades

* Cadastro de funcionários
* Listagem de funcionários
* Edição de funcionários
* Exclusão de funcionários
* Interface responsiva
* Integração com banco de dados MySQL
* Ambiente dockerizado

---

# Preview do Projeto

Adicione aqui prints do sistema:

```txt
/images/home.png
/images/cadastro.png
```

Ou GIF/vídeo do funcionamento.

---

# Como Executar o Projeto

## Pré-requisitos

É necessário ter instalado:

* Docker Desktop
* Docker Compose
* Git

---

# Clonar o Repositório

```bash
git clone SEU_REPOSITORIO
```

Entre na pasta:

```bash
cd gestao_funcionarios
```

---

# Configurar o Ambiente

Copie o arquivo `.env.example`:

### Windows

```bash
copy .env.example .env
```

### Linux/Mac

```bash
cp .env.example .env
```

---

# Executar o Projeto

Com apenas um comando:

```bash
docker compose up -d --build
```

O Docker irá automaticamente:

* Construir os containers
* Instalar dependências
* Iniciar MySQL
* Gerar APP_KEY
* Rodar migrations
* Iniciar Laravel
* Iniciar Nginx

---

# Acessar o Projeto

Abra no navegador:

```txt
http://localhost:8000
```

---

# Estrutura Docker

O projeto utiliza:

* Container PHP/Laravel
* Container Nginx
* Container MySQL

Facilitando:

* Portabilidade
* Deploy
* Padronização do ambiente
* Execução em qualquer máquina

---

# Comandos Úteis

## Ver containers ativos

```bash
docker ps
```

## Derrubar containers

```bash
docker compose down
```

## Subir novamente

```bash
docker compose up -d
```

## Ver logs

```bash
docker compose logs -f
```

## Entrar no container Laravel

```bash
docker exec -it laravel_app bash
```

---

# Objetivo do Projeto

Este projeto foi desenvolvido com foco em aprendizado e prática de:

* Laravel
* CRUD
* Docker
* Banco de dados MySQL
* Estruturação de aplicações web
* Organização de ambiente profissional

---

# Melhorias Futuras

* Sistema de autenticação
* Dashboard
* Upload de fotos
* Busca de funcionários
* Paginação
* API REST
* Deploy em produção

---

# Autor

## Davi Andrade da Silva

Estudante de Análise e Desenvolvimento de Sistemas.

Tecnologias:

* React
* Laravel
* PHP
* JavaScript
* MySQL
* Docker

---

# Licença

Projeto desenvolvido para fins de estudo e portfólio.
