# 🚀 Demo Project Using Custom PHP Framework

This is a demonstration web application built on top of the Custom PHP Framework Core. It showcases practical usage of the framework features, including routing, controllers, views, authentication, and database migrations.

## 📦 Installation

```bash
git clone https://github.com/mgiambro-dev/php-mvc-framework
cd php-mvc-frameworks

cp .env.example .env

// Enter database settings into .env e.g.

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=phpmvcframework
DB_USERNAME=root
DB_PASSWORD=
DB_DSN=mysql:host=mysql;port=3306;dbname=phpmvcframework

// Build and 
docker compose build
docker compose up
```

## 🎯 Features Demonstrated

- Basic routing and controller setup
- User registration and login with authentication
- Middleware support for request filtering and processing (e.g., authentication, logging)
- Database migrations and seeding
- Custom business logic implementation
- Usage of views with layouts and partials
- Form handling and validation
- Exporting reports to PDF and Excel
- API endpoint integration

## 🛠️ Getting Started

After setting up your `.env`, build the project and run docker:

```bash
docker compose build
docker compose up

// Find the docker container ID
docker ps

// Open a shell into docker
docker exec -it <mycontainerid> sh

// Install dependencies
composer install

// Run migrations
php migrations.php
```

Visit: [http://localhost](http://localhost)

## 📁 Project Structure

```
/controllers
/migrations
/models
/public
    index.php   // Routes
/views
.env
composer.json
migrations.php
README.md
```

## 📌 About This Demo

This project is a simple demo project with a contact form utilising the gdev php framework core package. It demonstrates:

- Registering
- Login and Authentication
- RESTful routing
- Form validation and submission
- Session flash message

It serves as a practical example to get started with the framework.

## ✅ License

MIT
