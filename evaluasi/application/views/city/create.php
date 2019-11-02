<?= validation_errors() ?>

<form action="store" method="post">
    <div class="form-group">
        <label>Nama Provinsi</label>
        <input type="text" name="name" class="form-control" placeholder="Nama Provinsi">
    </div>
    <button type="submit" value="add" class="btn btn-primary">Submit</button>
</form>
