<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
        	<th>No</th>
            <th>Nama Peminjam</th>
            <th>Nama Barang</th>
            <th>Kondisi</th>
            <th>Tanggal Kejadian</th>
            <th>Tanggal Diganti</th>
            <th>Keterangan</th>
        </tr>

        <?php $no=1;
            foreach ($datagt->result() as $rows) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $rows->nama ?></td>
            <td><?= $rows->spek_barang ?></td>
            <td><?= $rows->kondisi ?></td>
            <td><?= $rows->tgl ?></td>
            <td><?= $rows->tgl_bayar_gt ?></td>
            <td>
                <?php 
                if($rows->status_gt === '0'){
                    echo "<i style='color:red;'>Belum diganti</i>";
                }elseif($rows->status_gt === '1'){
                    echo "<i>Sudah diganti</i>";
                } 
                ?>
            </td>
        <?php } ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>