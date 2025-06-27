<div class="container main">
    <h1 class="heading">Signup</h1>
    <form action="/Discuss_Project/server/request.php" method="post">
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="username" class="form-label whiteText">User Name</label>
            <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId" />
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="email" class="form-label whiteText">User Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" />
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="password" class="form-label whiteText">User Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId" />
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="address" class="form-label whiteText">User Address</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="" aria-describedby="helpId" />
        </div>
        <div class="col-6 offset-sm-3">
            <button type="submit" class="btn btn-primary" name="signup">Signup</button>
        </div>

    </form>
</div>