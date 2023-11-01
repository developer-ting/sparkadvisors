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
    <?php include("includes/header_3.html") ?>
</head>

<body>
    <?php include("includes/browser_upgrade.html") ?>
    <!--  insert body content  -->
    <section id="change_password" class="change_password">
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
                                    <h2>change password</h2>
                                    <form action="#" method="post" id="log-in-form change_password_validate" class="change_password_validate log_in_section">
                                        <div class="form-group">
                                            <img src="dist/img/home/user_id.png" class="img-responsive form_img" alt="">
                                            <input type="email" class="form-control" name="user_id" id="user_id" placeholder="USER ID">
                                        </div>
                                        <div class="form-group">
                                            <img src="dist/img/home/password.png" class="img-responsive form_img" alt="">
                                            <input type="text" class="form-control" name="temporary_password" id="temporary_password" placeholder="OLD / TEMPORARY PASSWORD">
                                        </div>
                                        <div class="form-group">
                                            <img src="dist/img/home/password.png" class="img-responsive form_img" alt="">
                                            <input id="pswd" type="password" class="form-control" name="pswd" placeholder="PLEASE ENTER NEW PASSWORD">
                                            <!--                                            <input type="text" class="form-control" name="new_password" id="new_password" placeholder="PLEASE ENTER NEW PASSWORD">-->
                                        </div>
                                        <div class="form-group">
                                            <img src="dist/img/home/password.png" class="img-responsive form_img" alt="">
                                            <input type="text" class="form-control" name="confirm_new_password" id=" confirm_new_password" placeholder="CONFIRM NEW PASSWORD">
                                        </div>
                                        <div class="button_section">
                                            <button type="submit" class="log_in_btn">SUBMIT</button>
                                        </div>
                                    </form>
                                    <div id="pswd_info" style="display: none;">
                                        <ul>
                                            <li id="letter" class="valid">One Capital letter</li>
                                            <li id="number" class="invalid">One Number</li>
                                            <li id="capital" class="invalid">One Special Character</li>
                                        </ul>
                                    </div>
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
        $(".change_password_validate").validate({
            rules: {
                user_id: {
                    required: true,
                    email: true
                },
                temporary_password: {
                    required: true
                },
                pswd: {
                    required: true
                },
                confirm_new_password: {
                    required: true
                }

            },
            messages: {
                user_id: {
                    required: 'This field is required',
                    emailtest: " Please enter a valid email address"
                },
                pswd: {
                    required: 'This field is required',
                },
                new_password: {
                    required: 'This field is required',
                },
                confirm_new_password: {
                    required: 'This field is required',
                }
            }
        });

    </script>
</body>

</html>
