<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog saya</title>
</head>
<body>
	<h1>Daftar Artikel</h1>
	<a href="<?php echo base_url('blog/create'); ?>"><button>Tambah</button></a>
	<?php foreach ($posts as $post) : ?>
	<h2><?php echo $post->judul; ?></h2>
	<a href="<?php echo base_url('blog/delete/').$post->id; ?>">hapus</a>
	<a href="<?php echo base_url('blog/edit/').$post->id; ?>">edit</a>
	<!-- <form action="<?php echo base_url('blog/delete/') . $post->id; ?>">
	<input type="submit" value="hapus"> 
	</form> -->
	<p><?php echo $post->konten; ?></p>
	<?php endforeach ?>
</body>
</html>

