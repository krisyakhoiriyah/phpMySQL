<?php
  $sql = "CREATE TABLE buku_tamu(
    ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(200) NOT NULL,
    ALAMAT VARCHAR(50) NOT NULL,
    ISI TEXT)";

    if (mysqli_query($conn,$sql)){
      echo "Table berhasil dibuat";
    } else{
      echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
 ?>
