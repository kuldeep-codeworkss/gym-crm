<?php include("./header.php") ?>

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
                                    <li class="breadcrumb-item"><a href="./Member-List.php">Members</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Member</li>
                                </ol>
                            </nav>
                        </div>
                        <a href="./Member-List.php"
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
                    <h4 class="fw-bold d-flex align-items-center">New Member</h4>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="">
                                <!-- Basic Information -->
                                <div class="row g-3">
                                    <h5 class="fw-bold mb-3">Basic Information</h5>
                                    <div class="col-md-6 mb-3">
                                        <label for="Name" class="form-label fw-bold text-muted text-uppercase">
                                            Name</label>
                                        <input type="text" required class="form-control" id="Name"
                                            placeholder="Enter Member Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputState"
                                            class="form-label fw-bold text-muted text-uppercase">Gender</label>
                                        <select id="inputState" required class="form-select form-control choicesjs">
                                            <option value="selected">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Date-of-Birth"
                                            class="form-label fw-bold text-muted text-uppercase">Date
                                            of Birth</label>
                                        <input type="text" required
                                            class="form-control vanila-datepicker datepicker-input" id="Date-of-Birth"
                                            placeholder="DD MM YYYY">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Phone"
                                            class="form-label fw-bold text-muted text-uppercase">Phone</label>
                                        <input type="number" class="form-control" id="Phone" placeholder="Enter Phone">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Email Address"
                                            class="form-label fw-bold text-muted text-uppercase">Email
                                            Address </label>
                                        <input type="email" class="form-control" id="Email Address"
                                            placeholder="Enter Email Address ">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Age"
                                            class="form-label fw-bold text-muted text-uppercase">Age</label>
                                        <input type="number" class="form-control" id="Age" placeholder="Enter Age">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Height"
                                            class="form-label fw-bold text-muted text-uppercase">Height</label>
                                        <input type="number" class="form-control" id="Height"
                                            placeholder="Enter Height">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Weight"
                                            class="form-label fw-bold text-muted text-uppercase">Weight</label>
                                        <input type="number" class="form-control" id="Weight"
                                            placeholder="Enter Weight">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="BMI"
                                            class="form-label fw-bold text-muted text-uppercase">BMI</label>
                                        <input type="text" readonly disabled class="form-control" id="BMI"
                                            placeholder="Enter BMI">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Reference-Name"
                                            class="form-label fw-bold text-muted text-uppercase">
                                            Reference Name</label>
                                        <input type="text" class="form-control" id="Reference-Name"
                                            placeholder="Enter Reference Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Aadhar-card" class="form-label fw-bold text-muted text-uppercase">
                                            Aadhar / Pan Card </label>
                                        <input type="file" class="form-control" id="Aadhar-card" name="Aadhar-card">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="profile-photo" class="form-label fw-bold text-muted text-uppercase">
                                            Profile Photo</label>
                                        <input type="file" class="form-control" id="profile-photo" name="profile-photo">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="Address"
                                            class="form-label fw-bold text-muted text-uppercase">Address</label>
                                        <textarea class="form-control" id="Address" rows="3"
                                            placeholder="Enter Address"></textarea>
                                    </div>
                                </div>
                                <!-- Membership Details -->
                                <div class="row g-3">
                                    <h5 class="fw-bold mb-3 mt-3">Membership Details</h5>
                                    <div class="col-md-6 mb-3">
                                        <label for="Plan-type" class="form-label fw-bold text-muted text-uppercase">Plan
                                            Type</label>
                                        <select required multiple class="form-control choicesjs" id="Plan-type"
                                            name="Plan-type">
                                            <option value="Basic" selected>Basic</option>
                                            <option value="Personal-Trainer">Personal Trainer</option>
                                            <option value="Cardio">Cardio</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Plan-Period"
                                            class="form-label fw-bold text-muted text-uppercase">Plan
                                            Period</label>
                                        <select id="Plan-Period" required class="form-select form-control choicesjs">
                                            <option value="selected">Select Plan Period</option>
                                            <option value="1month">1 month</option>
                                            <option value="3months">3 months</option>
                                            <option value="6months">6 months</option>
                                            <option value="1Year">1 Year</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Enter-start"
                                            class="form-label fw-bold text-muted text-uppercase">Start
                                            Date</label>
                                        <input type="text" required
                                            class="form-control vanila-datepicker datepicker-input" id="Enter-start"
                                            placeholder="Start Date">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="End-Date" class="form-label fw-bold text-muted text-uppercase">End
                                            Date</label>
                                        <input type="number" disabled required class="form-control" id="End-Date"
                                            placeholder="End Date">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Trainer-Assigned"
                                            class="form-label fw-bold text-muted text-uppercase">Trainer
                                            Assigned</label>
                                        <select id="Trainer-Assigned" class="form-select form-control choicesjs">
                                            <option value="selected">Select Trainer </option>
                                            <option value="Basic">Basic</option>
                                            <option value="Personal-Trainer">Personal Trainer</option>
                                            <option value="Cardio">Cardio</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Payment Details -->
                                <div class="row g-3">
                                    <h5 class="fw-bold mb-3 mt-3">Payment Details</h5>
                                    <!-- radio btn   -->
                                    <div class="d-flex flex-wrap gap-4">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="payment" id="Full"
                                                onclick="togglePayment('full')">
                                            <label for="Full" class="form-check-label text-dark pl-2">Full</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="payment" id="Instalments"
                                                onclick="togglePayment('instalment')">
                                            <label for="Instalments"
                                                class="form-check-label pl-2 text-dark">Instalments</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <!-- full-payment -->
                                        <div class="" id="full-payment" style="display: none;">
                                            <div class="row full-payment">
                                                <div class="col-md-6 mb-3">
                                                    <label for="Total-Amount"
                                                        class="form-label fw-bold text-muted text-uppercase">
                                                        Total Amount</label>
                                                    <input type="text" required class="form-control" id="Total-Amount"
                                                        placeholder="Total Amount">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="Pay-amount"
                                                        class="form-label fw-bold text-muted text-uppercase">
                                                        Pay amount</label>
                                                    <input type="text" required class="form-control" id="Pay-amount"
                                                        placeholder="Pay amount">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="Payment-Date"
                                                        class="form-label fw-bold text-muted text-uppercase">Payment
                                                        Date</label>
                                                    <input type="text" required
                                                        class="form-control vanila-datepicker datepicker-input"
                                                        id="Payment-Date" placeholder="DD MM YYYY">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="Payment-mode"
                                                        class="form-label fw-bold text-muted text-uppercase">Payment
                                                        mode</label>
                                                    <select id="Payment-mode" 
                                                        class="form-select form-control choicesjs">
                                                        <option value="selected">Select Payment mode</option>
                                                        <option value="Electronics">Cash</option>
                                                        <option value="Applications">Card</option>
                                                        <option value="Applications">UPI</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- instalment -->
                                        <div class="" id="instalment" style="display: none;">
                                            <div class="row instalment">
                                                <div class="col-md-6 mb-3">
                                                    <label for="instalment-Total-Amount"
                                                        class="form-label fw-bold text-muted text-uppercase">
                                                        Total Amount</label>
                                                    <input type="text" required class="form-control"
                                                        id="instalment-Total-Amount" placeholder="Total Amount">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="Total-Instalments"
                                                        class="form-label fw-bold text-muted text-uppercase">
                                                        Total Instalments
                                                    </label>
                                                    <select id="Total-Instalments" required
                                                        class="form-select form-control choicesjs"
                                                        onchange="updateInstalments()">
                                                        <option value="">Select Total Instalments</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="no-of-instalment-container">
                                                <!-- first Instalment  -->
                                                <div class="row mt-3 no-of-instalment" id="instalment-1"
                                                    style="display: none;">
                                                    <h5 class="fw-bold mb-3 mt-3">First Instalment</h5>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="Amount-paid-1"
                                                            class="form-label fw-bold text-muted text-uppercase">Amount
                                                            Paid</label>
                                                        <input type="text" required class="form-control"
                                                            id="Amount-paid-1" placeholder="Amount Paid">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="instalment-Payment-due-Date-1"
                                                            class="form-label fw-bold text-muted text-uppercase">Payment Due Date</label>
                                                        <input type="text" required
                                                            class="form-control vanila-datepicker datepicker-input"
                                                            id="instalment-Payment-due-Date-1" placeholder="DD MM YYYY">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="Payment-mode-1"
                                                            class="form-label fw-bold text-muted text-uppercase">Payment
                                                            Mode</label>
                                                        <select id="Payment-mode-1" 
                                                            class="form-select form-control choicesjs">
                                                            <option value="">Select Payment mode</option>
                                                            <option value="Electronics">Cash</option>
                                                            <option value="Applications">Card</option>
                                                            <option value="Applications">UPI</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- second Instalment  -->
                                                <div class="row mt-3 no-of-instalment" id="instalment-2"
                                                    style="display: none;">
                                                    <h5 class="fw-bold mb-3 mt-3">Second Instalment</h5>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="Amount-paid-2"
                                                            class="form-label fw-bold text-muted text-uppercase">Amount
                                                            Paid</label>
                                                        <input type="text" required class="form-control"
                                                            id="Amount-paid-2" placeholder="Amount Paid">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="instalment-Payment-Due-Date-2"
                                                            class="form-label fw-bold text-muted text-uppercase">Payment Due Date</label>
                                                        <input type="text" required
                                                            class="form-control vanila-datepicker datepicker-input"
                                                            id="instalment-Payment-Due-Date-2" placeholder="DD MM YYYY">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="Payment-mode-2"
                                                            class="form-label fw-bold text-muted text-uppercase">Payment
                                                            Mode</label>
                                                        <select id="Payment-mode-2" 
                                                            class="form-select form-control choicesjs">
                                                            <option value="">Select Payment mode</option>
                                                            <option value="Electronics">Cash</option>
                                                            <option value="Applications">Card</option>
                                                            <option value="Applications">UPI</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- third Instalment  -->
                                                <div class="row mt-3 no-of-instalment" id="instalment-3"
                                                    style="display: none;">
                                                    <h5 class="fw-bold mb-3 mt-3">Third Instalment</h5>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="Amount-paid-3"
                                                            class="form-label fw-bold text-muted text-uppercase">Amount
                                                            Paid</label>
                                                        <input type="text" required class="form-control"
                                                            id="Amount-paid-3" placeholder="Amount Paid">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="instalment-Payment-Due-Date-3"
                                                            class="form-label fw-bold text-muted text-uppercase">Payment Due Date</label>
                                                        <input type="text" required
                                                            class="form-control vanila-datepicker datepicker-input"
                                                            id="instalment-Payment-Due-Date-3" placeholder="DD MM YYYY">
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="Payment-mode-3"
                                                            class="form-label fw-bold text-muted text-uppercase">Payment
                                                            Mode</label>
                                                        <select id="Payment-mode-3" 
                                                            class="form-select form-control choicesjs">
                                                            <option value="">Select Payment mode</option>
                                                            <option value="Electronics">Cash</option>
                                                            <option value="Applications">Card</option>
                                                            <option value="Applications">UPI</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-primary">
                                        Add Member
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