<?php
if(isset($_POST["login.php"])){
  $nip = $_POST["nip"];
  $password = $_POST["password"];

  $ambil = $config->("SELECT * FROM dosen WHERE nip_dosen = '$nip' AND password_dosen = '$password'");
  $cekdosen = $ambil->fetch_assoc();

  if(empty($cekdosen)){
    echo "<script>alert('Gagal, akun tidak valid')</script>";
    echo "<script>location:'login.php'</script>";
    exit();
  }
    
  
}
?>
