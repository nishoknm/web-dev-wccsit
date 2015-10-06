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
            <h1 style="padding-bottom: 30px;text-align:center">Important Dates</h2>
        <table id="impdates" cellpadding="1">
            <tbody>
                <tr class="odd">
                    <td style="width: 50%;">Full paper submission</td>
                    <td>December 5th, 2015</td>
                </tr>
                <tr>
                    <td>Notification of acceptance of papers</td>
                    <td>January 26th, 2016</td>
                </tr>
                <tr class="odd">
                    <td>Camera-ready papers</td>
                    <td>February 26th, 2016</td>
                </tr>
                <tr>
                    <td>Author registration</td>
                    <td>January 27 - March 4, 2016</td>
                </tr>
                <tr class="odd">
                    <td>Participant (non-author) early registration</td>
                    <td>January 27 - April 22, 2016</td>
                </tr>
                <tr>
                    <td>Participant (non-author) late registration</td>
                    <td>April 23, 2016</td>
                </tr>
                <tr class="odd">
                    <td><strong>Welcome Reception</strong></td>
                    <td><strong>July 6, 2016 (17:00)</strong></td>
                </tr>
                <tr>
                    <td><strong>Conference sessions</strong></td>
                    <td><strong>July 7th - 10th, 2016</strong></td>
                </tr>
            </tbody>
        </table>
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
