# Projeto Sotnascar

## 📸 Prévia Geral do Projeto

---

### 🏠 Página Inicial
![Home](/mnt/data/d984d3f2-8335-47ef-9a82-4ce59c797915.png)

### ℹ️ Sobre
![Sobre](/mnt/data/8846402f-2a79-4794-8949-8d12eeaa7e3c.png)

### 🚗 Categorias
![Categorias](/mnt/data/8572c0e8-60fc-4e98-b785-7f0442f88cc6.png)

### 🖼️ Portfólio
![Portfolio](/mnt/data/cfc0e35e-8097-4075-a629-44132bcf8a52.png)
![Portfolio 2](/mnt/data/d0e4ff70-ad2e-49ad-b348-96f1c85030ac.png)
![Portfolio 3](/mnt/data/5c850bda-f1a2-4122-bce1-4ccfb9e32bed.png)

### 🚘 Estoque
![Estoque](/mnt/data/99fded37-c362-44fd-9325-bf344da68994.png)
![Estoque 2](/mnt/data/ae3037bd-f9be-46d8-9954-401724034799.png)

### 🔐 Login
![Login](/mnt/data/0c140e78-b326-43b7-b0d5-44fb29c77a25.png)

### 📝 Registro
![Registro](/mnt/data/0c4b6dc7-37c4-4c61-a75d-539bcf1f3d21.png)

---

## 🧭 Área Administrativa

### 📊 Dashboard
![Dashboard](/mnt/data/424cd8ce-2537-4d3d-ab09-41424d51443a.png)

---

### 🏷️ Marcas
#### Criar Marca
![Criar Marca](/mnt/data/b0d29676-8ed1-4fac-91d8-d448ff2e0415.png)

#### Listagem de Marcas
![Listagem Marcas](/mnt/data/d079a548-8245-4526-ad20-42422740efea.png)

---

### 🚗 Modelos
#### Criar Modelo
![Criar Modelo](/mnt/data/6ea9838d-1e1d-41c4-8bd7-f1b1912f423c.png)

#### Modelos Cadastrados
![Modelos Cadastrados](/mnt/data/03547da0-02e2-410b-8e49-3e613f15198b.png)

---

### 🎨 Cores
#### Criar Cor
![Criar Cor](/mnt/data/fd6c66b7-4443-4499-9f0a-25b081caba61.png)

#### Cores Cadastradas
![Cores Cadastradas](/mnt/data/ff3ae5a3-d2ba-474e-ba2d-ea1762484c7e.png)

---

### 🚘 Veículos
#### Criar Veículo
![Criar Veículo](/mnt/data/c70a99ce-a6a4-4184-8a7b-767c6147fa0e.png)

#### Veículos Cadastrados
![Veículos Cadastrados](/mnt/data/af29fdb1-b438-4f91-9087-1e33f6c1bf6c.png)

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
