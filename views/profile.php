<?php
session_start();

$basename = basename($_SERVER['PHP_SELF']);
$domain = str_replace($basename, "", $_SERVER['PHP_SELF']) . "../";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $domain; ?>static/images/online-shopping.png" type="image/x-icon" />
    <!-- Box icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo $domain; ?>static/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <script src="<?php echo $domain; ?>static/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!-- Toastr cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <title>AmariShop Contact</title>

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="<?php echo $domain; ?>static/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $domain; ?>static/css/contact_form_style.css" />
    <base href="<?php echo $domain; ?>">
    <style>
        body {
            background-color: #d1e2e9 !important;
        }

        .contact-page-header {
            min-height: 0 !important;
        }

        .contact1-form-btn {
            background: #4898f9 !important;
        }

        .edit-icon {
            margin-left: 70px;
            cursor: pointer;
        }
    </style>
    <?php
    include_once "controller.php";
    $user_data = get_user_profile();
    $name = isset($user_data['full_name']) ? $user_data['full_name'] : "";
    $email = isset($user_data['email']) ? $user_data['email'] : "";
    $phone = isset($user_data['phone']) ? $user_data['phone'] : "";
    $user_address = isset($user_data['address']) ? $user_data['address'] : "";

    ?>

</head>

<body>
    <!-- Header -->
    <header id="home" class="header contact-page-header">
        <?php include 'components/navbar.php'; ?>
    </header>

    <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="<?php echo $domain; ?>static/images/gamer.png" alt="MessageIcon" />
            </div>

            <form class="contact1-form validate-form" method="POST">
                <span class="contact1-form-title"> User Profile <i class="edit-icon bx bx-edit"></i> </span>

                <div class="wrap-input1 validate-input" data-validate="Name is required">
                    <input readonly class="input1 editable" value="<?php echo $name ?>" type="text" name="name" placeholder="Name" />
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input readonly class="input1" value="<?php echo $email ?>" type="text" placeholder="Email" />
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Valid Phone Number is required">
                    <input readonly class="input1 editable" value="<?php echo $phone ?>" type="text" name="phone" placeholder="Phone" />
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate="Valid Address is required">
                    <textarea readonly class="input1 editable" name="address" placeholder="Address"><?php echo $user_address ?></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn" type="submit" name="save_profile">
                        <span>
                            Save Profile
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>

        </div>
    </div>
    <?php include 'components/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $domain; ?>static/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $domain; ?>static/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo $domain; ?>static/vendor/tilt/tilt.jquery.min.js"></script>

    <!-- Custom Script -->
    <script src="<?php echo $domain; ?>static/js/contact_form.js"></script>
    <script src="<?php echo $domain; ?>static/js/index.js"></script>
    <script>
        var edit_icon = document.querySelector(".edit-icon");

        function setEditable(val) {
            var inputFields = document.querySelectorAll(".editable");
            for (var i = 0; i < inputFields.length; i++) {
                inputFields[i].readOnly = val;
            }
        }

        edit_icon.addEventListener("click", () => {
            setEditable(false);
            <?php echo "toastr.info(\"You can edit your profile now.\")";?>
        })
    </script>
</body>

</html>