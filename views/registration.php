<?php
include ('../functions.php');
$registrationAction = getActionUrl('registration');
include ('header.php');

?>
<head>
    <script src="../bootstrap/modernizr.min.js" type="text/javascript"></script>
    <link rel='stylesheet prefetch'
          href='../bootstrap/bootstrap-validator/css/bootstrapValidator.min.css'>
    <script src='../bootstrap/js/jquery.min.js'></script>
    <script src='../bootstrap/bootstrap-validator/js/bootstrapvalidator.min.js'></script>
    <script src="../skin/js/register_validation.js"></script>
</head>


<div class="login-container">
   <div class="container">
    <div class="row">
        <form class="well form-horizontal" action="<?php echo $registrationAction ?>" method="post" id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <legend>
                <center><h2><b>Become a Member</b></h2></center>
            </legend>
            <center><a href="../views/login.php">Already a Member ?</a></center>

            <!-- Text input-->

            <div class="form-group required">
                <label class="col-md-4 control-label">First Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="first_name" placeholder="First Name" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group required">
                <label class="col-md-4 control-label">Last Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="last_name" placeholder="Last Name" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Date of Birth</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="date" name="birth_date" class="form-control" placeholder="Date of Birth">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group required">
                <label class="col-md-4 control-label">Username</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="user_name" placeholder="Username" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group required">
                <label class="col-md-4 control-label">Password</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input name="user_password" placeholder="Password" class="form-control" type="password">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group required">
                <label class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input name="confirm_password" placeholder="Confirm Password" class="form-control"
                               type="password">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group required">
                <label class="col-md-4 control-label">E-Mail</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
                    </div>
                </div>
            </div>


            <!-- Text input-->

            <div class="form-group required">
                <label class="col-md-4 control-label">Contact No.</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="contact_no" placeholder="639" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Select Basic -->

            <div class="form-group">
                <label class="col-md-4 control-label">Select Your Plan:</label>
                <div class="select-plan">
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <label>
                                <input type="radio" class="option-input radio" name="plan" value="1" checked/>
                                FREE
                            </label>
                            <label>
                                <input type="radio" class="option-input radio" name="plan" value="2"/>
                                PRO
                            </label>
                            <label>
                                <input type="radio" class="option-input radio" name="plan" value="3"/>
                                PREMIUM
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <center><span class="red-alert"><i>* Required fields.</i></span></center>

            <!-- Button -->
            <div class="form-group ">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4"><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <button type="submit" class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span
                                class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    </button>
                </div>
            </div>

        </fieldset>
    </form>
    </div>
   </div>
</div>


<?php include 'footer.php'; ?>