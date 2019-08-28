<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
        	<th>No</th>
            <th>Nama Jenis</th>
            <th>Jumlah</th>
        </tr>

        <?php $no=1;
            foreach ($datajenis->result() as $rows) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $rows->nm_jenis ?></td>
            <td>
                <?php
                    $jml_brg = "SELECT COUNT(*) jml FROM barang WHERE id_jenis = {$rows->id_jenis}";
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