<?php 
usleep(500000);
require 'function.php';

$pelajar =query($query);
?>
<table class="bg-primary mt-5 mx-auto text-center" border="1" cellpadding="10" cellspacing="0">
            <tr class="">
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>No Kad Pengenalan</th>
                <th>Tarikh Masuk</th>
                <th>Kelas</th>
                <th>Action</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($pelajar as $row) ?>
            <tr>
                <td> <?= $i; ?></td>
                 <td><img src="img/<?= $row ["gambar"]; ?>"></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["kad_pengenalan"]; ?></td>
                <td><?= $row["kelas"]; ?></td>
                <td><?= $row["tarikh_masuk"]; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row ["id"]?>">Ubah</a> |
                    <a href="delete.php?id=<?= $row ["id"]; ?>"onclick= "return confirm('yakin?');">delete</a>
                </td>
                
            </tr>
            <?php $i++; ?>
            <php endforeach; ?>
</table>