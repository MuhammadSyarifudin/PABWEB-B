<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh URL</title>
</head>
<body>
    <h1>Contoh URL</h1>
    <p>1.Base_url()</p>
    <?php echo base_url() ?>
    <br>
    <p>Ini ANAK SMK</p>
    <img src="<?php echo base_url('assets/alamah.jpeg') ?>" width="200px" height="150px">
    <br>
    <p>2. site_url()</p>
    <?php echo site_url() ?>
    <br>
    <p><a href="<?php echo site_url('halaman')?>">ke Halaman View</a>
    </p>
    <br>
    <?php echo anchor('url/detail/1','ke halaman detail') ?>
    <br>
    <?php echo anchor('url/blank', 'ke halaman blank') ?>
</body>
</html>