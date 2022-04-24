<!DOCTYPE html>
<html>

<body>
<style>
.cookiealert {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  margin: 0 !important;
  z-index: 999;
  opacity: 0;
  border-radius: 0;
  transform: translateY(100%);
  transition: all 500ms ease-out;
  color: #ecf0f1;
  background: #212327;
}

.cookiealert.show {
  opacity: 1;
  transform: translateY(0%);
  transition-delay: 1000ms;
}

.cookiealert a {
	color: #f97300;
  text-decoration: underline;
}

.cookiealert .acceptcookies {
  margin-left: 10px;
  background: #f97300;
  vertical-align: baseline;
}


</style>
    <section>
        <div class="alert text-center cookiealert" role="alert">
          <center>
            <p>By using our website/app, you acknowledge that you have read and understand our
              <a href="termsandconditions.php">Cookie Policy</a>,
              <a href="termsandconditions.php">Privacy Policy</a>,
              and our <a href="termsandconditions.php">Terms of Service</a>.
              <button class="btn btn-primary btn btn-primary btn-sm acceptcookies"
                type="button" aria-label="Close">
                <b>I agree</b>
              </button>
            </p>
          </center>
        </div>
    </section>
<script>
(function () {
    "use strict";

    var cookieAlert = document.querySelector(".cookiealert");
    var acceptCookies = document.querySelector(".acceptcookies");

    if (!cookieAlert) {
       return;
    }

    cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

    // Show the alert if we cant find the "acceptCookies" cookie
    if (!getCookie("acceptCookies")) {
        cookieAlert.classList.add("show");
    }

    // When clicking on the agree button, create a 1 year
    // cookie to remember user's choice and close the banner
    acceptCookies.addEventListener("click", function () {
        setCookie("acceptCookies", true, 60);
        cookieAlert.classList.remove("show");
    });

    // Cookie functions from w3schools
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
})();
</script>
</body>

</html>