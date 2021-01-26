
## About Task

An events image voting app built with Laravel, Tailwinds and Livewire

Has an admin panel where new events can be created, and an index page where logged in users can vote for event image.

Once a user votes for an image, the option to vote for that same event is taken away.

## How to set up

```sh
## Minimum Server Requiremnt "php": 7.3,
1. Clone repository
2. CD into project and run `composer install` to install dependencies
3. Create .env file in project root and paste .env.example content into .env
4. Add Database credentials to .env
5, Run the following commands
    `php artisan key:generate`
    'php artisan jetstream:install livewire'
    `npm install`
    `npm run dev`
    `php artisan migrate`
    `php artisan db:seed`
    `php artisan storage:link`
    'php artisan serve`
```
 ```sh
    ##Accounts for quick test run
    `Admin account : admin@email.com`
    `First User account : firstuser@email.com`
    `Second User account : seconduser@email.com`

    ## password == password
```