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
                    <a href="http://localhost:8080/dashboard" class="button">Szukaj poleceń</a>
                </li>
                <li>
                    <i class="fas fa-cogs"></i>
                    <a href="http://localhost:8080/login" class="button">Wyloguj się</a>
                </li>
            </ul>
        </nav>
        <main>
            <header>
                <img class="logo-in-bar" src="public/img/logo.svg">
            </header>
            <div class="project-add-place">
                <div class="map">
                    <button class="miasto">Stare Miasto</button>
                    <button class="miasto">Nowa Huta</button>
                    <button class="miasto">Podgórze</button>
                    <button class="miasto">Krowodrza</button>
                    <button class="miasto">Dębniki</button>
                    <button class="miasto">Zwierzyniec</button>
                    <button class="miasto">Bronowice</button>
                    <button class="miasto">Prądnik Biały</button>
                    <button class="miasto">Prądnik Czerwony</button>
                    <button class="miasto">Mistrzejownice</button>
                    <button class="miasto">Czyżyny</button>
                    <button class="miasto">Bieńczyce</button>
                    <button class="miasto">Podgórze Duchackie</button>
                    <button class="miasto">Bieżanów-Prokocim</button>
                    <button class="miasto">Swoszowice</button>
                    <button class="miasto">Łagiewniki-Borek Fałęcki</button>
                </div>
                <div class="info-board">
                    <div class="form-adding-place">
                    <h1 class ="napis">Dodawanie miejsca</h1>
                    <form class="form-add" action="addPlace" method="POST" ENCTYPE="multipart/form-data">
                        <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                        ?>
                        <label>Nazwa miejsca:</label><br>
                        <input class="element-forms" name="name-of-place" type="text" placeholder="place name"><br>
                        <label>Adres miejsca:</label><br>
                        <input class="element-forms" name="address-of-place" type="text" placeholder="address"><br>
                        <label>Wybierz dzielnicę:</label><br>
                        <select class="element-forms" name="dzielnica" id="dzielnica'"><br>
                            <option value="Stare Miasto">Stare Miasto</option>
                            <option value="Nowa Huta">Nowa Huta</option>
                            <option value="Podgórze">Podgórze</option>
                            <option value="Krowodrza">Krowodrza</option>
                            <option value="Dębniki">Dębniki</option>
                            <option value="Bronowice">Bronowice</option>
                            <option value="Prądnik Biały">Prądnik Biały</option>
                            <option value="Prądnik Czerwony">Prądnik Czerwony</option>
                            <option value="Mistrzejownice">Mistrzejownice</option>
                            <option value="Czyżyny">Czyżyny</option>
                            <option value="Bieńczyce">Bieńczyce</option>
                            <option value="Podgórze Duchackie">Podgórze Duchackie</option>
                            <option value="Bieżanów-Prokocim">Bieżanów-Prokocim</option>
                            <option value="Swoszowice">Swoszowice</option>
                            <option value="Łagiewniki-Borek Fałęcki">Łagiewniki-Borek Fałęcki</option>
                        </select><br>
                        <label>Opis polecenia:</label><br>
                        <textarea class="element-forms" name="description" rows="5" placeholder="opis"></textarea><br>
                        <label>Zdjęcia:</label><br>
                        <input class="element-forms" type="file" name="file"><br>
                        <button class="element-forms" type="submit">Wyślij</button>
                    </div>
                    </form>
                </div>
                </div>
            </section>
        </main>

    </div>
</body>