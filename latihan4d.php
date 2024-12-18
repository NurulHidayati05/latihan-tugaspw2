<!DOCTYPE html>
<html>
<head>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    
    }

    th {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>
<body>


<table>
  <tr>
    <th>Negara</th>
    <th>Ibukota</th>
    <th>Kode Telepon</th>
  </tr>
  <?php
    $asean_countries = array(
      array("Indonesia", "D.K.I. Jakarta", "+62"),
      array("Singapura", "Singapura", "+65"),
      array("Malaysia", "Kuala Lumpur", "+60"),
      array("Brunei", "Bandar Seri Begawan", "+673"),
      array("Thailand", "Bangkok", "+66"),
      array("Laos", "Vientiane", "+856"),
      array("Filipina", "Manila", "+63"),
      array("Myanmar", "Naypyidaw", "+95")
    );

    foreach ($asean_countries as $country) {
      echo "<tr>";
      echo "<td>" . $country[0] . "</td>";
      echo "<td>" . $country[1] . "</td>";
      echo "<td>" . $country[2] . "</td>";
      echo "</tr>";
    }
  ?>
</table>

</body>
</html>