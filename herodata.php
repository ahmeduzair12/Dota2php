<?php
$hero_name=$_GET['hero'];
$hero_data=file_get_contents('dota2.com_hero_data.json');
$hero_data=json_decode($hero_data,TRUE);

//That $hero_name is used to index that array
$hero_bio=$hero_data[$hero_name]['bio'];;
$hero_name1=$hero_data[$hero_name]['name'];
$hero_type=$hero_data[$hero_name]['atk_l'];
$hero_roles=$hero_data[$hero_name]['roles_l'];
//print $hero_name;
//print $hero_bio;
// print $hero_data[$hero_name]['bio'];
 

?>

<!DOCTYPE html>
<html>
    <head>
    <link href="/style.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="hero-name1">
        <h4> <?php print $hero_name1; ?> </h4>
        <img src="http://cdn.dota2.com/apps/dota2/images/heroes/<?php print $hero_name;?>_vert.jpg"/>
</div>
<div class="hero-type">
            <p> <?php print "<h3>Hero-Type</h3>";
                    print $hero_type; ?></p>
</div>
<div class="hero-bio">
    <p> <?php
    print "<h3> Bio </h3>";
     print $hero_bio; ?> </p>

</div>
    
  <div class="hero-roles">
        <h4>Hero Roles</h4>
        <?php 
        foreach ($hero_roles as $roles) { ?>
        <p> 
            <?php print $roles; ?>
        </p>
        <?php } ?>

</body>
</html>