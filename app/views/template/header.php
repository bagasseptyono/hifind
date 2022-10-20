<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body>

<div class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
<a class="navbar-brand nav-item ml-5" href="<?= BASEURL?>/home">HiFIND</a>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link " href="<?= BASEURL?>/barang">Kembalikan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= BASEURL?>/barang/hilang">Cari</a>
  </li>
  <li class="nav-item">
    <?=Functions::barangUser();?>
  </li>
  <li class="nav-item">
    <?=Functions::configLogin();?>
  </li>
</ul>
</div>
</div>
    
