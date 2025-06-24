<div class="container">
    <h1 class="heading">Login</h1>
    <form action="/Discuss_Project/server/request.php" method="post">
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="email" class="form-label">User Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" />
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="password" class="form-label">User Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId" />
        </div>

        <div class="col-6 offset-sm-3">
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </div>

    </form>
</div>