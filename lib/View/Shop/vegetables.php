<?php
require_once("bootstrap.php");

use Service\Container;
global $configurationForDb;

include VIEW . '/header.php';
?>
<div class="container-fluid">
<h1 class="text-center pt-3">Our vegetables</h1>
<?php
$container = new Container($configurationForDb);
$vegetableLoader = $container->getVegetableLoader();
$vegetables = $vegetableLoader->getAllVegetable();
?>
    <div class="row">
        <div class="col-12 text-center">
            <form method="post" id="form">
                <input type="text" class="form-control w-25 m-auto" name="nameOfVeg"  id="search" placeholder="name of vegetable ex. potato">
                <input type="submit" class="btn btn-dark mt-1" value="Search" name="submit">
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function (){
            $("#form").on('submit',function (e){
                var search = $('#search').val();
                e.preventDefault();
                $.ajax({
                    method: "POST",
                    url: 'search',
                    data:{
                        search: search
                    },
                    success: function (data) {
                        document.getElementById("filter_data").innerHTML = data;
                    }
                });
            })

        });
    </script>
    <div class="row pt-3" id="filter_data">
    </div>
    <hr>
    <div class="row mt-5">

    <?php
foreach ($vegetables as $home)
{
    ?>
    <div class="col-3 text-center ml-auto mr-auto">
        <?php
    echo $home->getName(). '--'.$home->getPrice(). ' rsd <br><img src="/pictures/'.$home->getImage().'" alt="'.$home->getName().'" width="100px" height="100px">'.'<br>';
        ?>
    </div>
        <?php
}
?>
    </div>
</div>
<?php
include VIEW . 'footer.php';
?>