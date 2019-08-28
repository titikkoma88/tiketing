<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<tr>
        	<th>ID User</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Level</th>
        </tr>

        <?php $no=1;
            foreach ($datauser->result() as $rows) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $rows->nama ?></td>
            <td><?= $rows->username ?></td>
            <td><?= $rows->email ?></td>
            <td><?= $rows->telp ?></td>
            <td><?= $rows->alamat ?></td>
            <td><?= $rows->level ?></td>
        <?php } ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>