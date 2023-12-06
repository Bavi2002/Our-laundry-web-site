


 <?php
require_once(__DIR__ . '/config.php');

$id = $_GET['id'];

$query = "DELETE FROM prices WHERE id = $id";

if ($conn->query($query) === TRUE) {
    header('Location:' . BASEURL . '/index.php');
    // Remove the unnecessary redirect below
    // header('Location: ' . BASEURL . '/laundry/index.php');
} else {
    header('Location: ' . BASEURL . '/price_delete.php');
}
?>
