<?php
require_once ("bootstrap.php");
global $configurationForDb;

use Service\Container;


$search = $_POST['search'];
$container = new Container($configurationForDb);
$vegetableLoader = $container->getVegetableLoader();
$vegetables = $vegetableLoader->getAllVegetableByName($search);

    if ($vegetables != null){
    foreach ($vegetables as $home)
    {

        ?>
        <div class="col-2 text-center ml-auto mr-auto">
            <?php
            echo $home->getName(). '--'.$home->getPrice(). ' rsd <br><img src="/pictures/'.$home->getImage().'" alt="'.$home->getName().'" width="100px" height="100px">'.'<br>';
            ?>

        </div>
        <?php
    }
    } else {
        echo '<div class="text-center col-12">Not found vegetable with this name</div>';
    }

    ?>


