<?php include("./header.php");
include_once('./session.php');
require_once('./db_config.php');


// event delete 
$id = $_GET['id'];
$event_query = "DELETE FROM `events` WHERE id='$id'";
$event_data = mysqli_query($conn, $event_query);

if ($event_data) {
    ?>
    <script>
        alert('Record Deleted Sucessfully ...! 👍');
        window.location.href = 'Events-list.php';
    </script>
<?php } else {
    echo "<script>alert('Failed to Delete Record ...!');</script>";
} ?>
<?php include("./footer.php") ?>

<!-- // event delete  -->