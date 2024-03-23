<!DOCTYPE html>
<html>

<head>

  <title>Customer</title>
  <?php require_once '../MODEL/db_connect.php'; ?>

</head>

<body>



  <?php
  $connection = db_connect();
  ?>
  <h1 style="text-align: center;">Admin Inventory</h1>
  <table id="table" class="zui-table" bgcolor="blue">
    <thead>
      <tr>
        <th>Transport Category</th>
        <th>Name</th>
        <th>Color </th>
        <th>Type</th>
        <th>Model</th>
        <th>Fuel</th>
        <th>Engine Size</th>
        <th>Door Numbers</th>
        <th>Seat Number</th>
        <th>Price</th>
      </tr>
    </thead>

    <tbody>
      <?php
      $tcat = $tname = $tcolor = $type = $model = $fuel = $engineSize = $doorNum = $seatNum = $price = "";
      $sql = "SELECT * FROM transport";
      $stmt = $connection->prepare($sql);
      $response = $stmt->execute();
      if ($response) {
        $data = $stmt->get_result();
        if ($data->num_rows > 0) {
          while ($row = $data->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['tcat'] . "</td>";
            echo "<td>" . $row['tname'] . "</td>";
            echo "<td>" . $row['tcolor'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['fuel'] . "</td>";
            echo "<td>" . $row['engineSize'] . "</td>";
            echo "<td>" . $row['doorNum'] . "</td>";
            echo "<td>" . $row['seatNum'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
          }
        }

      }
      ?>
    </tbody>

  </table>


  <form name="Upload" action="uploadAction.php" method="POST" onsubmit="return isValidUpload(this);">
    <h2 class="active">Selected transport</h2>
    <fieldset>
      <label for="tcat"> transport Category:</label>
      <input type="text" id="cat" name="cat"><br><br>
      <label for="vname"> transport Name:</label>
      <input type="text" id="name" name="tname" value=""><br><br>
      <label for="color"> Color:</label>
      <input type="text" id="color" name="color" value=""><br><br>
      <label for="ttype"> Type: </label>
      <input type="text" id="ttype" name="ttype" value=""><br><br>
      <label for="model"> Model: </label>
      <input type="text" id="model" name="model" value=""><br><br>
      <label for="fuel"> Fuel Type: </label>
      <input type="text" id="fuel" name="fuel" value=""><br><br>
      <label for="engineSize"> Engine Size(CC): </label>
      <input type="text" id="engineSize" name="engineSize" value=""><br><br>
      <label for="doorNum"> Door Size: </label>
      <input type="text" id="doorNum" name="doorNum" value=""><br><br>
      <label for="seatNum"> Seat Number: </label>
      <input type="text" id="seatNum" name="seatNum" value=""><br><br>
      <label for="price"> Price: </label>
      <input type="text" id="price" name="price" value=""><br>

    </fieldset><br>

    <br><input type="Search" value="Search"><br>
    <br><input type="submit" value="Add"><br>
    <br><input type="submit" value="Delete"><br>
    <br><input type="submit" value="Submit"><br>

  </form>

  <br>

</body>

</html>