    $(document).ready(function() {
        // Open the modal when the button is clicked
        $("#openModal").click(function() {
            $("registration.php").css("display", "block");
        });

        // Close the modal when the close button is clicked
        $(".close").click(function() {
            $("registration.php").css("display", "none");
        });

        // Close the modal if the user clicks outside of it
        $(window).click(function(event) {
            if (event.target == $("#myModal")[0]) {
                $("regsistration").css("display", "none");
            }
        });
    });
