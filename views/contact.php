<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon" />
    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="static/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!-- Toastr cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <title>AmariShop Contact</title>

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="static/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="static/css/contact_form_style.css" />

    <style>
        body {
            background-color: #d1e2e9 !important;
        }

        .contact-page-header {
            min-height: 0 !important;
        }
    </style>

</head>

<body>
    <!-- Header -->
    <header id="home" class="header contact-page-header">
        <?php include 'components/navbar.php'; ?>
    </header>

    <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="static/images/message_icon.png" alt="MessageIcon" />
            </div>

            <form class="contact1-form validate-form" method="POST">
                <span class="contact1-form-title"> Get in touch </span>

                <div class="wrap-input1 validate-input" data-validate="Name is required">
                    <input class="input1" type="text" name="name" placeholder="Name" />
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input1" type="text" name="email" placeholder="Email" />
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Subject is required">
                    <input class="input1" type="text" name="subject" placeholder="Subject" />
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Message is required">
                    <textarea class="input1" name="message" placeholder="Message"></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn" type="submit" name="contact_form_btn">
                        <span>
                            Send Email
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="static/vendor/bootstrap/js/popper.js"></script>
    <script src="static/vendor/tilt/tilt.jquery.min.js"></script>

    <!-- Custom Script -->
    <script src="static/js/contact_form.js"></script>
    <script src="static/js/index.js"></script>

</body>

</html>