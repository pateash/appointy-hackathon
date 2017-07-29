<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>JS Bin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.4/css/bulma.min.css">
    <style>

        h2{
            font-size:2em;
            margin-top:1em;

        }
        h4{
            font-size:1.8em;
        }
        li{
            margin:0.5em;
            list-style-type: disc;

        }
    </style>
</head>
<body>
<section class="hero">
    <div class="hero-body">
        <div class="container">
    <span align='center'>
    <img width='250px' src="https://appointy.com/creditoffer/Images/Appointy-logo.png">
    <img width='300px' src="http://www.aptusdatalabs.com/wp-content/uploads/2016/04/hackathon-logo.jpg">

    </span>
           <br> <a href="//github.com/ashishpatel0720/appointy-hackathon">Visit Project at Github</a>

        </div>
    </div>
</section>
<div class="section">
    <div class="container">
        <h2 id="about-api">About API</h2>
        <p>This API provides Ecommerce ‘Order return’ Functionality.</p>
        <ul>
            <li>Simple, fast routing and dependency injection with <a
                        href="https://laravel.com/docs/routing">Laravel</a>.
            </li>
            <li>Based on Rest API Guidelines</li>
            <li>Automatic Migrations for Models</li>
        </ul>
        <h2 id="built-with">Built With</h2>
        <p><a href='//laravel.com'><img width='300px'
                                        src="https://camo.githubusercontent.com/5ceadc94fd40688144b193fd8ece2b805d79ca9b/68747470733a2f2f6c61726176656c2e636f6d2f6173736574732f696d672f636f6d706f6e656e74732f6c6f676f2d6c61726176656c2e737667"></a>
        </p>
        <h2 id="install-and-run">Install and Run</h2>
        <ul>
            <li>clone project</li>
            <li>install composer dependencies using <code>composer install</code> (of course you need, php and composer
            </li>
            <li>create <code>.env</code> file by copying from <code>.env.example</code></li>
            <li>run <code>php artisan key:generate</code> command, this will get APP_KEY in <code>.env</code> file</li>
            <li>create database and fill information in `.env’ file</li>
            <li>you will need to seed your database , use following command steps
                <ul>
                    <li>run <code>php artisan tinker</code> to enter in to command line tinker</li>
                    <li>enter <code>factory(App\User::class,100)-&gt;create()</code>, this will seed your
                        <code>User</code> table with 100 records
                    </li>
                    <li>enter <code>factory(App\Order::class,100)-&gt;create()</code>, this will seed your
                        <code>Order</code> table with 100 records
                    </li>
                    <li>enter <code>factory(App\Agent::class,10)-&gt;create()</code>, this will seed your
                        <code>Agent</code> table with 10 records
                    </li>
                </ul>
            </li>
            <li>Now run <code>php artisan serve</code>, which will run your app on <code>localhost:8000</code>.</li>
            <li>That’s It, You can modify and create a pull request, Thanks.</li>
        </ul>
        <h2 id="api-documentation">API Documentation</h2>
        <h4 id="welcome-page">Welcome Page</h4>
        <blockquote>
            <p><code>GET /</code> will take you to the Welcome Page. where you will get same documentation.</p>
        </blockquote>
        <h4 id="user">User</h4>
        <blockquote>
            <p>Every thing about Users</p>
        </blockquote>
        <table class="table">
            <thead>
            <tr class="header">
                <th>API Route</th>
                <th align="center">Functionality</th>
            </tr>
            </thead>
            <tbody>
            <tr class="odd">
                <td>GET /users</td>
                <td align="center">All Registered Users</td>
            </tr>
            <tr class="even">
                <td>GET /user/{userId}</td>
                <td align="center">User Detail</td>
            </tr>
            <tr class="odd">
                <td>GET /user/{userId}/orders</td>
                <td align="center">All Orders By User</td>
            </tr>
            </tbody>
        </table>
        <h4 id="order">Order</h4>
        <blockquote>
            <p>Every thing about Simple Orders (not return orders)<br/>
                as we are assuming some orders has been placed and delivered)</p>
        </blockquote>
        <table class='table'>
            <thead>
            <tr class="header">
                <th>API Route</th>
                <th align="center">Functionality</th>
            </tr>
            </thead>
            <tbody>
            <tr class="odd">
                <td>GET /orders</td>
                <td align="center">All Delivered Orders</td>
            </tr>
            <tr class="even">
                <td>GET /order/{orderId}</td>
                <td align="center">Order Details</td>
            </tr>
            <tr class="odd">
                <td>GET /order/{orderId}/agent</td>
                <td align="center">Agent who has Delivered Order</td>
            </tr>
            </tbody>
        </table>
        <blockquote>
            <p>Here agent is person who has delivered order ( not the one who will be picking it for return)</p>
        </blockquote>
        <h4 id="return-orders">Return Orders</h4>
        <blockquote>
            <p>Every thing about Return Orders ( which will be assigned to free or nearest Agent)</p>
        </blockquote>
        <table class='table'>
            <thead>
            <tr class="header">
                <th>API Route</th>
                <th align="center">Functionality</th>
            </tr>
            </thead>
            <tbody>
            <tr class="odd">
                <td>GET /returns</td>
                <td align="center">All Return Placed Orders</td>
            </tr>
            <tr class="even">
                <td>GET /return/{returnId}</td>
                <td align="center">Return Order Details</td>
            </tr>
            <tr class="odd">
                <td>GET /return/place/{orderId}</td>
                <td align="center">Place Order with
                    <orderId> for return
                </td>
            </tr>
            <tr class="even">
                <td>GET /return/complete/{orderId}</td>
                <td align="center">Return has been SuccessFull</td>
            </tr>
            </tbody>
        </table>
        <blockquote>
            <p>Here agent is person who has delivered order ( not the one who will be picking it for return)
            </p>
        </blockquote>
        <h4 id="agent">Agent</h4>
        <blockquote>
            <p>Every thing about Delivery Agent</p>
        </blockquote>
        <table class='table'>
            <thead>
            <tr class="header">
                <th>API Route</th>
                <th align="center">Functionality</th>
            </tr>
            </thead>
            <tbody>
            <tr class="odd">
                <td>GET /agents</td>
                <td align="center">All Registered Agents</td>
            </tr>
            <tr class="even">
                <td>GET /agent/{agentId}</td>
                <td align="center">Agent Detail</td>
            </tr>
            <tr class="odd">
                <td>GET /agent/{agentId}/orders</td>
                <td align="center">All Orders Delivered By Agent</td>
            </tr>
            <tr class="even">
                <td>GET /agents/free</td>
                <td align="center">All Free Agents (with no assigned order)</td>
            </tr>
            <tr class="odd">
                <td>GET /agents/busy</td>
                <td align="center">All Busy Agents (with assigned order/orders)</td>
            </tr>
            </tbody>
        </table>
        <h2 id="bugs-and-fixes">Bugs and Fixes</h2>
        <p>Every thing anyone create has bugs and some of them can be fixed, If you find one,<br />
            please mail me at <a href="mailto:ashishpatel@gmail.com">ashishpatel0720@gmail.com</a></p>
        <h2 id="license">License</h2>
        <p>This API is open-sourced software licensed under the <a href="http://opensource.org/licenses/MIT">MIT license</a>.</p>
    </div>
</div>
</body>
</html>