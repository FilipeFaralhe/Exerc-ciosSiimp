#Projeto Exercícios Siimp Sistemas

---
##Passos para iniciar o projeto

### Instalar o php 7.4
[Link para o download](https://windows.php.net/download#php-8.0)

### Instalar composer
[Link para o download](https://getcomposer.org/download/)

#### -> Instalando o composer no projeto
Basta rodar o comando "composer install" dentro da pasta do projeto

Caso de algum erro, necessário rodar o comando "composer update". Lembrando que a extension=fileinfo do arquivo php.ini tem que estar desmarcada, assim que desmarcar rode o comando "composer install" novamente.

### Iniciando o projeto na máquina local
Basta executar o comando "php artisan serve" para executar o projeto na sua máquina local. Caso de o erro 505 | Server Error, basta usar a solução abaixo:

&nbsp;
Execute o seguinte comando .env

~~~
copy .env.exemple .env
~~~
Caso não tenha o .env

~~~
php artisan key:generate
~~~

Agora é só rodar no cmd o "php artisan serve" normalmente
