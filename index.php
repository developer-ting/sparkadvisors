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
    <section id="index" class="index">
        <section class="client">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 no_padd">
                        <div class="v_eoting">
                            <p><a href="https://evoting.cdslindia.com/Evoting/EvotingLogin" target="_blank">E-Voting</a></p>
                        </div>
                        <div class="client_log_in">
                            <!--                            <div class="col-md-6">-->
                            <div class="img_text_section">
                                <div class="offer_slider">
                                    <div class="slider_section">
                                        <img src="dist/img/home/client_img.png" class="img-responsive" alt="">
                                    </div>
                                    <div class="slider_section">
                                        <img src="dist/img/home/client_img.png" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                            <!--                            </div>-->
                            <!--                            <div class="col-md-6">-->
                            <div class="log_in_section_main">
                                <h2>CLIENT log in</h2>
                                <form action="#" method="post" id="log-in-form client_log_in_validate" class="log_in_section client_log_in_validate">
                                    <div class="form-group">
                                        <img src="dist/img/home/user_id.png" class="img-responsive form_img" alt="">
                                        <input type="text" class="form-control" name="user_id" id="user_id" placeholder="USER ID">
                                    </div>
                                    <div class="form-group">
                                        <img src="dist/img/home/password.png" class="img-responsive form_img" alt="">
                                        <input type="eamil" class="form-control" name="email_id" id="email_id" placeholder="EMAIL ID">
                                    </div>
                                    <div class="form-group form_group_date">
                                        <img src="dist/img/home/password.png" class="img-responsive form_img" alt="">
                                        <input type="text" class="form-control" name="date_of_incorporation" id="date_of_incorporation" placeholder="DATE OF BIRTH / DATE OF Incorporation">
                                    </div>
                                    <div class="form-group">
                                        <select class="select_box_log_in">
                                            <option>Year</option>
                                            <option>2020</option>
                                            <option>2019</option>
                                            <option>2018</option>
                                            <option>2017</option>
                                            <option> 2016</option>
                                        </select>
                                    </div>
                                    <div class="button_section">
                                        <button type="submit" class="log_in_btn">LOG IN</button>
                                    </div>
                                </form>
                                <div class="for_pass">
                                    <div class="passw">
                                        <h3>Forgot Password? <a href="forgot_password.php">Reset</a></h3>
                                    </div>
                                    <div class="user_id">
                                        <h3>Forgot User ID? <br class="visible-xs"> <a href="forgot_user.php">Resend to Registered E-mail ID</a></h3>
                                        <!--                                            <h3><a href="forgot_user.php"></a></h3>-->
                                    </div>
                                </div>
                                <div class="ore">
                                    <h4>or</h4>
                                </div>
                                <h5><span class="span">New User:</span> <br class="visible-xs">Open New Broking & DP Account <br class="visible-xs">or<br class="visible-xs"> Register to request a call-back</h5>
                            </div>
                        </div>
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
        </section>
    </section>

    <div id="oops" class="modal fade" role="dialog">
        <!--       data-toggle="modal" data-target="#oops"-->
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal"><img src="dist/img/home/close.png" class="img-responsive close_btn" alt=""></span>

                    <h2>OOPS</h2>
                </div>
                <div class="modal-body">
                    <p>Sorry, our system does not recognize you. Please contact your spark sales contact, or write to <a href="mailto:sales@sparkcapital.in">sales@sparkcapital.in</a></p>
                    <div class="btn_section">
                        <button type="button" class="try_again_btn">try again</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="register" class="modal fade" role="dialog">
        <!--       data-toggle="modal" data-target="#oops"-->
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" data-dismiss="modal"><img src="dist/img/home/close.png" class="img-responsive close_btn" alt=""></span>

                    <h4>Register FOR SALES CALL</h4>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" id="client_log_in" class="register_form_validate register_form_section">
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="FIRST NAME">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="LAST NAME">
                        </div>
                        <div class="form-group">
                            <input type="eamil" class="form-control email_form" name="email_id" id="email_id" placeholder="EMAIL ADDRESS">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="number" id="number" placeholder="MOBILE NUMBER">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="time" id="time" placeholder="PREFER TIME">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="date" id="date" placeholder="PREFER DATE">
                        </div>
                        <div class="btn_section">
                            <button type="submit" class="try_again_btn">REQUEST A CALL</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



    <!--  end body content -->
    <?php include("includes/include_js.html") ?>
    <?php include("includes/footer.html") ?>

    <script>
        $(".register_form_validate").validate({
            rules: {
                first_name: {
                    required: true,
                    minlength: 2,
                    lettersonly: true
                },
                last_name: {
                    required: true,
                    minlength: 2,
                    lettersonly: true
                },
                email_id: {
                    required: true,
                    email: true
                },
                number: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true
                },
                time: {
                    required: true
                },
                date: {
                    required: true
                }

            },
            messages: {
                first_name: {
                    required: 'This field is required',
                    minlength: 'Enter atleast two character',
                    lettersonly: 'Must enter character only'
                },
                last_name: {
                    required: 'This field is required',
                    minlength: 'Enter atleast two character',
                    lettersonly: 'Must enter character only'
                },
                email_id: {
                    required: 'This field is required',
                    emailtest: " Please enter a valid email address"
                },
                number: {
                    required: 'This field is required',
                    maxlength: 'Enter 10 digits only',
                    digits: 'Must enter number only'
                },
                time: {
                    required: 'This field is required',
                },
                date: {
                    required: 'This field is required',
                }

            }
        });

        $(".client_log_in_validate").validate({
            rules: {
                email_id: {
                    required: true,
                    email: true
                },
                user_id: {
                    required: true,
                    email: true
                },
                date_of_incorporation: {
                    required: true
                }

            },
            messages: {
                email_id: {
                    required: 'This field is required',
                    emailtest: " Please enter a valid email address"
                },
                user_id: {
                    required: 'This field is required',
                    emailtest: " Please enter a valid email address"
                },
                date_of_incorporation: {
                    required: 'This field is required',
                }
            }
        });

    </script>
</body>

</html>
