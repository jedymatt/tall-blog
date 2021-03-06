# TAll Stack Blog

## Demo

<https://tall-blog.herokuapp.com/>

## Prerequisites

* XAMPP on windows

## Run Locally

Clone the repository and then go to tall-blog directory by running these commands:
```shell
git clone https://github.com/jedymatt/tall-blog.git

cd tall-blog
```

Then, configure the .env file according to your use case.

Install the dependencies
```shell
composer install

npm install
```

Generate .env file
```shell
cp .env.example .env
# or this if you plan to use sail:
php artisan env-sail
```

Populate the tables and the data to the database
```shell
php artisan migrate --seed
```

Generate app key
```shell
php artisan key:generate
```

Run the application

Start the server:

```shell
php artisan serve
```

Start vite server

```shell
npm run dev
```

Finally, visit http://localhost:8000 to view the site.
