<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TODOLIST PHP</title>

        <link rel="stylesheet" href="./css/style.css">

    </head>
    <body>
        <header>
            <h1>TO DO LIST</h1>
        </header>

        <main id="app">  
            <div>
                <ul>
                    <li v-for="elem in todos" :class="elem.status == true ? 'done' : '' ">
                        {{ elem.todo }}
                    </li>
                </ul>
            </div>
        </main>

        <footer>

        </footer>




        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>