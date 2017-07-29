<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Appointy Hackathon API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Appointy Hackathon API
                </div>

                <div class="links">
                    <a href="/users">users</a>
                    <a href="/agents">Agents</a>

                    {{--simple order--}}
                    <a href="/orders">Orders</a>
                    <a href="/order/ORDER_ID">Order Detail</a>
                    <a href="/order/ORDER_ID/agent">Order Agent</a>

                    <br><br><br>
                    {{--return order--}}
                    <a href="/returns">Return Orders</a>

                    {{--place return_order by copying from order and assign agent--}}
                    <a href="/return/place/ORDER_ID">Place Return Order</a>

                    {{--<a href="/return/RETURN_ORDER_ID/agent">Return Order Agent</a>--}}
                    <a href="/returns/RETURN_ORDER_ID">Return Order Detail</a>

                </div>
            </div>
        </div>
    </body>
</html>
