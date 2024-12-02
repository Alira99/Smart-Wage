<aside class="sidebar" id="sidebar">
    <!-- Sidebar Title -->
    <div class="sidebar-logo">
        <a href="index.php">
            <img src="assets/img/LOGOOO.png" alt="Logo" class="logo-image">
        </a>
    </div>
    <!-- Sidebar Menu -->
    <ul>
        <li><a href="departments.php"><i class="fas fa-table-cells"></i> DEPARTMENTS</a></li>
        <li><a href="job-titles.php"><i class="fas fa-chart-diagram"></i> JOB TITLES</a></li>
        <li>
            <a href="#" class="dropdown-btn" onclick="toggleDropdown(this)">
                <i class="fas fa-users"></i> EMPLOYEES <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="dropdown-content">
                <li><a href="view-employee.php"><i class="fas fa-clipboard-user"></i> VIEW EMPLOYEE</a></li>
                <li><a href="add-employee.php"><i class="fas fa-user-plus"></i> ADD EMPLOYEE</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-btn" onclick="toggleDropdown(this)">
                <i class="fas fa-calendar-check"></i> ATTENDANCE <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="dropdown-content">
                <li><a href="my-attendance.php"><i class="fas fa-calendar-week"></i> MY ATTENDANCE</a></li>
                <li><a href="attendance.php"><i class="fas fa-calendar-days"></i> ATTENDANCE</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-btn" onclick="toggleDropdown(this)">
                <i class="fas fa-suitcase"></i> LEAVE MANAGEMENT <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="dropdown-content">
                <li><a href="apply-leave.php"><i class="fas fa-circle"></i> APPLY LEAVE</a></li>
                <li><a href="all-leave.php"><i class="fas fa-circle"></i> ALL LEAVE</a></li>
                <li><a href="my-leave.php"><i class="fas fa-circle"></i> MY LEAVE</a></li>
                <li><a href="leave-type.php"><i class="fas fa-circle"></i> LEAVE TYPE</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-btn" onclick="toggleDropdown(this)">
                <i class="fas fa-coins"></i> PAYROLL <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="dropdown-content">
                <li><a href="my-payslip.php"><i class="fas fa-circle"></i> MY PAYSLIP</a></li>
                <li><a href="generate-payslip.php"><i class="fas fa-circle"></i> GENERATE PAYSLIP</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-btn" onclick="toggleDropdown(this)">
                <i class="fas fa-gear"></i> SETTINGS <i class="fas fa-chevron-down arrow"></i>
            </a>
            <ul class="dropdown-content">
                <li><a href="sss-table.php"><i class="fas fa-circle"></i> SSS TABLE</a></li>
                <li><a href="pag-ibig-table.php"><i class="fas fa-circle"></i> PAG-IBIG TABLE</a></li>
                <li><a href="philhealth-table.php"><i class="fas fa-circle"></i> PHILHEALTH TABLE</a></li>
                <li><a href="withholding-tax.php"><i class="fas fa-circle"></i> WITHHOLDING TAX</a></li>
            </ul>
        </li>
    </ul>
</aside>
<script>
    document.addEventListener('DOMContentLoaded', () => {
            // Get current page URL
            const currentPath = window.location.pathname.split('/').pop();

            // Select all sidebar links
            const sidebarLinks = document.querySelectorAll('.sidebar ul li a');

            // Loop through links to find the active one
            sidebarLinks.forEach(link => {
                const linkPath = link.getAttribute('href');
                if (linkPath === currentPath) {
                    link.classList.add('active'); // Highlight the active link
                } else {
                    link.classList.remove('active'); // Remove highlight from others
                }
            });
        });

        // Toggle dropdown menus
        function toggleDropdown(element) {
            const dropdown = element.nextElementSibling; // Find the dropdown content
            const isActive = dropdown.style.display === "flex"; // Check current state

            // Close all dropdowns first
            document.querySelectorAll('.dropdown-content').forEach((el) => {
                el.style.display = "none";
            });
            document.querySelectorAll('.dropdown-btn').forEach((el) => {
                el.classList.remove('active');
            });

            // Open the clicked dropdown if it was not active
            if (!isActive) {
                dropdown.style.display = "flex";
                element.classList.add('active');
            }
        }

        // Run the function when the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', setActiveLink);
</script>

