<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 48: PHP Dischi JSON</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Icone FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Icona -->
    <link rel="icon" href="img/spotify-logo.png">

    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Axios.js -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
    <div id="app">
        <header class="d-flex align-items-center justify-content-around pt-4 pb-4">
            <img src="img/spotify-logo.png" alt="spotify">
            <h1 class="m-0">Your music albums</h1>
        </header>

        <main class="pt-4 pb-4">
            <div class="container mt-4 mb-4">
                <div class="row row-cols-2 row-cols-md-3 gy-5">
                    <div class="col d-flex justify-content-center align-items-center" v-for="album in albumsList">
                        <a href="#offcanvasAlbum" data-bs-toggle="offcanvas" role="button">
                            <!-- Card album -->
                            <div class="card">
                                <div class="overlay">
                                    <i class="fa-solid fa-circle-play"></i>
                                </div>
                                <img v-bind:src="album.poster" v-bind:alt="album.title">
                                <div class="card-body p-0 pt-3 text-center">
                                    <h5 class="card-title fw-bold"> {{ album.title }} </h5>
                                    <p class="card-text fst-italic"> {{ album.author }} </p>
                                    <p class="card-text fw-bold"> {{ album.year }} </p>
                                </div>
                            </div>
                        </a>

                        <!-- Singolo album - dettagli -->
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAlbum">
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body d-flex justify-content-center align-items-center">
                                <div class="card my-offcanvas-card">
                                    <div class="overlay">
                                        <i class="fa-solid fa-circle-play"></i>
                                    </div>
                                    <img v-bind:src="album.poster" v-bind:alt="album.title">
                                    <div class="card-body p-0 pt-3 text-center">
                                        <h5 class="card-title fw-bold"> {{ album.title }} </h5>
                                        <p class="card-text fst-italic"> {{ album.author }} </p>
                                        <p class="card-text fw-bold"> {{ album.year }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="text-center pt-4 pb-4">
            <p class="m-0 fw-bold fst-italic">Your music albums</p>
        </footer>

    </div>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Custom Js -->
    <script src="js/main.js"></script>
</body>

</html>