# Copilot Instructions for des_diri Laravel Project

## Project Overview
- This is a Laravel web application, structured according to standard Laravel conventions.
- Major components include:
  - `app/Http/Controllers/`: Handles HTTP requests and business logic.
  - `app/Models/`: Eloquent ORM models for database interaction.
  - `routes/`: Defines API, web, console, and channel routes.
  - `resources/views/`: Blade templates for UI rendering.
  - `database/migrations/`: Schema definitions for database tables.
  - `database/seeders/`: Seed data for development/testing.

## Developer Workflows
- **Build & Serve:**
  - Use `php artisan serve` to run the development server.
  - Use `composer install` to install PHP dependencies.
  - Use `npm install` and `npm run dev` for frontend assets (via Vite).
- **Testing:**
  - Run tests with `vendor/bin/phpunit` or `php artisan test`.
  - Tests are located in `tests/Feature/` and `tests/Unit/`.
- **Debugging:**
  - Laravel's built-in error handling and logging are configured in `config/logging.php`.
  - Use `php artisan tinker` for interactive debugging.

## Project-Specific Conventions
- Controllers, models, and migrations follow Laravel naming and placement.
- Blade templates are in `resources/views/`.
- Middleware is in `app/Http/Middleware/`.
- Service providers are in `app/Providers/`.
- Use Eloquent ORM for database access; avoid raw SQL unless necessary.

## Integration Points
- External dependencies managed via Composer (`composer.json`).
- Frontend assets managed via NPM (`package.json`, Vite config).
- Authentication configured in `config/auth.php`.
- API routes in `routes/api.php`, web routes in `routes/web.php`.

## Patterns & Examples
- Route definitions:
  - `routes/web.php`: `Route::get('/', [WelcomeController::class, 'index']);`
- Model usage:
  - `app/Models/User.php`: Eloquent model for users.
- Controller example:
  - `app/Http/Controllers/ExampleController.php`: Handles request logic.

## Key Files & Directories
- `app/`, `routes/`, `resources/`, `database/`, `config/`, `public/`, `tests/`

---

**For AI agents:**
- Follow Laravel conventions unless project files indicate otherwise.
- Reference existing controllers, models, and routes for examples.
- Use artisan commands for common tasks.
- Prefer Eloquent and Blade for data and UI handling.
- When in doubt, check `README.md` or Laravel documentation.
