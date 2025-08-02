# GUSTAVO TOODO-LIST-LARAVEL

Neste projeto estarei aplicando os conhecimentos obtidos durante meus estudos autodidata em Laravel 
na parte de FRONT-END e BACK-END.

O objetivo é criar um programa simulando uma aplicação de anotações (rotina semanal) estilo To-Do List.

O projeto em Laravel será utilizado o padrão MVC (Model, View, Controller) :

=>>> O MODEL será responsável pelo meu banco de dados e pelas regras de negócio.
=>>> A VIEW será responsável por toda parte visível pelo usuário, como telas diversar.
=>>> O CONTROLLER é responsável por trabalhar com as VIEWs e as MODELs de forma segura e autenticada.

Irei organizar o README conforme os dias que estarei trabalhando nessa aplicação, e detalhar tudo feito durante cada processo.

# DAY 1 :

No primeiro momento, eu criei meu arquivo laravel utilizando os comandos:

* composer crate-project laravel/laravel todo-list-laravel (Para criar a estrutura de projeto Laravel)

* composer install (Instalar bibliotecas de terceiros, pasta vendos, etc...)

* php artisan migrate (Criar Migrations { Tabelas padrões no arquivo Laravel } )

* Criei no localhost > phpMyAdmin o database com o nome escolhido

* Adicionei as informações no DB_NAME do arquivo .env

* php artisan key:generate ( Criar key própria para o projeto Laravel )

* Após rodar esse comando a key é adicionada automaticamente no arquivo .env

Após rodar todos os comandos ja posso começar a mexer nos meus arquivos na raiz do projeto rodando o comando:

* php artisan serve (Acessando localhost:8000)

# No Day 1 eu codifiquei nos seguintes arquivos:

* /public/css/app.css = onde eu criei todos os meus estilos da página principal criada no primeiro dia,
separando as dependências e deixando meu código mais limpo.
Também apliquei o conceito de Mobile First, trazendo responsividade e suavidade ao meu layout em todos os dispositivos.

* /resources/views/components/button.blade.php e header.blade.php ->

Criei componentes que serão reutilizados nas outras pages do código, como o button e o header

* /resources/views/layouts/app.blade.php ->

Criei o layout principal da home page, chamando os components

* /resources/views/home.blade.php ->

Aqui eu criei a @session content, também chamo o component button passando os parâmetros escolhidos 
( Tornando o component button modificável )

Também acessei o arquivo /routes/web.php -> onde mais para frente estarei controlando as Rotas da minha aplicação, atualmente tenho uma única rota que retorna a VIEW home.blade.php

# DAY 2 :

* Trabalhei na criação da view create-account.blade.php.
* Essa view era muito parecida com a home, eu manti o layout original, trazendo o header com os btn's
* E modifiquei o conteúdo do @section('content')
* Nesse content trabalhei com a criação de divs, uma delas continha um formulário.
* Fiz toda a estilização da view create-account, e criei a rota necessária para enviar para essa view.
* Também já criei as rotas para a página de Login e a para após enviar o formulário, só ainda não foram trabalhadas.

* Aprendi de uma forma diferente como usar o component button:
<img width="580" height="116" alt="image" src="https://github.com/user-attachments/assets/6b9335aa-7e8e-45a0-b7a5-1be08a8b81f1" />
<img width="848" height="45" alt="image" src="https://github.com/user-attachments/assets/32b3f065-330f-4e92-8db7-01fa97c9e1b2" />

Dessa forma meu código fica mais limpo e utilizo a variável $slot para acessar o valor dentro dos buttons (escritas utilizadas).

* Estou aprendendo a reutilizar o meu código utilizando os components e os layouts, tornando a criação das outras páginas da aplicação muito mais leve, e de forma rápida e eficiente.
* Também estou aprendendo a criar as rotas porém ainda sem validação.
* O próximo passo é criar a view Login e as autenticações necessárias para a validação do usuário na requisição de cada rota.

# DAY 3 :

... 



