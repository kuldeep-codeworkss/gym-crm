<?php include("./header.php");


?>

<!-- Wrapper Start -->
<div class="wrapper">
    <?php include("./Sidebar.php") ?>
    <?php include("./Navbar.php") ?>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 my-schedule mb-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="fw-bold">Expenses List</h4>
                        </div>
                        <div class="create-workform">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="modal-product-search d-flex flex-wrap">
                                    <form class="me-3 position-relative">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" id="exampleInputText"
                                                placeholder="Search Product">
                                            <a class="search-link" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </form>
                                    <a href="./Add-expenses.php"
                                        class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                        Add Expense
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-block card-stretch">
                                <div class="card-body p-0">
                                    <div class="d-flex justify-content-between align-items-center p-3 pb-md-0">
                                        <h5 class="fw-bold">Expenses List</h5>
                                        <button class="btn btn-secondary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="20" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                            </svg>
                                            Export
                                        </button>
                                    </div>
                                    <div class="table-responsive iq-product-table">
                                        <table class="table data-table mb-0">
                                            <thead class="table-color-heading">
                                                <tr class="text-light">
                                                    <th scope="col" class="iq-arrow">
                                                        <label class="text-muted m-0">Expense Name</label>
                                                    </th>
                                                    <th scope="col">
                                                        <label class="text-muted mb-0">Expense Type</label>
                                                    </th>
                                                    <th scope="col" class="">
                                                        <label class="text-muted mb-0">Date</label>
                                                    </th>
                                                    <th scope="col">
                                                        <label class="text-muted mb-0">Paid to</label>
                                                    </th>
                                                    <th scope="col">
                                                        <label class="text-muted mb-0">Amount</label>
                                                    </th>
                                                    <th scope="col" class="text-start">
                                                        <span class="text-muted">Note</span>
                                                    </th>
                                                    <th scope="col" class="text-start">
                                                        <span class="text-muted">Action</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="white-space-no-wrap">
                                                    <td class="">
                                                        <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                            <!-- <div class="h-avatar is-medium">
                                                                <img class="avatar rounded" alt="user-icon"
                                                                    src="assets/images/products/1.jpg">
                                                            </div> -->
                                                            <div class="data-content">
                                                                <div><span class="fw-bold">Equipment Maintenance</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-start">Material</td>
                                                    <td>30/11/21</td>
                                                    <td>Tejas(Servicing wala)</td>
                                                    <td>10,000</td>
                                                    <td>
                                                        For repairs, servicing.
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="d-flex gap-2 justify-content-strat align-items-center">
                                                            <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="View" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="text-secondary " width="22" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                </svg>
                                                            </a>
                                                            <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Edit" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="text-secondary " width="20" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                            </a>
                                                            <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Delete" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="white-space-no-wrap">
                                                    <td class="">
                                                        <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                            <!-- <div class="h-avatar is-medium">
                                                                <img class="avatar rounded" alt="user-icon"
                                                                    src="assets/images/products/1.jpg">
                                                            </div> -->
                                                            <div class="data-content">
                                                                <div><span class="fw-bold">Salary</span></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-start">Salary</td>
                                                    <td>2/12/24</td>
                                                    <td>PT Jay</td>
                                                    <td>30,000</td>
                                                    <td>November salary</td>

                                                    <td>
                                                        <div
                                                            class="d-flex gap-2 justify-content-strat align-items-center">
                                                            <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="View" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="text-secondary " width="22" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                </svg>
                                                            </a>
                                                            <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Edit" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="text-secondary " width="20" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                            </a>
                                                            <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Delete" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="white-space-no-wrap">
                                                    <td class="">
                                                        <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                            <!-- <div class="h-avatar is-medium">
                                                                <img class="avatar rounded" alt="user-icon"
                                                                    src="assets/images/products/1.jpg">
                                                            </div> -->
                                                            <div class="data-content">
                                                                <div><span class="fw-bold">AC Servicing</span></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-start">Material</td>
                                                    <td>28/11/24</td>
                                                    <td>Justin(AC wala)</td>
                                                    <td>6,000</td>
                                                    <td>
                                                        3 AC Servicing
                                                    </td>
                                                    <td>
                                                        <div class=" d-flex gap-2 justify-content-strat
                                                        align-items-center">
                                                            <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="View" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="text-secondary " width="22" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                </svg>
                                                            </a>
                                                            <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Edit" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="text-secondary " width="20" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                            </a>
                                                            <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Delete" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="white-space-no-wrap">
                                                    <td class="">
                                                        <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                            <!-- <div class="h-avatar is-medium">
                                                                <img class="avatar rounded" alt="user-icon"
                                                                    src="assets/images/products/1.jpg">
                                                            </div> -->
                                                            <div class="data-content">
                                                                <div><span class="fw-bold">Salary</span></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-start">Salary</td>
                                                    <td>3/12/24</td>
                                                    <td>John</td>
                                                    <td>10,000</td>
                                                    <td>
                                                        Maid November Salary
                                                    </td>
                                                    <td>
                                                        <div
                                                            class="d-flex gap-2 justify-content-strat align-items-center">
                                                            <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="View" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="text-secondary " width="22" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                </svg>
                                                            </a>
                                                            <a class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Edit" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="text-secondary " width="20" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                            </a>
                                                            <a class="badge bg-danger" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Delete" href="#">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include("./footer.php") ?>