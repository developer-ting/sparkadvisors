<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <?php include("includes/include_css.html") ?>
    <?php include("includes/header_1.html") ?>
</head>

<body>
    <?php include("includes/browser_upgrade.html") ?>
    <!--  insert body content  -->
    <section id="contact" class="contact">
        <div class="banner">
            <div class="banner_text">
                <h5>CONNECT WITH US</h5>
                <h1>GET IN TOUCH</h1>
                <ul>
                    <li>
                        <img src="dist/img/regulatory/home.png" class="img-responsive" alt=""><a href="#">HOME
                            &emsp;></a>
                    </li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </div>
        </div>
        <div class="contact_form">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 no_padd">
                        <div class="contact_form_section">
                            <h2 class="send_msg">SEND MESSAGE</h2>
                            <form action="#" method="post" id="contact_page_form" class="contact_page_form">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control input_width" name="name" id="name"
                                            placeholder="full name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control input_width" name="email" id="email"
                                            placeholder="EMAIL ADDRESS">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="subject" type="text" class="form-control input_width" name="subject"
                                            placeholder="SUBJECT">
                                        <!--                                            <input type="text" class="form-control" name="new_password" id="new_password" placeholder="PLEASE ENTER NEW PASSWORD">-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="number" type="number" class="form-control input_width" name="number"
                                            placeholder="Mobile Number">
                                        <!--                                            <input type="text" class="form-control" name="new_password" id="new_password" placeholder="PLEASE ENTER NEW PASSWORD">-->
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group" colspan="5">
                                        <textarea class="form-control" rows="4" name="comment"
                                            placeholder="COMMENT"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 button_section">
                                    <button type="submit" class="log_in_btn">SUBMIT</button>
                                </div>
                            </form>
                            <div class="thankyou hidden">
                                thanks
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container">
            <div class="button_section">
                <div class="register_btn">
                    <p>
                        <a href="zoho-contact.php" class="log_in_btn">Register</a>
                    </p>
                </div>
            </div>
        </div> -->
    </section>

    <!--  end body content -->
    <?php include("includes/include_js.html") ?>
    <?php include("includes/footer.html") ?>

    <script>
    $("#contact_page_form").validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                lettersonly: true
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true
            },
            number: {
                required: true
            },
            comment: {
                required: true
            }

        },
        messages: {
            name: {
                required: 'This field is required',
                minlength: 'Enter atleast two character',
                lettersonly: 'Must enter character only'
            },
            user_id: {
                required: 'This field is required',
                emailtest: " Please enter a valid email address"
            },
            subject: {
                required: 'This field is required',
            },
            number: {
                required: 'This field is required',
            },
            comment: {
                required: 'This field is required',
            }

        }
        submitHandler: function(form) {
            $.ajax({
                url: "https://script.google.com/macros/s/AKfycbzyG_J53KscXM3wqruNAACS1tcHbJoLWw5Hs3E3uGxka-2bA-tZxOCX2ZVHCtCoQ_RJ/exec",
                type: 'post',
                data: $("#contact_page_form").serializeArray(),
                success: function($response) {
                    $('#thankyou').removeClass('hidden');
                    // $('body').css({
                    //     "overflow": "hidden",
                    //     "position": "relative"
                    // });
                    $('#contact_page_form')[0].reset();
                    setTimeout(function() {
                        $('#thankyou').addClass('hidden');
                        // $('body').css({
                        //     "overflow": "unset",
                        //     "position": "unset"
                        // });
                    }, 5000);
                },
                error: function() {
                    alert("There was an error. PLease try again.")
                }
            });
        }
    });
    </script>
</body>

</html>