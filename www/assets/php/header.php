<?php

    if ($local == "localhost") {
        // Options for running on localhost
        $href1 = "../www/";
        $href2 = "../p10/";
        $href3 = "";
        $href4 = "";
    } else {
        // Options for running on the web
        $href1 = "https://www.pindex.club/";
        $href2 = "https://p10.pindex.club/";
        $href3 = "";
        $href4 = "";
    };

?>
<header>
    
        <?php if ($local == "localhost") {
            echo '<ul class="'
        ?>
        <?php 
            echo $local == "localhost" ? "local" : "web" 
        ?> 
        <?php 
            echo 'navbar flex_container">';
            echo '<li><a href="" style="color: red;">localhost</a></li>';
            echo '</ul>';
            }
        ?>    
    
    <ul class="<?php echo $local == "local" ? "local" : "web" ?> navbar flex_container">
    
        <li><a href=<?php echo $href1?> target="pindex">Pindex</a></li>
        <li><a href=<?php echo $href2?> target="p10">P10+</a></li>
        <li><a href=<?php echo $href3?> target="">Link #3</a></li>
        <li><a href=<?php echo $href4?> target="" >Link #4</a></li>
    </ul>
</header>