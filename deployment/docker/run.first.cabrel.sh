sudo docker compose up -d --build
sudo docker compose exec maes-laravel-app php artisan migrate:fresh --seed