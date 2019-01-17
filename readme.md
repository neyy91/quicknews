Требования для запуска проекта
MySQL 5.7
Laravel 5.7
php 7.1

При первой загрузке необходимо создать бд с названием - newsNow, данные для подключение к базе данных, проверить в .env. Пример в .env.example 
Запустить миграции
Запустить проект
php artisan serve
Запустить seed 
php artisan db:seed --class=BulletsTableSeeder
