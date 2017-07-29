<span align='center'>
<img width='250px' src="https://appointy.com/creditoffer/Images/Appointy-logo.png"></p>
<img width='300px' src="http://www.aptusdatalabs.com/wp-content/uploads/2016/04/hackathon-logo.jpg"></p>

</span>

## About API

This API provides Ecommerce 'Order return' Functionality. 

- Simple, fast routing and dependency injection with [Laravel](https://laravel.com/docs/routing).
- Based on Rest API Guidelines
- Automatic Migrations for Models 

## Built With
<a href='//laravel.com'><img width='300px' src="https://camo.githubusercontent.com/5ceadc94fd40688144b193fd8ece2b805d79ca9b/68747470733a2f2f6c61726176656c2e636f6d2f6173736574732f696d672f636f6d706f6e656e74732f6c6f676f2d6c61726176656c2e737667"></a>

## Install and Run
- clone project
- install composer dependencies using `composer install` (of course you need, php and composer
- create `.env` file by copying from `.env.example`
- run `php artisan key:generate` command, this will get APP_KEY in `.env` file
- create database and fill information in `.env' file
- you will need to  seed your database , use following command steps
    - run `php artisan tinker` to enter in to command line tinker
    - enter `factory(App\User::class,100)->create()`, this will seed your `User` table with 100 records 
    - enter `factory(App\Order::class,100)->create()`, this will seed your `Order` table with 100 records 
    - enter `factory(App\Agent::class,10)->create()`, this will seed your `Agent` table with 10 records 
    
- Now run `php artisan serve`, which will run your app on `localhost:8000`.
- That's It, You can modify and create a pull request, Thanks.

## API Documentation

#### Welcome Page
>`  GET / ` will take you to the Welcome Page. where you will get same documentation.

#### User 
> Every thing about Users
 
| API Route      | Functionality  |
| ------------- |:-------------:| 
| GET /users    |   All Registered Users   | 
| GET /user/{userId}     | User Detail      | 
| GET /user/{userId}/orders     | All Orders By User      | 

#### Order 
 >Every thing about Simple Orders (not return orders)
 as we are assuming some orders has been placed and delivered)
 
| API Route      | Functionality  |
| ------------- |:-------------:| 
| GET /orders    |   All Delivered Orders   | 
| GET /order/{orderId}     | Order Details      | 
| GET /order/{orderId}/agent     | Agent who has Delivered Order      | 
>Here agent is person who has delivered order ( not the one who will be picking it for return)

#### Return Orders 
 >Every thing about Return Orders ( which will be assigned to free or nearest Agent) 
 
| API Route      | Functionality  |
| ------------- |:-------------:| 
| GET /returns    |   All Return Placed Orders   | 
| GET /return/{returnId}     | Return Order Details      | 
| GET /return/place/{orderId}     | Place Order with <orderId> for return      | 
| GET /return/complete/{orderId}     | Return has been SuccessFull      | 
>Here agent is person who has delivered order ( not the one who will be picking it for return)

#### Agent 
> Every thing about Delivery Agent
 
| API Route      | Functionality  |
| ------------- |:-------------:| 
| GET /agents    |   All Registered Agents   | 
| GET /agent/{agentId}     | Agent Detail      | 
| GET /agent/{agentId}/orders     | All Orders Delivered By Agent      | 
| GET /agents/free     | All Free Agents (with no assigned order)       | 
| GET /agents/busy     | All Busy Agents (with assigned order/orders)       | 

## Bugs and Fixes

Every thing anyone create has bugs and some of them can be fixed, If you find one,
please mail me at [ashishpatel0720@gmail.com](mailto:ashishpatel@gmail.com)

## License

This API is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
