<?php
require_once 'connect.php';
require_once 'header.php';


?>

<div class="container">
    <div class="row mt-5  d-flex justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Form Add Articel</h5>
                    <form class="row g-3 mt-2" action="" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="inputEmail4" required="true">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Author</label>
                            <input type="text" name="author" class="form-control" id="inputEmail4" required="true">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Rating</label>
                            <input type="text" name="rating" class="form-control" id="inputEmail4" required="true">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Image</label>
                            <input type="file" name="filename" class="form-control" id="inputPassword4" required="true">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea type="text" class="form-control" name="description" id="editor" required="true" placeholder="Description Here"></textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <a href="index.php" class="btn btn-warning">Back</a>
                            <button type="submit" name="submit" class="btn btn-primary" formnovalidate="formnovalidate">Submit</button>
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


    $queryInsert = "INSERT INTO book(title,description,rating,author,filename)
                     VALUE ('$title','$description','$rating','$author','$image_name')";

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