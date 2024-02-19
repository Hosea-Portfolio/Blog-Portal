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

    function show() {
        var input = document.querySelector(".input");
        input.classList.add("show");
        var search = document.querySelector(".icon-search");
        search.classList.add("disable");
    }

    function hide() {
        var input = document.querySelector(".input");
        input.classList.remove("show");
        input.value = "";
        var search = document.querySelector(".icon-search");
        search.classList.remove("disable");



    }
</script>
