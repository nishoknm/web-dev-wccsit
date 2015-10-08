<?php
session_start();
if(!empty($_SESSION["id"]))
{
    require_once('../database.php');
    $email = $_SESSION["id"];
    $query = "SELECT * FROM users WHERE email = '$email'";
    $users = $db->query($query);
    $user = $users->fetch();
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
        <script>
                function keydown(eve) {
                    var ele = eve.target;
                    ele.className = ele.className.replace(" transparent", "");
                }
                function keyup(eve) {
                    var ele = eve.target;
                    ele.value == "" && ele.className.indexOf(" transparent") == -1 ? ele.className += " transparent" : "";
                }
        </script>
    </head>
    <body>
        <div id="header">
            <div>
                <img src="../images/images.jpg" title="WC-CSIT" />
                <div style="float:right;height:50px">
                    <ul id="sublist">
                        <li><a href="../generalInfo">General Information</a> | </li>
                        <li><a href="../important-dates">Important Dates</a> | </li>
                        <li><a href="../revieweronline">Reviewer Login</a> | </li>
                        <li><a href="../onlineregistration">Online Registration</a> | </li>
                        <li><a href="../guidelines">Guidelines</a> | </li>
                        <li><a href="../feedback">Comments and feedback</a></li>
                    </ul>
                    <div id="login">
                        <?php if(!empty($_SESSION["id"])) : ?>
                        Logged in as :
                        <?php echo $_SESSION["id"] ?>
                        <form action="../logout.php" method="post" id="logout" name="logout" class="formlogout">
                            <button type="submit" class="loginoutbutton" name="weblogOff" id="u_0_11">Logout</button>
                        </form>
                        <?php else : ?>
                        <div class="login">
                            <form action="../login.php" method="post" id="loginout" name="login">
                                <input type="text" name="email" placeholder=" E-mail" class="logininput">
                                <input type="password" name="password" placeholder=" Password" class="logininput">
                                <button type="submit" class="loginoutbutton" name="weblogin" id="u_0_10">Login</button>
                            </form>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div id="multicolor-bar">
                <div class="col-xs-2 colorblock-1"></div>
                <div class="col-xs-2 colorblock-2"></div>
                <div class="col-xs-2 colorblock-3"></div>
                <div class="col-xs-2 colorblock-4"></div>
                <div class="col-xs-2 colorblock-5"></div>
                <div class="col-xs-2 colorblock-6"></div>
            </div>
            <ul id="mainlist">
                <li><a href="../">Home</a> | </li>
                <li><a href="../speakers">Keynote Speakers</a> | </li>
                <li><a href="../callpaper">Call for paper</a> | </li>
                <li><a href="../majorareas">Major Areas</a> | </li>
                <li><a href="../papersubmission">Paper Submission</a> | </li>
                <li><a href="../program">Conference Program</a></li>
            </ul>
        </div>
        <div id="container">
            <div id="entrycontent">
                <div id="signup">
                    <?php if(empty($_SESSION["id"])) : ?>
                    <div class="pvl">
                        <div class="_52lq">Sign Up</div>
                        <div class="_52lr">Fee based on attendee status. !!</div>
                    </div>
                    <form action="../onlineregistered.php" method="post" id="reg" name="reg">
                        <div id="reg_form_box" class="large_form">
                            <div class="clearfix _58mh">
                                <div class="mbm _3-90 lfloat _ohe">
                                    <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                        <div class="placeholder">First name</div>
                                        <input name="fName" type="text" class="inputtext transparent" onkeydown="keydown(event)" onkeyup="keyup(event)">
                                    </div>
                                </div>
                                <div class="mbm rfloat _ohf">
                                    <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                        <div class="placeholder">Last name</div>
                                        <input name="lName" type="text" class="inputtext transparent" onkeydown="keydown(event)" onkeyup="keyup(event)">
                                    </div>
                                </div>
                            </div>
                            <div class="mbm">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <div class="placeholder">Email</div>
                                    <input name="email" type="text" class="inputtext transparent _58mg" onkeydown="keydown(event)" onkeyup="keyup(event)">
                                </div>
                            </div>
                            <div class="mbm" id="u_0_3">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <div class="placeholder">Mobile number</div>
                                    <input name="number" type="text" class="inputtext transparent _58mg" onkeydown="keydown(event)" onkeyup="keyup(event)">
                                </div>
                            </div>
                            <div class="mbm" id="u_0_5">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <div class="placeholder">Address</div>
                                    <input name="address" type="text" class="inputtext transparent _58mg" onkeydown="keydown(event)" onkeyup="keyup(event)">
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
                                    <div class="placeholder">Company or Organization</div>
                                    <input name="comOrg" type="text" class="inputtext transparent _58mg" onkeydown="keydown(event)" onkeyup="keyup(event)">
                                </div>
                            </div>
                            <div class="mbm">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <div class="placeholder">New password</div>
                                    <input name="password" type="password" class="inputtext transparent _58mg" onkeydown="keydown(event)" onkeyup="keyup(event)">
                                </div>
                            </div>
                            <div class="mtm _5wa2 _5dbb"><span class="_5k_3"><span class="_5k_2 _5dba"><input type="radio" name="sex" value="Female" id="u_0_6"><label class="_52lr">Female</label></span><span class="_5k_2 _5dba"><input type="radio" name="sex" value="Male" id="u_0_7"><label class="_52lr">Male</label></span></span><i class="_5dbc _5k_6 img sp_LGqQTdUydKB sx_a32b95"></i><i class="_5dbd _5k_7 img sp_LGqQTdUydKB sx_b4917b"></i></div>
                            <div class="_52lr" id="u_0_8">
                                <p class="_52lr">By clicking Sign Up, you agree to our Terms and that you have read our Data Policy, including our Cookie Use.</p>
                            </div>
                            <div class="clearfix">
                                <button type="submit" class="_52lq" name="websubmit" id="u_0_9">Sign Up</button>
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
            <div id="footer">
                <div id="footertop">
                    <p><strong>World Congress CS-IT Conference (WS-CSIT)</strong>
                    <br>Hilton Hotel, Orlando, FL, USA
                    <br>Phone: 111.111.1111 | Fax: 111.111.2222</p>
                </div>
                <div id="footerbottom">
                    <ul id="footerlist">
                        <li>
                            <a href=""><img src="../images/facebook.png" alt="Facebook" /></a>
                        </li>
                        <li>
                            <a href=""><img src="../images/linkedin.png" alt="LinkedIn" /></a>
                        </li>
                        <li>
                            <a href=""><img src="../images/twitter.png" alt="Twitter" /></a>
                        </li>
                        <li>
                            <a href=""><img src="../images/google.png" alt="Google" /></a>
                        </li>
                        <li>
                            <a href=""><img src="../images/youtube.png" alt="Google" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>