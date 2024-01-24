<script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
        document.getElementById("myTopnav").classList.toggle("show");
    }

    window.onclick = function(event) {
        if (!event.target.matches('.icon')) {
            var dropdowns = document.getElementsByClassName("topnav");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
