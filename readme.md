<span align='center'>
<img width='250px' src="https://appointy.com/creditoffer/Images/Appointy-logo.png"></p>
<img width='300px' src="http://www.aptusdatalabs.com/wp-content/uploads/2016/04/hackathon-logo.jpg"></p>

</span>

## About API

This API provides Ecommerce 'Order return' Functionality. 

- Simple, fast routing and dependency injection with [Laravel](https://laravel.com/docs/routing).
- Based on Rest API Guidelines
- Automatic Migrations for Models 

## API Documentation

Documenatation to this API could be found on Swagger, click following link for More Documenations

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


## License

This API is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
