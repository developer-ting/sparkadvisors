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
    <?php include("includes/header_6.html") ?>
</head>

<body>
    <?php include("includes/browser_upgrade.html") ?>
    <!--  insert body content  -->
    <section id="thank-you" class="thank-you">
        <div class="banner">
            <div class="thank_you">
                <h2>Thank You</h2>
                <p>Your ticket has been raised successfully and the ticket number is emailed on your registered
                    email Id
                </p>
            </div>
        </div>
    </section>

    <!--  end body content -->
    <?php include("includes/include_js.html") ?>

    <script>
        $("#contact_page_form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2,
                    lettersonly: true
                },
                user_id: {
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
        });
    </script>
</body>

</html>