# 📚 School Management – Sistema de Gerenciamento Escolar  
Aplicação desenvolvida em **Laravel 12**, com autenticação, controle de acesso, CRUD completo de alunos, cursos e disciplinas, e geração de relatórios em PDF.

---

## 📖 Sobre o Projeto
Este é um sistema web de gerenciamento escolar criado para fins acadêmicos.  
O objetivo é permitir que professores e coordenadores gerenciem:

- **Alunos**
- **Cursos**
- **Disciplinas**

Além disso, o sistema conta com:

✔ Upload e gerenciamento de fotos  
✔ Controle de permissões baseado em papéis  
✔ Relatórios em PDF  

---

## ⚙️ Funcionalidades

### 👨‍🏫 **Autenticação**
- Login e logout
- Dois perfis de usuário:
  - **Professor** → pode cadastrar, editar, visualizar e listar alunos, além de gerar PDF  
  - **Coordenador** → acesso total ao sistema (cursos, disciplinas e alunos)

---

### 🧑‍🎓 **CRUD de Alunos**
- Criar / Lista / Editar / Remover
- Upload de foto
- Associação com curso
- Visualização individual
- Geração de relatório PDF do aluno

---

### 📘 **CRUD de Cursos**
- Cadastro completo
- Relação 1:N com alunos
- Relação 1:N com disciplinas

---

### 📚 **CRUD de Disciplinas**
- Cada disciplina pertence a um curso
- CRUD completo para coordenadores

---

### 🖼 **Upload de Fotos**
- Armazenamento via `storage/app/public`
- Acesso via `storage:link`
- Persistência via caminho salvo no banco

---

### 📄 **PDF**
- Utiliza **Laravel DomPDF**
- PDF gerado com foto, curso, grau e informações do aluno
> OBS: Para renderizar arquivos WEBP no pdf, é necessário habilitar o suporte a arquivos webp do php ("extension=gd" no php.ini)


---

## 🛠 Tecnologias Utilizadas
- **PHP 8.2**
- **Laravel 12**
- **MySQL**
- **Blade Templates**
- **Laravel DomPDF**
- **Bootstrap**
- **Composer**

---

## 📋 Requisitos

- PHP >= 8.1  
- Composer  
- MySQL ou MariaDB  
- Extensões:
  - `gd` (necessária para imagens no PDF)
  - `fileinfo`  
  - `openssl`  

---

## 🚀 Instalação e Configuração

### 1. Clonar o repositório
```bash
git clone https://github.com/w4rqu3s/school-management.git
cd school-management
````

### 2. Instalar dependências

```bash
composer install
```

### 3. Criar arquivo `.env`

```bash
cp .env.example .env
```

Configure banco de dados, APP_URL, etc.

### 4. Gerar key do Laravel

```bash
php artisan key:generate
```

### 5. Criar banco e rodar migrations + seeders

```bash
php artisan migrate --seed
```

### 6. Criar link de acesso a storage

```bash
php artisan storage:link
```

### 7. Iniciar servidor

```bash
php artisan serve
```

---

## 🔐 Autenticação e Perfis de Usuário

O sistema possui controle de permissões baseado em **policy** e **middleware**:

* Professores podem:

  * Gerenciar alunos
  * Gerar PDF
* Coordenadores podem:

  * Gerenciar tudo (alunos, cursos, disciplinas)

Isso é definido por um campo `role` no usuário:

```
0 = Professor
1 = Coordenador
```

---

## 📄 Geração de PDFs

O sistema usa **Laravel DomPDF**.

Exemplo de view PDF:

```
resources/views/alunos/report.blade.php
```

Dentro do `AlunoController` existe:

```php
public function gerarPdf($id)
{
    $aluno = Aluno::with('curso')->findOrFail($id);
    $pdf = Pdf::loadView('alunos.report', compact('aluno'));
    return $pdf->stream("relatorio_{$aluno->nome}.pdf");
}
```

---

## 🧭 Rotas Principais

### Alunos

* `/alunos`
* `/alunos/create`
* `/alunos/{id}`
* `/alunos/{id}/edit`
* `/alunos/{id}/report`

### Cursos

* `/cursos`
* `/cursos/{id}`

### Disciplinas

* `/disciplinas`
* `/disciplinas/create`

---

## 🖼 Imagens do Projeto

<img width="1868" height="884" alt="image" src="https://github.com/user-attachments/assets/1746d3c8-9cf2-4b79-91b0-b5bd0b18d9e0" />
<img width="1868" height="884" alt="image" src="https://github.com/user-attachments/assets/e5389c2a-cde0-4bab-8b75-499d807fd28d" />
<img width="1868" height="884" alt="image" src="https://github.com/user-attachments/assets/6a4e17ee-9135-40d1-9ed8-8f47d14f6e51" />

---

## 👤 Autor

**Victor Pecine Marques**  
Desenvolvedor / Estudante

---

