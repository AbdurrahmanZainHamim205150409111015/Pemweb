<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>blog saya</title>
</head>
<body>
	<h1>Edit konten</h1>
	
	<form action="<?php echo base_url("blog/edit_process/"); ?>" method="POST">
			<input type="hidden" name="id" value="<?php foreach($edits as $edit) echo $edit->id; ?>">
      <label>
        Judul: <input type="text" name="judul" value="<?php foreach($edits as $edit) echo $edit->judul; ?>" autofocus>
      </label>
      <br>
      <label>
        Konten:<br>
        <textarea name="konten" style="resize:none" cols="24" rows="4"><?php foreach($edits as $edit) echo $edit->konten; ?></textarea>
      </label>
      <br>
      <input type="submit" value="simpan">
    </form>

</body>
</html>
