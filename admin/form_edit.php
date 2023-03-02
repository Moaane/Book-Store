<?php
require_once 'connect.php';
require_once 'header.php';

$id  = $_GET['id'];

$querySelectById = "SELECT * FROM book WHERE id='$id'";
$result = $connect->query($querySelectById);
$row = $result->fetch_assoc();

$id = $row['id'];
$title = $row['title'];
$description = $row['description'];
$rating = $row['rating'];
$author = $row['author'];




?>


<div class="container">
    <div class="row mt-5  d-flex justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Form Edit Articel</h5>
                    <form class="row g-3 mt-2" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$id;?>">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Title</label>
                            <input type="text" name="title" value="<?=$title;?>" class="form-control" id="inputEmail4" required="true">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Author</label>
                            <input type="text" name="author" value="<?=$author;?>" class="form-control" id="inputPassword4" required="true">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Rating</label>
                            <input type="number" name="rating" value="<?=$rating;?>" class="form-control" id="inputPassword4" required="true">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Image</label>
                            <input type="file" name="filename"class="form-control" id="inputPassword4" required="true">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea type="text" class="form-control" name="description" id="editor" required="true" placeholder="Deskripsi Disini" ><?=$description?></textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <a href="index.php" class="btn btn-warning">Back</a>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $rating = $_POST['rating'];
    $author = $_POST['author'];


    $image_name = $_FILES['filename']['name'];
    $image_tmp  = $_FILES['filename']['tmp_name'];

    $queryInsert = "UPDATE book SET title = '$title', description = '$description', rating = '$rating', author = '$author',
    filename ='$image_name' WHERE id='$id'";

    move_uploaded_file($image_tmp,'img/'.$image_name);
  


    if ($connect->query($queryInsert)) {
        echo "<script> 
        alert('Sukses');
        window.location.href='index.php'; 
        </script>";
    }
}

?>




<?php
require_once 'footer.php';
?>