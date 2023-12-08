<html>
<head>
    <title>Buku Kontak Online</title>
</head>
<body>
    <h1 style="color: chartreuse;">Buku Kontak Online v1.0 (Beta)</h1>
<!--    <h2>Beranda</h2>-->
    <h2><?php echo $this->_data['subTitle']; ?></h2>
    <form method="post" action="index.php">
        <input type="hidden" name="id" value="<?php echo '' ?>">
        <table>
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input name="nama" type="text" value="<?php echo ''; ?>"/></td>
            </tr>
            <tr>
                <td><label for="nomor_telepon">No. Telepon:</label></td>
                <td><input name="nomor_telepon" type="tel" value="<?php echo ''; ?>"/></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input name="email" type="email" value="<?php echo ''; ?>"/></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><textarea name="alamat"><?php echo ''; ?></textarea></td>
            </tr>
            <tr>
                <td><input name="submit" type="submit" value="<?php echo 'Simpan'; ?>"></td>
            </tr>
        </table>
    </form>
    <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>No. Telepon</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($this->_data['kontakList'] as $kontak) { ?>
                <tr>
                    <td><?php echo $kontak->getId(); ?></td>
                    <td><?php echo $kontak->getNama(); ?></td>
                    <td><?php echo $kontak->getNomorTelepon(); ?></td>
                    <td><?php echo $kontak->getEmail(); ?></td>
                    <td><?php echo $kontak->getAlamat(); ?></td>
                    <td>
                        <a href="?aksi=hapus&id=<?php echo $kontak->getId(); ?>">Hapus</a>
                        <a href="?aksi=ubah&id=<?php echo $kontak->getId(); ?>">Ubah</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </form>
    <style type="text/css">
        table, td, tr{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</body>
</html>