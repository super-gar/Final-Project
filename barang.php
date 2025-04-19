<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Barang Daur Ulang</title>
  <style>
    table {
      border-collapse: collapse;
      width: 80%;
      margin: 20px auto;
    }
    th, td {
      border: 1px solid #999;
      padding: 8px;
      text-align: center;
    }
    th {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>
<body>

<h2 style="text-align:center;">Daftar Barang Daur Ulang</h2>

<table>
  <tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Kategori</th>
    <th>Berat (Kg)</th>
    <th>Tanggal</th>
  </tr>

  <?php
  $sql = "SELECT * FROM barang";
  $result = mysqli_query($conn, $sql);
  $no = 1;

  while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>".$no++."</td>";
      echo "<td>".$row['nama_barang']."</td>";
      echo "<td>".$row['kategori']."</td>";
      echo "<td>".$row['berat']."</td>";
      echo "<td>".$row['tanggal']."</td>";
      echo "</tr>";
  }
  ?>
</table>

</body>
</html>
