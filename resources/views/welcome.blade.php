<!DOCTYPE html>

<html>

    <head>

        <title>Laravel WebSocket Example</title>

    </head>

    <body>

        <div id="div-data"></div>

        <script src='./js/app.js'></script>

        <script>
            window.Echo.channel('home')
            .listen('NewMessage', (e) => {
                console.log(e.message)
            })
        </script>
    </body>


</html>
