# Project Title

Laravel Task Management

## Overview

This project is built using the Laravel framework. The application is a task management system, allowing users to create and manage tasks. It's only backend part and uses api for frontend.

## Key Features

-   **Task Management**: Users can create tasks with a title and a status (pending, in-progress, completed).
-   **User Association**: Each task is associated with a user, allowing for user-specific task management.
-   **API Support**: The application uses api for frontend.

## How It Was Made

-   **Framework**: The application is built on Laravel, which provides a robust set of tools for web development, including routing, middleware, and ORM (Eloquent).
-   **Database**: The application uses migrations to manage database schema changes, specifically for the `tasks` table.
-   **API**: The application uses API for frontend.
-   **Development Steps**:
    1. Created a new Laravel project: `composer create laravel/laravel=10 tasks-project`
    2. Created a Task model with migration: `php artisan make:model Task -m`
    3. Created a TasksController: `php artisan make:controller TasksController --model=Task`
    4. Configured the migration for tasks.
    5. Ran migrations: `php artisan migrate`
    6. Installed Sanctum and published it.
    7. Configured the TasksController and created CRUD methods.
    8. Configured Task and User models for fillable properties and relationships.
    9. Created authentication methods.
    10. Created APIs with their middleware.
    11. Tested APIs locally with Postman.
    12. Uploaded the project to github.

## Installation Instructions

1. Clone the repository: `git clone https://github.com/your-username/laravel-task-management.git`
2. Navigate to the project directory: `cd laravel-task-management`
3. Install dependencies: `composer install`
4. Set up the environment file: `cp .env.example .env` and configure your database settings.
5. Generate the application key: `php artisan key:generate`
6. Run migrations: `php artisan migrate`

## Usage

-   After setting up the application, you can access it via Postman or any other api client. and perform CRUD operations.
