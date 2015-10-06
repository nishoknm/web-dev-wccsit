<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../default.css">
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
                        Logged in as:
                        <?php echo $_SESSION["id"] ?>
                            <button class="loginoutbutton" name="weblogOff" id="u_0_11"><a href="logout.php">Logout</a></button>
                            <?php else : ?>
                                <div class="login">
                                    <form action="onlineregistered.php" method="post" id="loginout" name="login">
                                        <input type="text" name="email" placeholder="E-mail" class="logininput">
                                        <input type="password" name="password" placeholder="Password" class="logininput">
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
            <div id="underc">
                <img src="../images/underconstruction.jpeg" alt="Under Construction" />
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
