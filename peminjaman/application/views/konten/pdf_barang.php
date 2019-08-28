<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>

    <h3 style="text-align: left;"> Daftar Barang</h3>

	<table>
		<tr>
        	<th>No</th>
            <th>Nama Jenis</th>
            <th>Spesifikasi Barang</th>
            <th>Harga Barang</th>
            <th>Kondisi</th>
            <th>Supplier</th>
            <th>Tanggal Beli</th>
        </tr>

        <?php $no=1;
            foreach ($databarang->result() as $rows) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $rows->nm_jenis ?></td>
            <td><?= $rows->spek_barang ?></td>
            <td><?= "Rp." . number_format($rows->harga,2,',','.') ?></td>
            <td><?= $rows->kondisi ?></td>
            <td><?= $rows->nm_supplier ?></td>
            <td><?= $rows->tanggal_beli ?></td>
        <?php } ?>
	</table>

</body></html>