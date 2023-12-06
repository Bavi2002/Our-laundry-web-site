<?php
    
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
    h1{
        text-align:center;
      
    }
    .btn {
      padding: 12px 20px;
      background-color: lightblue;
      color: black;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      margin-top: 3%;
      margin-left: 3%;
      font-size: medium;
    }

    .table {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid #ccc;
      margin-top: 5%;
    }

    .table th,
    .table td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: center;
    }

    .btn1 {
      padding: 12px 20px;
      background-color: #0377fc;
      color: black;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      margin-top: 3%;
      margin-left: 3%;
      font-size: medium;
    }

    .btn2 {
      padding: 12px 20px;
      background-color: #c71239;
      color: black;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      margin-top: 3%;
      margin-left: 3%;
      font-size: medium;
    }
  </style>
</head>
<body>
    <h1 >ADMIN PAGE</h1>
<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"> User ID </th>
          <th scope="col"> First name </th>
          <th scope="col"> Last name </th>
          <th scope="col"> Address </th>
          <th scope="col"> Contactno </th>
          <th scope="col"> E-mail </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "select * from users1";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $userid = $row['id'];
            $firstname = $row['fname'];
            $lastname = $row['lname'];
            $address=$row['address'];
            $contactno=$row['contact'];
            $email = $row['email'];
            echo '<tr>
          <th scope="row">' . $userid . '</th>
          <td>' . $firstname . '</td>
          <td>' . $lastname . '</td>
          <td>' . $address . '</td>
          <td>' . $contactno . '</td>
          <td>' . $email . '</td>
          <td>
          <button class="btn1"><a href="Update1.php? updateid=' . $userid . '"> update </a></button>
          <button class="btn2"><a href ="deleteadmin.php? deleteid=' . $userid . '"> delete </a></button>
        </td>
        </tr>';
          }
        }
        ?>
      </tbody>
    </table>
  </div>

    
</body>
</html>