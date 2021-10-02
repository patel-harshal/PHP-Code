<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <h1>contact us</h1>
        </div>
        <div class="row">
            <h4 style="text-align:center">We'd love to hear from you!</h4>
        </div>

        <div class="row input-container">
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <input type="text" required name="name" id="name" />
                    <label>Name</label>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input">
                    <input type="email" required id="email" name="email" />
                    <label>Email</label>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input" style="float:right;">
                    <input type="number" required id="contactnumber" name="contactnumber" />
                    <label>Phone Number</label>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <textarea required name="message" id="message"></textarea>
                    <label>Message</label>
                </div>
            </div>
            <div class="col-xs-12">
                <button class="btn-lrg submit-btn" onclick="sendContact()">Send Message </button>
            </div>
            <p id="err"></p>
        </div>

    </div>
    <script>
        var errorMessage;
        function sendContact() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var contactnumber = document.getElementById("contactnumber").value;
            var message = document.getElementById("message").value;
            if (name.length < 5) {
                errorMessage = "name cant be less than 5 characters"
                alert(errorMessage);
                stop();
            }
            else if (contactnumber.length < 10) {
                errorMessage = "enter valid number";
                alert(errorMessage);
                stop();
            }
            else if (message.length < 10) {
                errorMessage = "enter more than 10 characters";
                alert(errorMessage);
                stop();
            }
            else {
                window.location.replace("home.php?name=" + name + "email=" + email + "contactnumber=" + contactnumber + "message=" + message);
            }

        }
    </script>
</body>

</html>