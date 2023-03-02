<?php

require_once 'connect.php';

function detailBook($id)
{
    global $connect;
    $result = $connect->query("SELECT * FROM book WHERE id='$id'");
    $row = $result->fetch_assoc();

    $title = $row['title'];
    $filename = $row['filename'];
    $description = $row['description'];
    $created_time = $row['created_time'];

    echo '
    <div class="card">
    <div class="card-body">
        <h5 class="card-title text-bold">
            ' . $title . '
        </h5>
        <hr class="">
        <p class="">Tanggal post : ' . $created_time . ' </p>
        <div class="card-image text-center">
        <div class="wrap">
            <img src="admin/img/' . $filename . '" class="img-thumbnail" width="30%">                                                >
         </div>
        </div>
    </div>
</div>
    <div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title ">
            Deskripsi
        </h5>
        <hr class="">
        <p class="">
            ' . $description . '
        </p>
        
    </div>
</div>
';
}

function showBook()
{

    global $connect;
    $resultSlide1 = $connect->query("SELECT * FROM book");

    while ($row = $resultSlide1->fetch_assoc()) {
        $id = $row['id'];
        $title = $row['title'];
        $deskripsi = $row['description'];
        $date = $row['release_date'];
        $rating = $row['rating'];
        $created_time = $row['created_time'];
        $filename = $row['filename'];
        $author = $row['author'];
        
        echo '
            <div class="books">
            <div>
                <img src="admin/img/' . $filename . '" alt="" class="book-img">
            </div>
            <div class="descp">
                <h2 class="book-name">' . $title . '</h2>
                <h3 class="author">' . $author . '</h3>
                <h3 class="rating">' . $rating . '</h3>
                <p class="info">' . $deskripsi . '</p><br><br>
                <a href="detail.php?id=' . $id . '" class="button">See the Book</a>
            </div>
        </div>
        ';
    }
}