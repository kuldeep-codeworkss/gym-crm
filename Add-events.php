<?php include("./header.php");
include_once('session.php');
require_once('db_config.php');

if (isset($_POST['add_events'])) {

    // Anti-bot check
    if (isset($_POST['captcha']) && !empty($_POST['captcha'])) {
        die("Unauthorized access!");
    }

    date_default_timezone_set('Asia/Calcutta');
    $date = date('Y-m-d H:i:s');

    // Get input value
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

    // Insert into database
    $stmt = $conn->prepare("
        INSERT INTO events (event_name, event_date, organized_by, winner_name, winner_price, event_description, notification_date, Event_added_date)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ");

    if ($stmt->execute([$event_name, $event_date, $organized_by, $winner_name, $winner_price, $event_description, $notification_date, $date])) {
        echo "<script>alert('Event Added Successfully!'); 
        window.location.href='Events-list.php';</script>";
    } else {
        echo "<script>alert('Error adding event: {$stmt->errorInfo()[2]}');</script>";
    }
}
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
                                    <li class="breadcrumb-item"><a href="#">Events</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Events</li>
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
                    <h4 class="fw-bold d-flex align-items-center">Add Events</h4>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="" method="post" enctype="multipart/form-data" autocomplete="on">
                                <!-- Basic Information -->
                                <div class="row g-3">
                                    <h5 class="fw-bold mb-3">Basic Information</h5>
                                    <div class="col-md-6 mb-3">
                                        <label for="Event-name" class="form-label fw-bold text-muted text-uppercase">
                                            Event Name</label>
                                        <input type="text" required class="form-control" id="Event-name"
                                            placeholder="Enter Event Name" name="Event-name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       
                                        <label for="Event-Date"
                                            class="form-label fw-bold text-muted text-uppercase">Event Date</label>
                                        <input type="text" id="Event-Date" name="Event-Date" required
                                            class="form-control vanila-datepicker datepicker-input"
                                            placeholder="Date">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Organized-By"
                                            class="form-label fw-bold text-muted text-uppercase">Organized By</label>
                                        <input type="text" name="Organized-By" class="form-control" id="Organized-By"
                                            placeholder="Enter Organized By">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Winner-Name"
                                            class="form-label fw-bold text-muted text-uppercase">Winner Name</label>
                                        <input type="text" name="Winner-Name" class="form-control" id="Winner-Name"
                                            placeholder="Enter Winner Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Winner-price"
                                            class="form-label fw-bold text-muted text-uppercase">Winner price</label>
                                        <input type="text" name="Winner-price" class="form-control" id="Winner-price"
                                            placeholder="Enter Winner price">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="Event-Description"
                                            class="form-label fw-bold text-muted text-uppercase">Event
                                            Description</label>
                                        <textarea class="form-control" name="Event-Description" id="Event-Description"
                                            rows="3" placeholder="Enter Event Description"></textarea>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-primary" type="submit" name="add_events">
                                        Add Event
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