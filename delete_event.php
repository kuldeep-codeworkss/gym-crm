<?php include("./header.php");
include_once('./session.php');
require_once('./db_config.php');
?>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Prepare and execute deletion query
    $stmt = $conn->prepare("DELETE FROM events WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Record Deleted Successfully!'); window.location.href = 'Events-list.php';</script>";
    } else {
        error_log("Delete Error: " . $stmt->error);
        echo "<script>alert('Failed to Delete Record!');</script>";
    }

    $stmt->close();
} else {
    echo "Invalid Request.";
}

// Close database connection
$conn->close();
?>



