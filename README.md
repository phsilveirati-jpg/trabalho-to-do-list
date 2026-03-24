# 📋 Trabalho To-Do List

Aplicação To-Do List desenvolvida para a atividade avaliativa da disciplina de Qualidade de Software, com foco na aplicação prática de testes automatizados, integração contínua (CI/CD) e revisão de código.

---

# 🎯 Objetivo

Este projeto tem como objetivo demonstrar a aplicação de boas práticas de desenvolvimento de software, incluindo:

* Testes automatizados
* Pipeline de integração contínua (CI/CD)
* Revisão de código com Pull Requests
* Controle de qualidade no processo de desenvolvimento

---

# 🛠️ Tecnologias utilizadas

* HTML
* CSS
* JavaScript
* Jest (testes automatizados)
* GitHub Actions (CI/CD)
* GitHub Pages (deploy)

---

# ⚙️ Funcionalidades

* ✅ Adicionar tarefas
* ✅ Marcar tarefas como concluídas
* ✅ Remover tarefas
* ✅ Persistência de dados com LocalStorage

---

# 🧪 Testes automatizados

Os testes foram implementados utilizando Jest, cobrindo:

* Criação de tarefas
* Validação de entrada (input vazio)
* Remoção de tarefas
* Alteração de status (concluída/pendente)

---

# 🔁 Pipeline CI/CD

O projeto utiliza GitHub Actions para execução automática de testes.

### Fluxo:

1. Um Pull Request é aberto
2. A pipeline é executada automaticamente
3. Os testes são rodados
4. O merge só é permitido se os testes passarem

---

# 🔐 Controle de qualidade

* Uso obrigatório de Pull Requests
* Aprovação obrigatória antes do merge
* Bloqueio de push direto na branch main
* Execução automática de testes antes da integração

---

# 🚀 Deploy

A aplicação é publicada utilizando GitHub Pages.

---

# 📁 Estrutura do projeto

```
/project
 ├── index.html
 ├── style.css
 ├── app.js
 ├── functions.js
 ├── /tests
 │    └── functions.test.js
 ├── package.json
 └── .github/workflows/ci.yml
```

---

# 👥 Equipe

* **Pedro** – Gestão do projeto, revisão de código e aprovação de PRs
* **Ricardo** – Desenvolvimento e implementação das funcionalidades

---

# 📌 Como executar o projeto

1. Clone o repositório:

```
git clone <URL_DO_REPOSITORIO>
```

2. Instale as dependências:

```
npm install
```

3. Execute os testes:

```
npm test
```

4. Abra o arquivo `index.html` no navegador

---

# 📅 Prazo

Data de entrega: **14/04/2026**

---

# 📖 Observações

Este projeto foi desenvolvido com foco em simplicidade e qualidade, priorizando a correta aplicação dos conceitos de engenharia de software exigidos na atividade.
