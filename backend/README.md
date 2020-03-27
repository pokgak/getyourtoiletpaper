# GYTP Backend

This is the backend for the GYTP application. It is written using the Laravel framework.

## Running

We uses Homestead for development. To start the server run `vagrant up` in this directory. The API is available at `http://homestead.test/api`

Available endpoints:

- `/`: Laravel default welcome page
- `/api/items`: get list of all items
- `/api/item`:
    - `POST`: create new item
        - expects JSON with "name" AND "description" as keys and string values
    - `PUT`: update an existing item
        - expects JSON with number "id" (required) and either one- or both of "name" and "description"
- `/api/item/{id}`:
    - `GET`: get item with {id}
    - `DELETE`: delete item with {id}