<?php

if(isset($_GET["submit"])) {
    if ((isset($_GET["companies"]))) {
        $companies = "https://www.lemonde.fr/entreprises/rss_full.xml";
        setcookie("companies", $companies, time() + (2592000));
    } else {
        setcookie("companies", "", time() - 3600);
        unset($_COOKIE["companies"]);
    }

    if ((isset($_GET["frenchEco"]))) {
        $frenchEco = "https://www.lemonde.fr/economie-francaise/rss_full.xml";
        setcookie("frenchEco", $frenchEco, time() + (2592000));
    } else {
        setcookie("frenchEco", "", time() - 3600);
        unset($_COOKIE["frenchEco"]);
    }

    if ((isset($_GET["employment"]))) {
        $employment = "https://www.lemonde.fr/emploi/rss_full.xml";
        setcookie("employment", $employment, time() + (2592000));
    } else {
        setcookie("employment", "", time() - 3600);
        unset($_COOKIE["employment"]);
    }

    if ((isset($_GET["europe"]))) {
        $europe = "https://www.lemonde.fr/europe/rss_full.xml";
        setcookie("europe", $europe, time() + (2592000));
    } else {
        setcookie("europe", "", time() - 3600);
        unset($_COOKIE["europe"]);
    }

    if ((isset($_GET["america"]))) {
        $america = "https://www.lemonde.fr/ameriques/rss_full.xml";
        setcookie("america", $america, time() + (2592000));
    } else {
        setcookie("america", "", time() - 3600);
        unset($_COOKIE["america"]);
    }

    if ((isset($_GET["africa"]))) {
        $africa = "https://www.lemonde.fr/ameriques/rss_full.xml";
        setcookie("africa", $africa, time() + (2592000));
    } else {
        setcookie("africa", "", time() - 3600);
        unset($_COOKIE["africa"]);
    }

    if ((isset($_GET["asia"]))) {
        $asia = "https://www.lemonde.fr/asie-pacifique/rss_full.xml";
        setcookie("asia", $asia, time() + (2592000));
    } else {
        setcookie("asia", "", time() - 3600);
        unset($_COOKIE["asia"]);
    }

    if ((isset($_GET["cinema"]))) {
        $cinema = "https://www.lemonde.fr/cinema/rss_full.xml";
        setcookie("cinema", $cinema, time() + (2592000));
    } else {
        setcookie("cinema", "", time() - 3600);
        unset($_COOKIE["cinema"]);
    }

    if ((isset($_GET["music"]))) {
        $music = "https://www.lemonde.fr/musiques/rss_full.xml";
        setcookie("music", $music, time() + (2592000));
    } else {
        setcookie("music", "", time() - 3600);
        unset($_COOKIE["music"]);
    }

    if ((isset($_GET["radioTV"]))) {
        $radioTV = "https://www.lemonde.fr/televisions-radio/rss_full.xml";
        setcookie("radioTV", $radioTV, time() + (2592000));
    } else {
        setcookie("radioTV", "", time() - 3600);
        unset($_COOKIE["radioTV"]);
    }

    if ((isset($_GET["football"]))) {
        $football = "https://www.lemonde.fr/football/rss_full.xml";
        setcookie("football", $football, time() + (2592000));
    } else {
        setcookie("football", "", time() - 3600);
        unset($_COOKIE["football"]);
    }

    if ((isset($_GET["rugby"]))) {
        $rugby = "https://www.lemonde.fr/rugby/rss_full.xml";
        setcookie("rugby", $rugby, time() + (2592000));
    } else {
        setcookie("rugby", "", time() - 3600);
        unset($_COOKIE["rugby"]);
    }

    if ((isset($_GET["tennis"]))) {
        $tennis = "https://www.lemonde.fr/tennis/rss_full.xml";
        setcookie("tennis", $tennis, time() + (2592000));
    } else {
        setcookie("tennis", "", time() - 3600);
        unset($_COOKIE["tennis"]);
    }

    if ((isset($_GET["basket"]))) {
        $basket = "https://www.lemonde.fr/basket/rss_full.xml";
        setcookie("basket", $basket, time() + (2592000));
    } else {
        setcookie("basket", "", time() - 3600);
        unset($_COOKIE["basket"]);
    }

}

?>

<?php

include("includes/head.php");

?>

<body>
    
<?php
    include("includes/header.php");
?>

    <main>
        <h2>Selectionnez les sujets qui vous intéressent</h2>

        <form method="get">
            <fieldset>
                <legend>Emploi et économie :</legend>
                <div class="choicesParameters">
                    <input type="checkbox" id="companies" name="companies" value="companies" <?php if((isset($_COOKIE['companies'])) || (isset($_GET['companies']))) echo "checked";?>>
                    <label for="companies">Entreprises</label>

                    <input type="checkbox" id="frenchEco" name="frenchEco" value="frenchEco" <?php if((isset($_COOKIE['frenchEco'])) || (isset($_GET['frenchEco']))) echo "checked"; ?>>
                    <label for="frenchEco">Economie française</label>

                    <input type="checkbox" id="employment" name="employment" value="employment" <?php if((isset($_COOKIE['employment'])) || (isset($_GET['employment']))) echo "checked"; ?>>
                    <label for="employment">Emploi</label>
                </div>
                <br />
            </fieldset>

            <fieldset>
                <legend>Parties du monde :</legend>
                <div class="choicesParameters">
                    <input type="checkbox" id="europe" name="europe" value="europe" <?php if((isset($_COOKIE['europe'])) || (isset($_GET['europe']))) echo "checked"; ?>>
                    <label for="europe">Europe</label>

                    <input type="checkbox" id="america" name="america" value="america" <?php if((isset($_COOKIE['america'])) || (isset($_GET['america']))) echo "checked"; ?>>
                    <label for="america">Amérique</label>

                    <input type="checkbox" id="africa" name="africa" value="africa" <?php if((isset($_COOKIE['africa'])) || (isset($_GET['africa']))) echo "checked"; ?>>
                    <label for="africa">Afrique</label>

                    <input type="checkbox" id="asia" name="asia" value="asia" <?php if((isset($_COOKIE['asia'])) || (isset($_GET['asia']))) echo "checked"; ?>>
                    <label for="asia">Asie</label>
                </div>
                <br />
            </fieldset>

            <fieldset>
                <legend>Arts et multimédia :</legend>
                <div class="choicesParameters">
                    <input type="checkbox" id="cinema" name="cinema" value="cinema" <?php if((isset($_COOKIE['cinema'])) || (isset($_GET['cinema']))) echo "checked"; ?>>
                    <label for="cinema">Cinema</label>

                    <input type="checkbox" id="music" name="music" value="music" <?php if((isset($_COOKIE['music'])) || (isset($_GET['music']))) echo "checked"; ?>>
                    <label for="music">Musique</label>

                    <input type="checkbox" id="radioTV" name="radioTV" value="radioTV" <?php if((isset($_COOKIE['radioTV'])) || (isset($_GET['radioTV']))) echo "checked"; ?>>
                    <label for="radioTV">Télévision et radio</label>
                </div>
                <br />
            </fieldset>


            <fieldset>
                <legend>Sports :</legend>
                <div class="choicesParameters">
                    <input type="checkbox" id="football" name="football" value="football" <?php if((isset($_COOKIE['football'])) || (isset($_GET['football']))) echo "checked";?>>
                    <label for="football">Football</label>

                    <input type="checkbox" id="rugby" name="rugby" value="rugby" <?php if((isset($_COOKIE['rugby'])) || (isset($_GET['rugby']))) echo "checked"; ?>>
                    <label for="rugby">Rugby</label>

                    <input type="checkbox" id="tennis" name="tennis" value="tennis" <?php if((isset($_COOKIE['tennis'])) || (isset($_GET['tennis']))) echo "checked"; ?>>
                    <label for="tennis">Tennis</label>

                    <input type="checkbox" id="basket" name="basket" value="basket" <?php if((isset($_COOKIE['basket'])) || (isset($_GET['basket']))) echo "checked"; ?>>
                    <label for="basket">Basket</label>
                </div>
                <br />
            </fieldset>
                <button type="submit" name="submit">Sauvegarder vos préférences</button>
            
        </form>

    <p id="personalPage">Accédez à votre page personnalisée en cliquant sur <a href="/personalPage.php">ce lien</a>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>