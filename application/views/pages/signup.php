<!doctype html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url() . "assets/css/"; ?>style.css">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/bootstrap/"; ?>css/bootstrap.min.css">

    <!-- Include SmartWizard CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . "assets/smartwizard/"; ?>dist/css/smart_wizard.css">

    <!-- Optional SmartWizard theme -->
    <link rel="stylesheet"
          href="<?php echo base_url() . "assets/smartwizard/"; ?>/dist/css/smart_wizard_theme_arrows.css"/>

    <style>
        .error_form {
            font-size: 14px;
            color: red;
        }
        a:-webkit-any-link {
            color: -webkit-link;
            cursor: pointer;
            text-decoration: none;
            color:black;
        }

    </style>
</head>
<body>
<div class="container">
    <!-- External toolbar sample -->
    <div class="row">
        <div class="col-md-4" style="text-align: left; padding-top: 20px">
            <h3><a href="<?php echo base_url();?>"><img src="<?php echo base_url()."assets/images/logo.png";?>" width="300px"></a></h3>
        </div>
        <div class="col-md-8" style="text-align: center; padding-top: 20px">
            <h3><a href="<?php echo base_url();?>" style="color: #444;"> tqf-Document System</a></h3>
        </div>

        <div class="col-md-12">
            <hr/>
        </div>
        <div class="col-md-12" style="margin-top: 30px;">
            <h3>Registration Member</h3>
        </div>

    </div>



    <!-- SmartWizard html -->

    <div id="smartwizard">

        <ul>
            <li><a href="#step-1">Step 1<br/>
                    <small>Choice Type of user</small>
                </a></li>
            <li><a href="#step-2">Step 2<br/>
                    <small>Complete information</small>
                </a></li>
            <li><a href="#step-3">Step 3<br/>
                    <small>Complete account</small>
                </a></li>
        </ul>


        <div>

            <div id="step-1" class="">
                <h3 class="border-bottom border-gray pb-2">Account type</h3>
                <form id="user_form">
                <div id="content_choice_type">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Step1 : Choice type</label>
                        <select class="form-control" id="user_type" name="user_type" onchange="showContent(this)">
                            <option value='' selected='true' disabled='disabled'>Select</option>
                            <?php foreach ($user_types as $user_type): ?>
                                <option value="<?php echo $user_type['type_id']; ?>"><?php echo $user_type['type_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="error_form" id="type_user_error_message"></span>
                    </div>
                </div>

            </div>
            <div id="step-2" class="">
                <h3 class="border-bottom border-gray pb-2">Information</h3>
<!--    =======================content lecture=======================================-->
                <div id="content_lecturer" style="display: none">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" id="lec_f_name" name="lec_f_name" class="form-control" placeholder="First name">
                                <span class="error_form" id="lec_f_name_error_message"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" id="lec_l_name" name="lec_l_name" class="form-control" placeholder="Last name">
                                <span class="error_form" id="lec_l_name_error_message"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" id="lec_gender" name="lec_gender">
                                    <option value='' selected='true' disabled='disabled'>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <span class="error_form" id="lec_gender_error_message"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" id="lec_birthday" name="lec_birthday" class="form-control" placeholder="Birhtday">
                                <span class="error_form" id="lec_birthday_error_message"></span>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label>Position</label>
                                 <select class="form-control" id="lec_position" name="lec_position">
                                     <option value='' selected='true' disabled='disabled'>Select</option>
                                     <?php foreach ($positions as $position): ?>
                                         <option value="<?php echo $position['position_id']; ?>"><?php echo $position['position_name']; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                                 <span class="error_form" id="lec_position_error_message"></span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label>Department</label>
                                 <select class="form-control" id="lec_department" name="lec_department">
                                     <option value='' selected='true' disabled='disabled'>Select</option>
                                     <?php foreach ($departments as $department): ?>
                                         <option value="<?php echo $department['department_id']; ?>"><?php echo $department['department_name']; ?></option>
                                     <?php endforeach; ?>
                                 </select>
                                 <span class="error_form" id="lec_department_error_message"></span>
                             </div>

                         </div>
                     </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date in work</label>
                                <input type="date" id="lec_date_in_work" name="lec_date_in_work" class="form-control" placeholder="Birhtday">
                                <span class="error_form" id="lec_date_in_work_error_message"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Start work</label>
                                <input type="date" id="lec_startwork" name="lec_startwork" class="form-control" placeholder="Start work">
                                <span class="error_form" id="lec_startwork_error_message"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" id="lec_phone" name="lec_phone" class="form-control" placeholder="Phone">
                                <span class="error_form" id="lec_phone_error_message"></span>
                            </div>

                        </div>
                    </div>
                </div>
<!--  =======================content staff=======================================-->
                <div id="content_staff" style="display: none">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" id="sta_f_name" name="sta_f_name" class="form-control" placeholder="First name">
                                <span class="error_form" id="sta_f_name_error_message"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" id="sta_l_name" name="sta_l_name" class="form-control" placeholder="Last name">
                                <span class="error_form" id="sta_l_name_error_message"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" id="sta_gender" name="sta_gender">
                                    <option value='' selected='true' disabled='disabled'>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <span class="error_form" id="sta_gender_error_message"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Birthday</label>
                                <input type="date" id="sta_birthday" name="sta_birthday" class="form-control" placeholder="Birhtday">
                                <span class="error_form" id="sta_birthday_error_message"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Position</label>
                                <select class="form-control" id="sta_position" name="sta_position">
                                    <option value='' selected='true' disabled='disabled'>Select</option>
                                    <?php foreach ($positions as $position): ?>
                                        <option value="<?php echo $position['position_id']; ?>"><?php echo $position['position_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="error_form" id="sta_position_error_message"></span>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Date in work</label>
                                <input type="date" id="sta_date_in_work" name="sta_date_in_work" class="form-control" placeholder="Birhtday">
                                <span class="error_form" id="sta_date_in_work_error_message"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Start work</label>
                                <input type="date" id="sta_startwork" name="sta_startwork" class="form-control" placeholder="Start work">
                                <span class="error_form" id="sta_startwork_error_message"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" id="sta_phone" name="sta_phone" class="form-control" placeholder="Phone">
                                    <span class="error_form" id="sta_phone_error_message"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
<!--   =============content student======================-->
                <div id="content_student" style="display: none">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" id="stu_f_name" name="stu_f_name" class="form-control" placeholder="First name">
                                <span class="error_form" id="stu_f_name_error_message"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" id="stu_l_name" name="stu_l_name" class="form-control" placeholder="Last name">
                                <span class="error_form" id="stu_l_name_error_message"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" id="stu_gender" name="stu_gender">
                                    <option value='' selected='true' disabled='disabled'>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <span class="error_form" id="stu_gender_error_message"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control" id="stu_department" name="stu_department">
                                    <option value='' selected='true' disabled='disabled'>Select</option>
                                    <?php foreach ($departments as $department): ?>
                                        <option value="<?php echo $department['department_id']; ?>"><?php echo $department['department_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="error_form" id="stu_department_error_message"></span>
                            </div>
                        </div>
                    </div>

                </div>
<!--    =============content head department======================-->
                <div id="content_head_department" style="display: none">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" id="h_f_name" name="h_f_name" class="form-control" placeholder="First name">
                                <span class="error_form" id="h_f_name_error_message"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" id="h_l_name" name="h_l_name" class="form-control" placeholder="Last name">
                                <span class="error_form" id="h_l_name_error_message"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control" id="h_department" name="h_department">
                                    <option value='' selected='true' disabled='disabled'>Select</option>
                                    <?php foreach ($departments as $department): ?>
                                        <option value="<?php echo $department['department_id']; ?>"><?php echo $department['department_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="error_form" id="h_department_error_message"></span>
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>

                </div>
            </div>
            <div id="step-3" class="">
                <h3 class="border-bottom border-gray pb-2">Account Login</h3>
                <div id="content_for_login">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm-password</label>
                        <input type="password" id="password2" name="password2" class="form-control" placeholder="Confrim Password">
                    </div>
                </div>
                <div class="row" style="text-align: center">
                    <div class="col">
                        <span class="error_complete_form" id="complete_error_message" >Please complete information</span><br/>
                        <button type="submit" class="btn btn-primary" disabled>Submit</button>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>


</div>

<!-- Include jQuery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

<script src="<?php echo base_url() . "assets/adminlite/"; ?>plugins/jquery/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->

<script src="<?php echo base_url() . "assets/adminlite/"; ?>plugins/popper/umd/popper.min.js"></script>

<script src = "<?php echo base_url() . "assets/bootstrap/";?>js/bootstrap.min.js" ></script>

<!-- Include SmartWizard JavaScript source -->
<script type="text/javascript"
        src="<?php echo base_url() . "assets/smartwizard/"; ?>/dist/js/jquery.smartWizard.min.js"></script>

<script src="<?php echo base_url() . "assets/js/"; ?>sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {

        // Smart Wizard
        $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'arrows',
            transitionEffect: 'fade',
            showStepURLhash: true,
            toolbarSettings: {
                toolbarButtonPosition: 'center'
            }
        });


    });
    var type_user="";
    //function hide show content of user
    function showContent(select){
        type_user=$("#user_type").val();


        if(select.value==1){
            document.getElementById('content_lecturer').style.display="block";
            document.getElementById('content_student').style.display="none";
            document.getElementById('content_head_department').style.display="none";
            document.getElementById('content_staff').style.display="none";
        }else if(select.value==2) {
            document.getElementById('content_lecturer').style.display="none";
            document.getElementById('content_student').style.display="block";
            document.getElementById('content_head_department').style.display="none";
            document.getElementById('content_staff').style.display="none";
        }else if(select.value==3){
            document.getElementById('content_lecturer').style.display="none";
            document.getElementById('content_student').style.display="none";
            document.getElementById('content_head_department').style.display="block";
            document.getElementById('content_staff').style.display="none";
        }else if(select.value==4){
            document.getElementById('content_lecturer').style.display="none";
            document.getElementById('content_student').style.display="none";
            document.getElementById('content_head_department').style.display="none";
            document.getElementById('content_staff').style.display="block";
        }
    }
    //===========================form validate for choice user=====================
    $("#type_user_error_message").hide();
    var error_user_type = true;
    $("#user_type").focusout(function() {
        error_user_type=check_choice_validate("#user_type","#type_user_error_message","Please select user type");
        checkenablesave();
    });
   //=============================form validate for lecturer====================================


    $("#lec_f_name_error_message").hide();
    var error_lec_f_name = true;
    $("#lec_f_name").focusout(function() {
        error_lec_f_name=check_input_validate("#lec_f_name","#lec_f_name_error_message","Please input first name");
        checkenablesave();
    });
    $("#lec_l_name_error_message").hide();
    var error_lec_l_name = true;
    $("#lec_l_name").focusout(function() {
        error_lec_l_name=check_input_validate("#lec_l_name","#lec_l_name_error_message","Please input last name");
        checkenablesave();
    });

    $("#lec_gender_error_message").hide();
    var error_lec_gender = true;
    $("#lec_gender").focusout(function() {
        error_lec_gender=check_choice_validate("#lec_gender","#lec_gender_error_message","Please select gender");
        checkenablesave();
    });

    $("#lec_birthday_error_message").hide();
    var error_lec_birthday = true;
    $("#lec_birthday").focusout(function() {
        error_lec_birthday=check_input_validate("#lec_birthday","#lec_birthday_error_message","Please input birthday");
        checkenablesave();
    });

    $("#lec_position_error_message").hide();
    var error_lec_position = true;
    $("#lec_position").focusout(function() {
        error_lec_position=check_choice_validate("#lec_position","#lec_position_error_message","Please input position");
        checkenablesave();
    });
    $("#lec_department_error_message").hide();
    var error_lec_department = true;
    $("#lec_department").focusout(function() {
        error_lec_department=check_choice_validate("#lec_department","#lec_department_error_message","Please select department");
        checkenablesave();
    });

    $("#lec_date_in_work_error_message").hide();
    var error_lec_date_in_work = true;
    $("#lec_date_in_work").focusout(function() {
        error_lec_date_in_work=check_input_validate("#lec_date_in_work","#lec_date_in_work_error_message","Please input date in work");
        checkenablesave();
    });

    $("#lec_startwork_error_message").hide();
    var error_lec_startwork = true;
    $("#lec_startwork").focusout(function() {
        error_lec_startwork=check_input_validate("#lec_startwork","#lec_startwork_error_message","Please input start work");
        checkenablesave();
    });

    $("#lec_phone_error_message").hide();
    var error_lec_phone = true;
    $("#lec_phone").focusout(function() {
        error_lec_phone=check_input_validate("#lec_phone","#lec_phone_error_message","Please input phone number");
        checkenablesave();
    });


    //===================================form validate for staff============================

    $("#sta_f_name_error_message").hide();
    var error_sta_f_name = true;
    $("#sta_f_name").focusout(function() {
        error_sta_f_name=check_input_validate("#sta_f_name","#sta_f_name_error_message","Please input first name");
        checkenablesave();
    });
    $("#sta_l_name_error_message").hide();
    var error_sta_l_name = true;
    $("#sta_l_name").focusout(function() {
        error_sta_l_name=check_input_validate("#sta_l_name","#sta_l_name_error_message","Please input last name");
        checkenablesave();
    });

    $("#sta_gender_error_message").hide();
    var error_sta_gender = true;
    $("#sta_gender").focusout(function() {
        error_sta_gender=check_choice_validate("#sta_gender","#sta_gender_error_message","Please select gender");
        checkenablesave();
    });

    $("#sta_birthday_error_message").hide();
    var error_sta_birthday = true;
    $("#sta_birthday").focusout(function() {
        error_sta_birthday=check_input_validate("#sta_birthday","#sta_birthday_error_message","Please input birthday");
        checkenablesave();
    });

    $("#sta_position_error_message").hide();
    var error_sta_position = true;
    $("#sta_position").focusout(function() {
        error_sta_position=check_choice_validate("#sta_position","#sta_position_error_message","Please input position");
        checkenablesave();
    });


    $("#sta_date_in_work_error_message").hide();
    var error_sta_date_in_work = true;
    $("#sta_date_in_work").focusout(function() {
        error_sta_date_in_work=check_input_validate("#sta_date_in_work","#sta_date_in_work_error_message","Please input date in work");
        checkenablesave();
    });

    $("#sta_startwork_error_message").hide();
    var error_sta_startwork = true;
    $("#sta_startwork").focusout(function() {
        error_sta_startwork=check_input_validate("#sta_startwork","#sta_startwork_error_message","Please input start work");
        checkenablesave();
    });

    $("#sta_phone_error_message").hide();
    var error_sta_phone = true;
    $("#sta_phone").focusout(function() {
        error_sta_phone=check_input_validate("#sta_phone","#sta_phone_error_message","Please input phone number");
        checkenablesave();
    });

    //=============================form validate for student====================================


    $("#stu_f_name_error_message").hide();
    var error_stu_f_name = true;
    $("#stu_f_name").focusout(function() {
        error_stu_f_name=check_input_validate("#stu_f_name","#stu_f_name_error_message","Please input first name");
        checkenablesave();
    });
    $("#stu_l_name_error_message").hide();
    var error_stu_l_name = true;
    $("#stu_l_name").focusout(function() {
        error_stu_l_name=check_input_validate("#stu_l_name","#stu_l_name_error_message","Please input last name");
        checkenablesave();
    });

    $("#stu_gender_error_message").hide();
    var error_stu_gender = true;
    $("#stu_gender").focusout(function() {
        error_stu_gender=check_choice_validate("#stu_gender","#stu_gender_error_message","Please select gender");
        checkenablesave();
    });

    $("#stu_department_error_message").hide();
    var error_stu_department = true;
    $("#stu_department").focusout(function() {
        error_stu_department=check_choice_validate("#stu_department","#stu_department_error_message","Please select department");
        checkenablesave();
    });

    //=============================form validate for head department====================================


    $("#h_f_name_error_message").hide();
    var error_h_f_name = true;
    $("#h_f_name").focusout(function() {
        error_h_f_name=check_input_validate("#h_f_name","#h_f_name_error_message","Please input first name");
        checkenablesave();
    });
    $("#h_l_name_error_message").hide();
    var error_h_l_name = true;
    $("#h_l_name").focusout(function() {
        error_h_l_name=check_input_validate("#h_l_name","#h_l_name_error_message","Please input last name");
        checkenablesave();
    });

    $("#h_department_error_message").hide();
    var error_h_department = true;
    $("#h_department").focusout(function() {
        error_h_department=check_choice_validate("#h_department","#h_department_error_message","Please select department");
        checkenablesave();
    });


    //=======================form validate account email===================
    var error_email = true;
    $("#email").focusout(function() {
        error_email=check_email_validate("#email");
        if(type_user==1){
            checkenablesave_lecturer();
        }else if(type_user==2){
            checkenablesave_student();
        }else if(type_user==3){
            checkenablesave_head_department();
        }else if(type_user==4){
            checkenablesave_staff();
        }

    });
    var error_password = true;
    $("#password").focusout(function() {
        error_password=check_input_validate("#password");
        if(type_user==1){
            checkenablesave_lecturer();
        }else if(type_user==2){
            checkenablesave_student();
        }else if(type_user==3){
            checkenablesave_head_department();
        }else if(type_user==4){
            checkenablesave_staff();
        }
    });
    var error_password2 = true;
    $("#password2").focusout(function() {
        error_password2=check_confirm_password_validate("#password","#password2");
        checkenablesave();
        // if(type_user==1){
        //     checkenablesave_lecturer();
        // }else if(type_user==2){
        //     checkenablesave_student();
        // }else if(type_user==3){
        //     checkenablesave_head_department();
        // }else if(type_user==4){
        //     checkenablesave_staff();
        // }
    });

    //check enable submit lecturer
    function checkenablesave() {
        if (error_email == false &&
            error_password == false &&
            error_password2 == false &&
            error_user_type == false ) {
            $(':input[type="submit"]').prop('disabled', false);
            $("#complete_error_message").html("Information Complete");
            $("#complete_error_message").css("color", "#00a65a");
        } else {
            $(':input[type="submit"]').prop('disabled', true);
            $("#complete_error_message").html("Please complete information step");
            $("#complete_error_message").css("color", "red");
        }
    }

    //chec match password
    function check_confirm_password_validate(control_id,control_id2) {

        var str = $(control_id).val();
        var str2= $(control_id2).val();

        if(str!=str2) {
            $(control_id2).css("border-color", "red");
            return true;
        } else {
            $(control_id2).css("border-color", "#00a65a");
            return false;
        }
    }

    //check input validate
    function check_input_validate(control_id,error_message_id,message) {

        var str_length = $(control_id).val().length;

        if(str_length <1) {
            $(error_message_id).html(message);
            $(error_message_id).show();
            $(control_id).css("border-color", "red");
            return true;
        } else {
            $(error_message_id).hide();
            $(control_id).css("border-color", "#00a65a");
            return false;
        }
    }


    //check select validate
    function check_choice_validate(control_id,error_message_id,message) {

        var str_length = $(control_id).val();

        if(str_length == "" || str_length==null) {
            $(error_message_id).html(message);
            $(error_message_id).show();
            $(control_id).css("border-color", "red");
            return true;
        } else {
            $(error_message_id).hide();
            $(control_id).css("border-color", "#00a65a");
            return false;
        }
    }


    //check email validate
    function check_email_validate(control_id) {

        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

        if(pattern.test($(control_id).val())) {
            $(control_id).css("border-color", "#00a65a");
            return false;
        } else {
            $(control_id).css("border-color", "red");
            return true;

        }
    }

    //set disable btn save
    function setDisableBtnSave(){
        error_lec_f_name = true;
        error_lec_l_name = true;
        error_lec_gender = true;
        error_lec_birthday = true;
        error_lec_position = true;
        error_lec_department = true;
        error_lec_date_in_work = true;
        error_lec_startwork = true;

        error_email = true;
        error_password = true;
        error_password2 = true;
        error_user_type = true;
    }



    //add user data
    $(document).on('submit', '#user_form', function(event){
        event.preventDefault();
        //alert('submit');
        $.ajax({
            url:"<?php echo base_url() . 'signup/create_user/'?>"+type_user,
            method:'POST',
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(data)
            {


                //swal("Welcome","Member create successfully !","success");
                if(data == "failed"){
                    swal({
                        title: "Error!",
                        text: "The email has been used by a user !",
                        type: "success",
                        icon: "error"
                    }).then(function () {
                        setDisableBtnSave();
                        //checkenablesave_lecturer();
                        //window.location.href = '<?php echo base_url(); ?>';
                    });
                }
                if(data=="success"){
                    swal({
                        title: "Success!",
                        text: "New member registered !",
                        type: "success",
                        icon: "success"
                    }).then(function () {
                        setDisableBtnSave();
                        //checkenablesave_lecturer();
                        window.location.href = '<?php echo base_url(); ?>';
                    });
                }

            }
        });
    });

</script>
</body>
</html>