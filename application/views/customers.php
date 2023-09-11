<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td>Nama</td>
                <td>Email</td>
                <td>Tanggal Lahir</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer):?>
            <tr>
                <td><?=$customer->name?></td>
                <td><?=$customer->email?></td>
                <td><?=$customer->birth?></td>
                <td><?=$customer->id?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>