# 📋 Sistema To-Do List com Gestão de Usuários

Aplicação web desenvolvida para a atividade avaliativa da disciplina de Qualidade de Software, com foco na aplicação prática de boas práticas de desenvolvimento, incluindo testes automatizados, integração contínua (CI/CD) e revisão de código.

O sistema permite o gerenciamento de tarefas pessoais com autenticação de usuários e controle administrativo.

---

# 🎯 Objetivo

Este projeto tem como objetivo demonstrar, na prática, a aplicação de conceitos fundamentais de qualidade de software:

* Desenvolvimento orientado a boas práticas
* Testes automatizados
* Integração contínua (CI/CD)
* Revisão de código com Pull Requests
* Controle de acesso e validação de usuários

---

# 🌐 Visão Geral do Sistema

A aplicação consiste em um sistema web onde:

* Usuários podem se cadastrar na plataforma
* O acesso ao sistema depende de aprovação administrativa
* Usuários aprovados podem gerenciar suas tarefas (To-Do List)
* Um administrador possui controle sobre os usuários cadastrados

---

# ⚙️ Funcionalidades

## 👤 Usuário

* Cadastro na plataforma
* Login autenticado
* Acesso condicionado à aprovação
* Criação de tarefas
* Marcação de tarefas como concluídas
* Remoção de tarefas

---

## 🛑 Sistema de Aprovação

* Novos usuários são cadastrados com status **pendente**
* O acesso ao sistema só é liberado após aprovação do administrador

---

## 👨‍💼 Administração

* Listagem de usuários cadastrados
* Aprovação de novos usuários
* Controle básico de acesso ao sistema

---

# 🛠️ Tecnologias utilizadas

* PHP (Laravel)
* Livewire
* Blade (templates)
* SQLite (banco de dados)
* HTML, CSS e JavaScript
* Tema Metronic (interface)
* PHPUnit (testes automatizados)
* GitHub Actions (CI/CD)

---

# 🧪 Testes automatizados

O projeto inclui testes automatizados para validação das principais regras de negócio, como:

* Cadastro de usuários
* Controle de acesso (usuários aprovados vs pendentes)
* Criação e manipulação de tarefas

---

# 🔁 Pipeline CI/CD

O projeto utiliza GitHub Actions para garantir a qualidade do código.

### Fluxo:

1. Um Pull Request é aberto
2. A pipeline é executada automaticamente
3. Os testes são executados
4. O merge só é permitido com sucesso nos testes

---

# 🔐 Controle de qualidade

* Uso obrigatório de Pull Requests
* Aprovação obrigatória antes do merge
* Execução automática de testes
* Bloqueio de alterações diretas na branch principal
* Revisão de código com suporte automatizado

---

# 🚀 Deploy

A aplicação será executada em ambiente web, com possibilidade de publicação para demonstração conforme necessidade da atividade.

---

# 👥 Equipe

* **Pedro** – Gestão do projeto, definição de arquitetura, revisão de código e aprovação de Pull Requests
* **Ricardo** – Desenvolvimento das funcionalidades e interface do sistema

---

# 📅 Prazo

Data de entrega: **14/04/2026**

---

# 📖 Observações

O projeto foi planejado com foco em simplicidade, organização e qualidade, evitando complexidade desnecessária e priorizando a correta aplicação dos conceitos exigidos na disciplina.
