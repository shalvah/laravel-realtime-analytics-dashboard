# laravel-realtime-analytics-dashboard
Laravel app that uses an "after" middleware to track all requests and display analytics in realtime in a dashboard

[View tutorial](https://pusher.com/tutorials/realtime-analytics-dashboard-laravel)

## Prerequisites
- PHP >= 7.2
- Composer
- MongoDB 3.4 or greater
- A [Pusher account](https://pusher.com/signup) and [Pusher app credentials](http://dashboard.pusher.com/)

## Getting started
Clone the project and install dependencies:

```bash
git clone https://github.com/shalvah/laravel-realtime-analytics-dashboard
cd laravel-realtime-analytics-dashboard && composer install && npm install
```

Copy the `.env.example` file to a `.env` file. Add your Pusher app credentials to this file:
```
PUSHER_APP_ID=your-app-id
PUSHER_APP_KEY=your-app-key
PUSHER_APP_SECRET=your-app-secret
PUSHER_APP_CLUSTER=your-app-cluster
```

If your MongoDB server requires a username and password, add those in your `.env` file as the `DB_USERNAME` and `DB_PASSWORD` respectively.

Compile assets:

```bash
npm run dev
```

Then:

```bash
# generate an application key
php artisan key:generate

# start the app
php artisan serve
```
## Built With

* [Pusher](https://pusher.com/) - APIs to enable devs building realtime features
* [Laravel](http://laravel.com) - the PHP framework for web artisans :sunglasses:
* [Vue](https://vuejs.org) - The progressive web framework
