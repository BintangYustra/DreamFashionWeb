<div class="container">
    <div class="row">
        <div>
            <h3 class="mt-4" style="font-family: Boldonse, system-ui;">User List</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>TELEPON</th>
                        <th>PASSWORD</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($dreamfashiondb as $key => $row) : ?>
                    <tr>
                        <td><?php echo $row['id_user'] ?></td>
                        <td><?php echo $row['nama_user'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['no_telp'] ?></td>
                        <td><?php echo $row['password'] ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>