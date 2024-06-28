GOROD RABOT TEST PROJECT
=========================================
1. cp .env.example .env
2. в .env добавить ключ доступа к картам YANDEX_MAPS_API_KEYS=,вся информация о конфигурации поиска лежит в конфиге ./config/yandex-geocoding.php
2. docker-compose up -d
3. docker-compose exec gorod_rabot_test_php bash
    - composer install
    - php artisan key:generate
    - php artisan migrate:refresh --seed
    - php artisan storage:link
4. docker-compose down
5. docker-compose up -d
6. http://localhost/
