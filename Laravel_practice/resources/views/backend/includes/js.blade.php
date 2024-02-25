<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    };



    document.addEventListener('DOMContentLoaded', function () {
        const dropdowns = document.querySelectorAll('.dropdown');

        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', () => {
                dropdown.classList.toggle('active');
                const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                dropdownMenu.classList.toggle('active');
            });
        });
    });




    new DataTable('#example');



    $(document).ready(function () {
        // Add event listener to all delete buttons
        $('.delete-btn').click(function () {
            // Get the modal ID by concatenating 'delete' with product ID
            var modalId = $(this).data('target');
            // Open the corresponding modal
            $(modalId).modal('show');
        });
    });

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js" defer></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js" defer></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js" defer></script>