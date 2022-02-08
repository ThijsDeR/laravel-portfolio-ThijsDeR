# laravel-portfolio-template

Template project for the Laravel Portfolio Assignment

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

In order to work on this project, you need to install the following:

- Git
- A localhost webserver (like XAMPP) or Docker (for Sail)

### Installing

This is a Laravel based app. Just follow the normal steps to setup your development environment.

### 1. Clone GitHub repo for this project locally
The project is hosted on github, we can use git on your local computer to clone it from github onto your local computer.

```shell script
$ git clone project-git-ssh-url
```

### 2. cd into your project
You will need to be inside that project file to enter all of the rest of the commands in this tutorial. So remember to
type `cd project-name` to move your terminal working location to the project file we just barely created. (Of course
substitute “project-name” in the command above, with the name of the folder you created in the previous step).

### 3. Install Composer Dependencies
Whenever you clone a new Laravel project you must now install all of the project dependencies. This is what actually
installs Laravel itself, among other necessary packages to get started.

When we run composer, it checks the composer.json file which is submitted to the github repo and lists all of the
composer (PHP) packages that your repo requires. Because these packages are constantly changing, the source code is
generally not submitted to github, but instead we let composer handle these updates. So to install all this source code
we run composer with the following command.

```shell script
$ composer install
```

### 4. Create a copy of your .env file
`.env` files are not generally committed to source control for security reasons. But there is a `.env.example` which is
a template of the `.env` file that the project expects us to have. So we will make a copy of the `.env.example` file and
create a `.env` file that we can start to fill out to do things like database configuration in the next few steps.

```shell script
$ cp .env.example .env
```

This will create a copy of the `.env.example` file in your project and name the copy simply `.env`.

### 5. Generate an app encryption key
Laravel requires you to have an app encryption key which is generally randomly generated and stored in your `.env` file.
app will use this encryption key to encode various elements of your application from cookies to password hashes and
more.

``` shell script
$ php artisan key:generate
```

If you check the `.env` file again, you will see that it now has a long random string of characters in the `APP_KEY`
field. We now have a valid app encryption key.

### 6. In the .env file, add database information to allow Laravel to connect to the database
We will want to allow Laravel to connect to the database that you just created in the previous step. To do this, we must
add the connection credentials in the `.env` file and Laravel will handle the connection from there.

In the `.env` file fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` options to match
the credentials of the database you want to connect to. This will allow us to run migrations and seed the database in
the next step.

### 7. Migrate the database
Once your credentials are in the `.env` file, now you can migrate your database.

``` shell script
$ php artisan migrate
```

It’s not a bad idea to check your database to make sure everything migrated the way you expected.

### 8. Seed the database
The repository has a seeding file setup, then now is the time to run the seed, which fills your database with starter
or dummy data.

After the migrations are complete, and you have the database structure required, then you can seed the database (which
means add dummy data to it).

``` shell script
$ php artisan db:seed
```

## Running the tests

The project comes with PHP_Codesniffer installed. In order to run it locally, type:

``` shell script
$ php ./vendor/bin/phpcs
```

## Built With

* [Laravel](https://laravel.com/docs/) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management

## Authors

* **Daan de Waard** - *Initial work* - [dwaard](https://github.com/dwaard)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc

