<?php include("./header.php");
include_once('session.php');
require_once('db_config.php');
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
                            <h4 class="fw-bold">Event List</h4>
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
                                    <a href="./Add-events.php"
                                        class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="20" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                        Add Event
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
                                        <h5 class="fw-bold">Events List</h5>
                                        <button class="btn btn-secondary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1" width="20" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                            </svg>
                                            Export
                                        </button>
                                    </div>

                                    <div class="col-lg-12 display-data col-md-12 col-sm-12 add-clients-table">
                                        <?php
                                        $query = "SELECT * FROM events ORDER BY event_date ASC";
                                        $data = mysqli_query($conn, $query);
                                        $totalvalue = mysqli_num_rows($data);
                                        ?>
                                        <div class="table-responsive iq-product-table">
                                            <table class="table data-table mb-0">
                                                <thead class="table-color-heading">
                                                    <tr class="text-light">
                                                        <th scope="col" class="iq-arrow">Event Name</th>
                                                        <th scope="col">Event Date</th>
                                                        <th scope="col">Event Organized By</th>
                                                        <th scope="col">Event Winner Name</th>
                                                        <th scope="col">Event Winner Price</th>
                                                        <th scope="col" class="text-start">Event Description</th>
                                                        <th scope="col" class="text-start">Event Created Date</th>
                                                        <th scope="col" class="text-start">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if ($totalvalue > 0) {
                                                        while ($result = mysqli_fetch_assoc($data)) {
                                                            ?>
                                                            <tr class="white-space-no-wrap">
                                                                <td><span
                                                                        class="fw-bold"><?php echo $result['event_name']; ?></span>
                                                                </td>
                                                                <td class="text-center"><?php echo $result['event_date']; ?>
                                                                </td>
                                                                <td class="text-center"><?php echo $result['organized_by']; ?>
                                                                </td>
                                                                <td class="text-center"><?php echo $result['winner_name']; ?>
                                                                </td>
                                                                <td class="text-center"><?php echo $result['winner_price']; ?>
                                                                </td>
                                                                <td class="text-center text-truncate" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title=" <?php echo $result['event_description']; ?>">
                                                                    <?php
                                                                    $text = substr($result['event_description'], 0, 50) . '...';
                                                                    echo $text;
                                                                    ?>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php echo $result['Event_added_date']; ?>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex gap-2 justify-content-start align-items-center">
                                                                        <a data-toggle="modal" data-target="#update-event"
                                                                            href="update_event.php?id=<?php echo $result['id']; ?>">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="text-secondary" width="20" fill="none"
                                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round" stroke-width="2"
                                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                            </svg>
                                                                        </a>
                                                                        <a class="badge bg-danger"
                                                                            href="delete_event.php?id=<?php echo $result['id']; ?>"
                                                                            onclick="return confirmDelete();"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            title="Delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                                fill="none" viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round" stroke-width="2"
                                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    } else {
                                                        ?>
                                                        <tr>
                                                            <td colspan="8" class="text-center">No data available in table
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
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
</div>
<script>
    const confirmDelete = () => {
        return confirm("Are you sure want to delete this ..!");
    }
</script>

<?php include("./footer.php") ?>