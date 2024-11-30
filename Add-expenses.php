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
                                    <li class="breadcrumb-item"><a href="./expense-list.php">EXPENSE</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Expense</li>
                                </ol>
                            </nav>
                        </div>
                        <a href="./Expense-list.php"
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
                    <h4 class="fw-bold d-flex align-items-center">Add Expense</h4>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="">
                                <!-- Basic Information -->
                                <div class="row g-3">
                                    <h5 class="fw-bold mb-3">Basic Information</h5>
                                    <div class="col-md-6 mb-3">
                                        <label for="Expense-Type"
                                            class="form-label fw-bold text-muted text-uppercase">Expense Type</label>
                                        <select id="Expense-Type" required class="form-select form-control choicesjs">
                                            <option value="selected">Select Expense Type</option>
                                            <option value="Salary">Salary</option>
                                            <option value="Material">Material</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Expense-name" class="form-label fw-bold text-muted text-uppercase">
                                            Expense Name</label>
                                        <input type="text" class="form-control" id="Expense-name"
                                            placeholder="Enter Expense Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Amount"
                                            class="form-label fw-bold text-muted text-uppercase">Amount</label>
                                        <input type="text" required class="form-control" id="Amount"
                                            placeholder="Enter Amount">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Date"
                                            class="form-label fw-bold text-muted text-uppercase">Date</label>
                                        <input type="text" required
                                            class="form-control vanila-datepicker datepicker-input" id="Date"
                                            placeholder="Date">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Paid-To" class="form-label fw-bold text-muted text-uppercase">
                                            Paid To </label>
                                        <input type="text" class="form-control" id="Paid-To"
                                            placeholder="Enter Paid To ">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="Notes"
                                            class="form-label fw-bold text-muted text-uppercase">Notes</label>
                                        <textarea class="form-control" id="Notes" rows="3"
                                            placeholder="Enter Notes"></textarea>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button class="btn btn-primary">
                                        Add Expenses
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