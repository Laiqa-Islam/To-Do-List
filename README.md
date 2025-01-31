# Laravel To-Do List Application

A simple task management application built with Laravel, featuring user authentication and task lists specific to each logged-in user.

## Features

- User authentication (login/register/logout)
- Tasks are linked to individual users
- Create, edit, mark as complete, and delete tasks
- Secure and organized task management

## Installation

### 1. Clone the Repository
```sh
git clone https://github.com/Laiqa-Islam/To-Do-List.git
cd todo-list-laravel
```

### 2. Install Dependencies
```sh
composer install
npm install
```

### 3. Set Up Environment Variables
```sh
cp .env.example .env
php artisan key:generate
```
Update the `.env` file with your database credentials.

### 4. Run Migrations
```sh
php artisan migrate --seed
```

### 5. Start the Development Server
```sh
php artisan serve
```
Now you can access the application at `http://127.0.0.1:8000`.

## Usage

1. Register or log in.
2. Add tasks to your to-do list.
3. Mark tasks as complete or delete them when done.

## Technologies Used

- Laravel (PHP framework)
- MySQL (Database)
- Bootstrap (Styling)
- JavaScript (Frontend functionality)

## Contributing

Contributions are welcome! Feel free to fork the repository, make changes, and submit a pull request.

## License

This project is licensed under the MIT License.

