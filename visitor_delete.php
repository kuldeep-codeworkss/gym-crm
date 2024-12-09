<?php include("./header.php");
include_once('./session.php');
require_once('./db_config.php');


?>

<?php
$id = $_GET['id'];
$visitor_query = "DELETE FROM `visitor` WHERE VISITOR_ID ='$id'";
$visitor_data = mysqli_query($conn, $visitor_query);

if ($visitor_data) {
    ?>
<script>
alert('Record Deleted Sucessfully ...! 👍');
window.location.href = 'Visitors-list.php';
</script>
<?php } else {
    echo "<script>alert('Failed to Delete Record ...!');</script>";
} ?>


<?php include("./footer.php") ?>