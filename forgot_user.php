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
    <?php include("includes/header_5.html") ?>
</head>

<body>
    <?php include("includes/browser_upgrade.html") ?>
    <!--  insert body content  -->
    <section id="forgot_user" class="forgot_user">
        <section class="client">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 no_padd">
                        <div class="client_log_in">
                            <div class="col-md-6">
                                <div class="img_text_section">
                                    <img src="dist/img/home/client_img.png" class="img-responsive" alt="">
                                    <div class="text_section">
                                        <h1>Lorem ipsum is simply dummy text</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="log_in_section_main">
                                    <h2>forgot user id</h2>
                                    <form action="#" method="post" id="log-in-form forgote_user_validate" class="log_in_section forgote_user_validate">
                                        <div class="form-group">
                                            <img src="dist/img/home/email.png" class="img-responsive form_img" alt="">
                                            <input type="email" class="form-control" name="email_id" id="email_id" placeholder="REGISTERED EMAIL ID">
                                        </div>
                                        <div class="form-group">
                                            <img src="dist/img/home/calender.png" class="img-responsive form_img" alt="">
                                            <input type="text" class="form-control" name="date_of_incorporation" id="date_of_incorporation" placeholder="DATE OF BIRTH / DATE OF Incorporation">
                                        </div>
                                        <div class="button_section">
                                            <button type="submit" class="log_in_btn">SUBMIT</button>
                                        </div>
                                    </form>
                                    <!--                                    <h5>User Id Is Sent To Your Registered Email Id</h5>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--  end body content -->
    <?php include("includes/include_js.html") ?>
    <?php include("includes/footer.html") ?>

    <script>
        $(".forgote_user_validate").validate({
            rules: {
                email_id: {
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
                date_of_incorporation: {
                    required: 'This field is required',
                }
            }
        });

    </script>
</body>

</html>
