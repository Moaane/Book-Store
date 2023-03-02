<?php 
    require_once 'connect.php';
    require_once 'header.php';
?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-13">
                <a href="form_add.php" class="btn btn-success mb-3">Add</a>
                <br>
                <table class ="table table-hover table-striped-column">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">rating</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Author</th>
                        <th scope="col">Created_Time</th>
                        <th scope="col">Released_Time</th>
                        <th scope="col">Preview</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                    <?php
                        $querySelect = "SELECT * FROM book";
                        $result  = $connect->query($querySelect);
                        if ($result->num_rows > 0) :
                            while ($row = $result->fetch_assoc()) :
                    ?>
                    <tr>
                        <td><?=$row['id'] ?></td>
                        <td><?=$row['title'] ?></td>
                        <td><?=$row['rating'] ?></td>
                        <td><?=$row['description'] ?></td>
                        <td><?=$row['author'] ?></td>
                        <td><?=$row['created_time'] ?></td>
                        <td><?=$row['release_date'] ?></td>
                        <td><img src="img/<?=$row['filename'] ?>" width="100px" height="100px" alt=""></td>

                        <td>
                            <a href="form_edit.php?id=<?=$row['id'] ?>"
                            class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="delete.php?id=<?=$row['id'] ?>" 
                            class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php 
                            endwhile;
                        endif;
                    ?>
                   
                </table>
            </div>
        </div>
    </div>

<?php 
    require_once 'footer.php';
?>