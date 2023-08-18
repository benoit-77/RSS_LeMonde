<?php

$leMonde1 = "https://www.lemonde.fr/economie/rss_full.xml";
$leMonde2 = "https://www.lemonde.fr/entreprises/rss_full.xml";
$leMonde3 = "https://www.lemonde.fr/cinema/rss_full.xml";

$xml4 = file_get_contents($leMonde1);
$xml5 = file_get_contents($leMonde2);
$xml6 = file_get_contents($leMonde3);

$xml4 = simplexml_load_string($xml4);
$xml5 = simplexml_load_string($xml5);
$xml6 = simplexml_load_string($xml6);

if ((!isset($_GET["nbArtFirstArt"])) || ($_GET["nbArtFirstArt"] == 6)) {
    $nbArtFirstArt = 6;
    setcookie("nbArtFirstArt", $nbArtFirstArt, time() + (2592000));
} elseif ($_GET["nbArtFirstArt"] == 9) {
    $nbArtFirstArt = 9;
    setcookie("nbArtFirstArt", $nbArtFirstArt, time() + (2592000));
} else {
    $nbArtFirstArt = 12;
    setcookie("nbArtFirstArt", $nbArtFirstArt, time() + (2592000));
}


if ((!isset($_GET["nbArtSecondArt"])) || ($_GET["nbArtSecondArt"] == 6)) {
    $nbArtSecondArt = 6;
    setcookie("nbArtSecondArt", $nbArtSecondArt, time() + (2592000));
} elseif ($_GET["nbArtSecondArt"] == 9) {
    $nbArtSecondArt = 9;
    setcookie("nbArtSecondArt", $nbArtSecondArt, time() + (2592000));
} else {
    $nbArtSecondArt = 12;
    setcookie("nbArtSecondArt", $nbArtSecondArt, time() + (2592000));
}


if ((!isset($_GET["nbArtThirdArt"])) || ($_GET["nbArtThirdArt"] == 6)) {
    $nbArtThirdArt = 6;
    setcookie("nbArtThirdArt", $nbArtThirdArt, time() + (2592000));
} elseif ($_GET["nbArtThirdArt"] == 9) {
    $nbArtThirdArt = 9;
    setcookie("nbArtThirdArt", $nbArtThirdArt, time() + (2592000));
} else {
    $nbArtThirdArt = 12;
    setcookie("nbArtThirdArt", $nbArtThirdArt, time() + (2592000));
}

?>

<?php

include("includes/head.php");

?>

<body>
    
<?php
    include("includes/header.php");
?>

    <p id="pIntro">Voici les flux RSS du journal Le Monde (catégories Economie, Entreprises et Cinema)  :<br/>
    Plus de catégories sont disponibles dans <a href="personalPage.php">votre flux personnalisé</a>.</p>

    <div class="row">

        <?php

        echo "<h2 class='categoryTitle'> ECONOMIE </h2>";
        echo "<p class='choice'>Sélectionnez le nombre d'articles à afficher :</p>";
        echo '<div class="nbArts">';
        echo '<form method="get" class="NbArtChoice">';
        echo '<div>';
        echo "<input type='radio' id='nbArtFirstArt' name='nbArtFirstArt' value='6'>";
        echo "<label for='nbArtFirstArt' class='NbArtIndex'>6 articles</label>";
        echo "</div>";
        echo '<div>';
        echo "<input type='radio' id='nbArtFirstArt' name='nbArtFirstArt' value='9'>";
        echo "<label for='nbArtFirstArt' class='NbArtIndex'>9 articles</label>";
        echo "</div>";
        echo '<div>';
        echo "<input type='radio' id='nbArtFirstArt' name='nbArtFirstArt' value='12'>";
        echo "<label for='nbArtFirstArt' class='NbArtIndex'>12 articles</label>";
        echo "</div>";
        echo "<input type='submit'>";
        echo '</form>';
        echo "</div>";


        for ($i = 0; $i < $nbArtFirstArt; $i++) {

            $item = $xml4->channel->item[$i];
            $content = $item->children('media', true)->content;
            $contentattr = $content->attributes();
            $image = $contentattr["url"];
            $description = $item->description;
            $title = $item->title;
            $link = $item->link;
            echo '<div class="col-sm-6 col-lg-4">';
            echo '<div class="card m-3 text-center">';
            echo '<div class="card-body">';
            echo '<img src="' . $image . '" class="card-img-top" <br/>';
            echo '<h2 class="card-title">' . $title . "</h2><br/>";
            echo "<br/>";
            echo '<p class="card-text">' . $description . "</p><br/>";
            echo "<a href='" . $link . "'>Lien vers l'article</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

        echo "<h2 class='categoryTitle'> ENTREPRISES </h2>";
        echo "<p class='choice'>Sélectionnez le nombre d'articles à afficher :</p>";
        echo '<div class="nbArts">';
        echo '<form method="get" class="NbArtChoice">';
        echo '<div>';
        echo "<input type='radio' id='nbArtFirstArt' name='nbArtFirstArt' value='6'>";
        echo "<label for='nbArtFirstArt' class='NbArtIndex'>6 articles</label>";
        echo "</div>";
        echo '<div>';
        echo "<input type='radio' id='nbArtFirstArt' name='nbArtFirstArt' value='9'>";
        echo "<label for='nbArtFirstArt' class='NbArtIndex'>9 articles</label>";
        echo "</div>";
        echo '<div>';
        echo "<input type='radio' id='nbArtFirstArt' name='nbArtFirstArt' value='12'>";
        echo "<label for='nbArtFirstArt' class='NbArtIndex'>12 articles</label>";
        echo "</div>";
        echo "<input type='submit'>";
        echo '</form>';
        echo "</div>";


        for ($i = 0; $i < $nbArtSecondArt; $i++) {

            $item = $xml5->channel->item[$i];
            $content = $item->children('media', true)->content;
            $contentattr = $content->attributes();
            $image = $contentattr["url"];
            $description = $item->description;
            $title = $item->title;
            $link = $item->link;
            echo '<div class="col-sm-6 col-lg-4">';
            echo '<div class="card m-3 text-center">';
            echo '<div class="card-body">';
            echo '<img src="' . $image . '" class="card-img-top" <br/>';
            echo '<h2 class="card-title">' . $title . "</h2><br/>";
            echo "<br/>";
            echo '<p class="card-text">' . $description . "</p><br/>";
            echo "<a href='" . $link . "'>Lien vers l'article</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

        echo "<h2 class='categoryTitle'> CINEMA </h2>";
        echo "<p class='choice'>Sélectionnez le nombre d'articles à afficher :</p>";
        echo '<div class="nbArts">';
        echo '<form method="get" class="NbArtChoice">';
        echo '<div>';
        echo "<input type='radio' id='nbArtFirstArt' name='nbArtFirstArt' value='6'>";
        echo "<label for='nbArtFirstArt' class='NbArtIndex'>6 articles</label>";
        echo "</div>";
        echo '<div>';
        echo "<input type='radio' id='nbArtFirstArt' name='nbArtFirstArt' value='9'>";
        echo "<label for='nbArtFirstArt' class='NbArtIndex'>9 articles</label>";
        echo "</div>";
        echo '<div>';
        echo "<input type='radio' id='nbArtFirstArt' name='nbArtFirstArt' value='12'>";
        echo "<label for='nbArtFirstArt' class='NbArtIndex'>12 articles</label>";
        echo "</div>";
        echo "<input type='submit'>";
        echo '</form>';
        echo "</div>";


        for ($i = 0; $i < $nbArtThirdArt; $i++) {

            $item = $xml6->channel->item[$i];
            $content = $item->children('media', true)->content;
            $contentattr = $content->attributes();
            $image = $contentattr["url"];
            $description = $item->description;
            $title = $item->title;
            $link = $item->link;
            echo '<div class="col-sm-6 col-lg-4">';
            echo '<div class="card m-3 text-center">';
            echo '<div class="card-body">';
            echo '<img src="' . $image . '" class="card-img-top" <br/>';
            echo '<h2 class="card-title">' . $title . "</h2><br/>";
            echo "<br/>";
            echo '<p class="card-text">' . $description . "</p><br/>";
            echo "<a href='" . $link . "'>Lien vers l'article</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>