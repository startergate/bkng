<?php
  require("../config/config_root.php");
  require("../lib/db.php");
  require("../lib/codegen.php");
  require("../lib/adminchk2.php");

  if (!empty($_POST['name'])) {
    $name = $_POST['name'];
  } else {
    echo "<script>window.alert('이름이 입력되지 않았습니다..');</script>";
    echo "<script>window.location=('../add_creature.php');</script>";
    exit;
  }

  if (!empty($_POST['amount'])) {
    $amount = $_POST['amount'];
  } else {
    $amount = '0';
  }

  $conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
  $pid = generateRenStr(6);

  $sql = 'INSERT INTO account_data (pid,name,value) VALUES("'.$pid.'","'.$name.'", "'.$amount.'")';
  $result = mysqli_query($conn, $sql);

  $sql = "SELECT pid FROM account_data WHERE pid LIKE '".$pid."'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $udb = $pid.'_data';

  $sql = "CREATE TABLE $udb (amount INT NOT NULL, edittime DATETIME NOT NULL, hash VARCHAR(64) NOT NULL, status VARCHAR(1) NULL, PRIMARY KEY (hash), UNIQUE INDEX hash_UNIQUE (hash ASC)) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8";
  $result = mysqli_query($conn, $sql);

  $hash = hash("sha256","default");
  $sql = "INSERT INTO $udb (amount,edittime,hash,status) VALUES ('$amount',now(),'$hash','1')";
  $result = mysqli_query($conn, $sql);

  $hash_default = $hash;

  $sql = "SELECT amount,edittime FROM $udb WHERE hash LIKE '".$hash_default."'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $hash1 = $row['amount'];
  $hash2 = $row['edittime'];
  $hash3 = $hash1.$hash2;
  $hash4 = hash("sha256",$hash3);

  $sql = "UPDATE $udb SET hash='$hash4' WHERE hash='".$hash_default."'";
  $result = mysqli_query($conn, $sql);

  $hash_name = $hash2."_new_".$pid;
  $sql = "INSERT INTO hash_data (hash,name) VALUES ('$hash4','$hash_name')";
  $result = mysqli_query($conn, $sql);

  echo "<script>window.alert('추가가 완료되었습니다.');</script>";
  echo "<script>window.location=('../admin.php');</script>";
  exit;
?>
