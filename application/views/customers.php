<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Customers</title>
</head>

<body>
    <form method="post" action="<?= base_url() . 'customers/add' ?>">
        <label for="">Nama</label><br>
        <input type="text" name="name" id=""><br>
        <label for="">Email</label><br>
        <input type="email" name="email" id=""><br>
        <label for="">Tgl Lahir</label><br>
        <input type="date" name="birth" id=""><br>
        <input type="submit" value="Tambah Customers">
    </form>
<br>


    <table border="1">
        <thead class="bg-dark text-white">
            <tr>
                <td>Nama</td>
                <td>Email</td>
                <td>Tanggal Lahir</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $customer->name ?></td>
                    <td><?= $customer->email ?></td>
                    <td><?= $customer->birth ?></td>
                    <td><?= $customer->id ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<hr>
    <form method="post" action="<?= base_url() . 'barang/add' ?>">
        <label for="">Nama Barang</label><br>
        <input type="text" name="nama_barang" id=""><br>
        <label for="">Kode Barang</label><br>
        <input type="text" name="kode_barang" id=""><br>
        <input type="submit" value="Tambah Barang">
    </form>
    <br>

    <table border="1">
        <thead>
            <tr>
                <td>Nama</td>
                <td>Kode Barang</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barangs as $barang): ?>
                <tr>
                    <td><?= $barang->nama_barang ?></td>
                    <td><?= $barang->kode_barang ?></td>
                    <td><?= $barang->id ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>