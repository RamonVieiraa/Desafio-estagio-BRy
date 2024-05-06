# Desafio Estágio

## Instalação

### Dependências

Habilite as extensões `pdo_pgsql` e `zip` no seu arquivo `php.ini`.

Utilize o comando `composer install` para instalar as dependências do projeto.

Se aparecer o seguinte erro "Your lock file does not contain a compatible set of packages. Please run composer update."

Utilize o comando ``

### Variáveis de ambiente

Faça uma cópia do arquivo `.env.example` e a renomeie para `.env`.

Então, gere uma nova _app key_ para o projeto através do seguinte comando:

```
php artisan key:generate
```

### Banco de dados

Inicie um container Docker rodando uma instância do PostgreSQL 16:
```
docker run -p 5432:5432 -e POSTGRES_PASSWORD=postgres -e TZ=America/Sao_Paulo -d postgres:16
```

Utilize o comando `docker ps` para descobrir o id do container e execute o comando a seguir substituindo `<CONTAINER_ID>` pelo valor obtido:

```
docker exec <CONTAINER_ID> psql -U postgres -c "create database desafio_estagio;"
```

Isso criará um banco de nome `desafio_estagio` na instância.

O seu arquivo `.env` (copiado do `.env.example`) já irá conter as credenciais para se conectar ao banco de testes.

Vamos então preparar o banco executando as migrações com o seguinte comando:
```
php artisan migrate:fresh
```

Feito isso, a aplicação já estará pronta para uso.

## Execução

Para rodar o projeto, utilize o comando:
```
php artisan serve
```
