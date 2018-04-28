    document.getElementById("email").oninput = function() { validate() };

    function validate() {
        var email = document.getElementById("email");
        var emailVal = document.getElementById("email").value;
        if (emailVal == "") {
            email.style.border = "red";
        } else {
            document.getElementById("submit").disabled = false;
        }

    }