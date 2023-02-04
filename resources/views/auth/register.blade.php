
<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <style type="text/css">
        html {
            overflow-y: scroll;
            background: url(dist/img/bk.png) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

    </style>

    <meta charset="utf-8" />
    <title>Registration | All In One Marketing Service</title>
    <meta name="google-translate-customization" content="c3c91eff8b5a0ded-878e61fea3a9f875-g9379dbb792475ecb-13"></meta>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="{{asset('dist/css/app.v1.css')}}" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <div id="google_translate_element" align="right"></div><script type="text/javascript">
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <style>
        #registration-step{margin:0;padding:0;}
        #registration-step li{list-style:none; float:left;padding:5px 10px;border-top:#EEE 1px solid;border-left:#EEE 1px solid;border-right:#EEE 1px solid;}
        #registration-step li.highlight{background-color:#EEE;}
        #registration-form{clear:both;border:1px #EEE solid;padding:20px;}
        .demoInputBox{padding: 10px;border: #F0F0F0 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
        .registration-error{color:#FF0000; padding-left:15px;}
        .message {color: #00FF00;font-weight: bold;width: 100%;padding: 10;}
        .btnAction{padding: 5px 10px;background-color: #09F;border: 0;color: #FFF;cursor: pointer; margin-top:15px;}
    </style>
    <script type="text/javascript">
        function enableState(str){
            if(str == "INDIA"){
                $('#counter').show();
            }else{
                $('#counter').hide();
            }
        }
        function validate()
        {
            var output = true;
            $(".registration-error").html('');
            if($("#basic-info").css('display') != 'none') {
                if(!($("#full_name").val())) {
                    output = false;
                    $("#fname-error").show();
                    $("#fname-error").html("required");
                }else{
                    $("#fname-error").hide();
                }

                if(!($("#enagic_email").val())) {
                    output = false;
                    $("#email1-error").show();
                    $("#email1-error").html("Email is required");
                }else{
                    $("#email1-error").hide();
                }

                if(!($("#contact_number").val())) {
                    output = false;
                    $("#mobile-error").show();
                    $("#mobile-error").html("Contact number is required");
                }else{
                    $("#mobile-error").hide();
                }

                if(!($("#anniversary_date").val())) {
                    output = false;
                    $("#adate-error").show();
                    $("#adate-error").html(" Anniversary is required");
                }else{
                    $("#adate-error").hide();
                }

                if(!($("#date_of_birth_spouse").val())) {
                    output = false;
                    $("#sdate-error").show();
                    $("#sdate-error").html("birth date spouse is required");
                }else{
                    $("#sdate-error").hide();
                }

                if(!($("#enagic_id_no").val())) {
                    output = false;
                    $("#enagicid-error").show();
                    $("#enagicid-error").html(" Enagic Id No required");
                }else{
                    $("#enagicid-error").hide();
                }

                if(!($("#birth_date").val())) {
                    output = false;
                    $("#bdate-error").show();
                    $("#bdate-error").html("birth date is required");
                }else{
                    $("#bdate-error").hide();
                }

                if(!($("#home_address").val())) {
                    output = false;
                    $("#haddress-error").show();
                    $("#haddress-error").html("Address is required");
                }else{
                    $("#haddress-error").hide();
                }

                if(!($("#blood_group").val())) {
                    output = false;
                    $("#bgroup-error").show();
                    $("#bgroup-error").html("Blood group is required");
                }else{
                    $("#bgroup-error").hide();
                }

                if(!($("#city").val())) {
                    output = false;
                    $("#city-error").show();
                    $("#city-error").html("City is required");
                }else{
                    $("#city-error").hide();
                }

                if(!($("#district").val())) {
                    output = false;
                    $("#district-error").show();
                    $("#district-error").html("District is required");
                }else{
                    $("#district-error").hide();
                }

                if(!($("#state").val())) {
                    output = false;
                    $("#state-error").show();
                    $("#state-error").html("State is required");
                }else{
                    $("#state-error").hide();
                }

                if(!($("#country").val())) {
                    output = false;
                    $("#country-error").show();
                    $("#country-error").html("Country is required");
                }else{
                    $("#country-error").hide();
                }
            }

            if($("#sponser-info").css('display') != 'none') {
                if(!($("#enagic_sponser_name").val())) {
                    output = false;
                    $("#usercode-name-error").show();
                    $("#usercode-name-error").html("Enagic Sponser Name is required");
                } else{
                    $("#usercode-name-error").hide();
                }

                if(!($("#enagic_sponser_id").val())) {
                    output = false;
                    $("#usercode-id-error").show();
                    $("#usercode-id-error").html("Enagic Sponser id is required");
                } else{
                    $("#usercode-id-error").hide();
                }

                if(!($("#device_mode").val())) {
                    output = false;
                    $("#device-model-error").show();
                    $("#device-model-error").html("Device Mode is required");
                } else{
                    $("#device-model-error").hide();
                }

                if(!($("#joining_date").val())) {
                    output = false;
                    $("#join-month-error").show();
                    $("#join-month-error").html("Joining date is required");
                } else{
                    $("#join-month-error").hide();
                }
            }

            return output;
        }
        $(document).ready(function() {
            $("#next").click(function(){
                var output = validate();
                if(output) {
                    var current = $(".highlight");
                    var next = $(".highlight").next("li");
                    if(next.length>0) {
                        $("#"+current.attr("id")+"-info").hide();
                        $("#"+next.attr("id")+"-info").show();
                        $("#back").show();
                        $("#finish").hide();
                        $(".highlight").removeClass("highlight");
                        next.addClass("highlight");
                        if($(".highlight").attr("id") == $("li").last().attr("id")) {
                            $("#next").hide();
                            $("#finish").show();
                        }
                    }
                }
            });
            $("#back").click(function(){
                var current = $(".highlight");
                var prev = $(".highlight").prev("li");
                if(prev.length>0) {
                    $("#"+current.attr("id")+"-info").hide();
                    $("#"+prev.attr("id")+"-info").show();
                    $("#next").show();
                    $("#finish").hide();
                    $(".highlight").removeClass("highlight");
                    prev.addClass("highlight");
                    if($(".highlight").attr("id") == $("li").first().attr("id")) {
                        $("#back").hide();
                    }
                }
            });
        });
    </script>
</head>
<body style="overflow: scroll;">
<section id="content" >
    <div class="container aside-xxl"> <a class="navbar-brand block" href="#">MAJESTY</a>
        <div class="row">
            <div class="col-sm-18">

                <section class="panel panel-default">
                    <header class="panel-heading">
                        <center><span class="h4"style="text-align: center;">Register</span></center>
                    </header>
                    <div class="panel-body">
                        <ul id="registration-step">
                            <li id="basic" class="highlight">Basic Info</li>
                            <li id="sponser">Enagic Sponser Details</li>
                        </ul>
                        <form action="{{route('register')}}" method="post"  data-validate="parsley" enctype="multipart/form-data">
                     @csrf
                            <div class="form-group pull-in clearfix">

                            </div>
                            <input type="hidden" name="todo" value="post">
                            <div id="basic-info">
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-12">
                                        <p class="text-muted">Please fill the information to continue</p>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" data-required="true" name="full_name" id="full_name" required placeholder="Enter Fullname">
                                        <i id="fname-error" class="registration-error" style="display: none;"></i>
                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-12">
                                        <label>Enagic Email ID</label>
                                        <input type="text" class="form-control" data-type="email" data-required="true" name="enagic_email" id="enagic_email" required placeholder="Enter Email">
                                        <i id="email1-error" class="registration-error" style="display: none;"></i>
                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-4">
                                        <label>Phone No.</label>
                                        <input type="text" class="form-control" data-type="phone" placeholder="(XXX) XXXX XXX" id="contact_number" data-required="true" name="contact_number" required>
                                        <i id="mobile-error" class="registration-error" style="display: none;"></i>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Alternative Phone No.</label>
                                        <input type="text" class="form-control" data-type="phone" placeholder="(XXX) XXXX XXX" id="alternative_contact_number" data-required="true" name="alternative_contact_number">
                                    </div>
                                    <div class="col-sm-4">
                                        <label> Blood Group</label>
                                        <select data-required="true" class="form-control" id="blood_group" name="blood_group" required>
                                            <option value="">Please choose Blood Group</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                        <i id="bgroup-error" class="registration-error" style="display: none;"></i>
                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-4">
                                        <label>Date of birth</label>
                                        <input type="date" class="form-control" data-required="true" id="birth_date" name="birth_date">
                                        <i id="bdate-error" class="registration-error" style="display: none;"></i>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Date of birth Spouse</label>
                                        <input type="date" class="form-control" data-required="true" id="date_of_birth_spouse" name="date_of_birth_spouse">
                                        <i id="sdate-error" class="registration-error" style="display: none;"></i>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Anniversary Date</label>
                                        <input type="date" class="form-control" data-required="true" id="anniversary_date" name="anniversary_date">
                                        <i id="adate-error" class="registration-error" style="display: none;"></i>
                                    </div>
                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-12">
                                        <label>Home Address</label>
                                        <input type="text" class="form-control" data-required="true" id="home_address" name="home_address" placeholder="home_address">
                                        <i id="haddress-error" class="registration-error" style="display: none;"></i>
                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-12">
                                        <label>Country</label>
                                        <select data-required="true" class="form-control" id="country" name="country" required onchange="enableState(this.value)">
                                            <option value="">Please choose</option>
                                            <option value='INDIA'>INDIA</option>                </select>
                                        <i id="country-error" class="registration-error" style="display: none;"></i>
                                    </div>
                                </div>

                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-4">
                                        <label>City</label>
                                        <input type="text" class="form-control" data-required="true" id="city" name="city" required placeholder="Enter City">
                                        <i id="city-error" class="registration-error" style="display: none;"></i>
                                    </div>
                                    <div id="counter">
                                        <div class="col-sm-4">
                                            <label>District</label>
                                            <input type="text" class="form-control" placeholder="Enter District" data-required="true" name="district" id="district" required>
                                            <i id="district-error" class="registration-error" style="display: none;"></i>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>State</label>
                                            <select data-required="true" class="form-control" id="state" name="state" required>
                                                <option value="">Please choose</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                            <i id="state-error" class="registration-error" style="display: none;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-6">
                                        <label>Enagic ID No.</label>
                                        <input type="text" class="form-control" id="enagic_id_no" name="enagic_id_no" placeholder="Enagic ID No." data-required="true">
                                        <i id="enagicid-error" class="registration-error" style="display: none;"></i>
                                    </div>
                                    <div class="col-sm-6">
                                    <label class="control-label">Profile Picture</label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" type="file" name="profile_pic">
                                        @error('profile_pic')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group pull-in clearfix">
                                    <div class="col-sm-6">
                                        <label>Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control"  placeholder=" Confirm Password" name="password_confirmation" required autocomplete="new-password">


                                    </div>
                                </div>


                            </div>
                            <div id="sponser-info" style="display:none;">
                                <div class="form-group">
                                    <label>Enagic Sponser Name</label>
                                    <input type="text" class="form-control" id="enagic_sponser_name" name="enagic_sponser_name" placeholder="Enter Enagic Sponser Name" data-required="true" required="">
                                    <i id="usercode-name-error" class="registration-error" style="display: none;"></i>
                                </div>
                                <div class="form-group">
                                    <label>Enagic Sponser ID</label>
                                    <input type="text" class="form-control" id="enagic_sponser_id" name="enagic_sponser_id" placeholder="Enter Enagic Sponser ID" data-required="true" required="">
                                    <i id="usercode-id-error" class="registration-error" style="display: none;"></i>
                                </div>

                                <div class="form-group">
                                    <label>Device Model</label>
                                    <select data-required="true" class="form-control" id="device_mode" name="device_mode" required>
                                        <option value="">Please choose</option>
                                        <option value='1'>JRIV | 218000.00</option><option value='2'>SD501 | 277000.00</option><option value='3'>SD501 PLATINUM | 297000.00</option><option value='4'>K8 | 343000.00</option><option value='5'>SD501 SUPER | 397000.00</option>    </select>
                                    <i id="device-model-error" class="registration-error" style="display: none;"></i>
                                </div>

                                <div class="form-group">
                                    <label>Joining Month/Year</label>
                                    <input type="date" class="form-control" id="joining_date" name="joining_date" placeholder="Enter Joining Month/Year. Like(MM/YY)" data-required="true" required="">
                                    <i id="join-month-error" class="registration-error" style="display: none;"></i>
                                </div>


                                <div class="checkbox i-checks">
                                    <label>
                                        <input type="checkbox" name="check" data-required="true" required><i></i> I agree to the <a href="#" class="text-info">Terms of Service</a>
                                    </label>
                                </div>

                            </div>
                            <footer class="panel-footer text-right bg-light lter">
                                <input class="btn btn-info btn-s-xs" type="button" name="back" id="back" value="Back" style="display:none;">
                                <input class="btn btn-danger btn-s-xs" type="button" name="next" id="next" value="Next" >
                                <button class="btn btn-success btn-s-xs" name="finish" id="finish" style="display:none;">Register</button>
                            </footer>

                </section>

                <div class="line line-dashed"></div>
                <p class="text-muted text-center"><small style="color:#ffffff;">Already have an account?</small></p>
                <a href="index.php" class="btn btn-lg btn-success btn-block">Sign in</a>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder clearfix">
        <p> <small style="color:#ffffff;">Powered By - All In One Marketing Service </small> </p>
    </div>
</footer>
<!-- / footer -->
<!-- Bootstrap -->
<!-- App -->
<!-- <script src="js/app.v1.js"></script> -->
<!-- <script src="js/app.plugin.js"></script> -->
</body>
</html>
