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
                            <form id="contact_page_form" action="" class="contact_page_form">
                                <div class="FormFlex">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control input_width" name="name" id="name"
                                                placeholder="Full Name*">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control input_width" name="email" id="email"
                                                placeholder="Email Address*">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input id="number" type="number" class="form-control input_width"
                                                name="number" placeholder="Contact Number*">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input id="company" type="text" class="form-control input_width"
                                                name="company" placeholder="Name of Company / Family*">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input id="city" type="text" class="form-control input_width" name="city"
                                                placeholder="City*">
                                        </div>
                                    </div>
                                    <div class="col-md-4 hidden-xs">
                                        <div class="form-group">
                                            <!-- <p>Interested in Select Business</p> -->
                                        </div>
                                    </div>
                                    <div class="col-md-4 SelectTitle">
                                        <div class="form-group">
                                            <p>Interested in Select Business</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select id="mainCategory" class="form-control input_width"
                                                name="mainCategory">
                                                <option value="">-- Select Business --</option>
                                                <option value="investment">Investment Banking</option>
                                                <option value="assets">Assets Management</option>
                                                <option value="wealth">Private Wealth Management</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select id="subCategory" class="form-control input_width"
                                                name="subCategory">
                                                <option value="">-- Select Option --</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group" colspan="5">
                                        <textarea class="form-control" rows="4" name="comment"
                                            placeholder="Comments"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 button_section">
                                    <button type="submit" class="log_in_btn">SUBMIT</button>
                                </div>
                            </form>
                            <div id="thankyou" class="hidden">Thanks</div>
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
    <script defer type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
    <script>
    const mainCategory = document.getElementById("mainCategory");
    const subCategory = document.getElementById("subCategory");

    const options = {
        investment: [
            "Technology and Services",
            "Industrials, Logistics & Infra",
            "Health Care and Pharma",
            "Consumer Products and Services",
            "Banking, Financial Services and Insurance",
            "Structured Debt Finance"
        ],
        assets: [],
        wealth: [
            "Personal Wealth Advisory (₹ 5 Cr to ₹ 100 Cr)",
            "Family Office Advisory (₹ 100 Cr & Above)"
        ]
    };

    mainCategory.addEventListener("change", function() {
        const selected = this.value;
        subCategory.innerHTML = "";

        if (options[selected] && options[selected].length > 0) {
            options[selected].forEach(function(item) {
                const opt = document.createElement("option");
                opt.value = item;
                opt.textContent = item;
                subCategory.appendChild(opt);
            });
        } else {
            const opt = document.createElement("option");
            opt.value = "";
            opt.textContent = "-- No options available --";
            subCategory.appendChild(opt);
        }
    });
    </script>
    <!-- <script>
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
    </script> -->
    <script>
    //for letters only
    $.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z][a-zA-Z ]+$/i.test(value);
    });

    //for email only
    $.validator.addMethod("emailtest", function(value, element) {
        return this.optional(element) || /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/i.test(value);
    });
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
            number: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10
            },
            company: {
                required: true
            },
            city: {
                required: true,
                lettersonly: true
            },
            comment: {
                required: true
            },
            mainCategory: {
                required: true
            },
            // subCategory: {
            //     required: true
            // }
        },
        messages: {
            name: {
                required: 'This field is required',
                minlength: 'Enter at least two characters',
                lettersonly: 'Must contain letters only'
            },
            email: {
                required: 'This field is required',
                email: 'Please enter a valid email address'
            },
            number: {
                required: 'This field is required',
                digits: 'Enter numbers only',
                minlength: 'Number too short'
            },
            company: {
                required: 'This field is required'
            },
            city: {
                required: 'This field is required',
                lettersonly: 'Must contain letters only'
            },
            comment: {
                required: 'This field is required'
            },
            mainCategory: {
                required: 'Please select a business category'
            },
            // subCategory: {
            //     required: 'Please select a sub-category'
            // }
        },
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