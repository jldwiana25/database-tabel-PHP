<?php
    	include "koneksi.php";
        $qry = mysqli_query($conn,"SELECT * FROM tabe_kelas");
        $data = mysqli_fetch_array($qry);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
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
            <tr><td colspan="2"><input type="submit" name="edit" value="Edit"></td></tr>
        </table>
    </form>
    <?php 
 		if (isset($_POST['edit'])) {
 			$id = $_POST['id'];
 			$username = $_POST['username'];
 			$password = $_POST['password'];
 			$level = $_POST['level'];
 			$fullname = $_POST['fullname'];
 			$update = mysqli_query($conn, "UPDATE data SET id='$id',username='$username',password='$password',level='$level',fullname='$fullname' WHERE id='$id'");
 		if ($update) {
 			?>
             <script type="text/javascript">
 				alert('Edit Data Berhasil');
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