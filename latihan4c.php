<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN dan Ibukotanya</title>
</head>
<body>
    <?php
    // Membuat associative array negara ASEAN dan ibukotanya
    $asean_negara = array(
        "Indonesia" => "D.K.I. Jakarta",
        "Singapura" => "Singapura",
        "Malaysia" => "Kuala Lumpur",
        "Brunei" => "Bandar Seri Begawan",
        "Thailand" => "Bangkok",
        "Laos" => "Vientiane",
        "Filipina" => "Manila",
        "Myanmar" => "Naypyidaw"
    );

    // Menampilkan daftar negara ASEAN dan ibukotanya
    echo "<h3>Daftar Negara ASEAN dan Ibukotanya:</h3>";
    echo "<ul>";
    foreach ($asean_negara as $negara => $ibukota) {
        echo "<li> $negara: $ibukota</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>