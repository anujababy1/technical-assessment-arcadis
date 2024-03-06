# Laravel Assessment

### What's New
- Created two new tables: actors and movies, to store actor and movie information respectively.
- Established a many-to-many relationship between actors and movies through a pivot table named actor_movies. To apply these migrations, enter the Docker container and run `php artisan migrate`.
- Implemented corresponding Eloquent models for both Actor and Movie tables, defining the many-to-many relationship within these models. 
- Created factory and seeder files to populate the database table with some dummy. To execute this, enter the Docker container and run `php artisan db:seed`
- Displayed actors and their associated movies, with search functionality included. This can be viewed at: `http://localhost/actors`.
- Implemented a new search feature utilizing the Star Wars API to search for people. It can be accessed at: `http://localhost/people`.


### Setup

#### System Requirements

-   Docker Desktop
-   WSL2 (Windows only)

Start by forking the repository to your own GitHub account. Then clone the forked repository to your local machine.

```bash
git clone https://github.com/ibi-group-recharge/laravel-assessment-template
cd laravel-assessment-template
```

Next you'll need to install the dependencies.

```bash
docker run --rm -v "$(pwd)":/app -u 1000:1000 -e COMPOSER_HOME=/tmp --workdir /app bitnami/laravel composer install
docker run --rm -v "$(pwd)":/app -u 1000:1000 -e COMPOSER_HOME=/tmp --workdir /app bitnami/laravel npm install
```

Lastly create a `.env` file.

```bash
cp .env.example .env
```

### Running the application

Start the application using Docker Compose.

```bash
docker compose up
```

You should now be able to access the application at `http://localhost`.

You can stop the application with `Ctrl+C` and then run `docker compose down` to remove the containers.

### Artisan commands

All `artisan` commands can be run with `docker run --rm -v "$(pwd)":/app -u 1000:1000 -e COMPOSER_HOME=/tmp --workdir /app bitnami/laravel php artisan <command>`

Be sure you are in the root directory of the project when running the command.

See [the Laravel docs](https://laravel.com/docs/10.x) to see how to create controllers, models, etc with artisan commands

### Requirements

This assessment is to see how your write clean, readable code and how you structure your application. Front end styling is not required, but you can add it if you'd like. We won't take it into account when reviewing the assessment.

The application should:

-   Seed a database with at least 5 actors and at least 3 movies per actor
-   Use Eloquent to define the relationship between actors and movies
-   Have a view that displays the list of actors and their associated movies
-   Also include one input that allows the list of actors to be filtered. This can either be done with just PHP or with JavaScript, whichever you prefer. We're just looking for the end result.
-   Have a view with one input that allows the user to search people via the Star Wars API (https://swapi.dev/documentation#people) and then displays the data.
    -   The API call should be done on the back end.

_We're really just looking for clean code and general best practices here. Nothing fancy is required._
