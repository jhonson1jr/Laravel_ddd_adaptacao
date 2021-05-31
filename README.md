
## DDD com Laravel 8

### Necessários: Composer, MySQL, php 7, OO

Aplicação dos conceitos do DDD no Laravel 8

### Instruções

Baixar o projeto;

Executar dentro do prompt de comando dentro do diretório raiz do projeto:
```
composer update
```
----- ----- ----- 

Criar uma base de dados no MySQL e criar um arquivo .env seguindo o .env.example, alterando os dados de conexao à base

```php
DB_CONNECTION=mysql
DB_HOST=<seu host>
DB_PORT=3306
DB_DATABASE=<sua database>
DB_USERNAME=<seu usuário>
DB_PASSWORD=<sua senha>
```

----- ----- ----- 

No prompt, dentro do diretório do projeto, caso seja preciso gerar chave para o projeto, executar:

```
php artisan key:generate

```
----- ----- ----- 

No prompt, executar para montar a base:

```
php artisan migrate

```

----- ----- ----- 

Execute o projeto:

```
php artisan serve

```
----- ----- ----- 

Caso ao configurar o arquivo .env o projeto apresentar erros, verifique se as execuções a seguir resolvem:

```
php artisan config:cache
php artisan cache:clear

```
----- ----- ----- 

### Informações Adicionais

Desenvolvido baseado nas recomendações do artigo escrito por Brent Roose: https://stitcher.io/blog/laravel-beyond-crud-01-domain-oriented-laravel
<br><br>
Bibliotecas usadas: <br><br>
- Spatie/data-transfer-object (na versão 2) para controle da tipagem de dados<br>
- Myclabs/php-enum para auxiliar no gerenciamento dos dominios e regras de negócio para opções de seletores




