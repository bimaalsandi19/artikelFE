<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-2">
                <h3>Form Add Artikel</h3>
                <form action="create_post.php" method="post">
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="title" name="title" required minlength="20">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" required minlength="200"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="category" name="category" required minlength="3">
                    </div>
                </div>
                <input type="hidden" id="created_at" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
                <input type="hidden" id="updated_at" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select id="status" name="status" required class="form-control">
                            <option selected>Pilih Status</option>
                            <option value="Publish">Publish</option>
                            <option value="Draft">Draft</option>
                            <option value="Trash">Thrash</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>