<div class="container">
    <h1 class="heading">Questions</h1>
    <div class="col-8">
        <?php
        include("/Php/www/Discuss_Project/common/db.php");
        $query = "select * from questions";
        $result = $conn->query($query);
        foreach ($result as $row) {
            $title = $row['title'];
            $id = $row['id'];
            echo "<div class='row questionList'>
        <h4><a href='?q-id=$id'>$title</a></h4>
        </div>";
        }
        ?>
    </div>
</div>