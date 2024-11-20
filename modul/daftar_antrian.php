<style>
h2{
    text-align: center;
    color : #333;
    font-weight: bold ;
    font-style: algerian;
}
table{
    border-collapse: collapse;
    width: 90%;
    margin: auto ;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0, 0,0, 0, 1);
    border-radius: 10px;
    border: black solid 1px;
}
th,td{
    padding: 12px 15px;
    text-align: left;
    border: black solid 1px;
    text-align: center;
}
th{
    background-color: #AF1740;
    color:white;
    border: black solid 1px;
}
tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9f5e9;
        }
        td a {
            text-decoration: none;
            color: #605678;
            font-weight: bold;
        }
        td a:hover {
            color: #3a9a40;
        }
        td:last-child {
            text-align: center;
        }
        .no-data {
            text-align: center;
            color: #888;
            margin-top: 20px;
        }
</style>

<?php
include "../lib/koneksi.php";

$sql = "SELECT * FROM antrian";
$stmt = $conn->prepare($sql);
$stmt->execute();
// Menampilkan hasil query
echo "<h2>Daftar Antrian Pasien</h2>";
echo "<table border='1'>
<tr>
<th>No</th>
<th>Nama Pasien</th>
<th>Nomor antrian</th>
<th>Waktu Kedatangan</th>
<th>Status</th>
<th>Aksi</th>
</tr>";
// ambil semua data hasil query
$antrian = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($antrian) > 0) {
    $no = 1;
    foreach ($antrian as $row) {
        echo "<tr>
        <td>".$no."</td>
        <td>".$row["name_pasien"]."</td>
        <td>".$row["nomor_antrian"]."</td>
        <td>".$row["waktu_kedatangan"]."</td>
        <td>".$row["status"]."</td>
        <td><a href='ubah_status.php?id=".$row["id"]."'>Ubah Status</a> | <a href='hapus_antrian.php?id=".$row["id"]."'>Hapus</a></td>
        </tr>";
        $no++;
    }
    echo "</table>";
} else{
    echo "Tidak ada antrian";
}
$conn = null; 
?>
