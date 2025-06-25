<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="heading">Questions</h1>
            <?php
            include("/Php/www/Discuss_Project/common/db.php");
            if (isset($_GET['c-id'])) {
                $query = "select * from questions where category_id= '$cid'";
            } elseif (isset($_GET['u-id'])) {
                $query = "select * from questions where user_id= '$uid'";
            } elseif (isset($_GET['Latest'])) {
                $query = "select * from questions order by id desc";
            } else {
                $query = "select * from questions";
            }
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
        <div class="col-4">
            <?php
            include("./client/categoryList.php");
            ?>
        </div>
    </div>
</div>