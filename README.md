## Sobre o projeto

O projeto consiste em recriar uma Wiki do jogo Genshin Impact. Serão usadas de base os seguintes sites:

- **[Genshin.gg](https://genshin.gg/)**
- **[Genshin Fandom](https://genshin-impact.fandom.com/wiki/Characters)**

## Como utilizar

Após baixar o projeto será necessário seguir os seguintes passo:

1. Copiar o aquivo .env.example e renomear para .env
    1. Pode ser realizado com o comando `cp .env.example .env` no Ubuntu
    2. Nesse arquivo será necessário preencher as informações do banco de dados
2. Executar o comando `composer install`
3. Executar o comando `php artisan key:generate`
4. Executar o comando `php artisan migrate --seed`
5. Executar o comando `npm install`
6. Executar o comando `npm run dev`

## Extensões utilizadas

Segue a lista de extensões utilizadas nesse projeto:

- **[Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)**