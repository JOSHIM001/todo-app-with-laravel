# Laravel Todo App

A simple Todo application built with PHP and the Laravel framework. It was created as a web application course project.

## Features

- Add new tasks
- Edit existing tasks
- Mark tasks as completed / not completed
- Delete tasks
- Validation and success messages

## Tech Stack

- PHP 8.2+
- Laravel 12 (MVC, Eloquent ORM, Blade templates, migrations)
- SQLite (default database)

## Requirements

- PHP 8.2 or higher
- Composer

## Installation

```bash
git clone https://github.com/JOSHIM001/todo-app-with-laravel.git
cd todo-app-with-laravel
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```

Then open http://127.0.0.1:8000 in your browser.

## Project Structure

| File | Purpose |
|------|---------|
| `app/Models/Todo.php` | Todo model |
| `app/Http/Controllers/TodoController.php` | CRUD logic |
| `routes/web.php` | Application routes |
| `resources/views/layouts/app.blade.php` | Base layout and styling |
| `resources/views/todos/index.blade.php` | Task list page |
| `resources/views/todos/edit.blade.php` | Edit task page |
| `database/migrations/` | `todos` table migration |

## Routes

| Method | URL | Action |
|--------|-----|--------|
| GET | `/` | List all tasks |
| POST | `/todos` | Add a task |
| GET | `/todos/{id}/edit` | Show edit form |
| PUT | `/todos/{id}` | Update a task |
| PATCH | `/todos/{id}/toggle` | Toggle completed |
| DELETE | `/todos/{id}` | Delete a task |

## Author

Joshim
