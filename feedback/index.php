<?php
session_start();
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
                                <button class="loginoutbutton" name="weblogOff" id="u_0_11"><a href="../logout.php">Logout</a></button>
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
                    <div class="pvl">
                        <div class="_52lt">Feedback...!</div>
                    </div>
                    <form action="../comments.php" method="post" id="reg" name="reg">
                        <div id="reg_form_box" class="large_form">
                            <div class="clearfix _58mh">
                                <div class="mbm _3-90 lfloat _ohe">
                                    <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                        <div class="placeholder">First name</div>
                                        <input name="fname" type="text" class="inputtext transparent" onkeydown="keydown(event)" onkeyup="keyup(event)">
                                    </div>
                                </div>
                                <div class="mbm rfloat _ohf">
                                    <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                        <div class="placeholder">Last name</div>
                                        <input name="lname" type="text" class="inputtext transparent" onkeydown="keydown(event)" onkeyup="keyup(event)">
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
                            <div class="mbm" id="u_0_4">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <div class="placeholder">Feedback about ?</div>
                                    <input name="subject" type="text" class="inputtext transparent _58mg" onkeydown="keydown(event)" onkeyup="keyup(event)">
                                </div>
                            </div>
                            <div class="mbm" id="u_0_7">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <div class="placeholder">Please leave your comment here..!!</div>
                                    <textarea name="comment" class="inputtext transparent _58mg" onkeydown="keydown(event)" onkeyup="keyup(event)"></textarea>
                                </div>
                            </div>
                            <div class="clearfix">
                                <button type="submit" class="_52lq" name="websubmit" id="u_0_9">Submit</button>
                            </div>
                        </div>
                    </form>
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
