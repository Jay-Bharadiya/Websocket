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
            window.Echo.channel('home')
            .listen('NewMessage', (e) => {
                for (let i = 0; i < e.counts; i++) {
                console.log("helloo",getRandomDate());
            }
            })
        </script>
    </body>


</html>
