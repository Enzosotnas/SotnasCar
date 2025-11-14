# Projeto Sotnascar

## 📸 Prévia Geral do Projeto

---

### 🏠 Página Inicial
![Home](./screenshots/home.png)

### ℹ️ Sobre
![Sobre](./screenshots/sobre.png)

### 🚗 Categorias
![Categorias](./screenshots/categorias.png)

### 🖼️ Portfólio
![Portfolio](./screenshots/portifolio1.png)
![Portfolio 2](./screenshots/portifolio2.png)
![Portfolio 3](./screenshots/portifolio3.png)

### 🚘 Estoque
![Estoque](./screenshots/estoque1.png)
![Estoque 2](./screenshots/estoque2.png)

### 🔐 Login
![Login](./screenshots/login.png)

### 📝 Registro
![Registro](./screenshots/registro.png)

---

## 🧭 Área Administrativa

### 📊 Dashboard
![Dashboard](./screenshots/dashboard.png)

---

### 🏷️ Marcas

#### ➕ Criar Marca
![Criar Marca](./screenshots/marcas_create.png)

#### 📋 Listagem de Marcas
![Listar Marcas](./screenshots/marcas_list.png)

---

### 🚗 Modelos

#### ➕ Criar Modelo
![Criar Modelo](./screenshots/modelos_create.png)

#### 📋 Modelos Cadastrados
![Listar Modelos](./screenshots/modelos_list.png)

---

### 🎨 Cores

#### ➕ Criar Cor
![Criar Cor](./screenshots/cores_create.png)

#### 📋 Cores Cadastradas
![Listar Cores](./screenshots/cores_list.png)

---

### 🚘 Veículos

#### ➕ Criar Veículo
![Criar Veículo](./screenshots/veiculo_create.png)

#### 📋 Veículos Cadastrados
![Listar Veículos](./screenshots/veiculos_list.png)

---

## Como rodar o projeto

1. **Baixe/clonar o projeto**
   - Faça o download dos arquivos do projeto ou clone o repositório.

2. **Suba o banco de dados**
   - Crie um banco de dados com o nome: `sotnascar`.

3. **Execute o migrate fresh**
   - Rode um *migrate fresh* para subir todas as tabelas do zero.  
     ```bash
     php artisan migrate:fresh
     ```

4. **Importe o conteúdo do `sql.txt`**
   - Abra o arquivo `sql.txt` que está na raiz do projeto.
   - Copie todos os comandos SQL.
   - Cole e execute esses comandos no banco de dados `sotnascar`.

5. **Suba o projeto**
   - Inicie o servidor da aplicação:
     ```bash
     php artisan serve
     ```
   - Acesse o projeto no navegador pelo endereço informado (ex.: `http://localhost:8000`).

---

## Login padrão

Use as seguintes credenciais para acessar o sistema:

- **Login:** `admin@gmail.com`  
- **Senha:** `SOTnas@123`

---

## Problemas com o login?

Caso o login apresente algum problema:

- Você pode **criar um novo usuário** diretamente pela **tela de registro** do sistema.

---
