<!DOCTYPE html>

<html>

    <head>

        <title>Laravel WebSocket Example</title>

    </head>

    <body>

        <div id="div-data"></div>
        <script>
        function getRandomDate() {
            const maxDate = Date.now();
            const timestamp = Math.floor(Math.random() * maxDate);
            return new Date(timestamp);
        }
        </script>
        <script src='./js/app.js'></script>

        <script>
            .listen('NewMessage', (e) => {
            window.Echo.channel(e.channel)
                for (let i = 0; i < e.counts; i++) {
                console.log(e.message,getRandomDate());
            }
            })
        </script>
    </body>


</html>
