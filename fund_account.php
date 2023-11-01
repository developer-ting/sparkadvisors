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
    <?php include("includes/header_2.html") ?>
</head>

<body>
    <?php include("includes/browser_upgrade.html") ?>
    <!--  insert body content  -->
    <section id="fund_account" class="fund_account">
        <section class="client">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 no_padd">
                        <div class="client_log_in">
                            <div class="col-md-12">
                                <h2>FUND YOUR ACCOUNT</h2>
                                <div class="log_in_section_main">
                                    <form action="#" method="post" id="log-in-form" class="log_in_section">
                                        <div class="form-group hitesh">
                                            <img src="dist/img/home/user_id.png" class="img-responsive form_img" alt="">
                                            <h3>HITESH</h3>
                                        </div>
                                        <!--
                                        <div class="form-group">
                                            <img src="dist/img/home/rupess.png" class="img-responsive form_img" alt="">
                                            <input type="text" class="form-control" name="amount" id="amount" placeholder="AMOUNT">
                                        </div>
-->
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
                                            <button type="submit" class="log_in_btn">TRANSFER NOW</button>
                                        </div>
                                    </form>
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
</body>

</html>
