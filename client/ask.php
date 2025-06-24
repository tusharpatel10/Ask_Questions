<div class="container">
    <h1 class="heading">Ask Questions</h1>
    <form action="/Discuss_Project/server/request.php" method="post">
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" />
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="desc" class="form-label">Description</label>
            <textarea type="text" name="desc" id="desc" class="form-control"></textarea>
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="category" class="form-label">Category</label>
            <select class="form-control" name="category" id="category">
                <option value="">Select</option>
            </select>
        </div>

        <div class="col-6 offset-sm-3">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>

    </form>
</div>