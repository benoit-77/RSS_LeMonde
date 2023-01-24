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

var_dump($_GET);

?>

<?php

include("includes/head.php");

?>

<body>

    <?php
    include("includes/header.php");
    ?>

    <p id="pIntro">Voici les flux RSS du journal Le Monde :</p>


    <div class="row">


        <?php

        if (isset($_GET["cat"])) {

            if ($_GET["cat"] == "economie") {
                $xml = $xml4;
                echo "<h2> ECONOMIE </h2>";
            } elseif ($_GET["cat"] == "entreprises") {
                $xml = $xml5;
                echo "<h2> ENTREPRISES </h2>";
            } elseif ($_GET["cat"] == "cinema") {
                $xml = $xml6;
                echo "<h2> CINEMA </h2>";
            }

            foreach ($xml->channel->item as $item) {

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

            // echo "<h2> ECONOMIE </h2>";
            // echo "<p class='choice'>Sélectionnez le nombre d'articles à afficher :</p>";
            // echo '<div class="nbArts">';
            // echo "<button type='button' class='btn-6-1'>6 articles</button>";
            // echo "<button type='button' class='btn-9-1'>9 articles</button>";
            // echo "<button type='button' class='btn-12-1'>12 articles</button>";
            // echo "</div>";
            // for ($i = 0; $i < 6; $i++) {

            //     $item = $xml4->channel->item[$i];        
            //     $content = $item->children('media', true)->content;
            //     $contentattr = $content->attributes();
            //     $image = $contentattr["url"];
            //     $description = $item->description;
            //     $title = $item->title;
            //     $link = $item->link;
            //     echo '<div class="col-sm-12 col-lg-6">';
            //     echo '<div class="card m-3 text-center">';
            //     echo '<div class="card-body">';
            //     echo '<img src="' . $image . '" class="card-img-top" <br/>';
            //     echo '<h2 class="card-title">' . $title . "</h2><br/>";
            //     echo "<br/>";
            //     echo '<p class="card-text">' . $description . "</p><br/>";
            //     echo "<a href='" . $link . "'>Lien vers l'article</a>";
            //     echo "</div>";
            //     echo "</div>";
            //     echo "</div>";
            // }
        }

        ?>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>