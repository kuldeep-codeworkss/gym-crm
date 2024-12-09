<?php include("./header.php");
include_once('session.php');
require_once('db_config.php');

// echo $_GET['id'];
$id = $_GET['id'];
$visitor_query = "SELECT * FROM `visitor` WHERE VISITOR_ID ='$id'";
$visitor_data = mysqli_query($conn, $visitor_query);
// $totalvalue = mysqli_num_rows($event_data);
$result = mysqli_fetch_assoc($visitor_data);

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
                                    <li class="breadcrumb-item active" aria-current="page">Update Visitor</li>
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
                    <h4 class="fw-bold d-flex align-items-center">Update Visitor</h4>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <?php

                            if (isset($_POST['update_visitor'])) {

                                // Anti-bot check
                                if (isset($_POST['captcha']) && !empty($_POST['captcha'])) {
                                    die("Unauthorized access!");
                                }

                                date_default_timezone_set('Asia/Calcutta');
                                $date = date('Y-m-d H:i:s');

                                // Get input values
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

                                // query for updating events
                                $stmt = $conn->prepare("UPDATE visitor  SET visitor_name = ?, visitor_date = ?, visitor_phone = ?, visitor_gender = ?, visitor_email = ?, visitor_age = ?, visitor_status = ?, visitor_notification = ? WHERE visitor_id = ?;");

                                if ($stmt) {
                                    $stmt->bind_param("ssssssssi", $visitor_name, $visitor_date, $visitor_phone, $visitor_gender, $visitor_email, $visitor_age, $visitor_status, $visitor_notification, $id);

                                    // Execute the statement
                                    if ($stmt->execute()) {
                                        echo "<script>alert('Visitor Updated Successfully!'); 
                                        window.location.href='Visitors-list.php';</script>";
                                    } else {
                                        echo "<script>alert('Error updating visitor: " . $stmt->error . "');</script>";
                                    }

                                    // Close the statement
                                    $stmt->close();
                                } else {
                                    echo "Error preparing statement: " . $conn->error;
                                }
                            }
                            ?>
                            <form class="" method="post" autocomplete="on">
                                <!-- Basic Information -->
                                <div class="row g-3">
                                    <h5 class="fw-bold mb-3">Basic Information</h5>
                                    <div class="col-md-6 mb-3">
                                        <label for="Visitor-name" class="form-label fw-bold text-muted text-uppercase">
                                            Name</label>
                                        <input type="text" required class="form-control" name="Visitor-name"
                                            id="Visitor-name" placeholder="Enter Visitors Name"
                                            value="<?php echo $result['visitor_name'] ?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Phone"
                                            class="form-label fw-bold text-muted text-uppercase">Phone</label>
                                        <input type="number" name="Visitor-phone" required class="form-control"
                                            id="Visitor-phone" placeholder="Enter Phone"
                                            value="<?php echo $result['visitor_phone'] ?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Visitor-gender"
                                            class="form-label fw-bold text-muted text-uppercase">Gender</label>
                                        <select id="Visitor-gender" name="Visitor-gender"
                                            value="<?php echo $result['visitor_gender'] ?>"
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
                                            placeholder="Enter Email Address "
                                            value="<?php echo $result['visitor_email'] ?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Visitor-age"
                                            class="form-label fw-bold text-muted text-uppercase">Age</label>
                                        <input type="number" name="Visitor-age" class="form-control" id="Visitor-age"
                                            placeholder="Enter Age" value="<?php echo $result['visitor_age'] ?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Visitor-Date" class="form-label fw-bold text-muted text-uppercase">
                                            Date</label>
                                        <input type="text" required name="Visitor-Date"
                                            class="form-control vanila-datepicker datepicker-input" id="Visitor-Date"
                                            placeholder="Date" value="<?php echo $result['visitor_date'] ?>">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Visitor-status"
                                            class="form-label fw-bold text-muted text-uppercase">Status</label>
                                        <select id="Visitor-status" name="Visitor-status"
                                            value="<?php echo $result['visitor_status'] ?>"
                                            class="form-select form-control choicesjs">
                                            <option value="selected"></option>
                                            <option value="New">New</option>
                                            <option value="Converted-to-Member">Converted to Member</option>
                                            <option value="Lost">Lost</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-primary" type="submit" name="update_visitor">
                                        Update Visitor
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