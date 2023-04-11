# Blockade Labs SDK Laravel Boilerplate

This boilerplate can serve as a type of API proxy for accessing Blockade Labs API routes for
generating skyboxes and imagine requests.

## Versions and dependencies

Boilerplate uses:

- Laravel 10.x.x (PHP ^8.1)
- [Blockade Labs SDK 1.x.x](https://github.com/Blockade-Games/BlockadeLabs-SDK-Laravel)

## Cloning the repository

Refer to GitHub docs on how to clone a [repo](https://docs.github.com/en/repositories/creating-and-managing-repositories/cloning-a-repository).

## Getting Started

After you have cloned the repo, copy the `.env.example` file and rename it to `.env`.
Next, you need to edit your `.env` file and add your Blockade Labs API key:

`BLOCKADE_LABS_API_KEY=YOUR_API_KEY`

Install dependencies with:

```bash
composer install
```

Set the application key if needed:

```bash
php artisan key:generate
```

Cache the new configuration if needed:

```bash
php artisan config:cache
```

Depending on the environment you may optionally
run PHP server locally:

```bash
php artisan serve
```

## Usage

Routes are defined in [api.php](routes/api.php) file, they are matching the same structure as the 
original API routes from Blockade's API.

In the [VerifyCsrfToken](app/Http/Middleware/VerifyCsrfToken.php) currently an exception for the API routes 
is added like so `api/v1/*`, so basically any API requests won't be requiring the CSRF token.

Main files that are added to boilerplate are [SkyboxController](app/Http/Controllers/API/SkyboxController.php)
and [ImagineController](app/Http/Controllers/API/ImagineController.php) and there you can manipulate the
data that is sent and received, if needed. Both files are using a [Blockade Labs SDK](https://github.com/Blockade-Games/BlockadeLabs-SDK-Laravel)
package and are importing a facade that is in charge of  communicating with the original API. 

```php
use BlockadeLabs\SDK\Facades\BlockadeLabsClient;
```

All the methods and routes are also explained (in greater detail) in the Docs
[here](https://api-documentation.blockadelabs.com).
