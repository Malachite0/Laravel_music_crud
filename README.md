# Laravel music crud
## Features

- view albums
- view songs within an album
- Add new albums and songs (automatically linked)
- editing existing sonds and albums
- deleting albums and songs

## Tech

- laravel
- blade templates
- SQLite database

## Installation

1. clone repository

```bash
git clone https://github.com/Malachite0/Laravel_music_crud.git
cd music-app
```

2. Install dependencies

```bash
composer install
```
3. set up the .env file

```bash
cp .env.example .env
php artisan key:generate
```

4. set your database in .env

```bash
DB_DATABASE=your_database_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

5. Run migrators and seeders

```bash
php artisan migrate
php artisan db:seed
```

6. start laravel development server

```bash
php artisan serve
```

open ur local host

## Routes Overview

| Route              | Method | Description                  |
|-------------------|--------|------------------------------|
| `/`               | GET    | Homepage                     |
| `/about`          | GET    | About page                   |
| `/albums`          | GET    | View all albums              |
| `/albums/{album_id}` | GET    | View album with songs        |
| `/music/create`   | GET    | Add new album + song form    |
| `/music`          | POST   | Store new song and album     |
| `/music/{id}/edit`| GET    | Edit a song/album            |
| `/music/{id}`     | PUT    | Update a song/album          |
| `/music/{id}`     | DELETE | Delete a song/album          |

