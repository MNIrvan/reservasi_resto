<?php
include('koneksi.php');

if (isset($_POST['login'])){
    $username = (!empty($_POST['username'])) ? $_POST['username'] : "";
    $pass     = (!empty($_POST['pass'])) ? $_POST['pass'] : "";

    $query = "SELECT * FROM user WHERE username ='$username' AND pass='$pass'";
    $result = mysqli_query($conn, $query);
        $fetchResult = mysqli_fetch_assoc($result);
        $rowcount=mysqli_num_rows($result);
        $role = $fetchResult['role'];

    if($rowcount>0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
    }

        if ($role == 'master') {
            echo "<script>alert('Anda berhasil login sebagai Admin'); window.location='home.php'</script>";
        } elseif ($role == 'admin') {
            echo "<script>alert('Anda berhasil login sebagai Customer'); window.location='user/home.php'</script>";
        } elseif ($role == '') {
            echo "<script>alert('Role tidak dikenali'); window.location='login.php'</script>";
        }
    } else {
        echo "Anda gagal login<br>";
        echo "<a href='login.php'>Login Form</a>";
    } 




    mysqli_close($conn);

?>