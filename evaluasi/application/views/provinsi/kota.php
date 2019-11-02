<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kota</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($city as $value) {
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $value['name'] ?></td>
                <td>
                    <a href="provinsi/edit/<?= $value['id_city'] ?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                    <a href="?action=delete&id=<?= $value['id_city'] ?>" onclick ="return confirm('Yakin untuk menghapus data ini ?')" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php $i++;
        }
        ?>
    <tbody>
</table>