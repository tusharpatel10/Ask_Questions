<h1 class="heading">Category List</h1>
<?php
include("./common/db.php");
$query = "select * from category";
$result = $conn->query($query);
foreach ($result as $row) {
    $category = ucfirst($row['category']);
    $id = $row['id'];
    echo "<div class='row questionList'>
        <h4><a class='link' href='?c-id=$id'>$category</a></h4>
        </div>";
}

?>