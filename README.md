# Web API using lumen 5.3 php 5.6


> **Note:**

> - use composer install after you pull the repository
> - add .env file into root directory
> - add new database (based on env Database name)
> - use php artisan migrate
> - run the repository with localhost (php localhost -S -t public)


```

composer create-project --prefer-dist laravel/lumen pesan-makanan 5.3

php -S localhost:8090 -t public
php artisan make:migration create_users_table --create=users
php artisan migrate
php artisan make:migration create_category_ads_table --create=category_ads
php artisan migrate
php artisan make:migration create_menu_ads_table --create=menu_ads
php artisan migrate





http://localhost:8090/register

http://localhost:8090/login
    method  = POST
    Body    = form-data
    Data    =
              key
                - email
                - password
              value
                - amikom.me@gmail.com
                - isi_password@

//result
{
  "success": true,
  "api_token": "02dc36941caa8a6aa128860111b6dfab00616a91",
  "message": {
    "id": 1,
    "username": "raden",
    "email": "raden@gmail.com",
    "remember_token": null,
    "created_at": "2017-03-11 04:06:19",
    "updated_at": "2017-03-11 04:06:19",
    "deleted_at": null
  }
}


http://localhost:8090/user/1?api_token=02dc36941caa8a6aa128860111b6dfab00616a91
    method  = GET
    Params  =
              key
                - api_token
              value
              - 02dc36941caa8a6aa128860111b6dfab00616a91 
              

http://localhost:8090/category




http://localhost:8090/category
    method  = GET
    Params  =
              key
                - api_token
              value
              - 02dc36941caa8a6aa128860111b6dfab00616a91 

http://localhost:8090/category
    method  = POST
    Body    = x-www-form-urlencoded
    Data    =
              key
                - api_token
                - name
              value
                - 02dc36941caa8a6aa128860111b6dfab00616a91
                - category 1


http://localhost:8090/category/update/3
    method  = POST
    Body    = x-www-form-urlencoded
    Data    =
              key
                - api_token
                - name
              value
                - 02dc36941caa8a6aa128860111b6dfab00616a91
                - category 1


http://localhost:8090/category/delete/1?api_token=02dc36941caa8a6aa128860111b6dfab00616a91
    method  = GET
    Params  =
              key
                - api_token
              value
              - 02dc36941caa8a6aa128860111b6dfab00616a91 


//Menu
http://localhost:8090/menu_ads/?api_token=02dc36941caa8a6aa128860111b6dfab00616a91
    method  = GET
    Params  =
              key
                - api_token
              value
              - 02dc36941caa8a6aa128860111b6dfab00616a91 


http://localhost:8090/menu_ads/?api_token=02dc36941caa8a6aa128860111b6dfab00616a91
    method  = GET
    Params  =
              key
                - api_token
              value
              - 02dc36941caa8a6aa128860111b6dfab00616a91 



http://localhost:8090/menu_ads/update/1
    method  = POST
    Body    = x-www-form-urlencoded
    Params  =
              key
                - api_token
                - title
              value
              - 02dc36941caa8a6aa128860111b6dfab00616a91
              - update title




```