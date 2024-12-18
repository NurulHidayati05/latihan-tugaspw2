<!DOCTYPE html>
<html>
<head>
  <title>Daftar Negara ASEAN</title>
</head>
<body>
  <h1>Daftar Negara ASEAN</h1>

  <h2>ASEAN Awal</h2>
  <ul>
    <?php
      $aseanAwal = array(
        "Indonesia",
        "Singapura",
        "Malaysia",
        "Brunei",
        "Thailand"
      );

      foreach ($aseanAwal as $negara) {
        echo "<li>$negara</li>";
      }
    ?>
  </ul>

  <h2>ASEAN Baru</h2>
  <ul>
    <?php
      $aseanBaru = array(
        "Indonesia",
        "Singapura",
        "Malaysia",
        "Brunei",
        "Thailand",
        "Laos",
        "Filipina",
        "Myanmar"
      );

      foreach ($aseanBaru as $negara) {
        echo "<li>$negara</li>";
      }
    ?>
  </ul>

</body>
</html>