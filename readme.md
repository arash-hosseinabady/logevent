**Logevent**
This package used for log from all event in system.

**Requirement**
- laravel: 5.2
- monolog: 1.22

**Installation**
- copy this package in `packages` directory in root of project
- add `"Arash\\Logevent\\": "packages/arash/logevent/src"` in 'psr-4' section of main composer
- run `composer dump-autoload`
- add `Arash\Logevent\LogeventServiceProvider::class` to 'providers' of 'config/app.php'
- run `php artisan vendor:publish --provider="Arash\Logevent\LogeventServiceProvider" --tag="config"` to copy file config
- add `logevent` in group middleware in route

**Custom Log**
- add `use Arash\Logevent\Loggerevent;` in every where that needed.
- send text of log to when create object from this class
`new Loggerevent($logText)`
