sudo docker-compose -f docker-compose.first.yml up -d --build -f docker-compose.first.yml
sudo docker-compose exec maes-laravel-app php artisan migrate:fresh --seed -f docker-compose.first.yml