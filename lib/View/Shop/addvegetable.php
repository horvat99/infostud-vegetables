<?php
require_once("bootstrap.php");

use Service\Container;
global $configurationForDb;

include VIEW . 'header.php';
?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-12 text-center">
            <form method="post" enctype="multipart/form-data">
                <input type="file" class="form-control w-25 ml-auto mr-auto" name="file">
                <input type="text" class="form-control w-25 ml-auto mr-auto" name="name" placeholder="name of vegetable">
                <input type="text" class="form-control w-25 ml-auto mr-auto" name="price" placeholder="price of vegetable">
                <input type="submit" class="btn btn-dark ml-auto mr-auto mt-2" name="upload" value="Upload">
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['upload'])) {
$container = new Container($configurationForDb);
$vegetableUploader = $container->getVegetableUpload();
$upload = $vegetableUploader->insert($_POST['name'],(int)$_POST['price'],$_FILES['file']);
}

include VIEW . 'footer.php';
?>
