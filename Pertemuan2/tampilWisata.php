<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

// Ambil data JSON dari localhost
$send = curl("http://localhost/rekayasaweb/pertemuan2/getWisata.php");

// Ubah JSON ke array asosiatif
$data = json_decode($send, TRUE);

// Tampilkan dalam bentuk tabel HTML
echo "<table border='1' cellspacing='0' cellpadding='8'>";
echo "<tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
      </tr>";

foreach($data as $row){
    echo "<tr>";
    echo "<td>".$row['kota']."</td>";
    echo "<td>".$row['landmark']."</td>";
    echo "<td>".$row['tarif']."</td>";
    echo "</tr>";
}

echo "</table>";
?>