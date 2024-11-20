<?php
include '../lib/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pasien = $_POST['nama_pasien'];
    $nomor_antrian = $_POST['nomor_antrian'];
    $waktu_kedatangan = $_POST['waktu_kedatangan'];
    $sql = "INSERT INTO antrian (name_pasien, nomor_antrian, waktu_kedatangan) VALUES (:nama_pasien, :nomor_antrian, :waktu_kedatangan)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nama_pasien', $nama_pasien);
    $stmt->bindParam(':nomor_antrian', $nomor_antrian);
    $stmt->bindParam(':waktu_kedatangan', $waktu_kedatangan);

    if ($stmt->execute()) {
        header("Location: daftar_antrian.php");
    } else {
        echo "Error: Gagal menambahkan data.";
    }
}
?>

<form class="form" method="POST">
      <div class="subtitle">TAMBAH DAFTAR ANTRIAN</div>
      <div class="input-container ic1">
        <input id="Nama Pasien" class="input" type="text" name ="nama_pasien" placeholder=" " />
        <div class="cut"></div>
        <label for="namapasien" class="placeholder">Nama Pasien</label>
      </div>
      <div class="input-container ic2">
        <input class="input" name ="nomor_antrian" type="number" placeholder=" " />
        <div class="cut"></div>
        <label for="nomorantrian" class="placeholder">Nomor Antrian</label>
      </div>
      <div class="input-container ic2">
        <input class="input" type="datetime-local" name ="waktu_kedatangan" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="waktukedatangan" class="placeholder">Waktu Kedatangan</label>
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>
    </form>




    <style>
body {
  align-items: center;
  display: flex;
  justify-content: center;
  height: 100vh;
}

.form {
  background-color:  #AF1740    ;
  border-radius: 1px;
  height: 500px;
  padding: 20px;
  width: 320px;
}

.title {
  color: #eee;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
}

.subtitle {
  color: #eee;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
}

.input-container {
  height: 50px;
  position: relative;
  width: 100%;
}

.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
}

.input {
  background-color: pink;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}

.cut {
  border-radius: 10px;
  height: 20px;
  left: 20px;
  position: absolute;
  top: -20px;
  transform: translateY(0);
  transition: transform 200ms;
  width: 76px;
}

.cut-short {
  width: 50px;
}

.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
  transform: translateY(8px);
}

.placeholder {
  color:black;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: black;
}

.input:focus ~ .placeholder {
  color: black;
}

button {
  background-color: black;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
  // outline: 0;
  text-align: center;
  width: 100%;
}


</style>
