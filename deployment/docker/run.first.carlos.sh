sudo docker compose -f docker-compose.first.yml up -d --build
sudo docker compose exec maes-laravel-app php artisan migrate:fresh --seed