<?php

$rss = [];

if(isset($_COOKIE["companies"])) {
    $rss[] = "https://www.lemonde.fr/entreprises/rss_full.xml";
}
if(isset($_COOKIE["frenchEco"])) {
    $rss[] = "https://www.lemonde.fr/economie-francaise/rss_full.xml";
}
if(isset($_COOKIE["employment"])) {
    $rss[] = "https://www.lemonde.fr/emploi/rss_full.xml";
}
if(isset($_COOKIE["europe"])) {
    $rss[] = "https://www.lemonde.fr/europe/rss_full.xml";
}
if(isset($_COOKIE["america"])) {
    $rss[] = "https://www.lemonde.fr/ameriques/rss_full.xml";
}
if(isset($_COOKIE["africa"])) {
    $rss[] = "https://www.lemonde.fr/afrique/rss_full.xml";
}
if(isset($_COOKIE["asia"])) {
    $rss[] = "https://www.lemonde.fr/asie-pacifique/rss_full.xml";
}
if(isset($_COOKIE["cinema"])) {
    $rss[] = "https://www.lemonde.fr/cinema/rss_full.xml";
}
if(isset($_COOKIE["music"])) {
    $rss[] = "https://www.lemonde.fr/musiques/rss_full.xml";
}
if(isset($_COOKIE["radioTV"])) {
    $rss[] = "https://www.lemonde.fr/televisions-radio/rss_full.xml";
}
if(isset($_COOKIE["football"])) {
    $rss[] = "https://www.lemonde.fr/football/rss_full.xml";
}
if(isset($_COOKIE["rugby"])) {
    $rss[] = "https://www.lemonde.fr/rugby/rss_full.xml";
}
if(isset($_COOKIE["tennis"])) {
    $rss[] = "https://www.lemonde.fr/tennis/rss_full.xml";
}
if(isset($_COOKIE["basket"])) {
    $rss[] = "https://www.lemonde.fr/basket/rss_full.xml";
}

$xml = [];
foreach($rss as $flux) {
    $xml[] = simplexml_load_file($flux);
}

// if ((!isset($_GET["nbArtFirstArt"])) || ($_GET["nbArtFirstArt"] == 6)) {
//     $nbArtFirstArt = 6;
//     setcookie("nbArtFirstArt", $nbArtFirstArt, time() + (2592000));
// } elseif ($_GET["nbArtFirstArt"] == 9) {
//     $nbArtFirstArt = 9;
//     setcookie("nbArtFirstArt", $nbArtFirstArt, time() + (2592000));
// } else {
//     $nbArtFirstArt = 12;
//     setcookie("nbArtFirstArt", $nbArtFirstArt, time() + (2592000));
// }


// if ((!isset($_GET["nbArtSecondArt"])) || ($_GET["nbArtSecondArt"] == 6)) {
//     $nbArtSecondArt = 6;
//     setcookie("nbArtSecondArt", $nbArtSecondArt, time() + (2592000));
// } elseif ($_GET["nbArtSecondArt"] == 9) {
//     $nbArtSecondArt = 9;
//     setcookie("nbArtSecondArt", $nbArtSecondArt, time() + (2592000));
// } else {
//     $nbArtSecondArt = 12;
//     setcookie("nbArtSecondArt", $nbArtSecondArt, time() + (2592000));
// }


// if ((!isset($_GET["nbArtThirdArt"])) || ($_GET["nbArtThirdArt"] == 6)) {
//     $nbArtThirdArt = 6;
//     setcookie("nbArtThirdArt", $nbArtThirdArt, time() + (2592000));
// } elseif ($_GET["nbArtThirdArt"] == 9) {
//     $nbArtThirdArt = 9;
//     setcookie("nbArtThirdArt", $nbArtThirdArt, time() + (2592000));
// } else {
//     $nbArtThirdArt = 12;
//     setcookie("nbArtThirdArt", $nbArtThirdArt, time() + (2592000));
// }

?>

<?php

include("includes/head.php");

?>

<body>
    
<?php
    include("includes/header.php");
?>

    <p id="pIntro">Voici votre flux personnalisé : (modifiable dans <a href="http://rss/parametres.php?">paramètres.)</a></p>

    <div class="row">

        <?php

    foreach ($xml as $url) {
        echo "<h2>" . $url->channel->title . "</h2>";
        foreach ($url->channel->item as $item) {
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
            echo '<h2 class="card-title">' . $item->title . "</h2><br/>";
            echo "<br/>";
            echo '<p class="card-text">' . $description . "</p><br/>";
            echo "<a href='" . $item->link . "'>Lien vers l'article</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }

    };
       
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>