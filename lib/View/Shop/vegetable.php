<?php
require_once("bootstrap.php");
global $configurationForDb;

use Service\Container;


echo ' <h1 class="text-center pt-5">Vegetable - '.$this->viewData['id'].'</h1>';

$container = new Container($configurationForDb);
$vegetableLoader = $container->getVegetableLoader();
$vegetables = $vegetableLoader->getOneVegetable($this->viewData['id']);
?>
<div class="row mt-5">

    <?php
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
        echo 'Not found vegetable with this id';
    }

    ?>
</div>
