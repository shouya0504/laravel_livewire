## 当リポジトリについて

当リポジトリはLaravel8の環境構築用のリポジトリです。

## 構築手順

```bash
$ docker-compose up -d

# 確認用
$ docker-compose config --services
mysql
php
phpmyadmin

$ docker-compose exec php bash

# Laravel8のプロジェクトを作成
/var/www/# composer create-project --prefer-dist "laravel/laravel=8.*" .

# src/config/app.php の一部を書き換える
~~~~~~~~~~~~~~~~~~~~~
'timezone' => 'Asia/Tokyo',
'locale' => 'ja',
~~~~~~~~~~~~~~~~~~~~~

# src/.env のMySQLの接続先を以下に書き換える
~~~~~~~~~~~~~~~~~~~~~
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel8_sample
DB_USERNAME=user
DB_PASSWORD=secret
~~~~~~~~~~~~~~~~~~~~~

# マイグレーション
/var/www/# php artisan migrate
```

## URL
- WEB
http://localhost:18888/

- PHPMYADMIN
http://localhost:18890/