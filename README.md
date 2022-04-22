<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Para rodar o projeto seguir os passo:

    - Fazer o clone do projet;
    - Executar o comando composer install;
    - Executar o comando npm install;
    - Executar o comando npm run watch(atualiza automatico os arquivos mix) ou npm run dev;

    - Executar o comando php artisan migrate - para rodar as migrations que foram criadas;
    - Executar o comando php artisan db:seed - para rodar a seed que irar criar um usuario Administrador:
        E-mail: admin@admin.com,
        Senha:  password
        
    - As configurações do arquivo .env utilizadas para acessar o banco de dados são:
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=db_contratos
        DB_USERNAME=root
        DB_PASSWORD=

Esta aplicação foi feita toda em LARAVEL, estarei atualizando esse projeto sempre que eu puder fazer.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
