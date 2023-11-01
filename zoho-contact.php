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


        <input type='text' style='display:none;' name='xnQsjsdp'
            value='61fb75af36dc15e56323d9f238e95a447d3e79b3554676ce49e9b9e85ee8dd0e'></input>
        <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
        <input type='text' style='display:none;' name='xmIwtLD'
            value='2b21c31b314bc3f8365644cf81d01de5aebe7ac5b6aea6613edb4299c97a02ad'></input>
        <input type='text' style='display:none;' name='actionType' value='Q2FzZXM='></input>
        <input type='text' style='display:none;' name='returnURL'
            value='https&#x3a;&#x2f;&#x2f;images01.nicepagecdn.com&#x2f;page&#x2f;47&#x2f;41&#x2f;html-template-preview-474176.jpg'>
        </input>
        <!-- Do not remove this code. -->
    </head>

    <body>
        <?php include("includes/browser_upgrade.html") ?>
        <!--  insert body content  -->
        <section id="zoho-contact" class="zoho-contact">

            <div class="contact_form">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 no_padd">
                            <div class="contact_form_section">
                                <h2 class="send_msg">SEND MESSAGE</h2>
                                <form action='https://crm.zoho.in/crm/WebToCaseForm' name=WebToCases431814000002073078
                                    method='POST'
                                    onSubmit='javascript:document.charset="UTF-8"; return checkMandatory431814000002073078()'
                                    accept-charset='UTF-8' class="contact_page_form">
                                    <div class="col-md-4 zcwf_row">
                                        <div class="form-group zcwf_col_fld">
                                            <input type='text' id='CASECF1' name='CASECF1' maxlength='255'
                                                placeholder='Demat A/C Number'>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 zcwf_row">
                                        <div class="form-group zcwf_col_fld">
                                            <input type='text' id='CASECF3' name='CASECF3' maxlength='255'
                                                placeholder='Name*'>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 zcwf_row">
                                        <div class="form-group zcwf_col_fld">
                                            <input type='text' ftype='email' id='Email' name='Email' maxlength='300'
                                                placeholder='Email*'>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 zcwf_row">
                                        <div class="form-group">
                                            <select class='zcwf_col_fld_slt' id='CASECF4' name='CASECF4'>
                                                <option value='-None-'>Query*</option>
                                                <option value='Operations&#x20;Related'>Operations Related</option>
                                                <option value='Trading'>Trading</option>
                                                <option value='Demat&#x20;and&#x20;Related'>Demat and Related</option>
                                                <option value='Banking&#x20;Related'>Banking Related</option>
                                            </select>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 zcwf_row">
                                        <div class="form-group zcwf_col_fld">
                                            <input type='text' id='Subject' name='Subject' maxlength='300'
                                                placeholder='Subject*'></input>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 zcwf_row">
                                        <div class="form-group zcwf_col_fld">
                                            <input type='text' id='CASECF2' name='CASECF2' maxlength='255'
                                                placeholder='Issue*'>
                                            <div class='zcwf_col_help'></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="wrapper_btn">
                                            <div class='button_section zcwf_row'>
                                                <div class='zcwf_col_lab'></div>
                                                <div class='zcwf_col_fld'>
                                                    <input type='submit' id='formsubmit'
                                                        class='log_in_btn formsubmit zcwf_button' value='Submit'
                                                        title='Submit'>
                                                    <input type='reset' class='log_in_btn zcwf_button' name='reset'
                                                        value='Reset' title='Reset'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <!--  end body content -->
        <?php include("includes/include_js.html") ?>
        <?php include("includes/footer.html") ?>

        <script>
        function validateEmail431814000002073078() {
            var form = document.forms['WebToCases431814000002073078'];
            var emailFld = form.querySelectorAll('[ftype=email]');
            var i;
            for (i = 0; i < emailFld.length; i++) {
                var emailVal = emailFld[i].value;
                if ((emailVal.replace(/^\s+|\s+$/g, '')).length != 0) {
                    var atpos = emailVal.indexOf('@');
                    var dotpos = emailVal.lastIndexOf('.');
                    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailVal.length) {
                        alert('Please enter a valid email address. ');
                        emailFld[i].focus();
                        return false;
                    }
                }
            }
            return true;
        }

        function checkMandatory431814000002073078() {
            var mndFileds = new Array('Subject', 'Email', 'CASECF2', 'CASECF3', 'CASECF4');
            var fldLangVal = new Array('Subject', 'Email', 'Issue', 'Name', 'Query');
            for (i = 0; i < mndFileds.length; i++) {
                var fieldObj = document.forms['WebToCases431814000002073078'][mndFileds[i]];
                if (fieldObj) {
                    if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                        if (fieldObj.type == 'file') {
                            alert('Please select a file to upload.');
                            fieldObj.focus();
                            return false;
                        }
                        alert(fldLangVal[i] + ' cannot be empty.');
                        fieldObj.focus();
                        return false;
                    } else if (fieldObj.nodeName == 'SELECT') {
                        if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                            alert(fldLangVal[i] + ' cannot be none.');
                            fieldObj.focus();
                            return false;
                        }
                    } else if (fieldObj.type == 'checkbox') {
                        if (fieldObj.checked == false) {
                            alert('Please accept  ' + fldLangVal[i]);
                            fieldObj.focus();
                            return false;
                        }
                    }
                    try {
                        if (fieldObj.name == 'Last Name') {
                            name = fieldObj.value;
                        }
                    } catch (e) {}
                }
            }
            if (!validateEmail431814000002073078()) {
                return false;
            }
            document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);
        }

        function tooltipShow431814000002073078(el) {
            var tooltip = el.nextElementSibling;
            var tooltipDisplay = tooltip.style.display;
            if (tooltipDisplay == 'none') {
                var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
                for (i = 0; i < allTooltip.length; i++) {
                    allTooltip[i].style.display = 'none';
                }
                tooltip.style.display = 'block';
            } else {
                tooltip.style.display = 'none';
            }
        }
        </script>
        <!-- Do not remove this --- Analytics Tracking code starts -->
        <script id='wf_anal'
            src='https://crm.zohopublic.in/crm/WebFormAnalyticsServeServlet?rid=2b21c31b314bc3f8365644cf81d01de5aebe7ac5b6aea6613edb4299c97a02adgid61fb75af36dc15e56323d9f238e95a447d3e79b3554676ce49e9b9e85ee8dd0egid2700cf589a53ea84975232ab42f91b04gid4ee3a7e9ace6ab1be7c541b329164307&tw=096a715cbfc30dc79d6dc215bf71c5b4284d938378e51186a6daa9337f7519a8'>
        </script><!-- Do not remove this --- Analytics Tracking code ends. -->
        </form>

    </body>

</html>