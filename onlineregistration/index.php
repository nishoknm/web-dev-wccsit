<?php
session_start();
if(!empty($_SESSION["id"]))
{
    require_once('../database.php');
    $user = get_user($_SESSION["id"]);
    $newemail = $user['email'];
    $fName = $user['fname'];
    $lName = $user['lname'];
    $number = $user['number'];
    $address = $user['address'];
    $attendee = $user['attendee'];
    $comOrg = $user['company'];
    $pass = $user['password'];
    $sex = $user['sex'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../default.css">
    </head>
    <body>
        <div id="container">
            <?php include('../headerview.php') ?>
            <div id="entrycontent">
                <div id="signup">
                    <?php if(empty($_SESSION["id"])) : ?>
                    <div class="pvl">
                        <div class="_52lq">Sign Up</div>
                        <div class="_52lr">Fee based on attendee status. !!</div>
                    </div>
                    <form action="../model.php" method="post" id="reg" name="reg">
                        <div id="reg_form_box" class="large_form">
                            <div class="clearfix _58mh">
                                <div class="mbm _3-90 lfloat _ohe">
                                    <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                        <input name="fName" type="text" class="inputtext transparent" placeholder="First name">
                                    </div>
                                </div>
                                <div class="mbm rfloat _ohf">
                                    <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                        <input name="lName" type="text" class="inputtext transparent" placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="mbm">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <input name="email" type="text" class="inputtext transparent _58mg" placeholder="Email">
                                </div>
                            </div>
                            <div class="mbm" id="u_0_3">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <input name="number" type="text" class="inputtext transparent _58mg" placeholder="Mobile number">
                                </div>
                            </div>
                            <div class="mbm" id="u_0_5">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <input name="address" type="text" class="inputtext transparent _58mg" placeholder="Address">
                                </div>
                            </div>
                            <div class="mbm" id="u_0_6">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <select name="attendee" id="attendee" class="inputtext transparent _58ms">
                                        <option value="Author">Author</option>
                                        <option value="Student" title="Student">Student</option>
                                        <option value="Regular Attendee" title="Regular Attendee">Regular Attendee</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mbm" id="u_0_7">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <input name="comOrg" type="text" class="inputtext transparent _58mg" placeholder="Company or Organization">
                                </div>
                            </div>
                            <div class="mbm">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <input name="password" type="password" class="inputtext transparent _58mg" placeholder="New password">
                                </div>
                            </div>
                            <div class="mtm _5wa2 _5dbb"><span class="_5k_3"><span class="_5k_2 _5dba"><input type="radio" name="sex" value="Female" id="u_0_6"><label class="_52lr">Female</label></span><span class="_5k_2 _5dba"><input type="radio" name="sex" value="Male" id="u_0_7"><label class="_52lr">Male</label></span></span><i class="_5dbc _5k_6 img sp_LGqQTdUydKB sx_a32b95"></i><i class="_5dbd _5k_7 img sp_LGqQTdUydKB sx_b4917b"></i></div>
                            <div class="_52lr" id="u_0_8">
                                <p class="_52lr">By clicking Sign Up, you agree to our Terms and that you have read our Data Policy, including our Cookie Use.</p>
                            </div>
                            <div class="clearfix">
                                <button type="submit" class="_52lq" name="websubmit" value="signup" id="u_0_9">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <?php else : ?>
                    <div class="pvl">
                        <div class="_52lq">User Information</div>
                    </div>
                    <div id="reg_form_box" class="large_form">
                        <div class="mbm">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <div class="placeholder"><b>Full Name : </b>
                                    <?php echo $lName.", ".$fName ?>
                                </div>
                                <input disabled name="name" type="text" class="inputtext transparent _58mg">
                            </div>
                        </div>
                        <div class="mbm">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <div class="placeholder"><b>E-mail : </b>
                                    <?php echo $newemail ?>
                                </div>
                                <input disabled name="email" type="text" class="inputtext transparent _58mg">
                            </div>
                        </div>
                        <div class="mbm">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <div class="placeholder"><b>Number : </b>
                                    <?php echo $number ?>
                                </div>
                                <input disabled name="number" type="text" class="inputtext transparent _58mg">
                            </div>
                        </div>
                        <div class="mbm">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <div class="placeholder"><b>Address : </b>
                                    <?php echo $address ?>
                                </div>
                                <input disabled name="address" type="text" class="inputtext transparent _58mg">
                            </div>
                        </div>
                        <div class="mbm">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <div class="placeholder"><b>Type : </b>
                                    <?php echo $attendee ?>
                                </div>
                                <input disabled name="attendee" type="text" class="inputtext transparent _58mg">
                            </div>
                        </div>
                        <div class="mbm">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <div class="placeholder"><b>Company : </b>
                                    <?php echo $comOrg ?>
                                </div>
                                <input disabled name="company" type="text" class="inputtext transparent _58mg">
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php include('../footerview.php') ?>
        </div>
    </body>
</html>