# CodeAlpha URL Shortener

[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)

This is a simple Laravel-based URL Shortener application that allows users to shorten URLs and redirect to the original links using the generated short code.

## Features

-   Generate unique short URLs for long original URLs.
-   Store original and short URLs in the database.
-   Redirect to the original URL when the short URL is visited.
-   Easy-to-use interface.

## Prerequisites

Before you begin, ensure you have the following installed on your machine:

-   PHP >= 8.0
-   Composer
-   Laravel >= 9.x
-   MySQL or any supported database
-   A web server (e.g., Apache, Nginx, or Laravel's built-in server)

## Installation

1. Clone the repository:

```bash
git clone https://github.com/Kudastech/CodeAlpha_URL_Shortner.git
```

2. Navigate to the project directory:

```bash
cd CodeAlpha_URL_Shortner
```

3. Install dependencies:

```bash
composer install
```

4. Copy the `.env.example` file to `.env` and configure your environment variables (e.g., database credentials):

```bash
cp .env.example .env
```

5. Generate the application key:

```bash
php artisan key:generate
```

6. Run database migrations:

```bash
php artisan migrate
```

7. Start the development server:

```bash
php artisan serve
```

8. Open your browser and navigate to:

```
http://localhost:8000
```

## Usage

1. Visit the main page of the application.
2. Enter the original URL you want to shorten.
3. Click the "Shorten" button.
4. Copy the generated short URL and use it as needed.

## Code Structure

-   `UrlController`: Handles requests related to URL shortening and redirection.
-   `UrlRequest`: Validates the user's input for shortening URLs.
-   `Url` Model: Represents the database structure for storing URLs.

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature:

```bash
git checkout -b feature-name
```

3. Commit your changes:

```bash
git commit -m "Add new feature"
```

4. Push your branch:

```bash
git push origin feature-name
```

5. Submit a pull request.

## Author

[Kudastech](https://github.com/Kudastech)

## Acknowledgments

-   [Laravel Framework](https://laravel.com/)
-   [PHP](https://www.php.net/)

Feel free to reach out for questions or contributions!
