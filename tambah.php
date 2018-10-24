<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Julia Dwiana</title>
</head>
<body>
    <form method="post">
        <table>
            <tr><td>Id</td><td><input type="number" name="id"></td></tr>
            <tr><td>Username</td><td><input type="text" name="username"></td></tr>
            <tr><td>Password</td><td><input type="password" name="password"></td></tr>
            <tr><td>Level</td><td>
            <select name="level">
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
            </select>
            <tr><td>Fullname</td><td><input type="text" name="fullname"></td></tr>
            <tr><td colspan="2"><input type="submit" name="simpan" value="Simpan"></td></tr>
        </table>
    </form>
    <?php 
 		if (isset($_POST['simpan'])) {
 			$id = $_POST['id'];
 			$username = $_POST['username'];
 			$password = $_POST['password'];
 			$level = $_POST['level'];
 			$fullname = $_POST['fullname'];
 			$tambah = mysqli_query($conn, "INSERT INTO tabe_kelas(id,username,password,level,fullname)VALUES('$id','$username','$password','$level','$fullname')");
 		if ($tambah) {
 			?>
             <script type="text/javascript">
 				alert('Tamabah Data Berhasil ');
 				document.location.href="index.php";
 			</script>
 			<?php
 		}
 		else{
 			echo "yahh gagal";
 		}
 		}
 	 ?>
</body>
</html>