<?php include("./header.php");
include_once('session.php');
require_once('db_config.php');
// echo $_GET['id'];
$id = $_GET['id'];
$event_query = "SELECT * FROM events WHERE id='$id'";
$event_data = mysqli_query($conn, $event_query);
// $totalvalue = mysqli_num_rows($event_data);
$result = mysqli_fetch_assoc($event_data);
?>

<div class="wrapper">
    <?php include("./Sidebar.php") ?>
    <?php include("./Navbar.php") ?>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex align-items-center justify-content-between">
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb">
                                <ol class="breadcrumb ps-0 mb-0 pb-0">
                                    <li class="breadcrumb-item"><a href="./Events-list.php">Events </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Events </li>
                                </ol>
                            </nav>
                        </div>
                        <a href="./Events-list.php"
                            class="btn btn-primary btn-sm d-flex align-items-center justify-content-between ms-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="ms-2">Back</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 mb-3 d-flex justify-content-between">
                    <h4 class="fw-bold d-flex align-items-center">Update Events <php echo $result[id] ?></php>
                    </h4>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <?php

                            if (isset($_POST['update_events'])) {

                                // Anti-bot check
                                if (isset($_POST['captcha']) && !empty($_POST['captcha'])) {
                                    die("Unauthorized access!");
                                }

                                date_default_timezone_set('Asia/Calcutta');
                                $date = date('Y-m-d H:i:s');

                                // Get input values
                                $event_name = htmlspecialchars($_POST['Event-name'], ENT_QUOTES);
                                $event_date = htmlspecialchars($_POST['Event-Date'], ENT_QUOTES);
                                $organized_by = htmlspecialchars($_POST['Organized-By'], ENT_QUOTES);
                                $winner_name = htmlspecialchars($_POST['Winner-Name'], ENT_QUOTES);
                                $winner_price = htmlspecialchars($_POST['Winner-price'], ENT_QUOTES);
                                $event_description = htmlspecialchars($_POST['Event-Description'], ENT_QUOTES);
                                $notification_date = date('Y-m-d', strtotime($event_date . ' -2 days'));

                                // Validate inputs
                                if (empty($event_name) || empty($event_date)) {
                                    die('All required fields must be filled out.');
                                }

                                // query for updating events
                                $stmt = $conn->prepare("UPDATE events  SET event_name = ?, event_date = ?, organized_by = ?, winner_name = ?, winner_price = ?, event_description = ?, notification_date = ?, Event_added_date = ? WHERE id = ?;");

                                if ($stmt) {
                                    $stmt->bind_param("ssssssssi", $event_name, $event_date, $organized_by, $winner_name, $winner_price, $event_description, $notification_date, $date, $id);

                                    // Execute the statement
                                    if ($stmt->execute()) {
                                        echo "<script>alert('Event Updated Successfully!'); 
                                        window.location.href='Events-list.php';</script>";
                                    } else {
                                        echo "<script>alert('Error updating event: " . $stmt->error . "');</script>";
                                    }

                                    // Close the statement
                                    $stmt->close();
                                } else {
                                    echo "Error preparing statement: " . $conn->error;
                                }
                            }
                            ?>

                            <form class="" action="" autocomplete="off" method="POST">
                                <!-- Basic Information -->
                                <div class="row g-3">
                                    <h5 class="fw-bold mb-3">Basic Information</h5>
                                    <div class="col-md-6 mb-3">
                                        <label for="Event-name" class="form-label fw-bold text-muted text-uppercase">
                                            Event Name</label>
                                        <input type="text" class="form-control" id="Event-name"
                                            placeholder="Enter Event Name" name="Event-name"
                                            value="<?php echo $result['event_name'] ?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Event-Date"
                                            class="form-label fw-bold text-muted text-uppercase">Event Date</label>
                                        <input type="text" required name="Event-Date"
                                            value="<?php echo $result['event_date'] ?>"
                                            class="form-control vanila-datepicker datepicker-input" id="Event-Date"
                                            placeholder="Event Date">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Organized-By"
                                            class="form-label fw-bold text-muted text-uppercase">Organized By</label>
                                        <input type="text" name="Organized-By" class="form-control"
                                            value="<?php echo $result['organized_by'] ?>" id="Organized-By"
                                            placeholder="Enter Organized By">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Winner-Name"
                                            class="form-label fw-bold text-muted text-uppercase">Winner Name</label>
                                        <input type="text" name="Winner-Name" class="form-control"
                                            value="<?php echo $result['winner_name'] ?>" id="Winner-Name"
                                            placeholder="Enter Winner Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Winner-price"
                                            class="form-label fw-bold text-muted text-uppercase">Winner price</label>
                                        <input type="text" name="Winner-price" class="form-control"
                                            value="<?php echo $result['winner_price'] ?>" id="Winner-price"
                                            placeholder="Enter Winner price">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="Event-Description"
                                            class="form-label fw-bold text-muted text-uppercase">Event
                                            Description</label>
                                        <textarea class="form-control" name="Event-Description" id="Event-Description"
                                            rows="3"
                                            placeholder="Enter Event Description"><?php echo $result['event_description'] ?></textarea>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-primary" type="submit" name="update_events">
                                        Update Event
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include("./footer.php") ?>