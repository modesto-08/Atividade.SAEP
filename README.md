# Sistema Eleitoral

## Sobre o Projeto

O Sistema Eleitoral é uma aplicação web desenvolvida para a realização da atividade SAEP do curso de Desenvolvimento de Sistemas.

O sistema permite o gerenciamento de informações de eleitores e candidatos através de operações CRUD (Create, Read, Update e Delete), utilizando PHP integrado a um banco de dados MySQL.

---

# Tecnologias Utilizadas

- PHP
- MySQL
- HTML5
- CSS3
- XAMPP
- Visual Studio Code

---

# Funcionalidades

## Cadastro de Candidatos

O sistema permite cadastrar candidatos contendo:

- Nome
- Número do candidato
- Cargo
- Partido fictício


## Gerenciamento de Candidatos

É possível:

- Visualizar candidatos cadastrados;
- Editar informações;
- Excluir registros.


---

## Cadastro de Eleitores

O sistema permite cadastrar eleitores contendo:

- Nome
- Número do título de eleitor;
- Cidade.


## Gerenciamento de Eleitores

É possível:

- Visualizar eleitores cadastrados;
- Editar informações;
- Excluir registros.

---

# Estrutura do Banco de Dados

Banco utilizado:

### Tabela candidato

Campos:

- id_candidato
- nome
- numero_candidato
- cargo
- partido_ficticio


### Tabela eleitor

Campos:

- id_eleitor
- nome
- numero_titulo
- cidade

---

## Estrutura do Projeto
sistema_eleitoral

├── index.php
├── conexao.php
│
├── css
│ └── estilo.css
│
├── candidato
│ ├── cadastrar.php
│ ├── salvar.php
│ ├── listar.php
│ ├── editar.php
│ └── excluir.php
│
└── eleitor
├── cadastrar.php
├── salvar.php
├── listar.php
├── editar.php
└── excluir.php

---

## Como executar

1. Instalar o XAMPP.

2. Colocar a pasta do projeto dentro da pasta:

3. Iniciar no XAMPP:

- Apache
- MySQL

4. Criar o banco de dados:

5. Acessar no navegador:

---

## Metodologia

O desenvolvimento foi realizado utilizando conceitos da metodologia SCRUM, com divisão de tarefas entre os integrantes da equipe, organização das atividades e acompanhamento das etapas do projeto.

---

## Projeto desenvolvido por

Equipe de Desenvolvimento de Sistemas - SENAI

Ano: 2026
