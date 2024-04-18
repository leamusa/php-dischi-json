<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discs List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="app">
        <header>
            <div class="container">
                <div><img id="logo" src="assets/img/spotify_icon.png" alt="logo-spotify"></div>
            </div>
        </header>
        <main>
            <div class="container">
                <div v-for="disc in discs" :key="disc.id">
                    <img :src="disc.poster" :alt="disc.title">
                    <h3>{{ disc.title }}</h3>
                    <h6>{{ disc.author }}</h6>
                    <h4>{{ disc.year }}</h4>
                </div>
            </div>
        </main>
    </div>

    <!-- Vue.js -->
    <script src='https://unpkg.com/vue@3'></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="./assets/js/app.js"></script>
</body>

</html>
