<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Provinsi</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($provinsi as $value) {
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $value['name'] ?></td>
                <td>
                    <a href="provinsi/edit/<?= $value['id_prov'] ?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                    <a href="?action=delete&id=<?= $value['id_prov'] ?>" onclick ="return confirm('Yakin untuk menghapus data ini ?')" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php $i++;
        }
        ?>
    <tbody>
</table>