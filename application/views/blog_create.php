<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>blog saya</title>
</head>
<body>
	<h1>Tulis Artikel Baru</h1>
	<form action="<?php echo base_url("blog/create_process"); ?>" method="POST">
      <label>
        Judul: <input type="text" name="judul" autofocus>
      </label>
      <br>
      <label>
        Konten:<br>
        <textarea name="konten"></textarea>
      </label>
      <br>
      <input type="submit" value="simpan">
    </form>

</body>
</html>
