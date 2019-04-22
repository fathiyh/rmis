<?php

?>

<h2>PRODUK</h2>

Kode: <?php echo $produk->kode ?>
<br/>
Nama Produk: <?php echo $produk->nama ?>
<br/>
Harga: <?php echo $produk->harga ?>
<br/>
Status: <?php echo $produk->getStatus() ?>