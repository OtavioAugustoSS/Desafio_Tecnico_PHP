# Desafio Técnico — Cadastro de Cartórios

Sistema de cadastro de cartórios desenvolvido com PHP e Laravel para o desafio técnico.

## Tecnologias utilizadas

- PHP 8+
- Laravel 12
- MySQL
- Bootstrap 5

## Funcionalidades

- Listagem de cartórios cadastrados
- Cadastro de novo cartório
- Edição de cartório existente
- Exclusão de cartório com confirmação
- Campo de município populado no banco de dados

## Campos do cadastro

| Campo | Tipo |
|---|---|
| Nome | Texto livre |
| CNPJ | Texto com máscara automática |
| Nome do Tabelião | Texto livre |
| Ativo | Checkbox (sim/não) |
| Município | Select com opções do banco de dados |

## Como instalar e rodar

**Pré-requisitos:** PHP 8+, Composer, MySQL

```bash
# 1. Clonar o repositório
git clone https://github.com/OtavioAugustoSS/Desafio_Tecnico_PHP.git
cd Desafio_Tecnico_PHP

# 2. Instalar dependências
composer install

# 3. Configurar o ambiente
cp .env.example .env
php artisan key:generate

# Preencha o .env com as credenciais do banco de dados
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DB_desafio_tecnico
DB_USERNAME=root
DB_PASSWORD=sua_senha

# 4. Criar as tabelas e popular o banco
php artisan migrate --seed

# 5. Iniciar o servidor para acessar ao localhost
php artisan serve

