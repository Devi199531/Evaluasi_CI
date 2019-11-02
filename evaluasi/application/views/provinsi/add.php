<?= validation_errors() ?>

<form action="store" method="post">
    <div class="form-group">
        <label>Nama Kota</label>
        <input type="text" name="name" class="form-control" placeholder="Nama Kota">
    </div>
    <button type="submit" value="add" class="btn btn-primary">Submit</button>
</form>
