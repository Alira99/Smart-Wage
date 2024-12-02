<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">

</head>

<?php include "includes/sidebar.php"; ?>
    <?php include "includes/header.php"; ?>

<body>
<div class="custom-container">
        <div class="custom-content">
            <h1>DEPARTMENT LIST</h1>
            <div class="custom-card-container">
                <!-- Card 1 -->
                <div class="custom-card">
                    <div class="custom-card-header">
                        <h5 class="custom-card-title">Engineering</h5>
                        <div class="custom-dropdown">
                            <button class="custom-dropbtn">
                                Options <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="custom-dropdown-content">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-card-body">
                        <p class="custom-description">Building the dream</p>
                        <p class="custom-date">6th August, 2024</p>
                        <div class="custom-stats">
                            <p><strong>3</strong> Total Staff</p>
                            <p><strong>1</strong> Total Managers</p>
                        </div>
                    </div>
                    <div class="custom-card-footer">
                        <p class="custom-team-label"><strong>Team:</strong></p>
                        <div class="custom-team-members">
                            <img src="assets/img/member1.jpg" alt="Team Member 1">
                            <img src="assets/img/member2.jpg" alt="Team Member 2">
                            <img src="assets/img/member3.jpg" alt="Team Member 3">
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="custom-card">
                    <div class="custom-card-header">
                        <h5 class="custom-card-title">Human Resources</h5>
                        <div class="custom-dropdown">
                            <button class="custom-dropbtn">
                                Options <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="custom-dropdown-content">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-card-body">
                        <p class="custom-description">Managing people</p>
                        <p class="custom-date">15th August, 2024</p>
                        <div class="custom-stats">
                            <p><strong>5</strong> Total Staff</p>
                            <p><strong>2</strong> Total Managers</p>
                        </div>
                    </div>
                    <div class="custom-card-footer">
                        <p class="custom-team-label"><strong>Team:</strong></p>
                        <div class="custom-team-members">
                            <img src="assets/img/member1.jpg" alt="Team Member 4">
                            <img src="assets/img/member2.jpg" alt="Team Member 5">
                            <img src="assets/img/member3.jpg" alt="Team Member 6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>