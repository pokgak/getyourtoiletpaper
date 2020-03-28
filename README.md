# GYTP

The backend is written using the Laravel framework and frontend in Vue.js.

## Backend

We uses Homestead for development. To start the server run `vagrant up` in this directory.

Before using the API, create table and seed the database: `php artisan migrate:refresh --seed`

The API is available at `http://homestead.test/api`

Available endpoints:

- `/`: Laravel default welcome page
- `/api/items`:
    - `GET`: get list of all items
- `/api/item`:
    - `POST`: create new item
        - expects JSON with "name" AND "description" as keys and string values
    - `PUT`: update an existing item
        - expects JSON with number "id" (required) and either one- or both of "name" and "description"
- `/api/item/{id}`:
    - `GET`: get item with {id}
    - `DELETE`: delete item with {id}

## Frontend

Create new Vue components in `resources/js/components` and use it in blade files. Don't forget to register the component in `resources/js/app.js` before using.

Compile the public assets after change with `npm run dev` or the HTML will not be updated.