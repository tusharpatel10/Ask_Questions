<div class="container ">
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
            } elseif (isset($_GET['search'])) {
                $query = "select * from questions where `title` LIKE '%$search%'";
            } else {
                $query = "select * from questions";
            }
            $result = $conn->query($query);
            foreach ($result as $row) {
                $title = $row['title'];
                $id = $row['id'];
                echo "<div class='row questionList'>
        <h4 class='question'><a class='link' href='?q-id=$id'>$title</a>";
                echo $id ? "<a  href='./server/request.php?delete=$id'><i class='fa-solid fa-xmark delete'></i></a>" : NULL;
                echo "</h4></div>";
            }
            ?>
        </div>
        <div class="col-4 main">
            <?php
            include("./client/categoryList.php");
            ?>
        </div>
    </div>
</div>