# GYTP

The backend is written using the Laravel framework and frontend in Vue.js.

- URL for application: `http://127.0.0.1:8000`:
    - `/edit`:
        - Existing items can be modified/deleted
        - New items can be added
    - `/browse`:
        - browse available items
        - add specified amount of item to cart
    - `/cart`:
        - view list of item and its quantity in cart for current user
        - remove item from cart

![edit](https://user-images.githubusercontent.com/20373062/77838567-64887c00-7175-11ea-988f-11eb78e7225a.png)

![browse](https://user-images.githubusercontent.com/20373062/79126792-e9dc7500-7da0-11ea-8d48-847ec82e5a46.png)

![cart](https://user-images.githubusercontent.com/20373062/79126911-24dea880-7da1-11ea-99ec-ec975b805f61.png)

## Backend

We uses Homestead for development. To start the server run `vagrant up --provision` in this directory.

Before using the API, create table and seed the database: `DB_HOST=127.0.0.1 php artisan migrate:refresh --seed`

The API is available at `http://127.0.0.1:8000/api`.

Available endpoints:
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
- `/api/cart`:
    - `POST`/`PUT`: create new or update existing item in cart
    - `DELETE`: remove item from cart
- `/api/cart/list`:
    - `GET`: get list of items in cart

## Frontend

Create new Vue components in `resources/js/components` and use it in blade files. Don't forget to register the component in `resources/js/app.js` before using.

Compile the public assets after change with `npm run dev` or the HTML will not be updated.
