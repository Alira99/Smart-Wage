<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Data Table</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/DataTables/datatables.min.css">
</head>

<?php include "includes/sidebar.php"; ?>
<?php include "includes/header.php"; ?>

<body>
    <div class="table-content">
        <h1>Job Titles</h1>
        <div class="data-table-container mt-5">
            <button class="btn btn-success add-btn">Add Job Title</button>
            <table id="jobTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Department</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nakasuma Daichi</td>
                        <td>XRCF4</td>
                        <td>Cleaning</td>
                        <td>Regular</td>
                        <td>Ethereal</td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-edit" title="Edit Job Title" data-bs-toggle="tooltip" data-bs-placement="top">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                                <button class="btn-delete" title="Delete Job Title" data-bs-toggle="tooltip" data-bs-placement="top">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>John Doe</td>
                        <td>ENG45</td>
                        <td>Engineering</td>
                        <td>Senior Engineer</td>
                        <td>Active</td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn-edit" title="Edit Job Title" data-bs-toggle="tooltip" data-bs-placement="top">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                                <button class="btn-delete" title="Delete Job Title" data-bs-toggle="tooltip" data-bs-placement="top">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#jobTable').DataTable({
                responsive: true,
                pageLength: 5,
                language: {
                    loadingRecords: "Loading data...",
                    zeroRecords: "No records found"
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl, {
                    placement: 'bottom', // Tooltip on bottom
                    container: 'body', // Ensures proper rendering in all layouts
                });
            });
        });
    </script>

</body>

</html>