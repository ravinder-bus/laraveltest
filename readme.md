1. install composer using  "composer global require laravel/installer" command in terminal

2. install laravel "composer create-project --prefer-dist laravel/laravel:^7.0"

3. in env file add our database credential(database name,username,password);

4. create migration for user and product table using "php artisan make:igration product"

5. Add column name in migration 

6. Run "php artisan migrate". these table will be install in databse;

7. then create seeds using  "php artisan make:seeder UserSeeder" command

8. After thes run "php artisan db:seed --class=UserSeeder" and php artisan db:seed --class=ProductSeeder

9. we hane demo data in product table and user table

10. Then we have code in files

11.  login for user  user@gmail.com/12345
            for admin admin@gmail.com/12345