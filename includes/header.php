<header class="global-header">
    <div class="header-left">
        <span class="header-title">SMART WAGE</span>
    </div>
    <header class="global-header">
        <div class="header-right">
            <button class="dropdown-toggle" aria-expanded="false">
                <span class="username">USERNAME</span>
                <i class="fas fa-user-circle"></i>
            </button>
            <div class="user-dropdown">
                <a href="#">Profile</a>
                <a href="#">Settings</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </header>
</header>



<script>
    document.addEventListener("DOMContentLoaded", () => {
    const dropdownToggle = document.querySelector(".dropdown-toggle");
    const userDropdown = document.querySelector(".user-dropdown");

    // Toggle dropdown visibility on button click
    dropdownToggle.addEventListener("click", (e) => {
        e.stopPropagation(); // Prevent click from propagating to the document
        const isExpanded = dropdownToggle.getAttribute("aria-expanded") === "true";
        dropdownToggle.setAttribute("aria-expanded", !isExpanded);
        userDropdown.classList.toggle("show");
    });

    // Close dropdown when clicking anywhere outside
    document.addEventListener("click", () => {
        dropdownToggle.setAttribute("aria-expanded", "false");
        userDropdown.classList.remove("show");
    });
});


</script>