<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
        	<th>No</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Jumlah Barang</th>
        </tr>

        <?php $no=1;
            foreach ($datasupplier->result() as $rows) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $rows->nm_supplier ?></td>
            <td><?= $rows->telp_supplier ?></td>
            <td><?= $rows->alamat ?></td>
            <td>
                <?php
                    $jml_brg = "SELECT COUNT(*) jml FROM barang WHERE id_supplier = {$rows->id_supplier}";
                    $row_barang = $this->db->query($jml_brg)->row(); {
                ?>
                  <?= $row_barang->jml; ?>
                <?php } ?>
            </td>
        <?php } ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>