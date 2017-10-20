Ligar o servidor 
$ php artisan serve

Criar controllers 
$ php artisan make:controller Painel//PainelController
Controller created successfully.

Cria um CRUD simples
$ php artisan make:controller Painel//ProdutoController --resource
Controller created successfully.

criação de migrações
$ php artisan make:migration create_produtos_table
Created Migration: 2017_10_20_025233_create_produtos_table

Criar um seed 
$ php artisan make:seeder UserTableSeeder
Seeder created successfully.

rodar um seed
$ php artisan db:seed
Seeding: UserTableSeeder