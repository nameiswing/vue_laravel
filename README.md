## Vue 3 in Laravel 8 Template

### Clone
- Clone using `git clone` or you can use `degit`.

### Vue Dependencies
- Vue Router
- Vuex
- VueAxios

### Installation
1. `composer install`.
2. `npm install`.
3. Set up your database: `cp .env.example .env`.
    - Edit the `DB_*` credentials in the `.env` file.
4. `php artisan key:generate`.
4. `php artisan serve`.
5. `npm run watch` - compile assets.
    - Browsersync is already included for hot reload.
    - Another local server will be run aside from `artisan` default server.
    - This will watch the changes in the files served by `php artisan serve`.
6. Happy coding!
