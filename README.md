# Pet Grooming Website and Appointment

This project is a Laravel 10 application using Breeze for authentication, Alpine.js for interactivity, and Tailwind CSS for styling.

## Prerequisites

Make sure you have the following installed:
- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL or another supported database

## Installation

1. **Clone the repository:**
   ```sh
   git clone <repository-url>
   ```

2. **Install dependencies:**
   ```sh
   composer install
   npm install
   ```

3. **Environment Setup:**
   - Copy the `.env.example` file and rename it to `.env`
   ```sh
   cp .env.example .env
   ```
   - Update database configurations in `.env`

4. **Run migrations:**
   ```sh
   php artisan migrate
   ```

5. **Install and build front-end assets:**
   ```sh
   npm run dev
   ```
   For production, use:
   ```sh
   npm run build
   ```

6. **Run the application:**
   ```sh
   php artisan serve
   ```
   The application should be available at `http://127.0.0.1:8000`

## Breeze Authentication Setup
Breeze provides simple authentication scaffolding using Blade templates, Alpine.js, and Tailwind CSS.

1. **Install Laravel Breeze:**
   ```sh
   composer require laravel/breeze --dev
   ```
2. **Install Breeze UI:**
   ```sh
   php artisan breeze:install
   ```
   - Choose the stack: `blade`
3. **Run migrations again if needed:**
   ```sh
   php artisan migrate
   ```
4. **Build assets:**
   ```sh
   npm install && npm run dev
   ```

## Additional Commands

- To run tests:
  ```sh
  php artisan test
  ```
- To clear cache:
  ```sh
  php artisan cache:clear
  php artisan config:clear
  php artisan route:clear
  php artisan view:clear
  ```

## License
This project is open-source and available under the MIT license.
