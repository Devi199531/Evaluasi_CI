<form action="update " method="post">
    <div class="form-group">
        <label>Judul Buku</label>
        <input type="hidden" value="<?php echo $provinsi['id_prov']; ?>" name="id">
        <input type="text" value="<?php echo $provinsi['name']; ?>" name="judul" class="form-control" placeholder="Judul Buku">
    </div>
    <button type="submit" name="add" value="add" class="btn btn-primary">Submit</button>

</form>