# Laravel Minimal App

Laravelで構築した最小構成のアプリです。

## 内容

- Laravel Sail で環境構築
- Hello表示用のBladeテンプレート
- postsテーブルのマイグレーション・Seeder
- 投稿一覧ページの表示

## 使用技術

- Laravel 10.x
- PHP 8.2
- Laravel Sail（Docker）
- MySQL

## セットアップ方法

```bash
git clone https://github.com/ユーザー名/laravel-min-app.git
cd laravel-min-app
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate --seed
