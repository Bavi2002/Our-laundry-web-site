
 <?php
    require_once(__DIR__ . "/config.php");

    

    $id = $_GET['id'];
    // var_dump($_GET['id']);
    // die;
    
    $price=$_POST['price']; 
    $type=$_POST['type'];
    $service=$_POST['service'];
    
    $query = "UPDATE prices
              SET price = '$price',
                  type = '$type',
                  service = '$service'
    
              WHERE id = $id";
    
    if ($conn->query($query) === TRUE) {
        // echo  "New recorded addded";
    
        header('Location:' . BASEURL . '/index.php');
         // Add_Product.php
    } else {
        header('Location:' . BASEURL . '/price_edit.php');
        // echo "Error inserting records:" . $conn->error;
    }
    
    ?>

