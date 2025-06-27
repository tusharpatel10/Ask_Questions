<nav class="navbar navbar-expand-sm">
    <div class="container">
        <a class="navbar-brand" href="./">
            <img src="/discuss_project/public/logo.png" alt="#img" width="180" srcset="">
        </a>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="./" aria-current="page">Home
                        <span class="visually-hidden">(current)</span></a>
                </li>
                <?php
                if ($_SESSION) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./server/request.php?logout=true">Logout (<b><?php echo ucfirst($_SESSION['user']['username']) ?></b>)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?ask=true">Ask a Questions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id'] ?>">My Questions</a>
                    </li>
                <?php }
                ?>
                <?php
                if (!$_SESSION) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?login=true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?signup=true">Singup</a>
                    </li>
                <?php }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="?Latest=true">Latest Question</a>
                </li>
            </ul>
        </div>
        <form class="d-flex" role="search">
            <input class="form-control me-2" name="search" type="search" placeholder="Search Questions" />
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
    </div>
</nav>