#  PAWTASTIC – Pet Walking Services Website

PAWTASTIC is a pet walking services website designed to provide the best care for your furry friends. Our platform allows pet owners to easily book appointments and enjoy premium services, ensuring their pets are happy and well taken care of.

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

## License
This project is open-source and available under the MIT license.
