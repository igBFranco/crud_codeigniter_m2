# CodeIgniter 4 Application Starter

## Como Instalar e Clonar o Projeto

Cria o projeto com o comando:
`composer create-project codeigniter4/appstarter crud_codeigniter_m2` 

Após criar o projeto roda o comando:
`composer update`

Renomeia o arquivo `env` para `.env` e altera a linha `# CI_ENVIRONMENT = production` para `CI_ENVIRONMENT = development`

Tira o comentário(#) das linhas de database e altera para dos dados do seu banco de dados:
`database.default.hostname = localhost
database.default.database = nome_do_banco
database.default.username = root
database.default.password = pswd
database.default.DBDriver = MySQLi`

Após Configurar o Banco de Dados, roda o comando `php spark migrate `


## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
