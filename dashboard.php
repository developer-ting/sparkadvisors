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
    <section id="dashboard" class="dashboard">
        <div class="loader_overlay">
            <div class="loader_spinner"></div>
        </div>
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 no_padd">
                        <div class="product_section">
                            <div class="col-md-4 col-sm-6">
                                <div class="product_box" data-toggle="modal" data-target="#sprint">
                                    <a href="#">
                                        <img src="dist/img/home/sprint.png" class="img-responsive" alt="">
                                        <h2>Sprint</h2>
                                        <p>Transact @ lightning fast speed sprint</p>
                                        <img src="dist/img/home/pluse.png" class="img-responsive pluse" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product_box">
                                    <a href="#">
                                        <img src="dist/img/home/sybly.png" class="img-responsive" alt="">
                                        <h2>Sibyl</h2>
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <img src="dist/img/home/pluse.png" class="img-responsive pluse" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product_box">
                                    <a href="#">
                                        <img src="dist/img/home/chro.png" class="img-responsive" alt="">
                                        <h2>CONTRACTS</h2>
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <img src="dist/img/home/pluse.png" class="img-responsive pluse" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product_box">
                                    <a href="#">
                                        <img src="dist/img/home/spark.png" class="img-responsive" alt="">
                                        <h2>Spark Dp</h2>
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <img src="dist/img/home/pluse.png" class="img-responsive pluse" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product_box">
                                    <a href="#">
                                        <img src="dist/img/home/one.png" class="img-responsive" alt="">
                                        <h2>One View</h2>
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <img src="dist/img/home/pluse.png" class="img-responsive pluse" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product_box">
                                    <a href="#">
                                        <img src="dist/img/home/paying.png" class="img-responsive" alt="">
                                        <h2>Payin</h2>
                                        <p>Lorem Ipsum is simply dummy text</p>
                                        <img src="dist/img/home/pluse.png" class="img-responsive pluse" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <div id="mymodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close close_m" data-dismiss="modal"><img src="dist/img/home/close_modal.png" class="img-responsive close_modal" alt=""></button>
                </div>
                <div class="modal-header">
                    <h4>SIBYL</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                </div>
            </div>
        </div>
    </div>

    <!--  end body content -->
    <?php include("includes/include_js.html") ?>
    <?php include("includes/footer.html") ?>
    <script>
        $(window).ready(function() {
            setTimeout(function() {
                $('#mymodal').modal("show")
            }, 0)
        })

    </script>
</body>

</html>
