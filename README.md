# Laravel Task App

Laravelで作成した、シンプルなタスク管理アプリです。  
タスクの登録・編集・削除機能を備えており、今後はカテゴリや完了フラグ機能の追加も予定しています。

---

## 🔧 使用技術

- PHP 8.x
- Laravel 10.x
- MySQL（Docker）
- Laravel Sail（ローカル開発環境）
- Bootstrap（UIスタイル）

---

## 📷 スクリーンショット

### タスク一覧画面

![task-list](https://github.com/rahako/laravel-task-app/assets/xxxxxxxx/task-list.png)

### タスク追加画面

![task-create](https://github.com/rahako/laravel-task-app/assets/xxxxxxxx/task-create.png)

※キャプチャは `assets` にアップロードしてURLに差し替えてください。

---

## ⚙️ 主な機能

- タスクの一覧表示
- 新規タスクの作成
- タスクの編集／削除

---

## 🚀 セットアップ手順（Docker + Laravel Sail）

```bash
git clone https://github.com/rahako/laravel-task-app.git
cd laravel-task-app
cp .env.example .env
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
