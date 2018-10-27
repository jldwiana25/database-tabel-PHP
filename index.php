<?php 
	include "koneksi.php";
?>
  <html>
  <head>
    <title>Menampilkan data dari database ke dalam bentuk tabel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <div class="container">
      <h2><center>DATA PESERTA</center></h2>
        <a href="tambah.php">Tambah Data</a>
      <table class="tabel" align="center">
        <tr>
          <th>id</th>
          <th>username</th>
          <th>password</th>
          <th>level</th>
          <th>fullname</th>
        </tr>
    </div>
          <?php 
            $qry = mysqli_query($conn,"SELECT * FROM tabe_kelas");
            while($data = mysqli_fetch_array($qry)){
          ?>
          <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['level']; ?></td>
            <td><?php echo $data['fullname']; ?></td> 
            <td>
              <a onclick="return confirm('Yakin untuk menghapus ?')"
              href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
              <a href="update.php?id=<?php echo $data['id']; ?>">Edit</a>
            </tr>
        <?php
        }
        ?>
</body>
</html>