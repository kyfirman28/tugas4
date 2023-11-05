<?php
// Membuat array multidimensi dengan data negara, ibukota, dan kode telepon
$data = array(
    array("Negara" => "Indonesia", "Ibukota" => "D.K.I. Jakarta", "Kode Telepon" => "+62"),
    array("Negara" => "Singapura", "Ibukota" => "Singapura", "Kode Telepon" => "+65"),
    array("Negara" => "Malaysia", "Ibukota" => "Kuala Lumpur", "Kode Telepon" => "+60"),
    array("Negara" => "Brunei", "Ibukota" => "Bandar Seri Begawan", "Kode Telepon" => "+673"),
    array("Negara" => "Thailand", "Ibukota" => "Bangkok", "Kode Telepon" => "+66"),
    array("Negara" => "Laos", "Ibukota" => "Vientiane", "Kode Telepon" => "+856"),
    array("Negara" => "Filipina", "Ibukota" => "Manila", "Kode Telepon" => "+63"),
    array("Negara" => "Myanmar", "Ibukota" => "Naypyidaw", "Kode Telepon" => "+95")
);

// Urutkan array berdasarkan negara
usort($data, function($a, $b) {
    return $a["Negara"] <=> $b["Negara"];
});

// Membuat tabel untuk menampilkan data
echo "<table border='1'>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>".$row["Negara"]."</td>";
    echo "<td>".$row["Ibukota"]."</td>";
    echo "<td>".$row["Kode Telepon"]."</td>";
    echo "</tr>";
}
echo "</table>";
?>