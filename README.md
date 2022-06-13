# TAll Stack Blog

## Prerequisites

* XAMPP on windows

## Run Locally

Clone the repository and then go to tall-blog directory by running these commands:
```shell
git clone https://github.com/jedymatt/tall-blog.git

cd tall-blog
```

Generate .env file
```shell
cp .env.example .env
```

Then, configure the .env file according to your use case.

Install the dependencies and then compile the assets
```shell
composer install

npm install
npm run dev
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
```shell
php artisan serve
```
Finally, visit http://localhost:8000 to view the site.
