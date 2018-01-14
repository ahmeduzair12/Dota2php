<?php
    $heroes = file_get_contents("https://api.opendota.com/api/heroes");
    $heroes_data = json_decode($heroes, true);
    $character = $_GET['alphabet'];
    $final_hero_list = [];
    
    $attr_type = $_GET['type'];

    foreach ($heroes_data as $hero) {
        
        if (substr($hero['localized_name'], 0, 1) === $character && $hero['primary_attr'] === $attr_type){
            array_push($final_hero_list, $hero);
        }

    }

    // foreach ($final_hero_list as $hero) {
    //     print($hero['localized_name']);
    // }

?>
<!DOCTYPE html>
<html>
    <head>
        <link href="/style.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="top-nav">
            <a href="/herolist.php?alphabet=<?php print $_GET['alphabet']?>&type=str" class="strength <?php 
                if($_GET['type'] === 'str'){
                    print 'active';
                }
            ?>">
                Strength
            </a>
            <a href="/herolist.php?alphabet=<?php print $_GET['alphabet']?>&type=agi" class="agility <?php 
                if($_GET['type'] === 'agi'){
                    print 'active';
                }
            ?>">
                Agility
            </a>
            <a href="/herolist.php?alphabet=<?php print $_GET['alphabet']?>&type=int" class="intelligence <?php 
                if($_GET['type'] === 'int'){
                    print 'active';
                }
            ?>">
                Intelligence
            </a>
        </div>

        <div class="hero-list">
            <div class="hero">

            </div>
        </div>

        <?php
            // print($_GET['alphabet']);
        ?>
    </body>
    <script src="./script.js" type="text/javascript"/></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</html>