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
                            <form class="">
                                <!-- Basic Information -->
                                <div class="row g-3">
                                    <h5 class="fw-bold mb-3">Basic Information</h5>
                                    <div class="col-md-6 mb-3">
                                        <label for="Name" class="form-label fw-bold text-muted text-uppercase">
                                            Name</label>
                                        <input type="text" required class="form-control" id="Name"
                                            placeholder="Enter Visitors Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Phone"
                                            class="form-label fw-bold text-muted text-uppercase">Phone</label>
                                        <input type="number" required class="form-control" id="Phone"
                                            placeholder="Enter Phone">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputState"
                                            class="form-label fw-bold text-muted text-uppercase">Gender</label>
                                        <select id="inputState" required class="form-select form-control choicesjs">
                                            <option value="selected">Select Gender</option>
                                            <option value="Electronics">Male</option>
                                            <option value="Applications">Female</option>
                                        </select>
                                    </div>                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="Email Address"
                                            class="form-label fw-bold text-muted text-uppercase">Email
                                            Address </label>
                                        <input type="email" required class="form-control" id="Email Address"
                                            placeholder="Enter Email Address ">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Age"
                                            class="form-label fw-bold text-muted text-uppercase">Age</label>
                                        <input type="number" required class="form-control" id="Age"
                                            placeholder="Enter Age">
                                    </div> 
                                    <div class="col-md-6 mb-3">
                                        <label for="date"
                                            class="form-label fw-bold text-muted text-uppercase">
                                            Date</label>
                                        <input type="text" required
                                            class="form-control vanila-datepicker datepicker-input" id="date"
                                            placeholder="Date">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Trainer-Assigned"
                                            class="form-label fw-bold text-muted text-uppercase">Status</label>
                                        <select id="Trainer-Assigned" class="form-select form-control choicesjs">
                                            <option value="selected"></option>
                                            <option value="New">New</option>
                                            <option value="Converted-to-Member">Converted to Member</option>
                                            <option value="Lost">Lost</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-primary">
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