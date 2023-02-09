<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/706968a771.js" crossorigin="anonymous"></script>
    <title>Polecajka</title>
</head>
<body>
    <div class="base-container">
        <nav>
            <img src="public/img/logo.svg">
            <ul>
                <li>
                    <i class="fas fa-map-marked-alt"></i>
                    <a href="http://localhost:8080/addPlace" class="button">Dodaj miejsce</a>
                </li>
                <li>
                    <i class="fas fa-search-location"></i>
                    <a href="#" class="button">Szukaj poleceń</a>
                </li>
                <li>
                    <i class="fas fa-cogs"></i>
                    <a href="#" class="button">Wyloguj się</a>
                </li>
            </ul>
        </nav>
        <main>
            <header>
                <div class="menu">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="logo-bar">
                    <img class="logo-in-bar" src="public/img/logo.svg">
                </div>
                <div class="user-profil">
                    <i class="fas fa-user"></i>
                </div>
            </header>
            <section class="project">
                    <?php if (isset($places))
                    foreach ($places as $place): ?>
                    <div class="single-place">
                        <img class="foto-of-place" src="public/uploads/<?= $place->getImage(); ?>">
                        <h2><?= $place->getTitle(); ?></h2>
                        <p>Opis polecenia:  <?= $place->getDescription(); ?></p>
                        <p><?= $place->getDistrict(); ?> </p>
                        <p><?= $place->getAddress(); ?></p>
                    </div>
                    <?php endforeach; ?>
                </section>
            </section>
        </main>
    </div>
</body>