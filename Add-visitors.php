<?php include("./header.php");
include_once('session.php');
require_once('db_config.php');

if (isset($_POST['add_visitor'])) {

    // Anti-bot check
    if (isset($_POST['captcha']) && !empty($_POST['captcha'])) {
        die("Unauthorized access!");
    }

    date_default_timezone_set('Asia/Calcutta');
    $date = date('Y-m-d H:i:s');

    // Get input value
    $visitor_name = htmlspecialchars($_POST['Visitor-name'], ENT_QUOTES);
    $visitor_date = htmlspecialchars($_POST['Visitor-Date'], ENT_QUOTES);
    $visitor_phone = htmlspecialchars($_POST['Visitor-phone'], ENT_QUOTES);
    $visitor_gender = htmlspecialchars($_POST['Visitor-gender'], ENT_QUOTES);
    $visitor_email = htmlspecialchars($_POST['Visitor-email'], ENT_QUOTES);
    $visitor_age = htmlspecialchars($_POST['Visitor-age'], ENT_QUOTES);
    $visitor_status = htmlspecialchars($_POST['Visitor-status'], ENT_QUOTES);
    $visitor_notification	 = date('Y-m-d', strtotime($visitor_date . ' +7 days'));

    // Validate inputs
    if (empty($visitor_name) || empty($visitor_phone) || empty($visitor_status)) {
        die('All required fields must be filled out.');
    }

    // Insert into database
    $stmt = $conn->prepare("
        INSERT INTO visitor (visitor_name, visitor_date, visitor_phone, visitor_gender, visitor_email, visitor_age, visitor_status, visitor_notification)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ");

    if ($stmt) {
        $stmt->bind_param("ssssssss", $visitor_name, $visitor_date, $visitor_phone, $visitor_gender, $visitor_email, $visitor_age, $visitor_status, $visitor_notification);
        if ($stmt->execute()) {
            echo "<script>alert('Visitor Added Successfully!'); 
            window.location.href='Visitors-list.php';</script>";
        } else {
            echo "<script>alert('Error adding visitor: {$stmt->errorInfo()[2]}');</script>";
        }
    }
    
}

// notifications 
// $today = date('Y-m-d');
// $query = "SELECT * FROM visitor WHERE visitor_notification = '$today'";
// $result = mysqli_query($conn, $query);

// if (mysqli_num_rows($result) > 0) {
//     echo "<script>alert('You have follow-up reminders for today.')</script>";
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "<script>alert('Follow up with {$row['visitor_name']} (Phone: {$row['visitor_phone']})')</script>";
//     }
// }
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
                                    <li class="breadcrumb-item"><a href="#">Visitors</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Visitors</li>
                                </ol>
                            </nav>
                        </div>
                        <a href="./Visitors-list.php"
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
                    <h4 class="fw-bold d-flex align-items-center">Add Visitors</h4>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="" method="post" enctype="multipart/form-data" autocomplete="on">
                                <!-- Basic Information -->
                                <div class="row g-3">
                                    <h5 class="fw-bold mb-3">Basic Information</h5>
                                    <div class="col-md-6 mb-3">
                                        <label for="Visitor-name" class="form-label fw-bold text-muted text-uppercase">
                                            Name</label>
                                        <input type="text" required class="form-control" name="Visitor-name"
                                            id="Visitor-name" placeholder="Enter Visitors Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Phone"
                                            class="form-label fw-bold text-muted text-uppercase">Phone</label>
                                        <input type="number" name="Visitor-phone" required class="form-control"
                                            id="Visitor-phone" placeholder="Enter Phone">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Visitor-gender"
                                            class="form-label fw-bold text-muted text-uppercase">Gender</label>
                                        <select id="Visitor-gender" name="Visitor-gender"
                                            class="form-select form-control choicesjs">
                                            <option value="selected">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Visitor-email"
                                            class="form-label fw-bold text-muted text-uppercase">Email
                                            Address </label>
                                        <input type="email" name="Visitor-email" class="form-control" id="Visitor-email"
                                            placeholder="Enter Email Address ">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Visitor-age"
                                            class="form-label fw-bold text-muted text-uppercase">Age</label>
                                        <input type="number" name="Visitor-age" class="form-control" id="Visitor-age"
                                            placeholder="Enter Age">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Visitor-Date" class="form-label fw-bold text-muted text-uppercase">
                                            Date</label>
                                        <input type="text" required name="Visitor-Date"
                                            class="form-control vanila-datepicker datepicker-input" id="Visitor-Date"
                                            placeholder="Date">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Visitor-status"
                                            class="form-label fw-bold text-muted text-uppercase">Status</label>
                                        <select id="Visitor-status" name="Visitor-status"
                                            class="form-select form-control choicesjs">
                                            <option value="selected"></option>
                                            <option value="New">New</option>
                                            <option value="Converted-to-Member">Converted to Member</option>
                                            <option value="Lost">Lost</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-primary" type="submit" name="add_visitor">
                                        Add Visitors
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