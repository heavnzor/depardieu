<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Depardieu : le site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link href="style.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <meta name="description" content="Depardieu : Le site non officiel de La Team Production">
    <meta name="robots" content="index, follow, archive, all" />


</head>

<body>
    <div class="container">
        <div class="row">
            <header class="col-sm-12    mx-auto    mx-auto">
                <img src='pics/lowhangingfruit.svg' width="120px" title='Depardieu : Le site' alt="Depardieu : Le site (logo)">
                <h1>Depardieu : Le site </h1>
                <br>
                <nav class="navbar" role="naviguation" class="align-content-around">
                    <a href='?rubrique=home' itemprop="item"><span title="Home" itemprop="home"><img src="pics/icons8-home.svg" width="120px" height="120px"></span></a>
                    <a href='?rubrique=infos' itemprop="item"><span title="Infos" itemprop="infos"><img src="pics/icons8-more_info.svg" width="120px" height="120px"></span></a>
                    <a href='?rubrique=actor' itemprop="item"><span title="Actor" itemprop="actor"><img src="pics/icons8-actor.svg" width="120px" height="120px"></span></a>
                    <a href='?rubrique=food' itemprop="item"><span title="Food" itemprop="food"><img src="pics/icons8-restaurant.svg" width="120px" height="120px"></span></a>
                    <a href='?rubrique=wine' itemprop="item"><span title="Wine" itemprop="wine"><img src="pics/icons8-wine.svg" width="120px" height="120px"></span></a>
                    <a href='?rubrique=partenaires' itemprop="item"><span title="Partenaires" itemprop="partpartenaires"><img src="pics/icons8-handshake_medium_light_skin_tone.png" width="120px" height="120px"></span></a>
                    <a href='?rubrique=search' itemprop="item"><span title="Search" itemprop="search"><img src="pics/icons8-search.svg" width="120px" height="120px"></span></a>
                </nav>
            </header>
            <main class="col-sm-12    mx-auto    mx-auto">
                <?php include 'controller.php'; ?>
            </main>
            <footer class="col-sm-12    mx-auto    mx-auto">Copyright 2021 - La Team Production</footer>
        </div>
    </div>
    <script async src="js/jquery-3.6.0.min.js"></script>
    <script async src="js/bootstrap.js"></script>
    <scrip async src="js/bootstrap.bundle.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>