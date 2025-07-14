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

<img width="1360" height="858" alt="Image" src="https://github.com/user-attachments/assets/1e487d87-c905-4b0f-9898-ec4eaf92db5c" />

<img width="1360" height="858" alt="Image" src="https://github.com/user-attachments/assets/ee06765c-e5c3-4e6a-b10c-fcba9c795580" />

<img width="1360" height="858" alt="Image" src="https://github.com/user-attachments/assets/20ea4374-e5cd-4c25-8491-4c50651737f4" />### タスク追加画面

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
