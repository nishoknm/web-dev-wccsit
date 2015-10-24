<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../default.css">
</head>

<body>
    <div id="container">
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
                                <form action="../model.php" method="post" id="logout" name="logout" class="formlogout">
                                    <button type="submit" class="loginoutbutton" name="websubmit" value="logout" id="u_0_11">Logout</button>
                                </form>
                                <?php else : ?>
                                    <div class="login">
                                        <form action="../model.php" method="post" id="loginout" name="login">
                                            <input type="text" name="email" placeholder=" E-mail" class="logininput">
                                            <input type="password" name="password" placeholder=" Password" class="logininput">
                                            <button type="submit" class="loginoutbutton" name="websubmit" value="login" id="u_0_10">Login</button>
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
        <div id="entrycontent">
            <div class="maincol">
                <div>
                    <p>We look forward to seeing you in Orlando! Please note: All events and times are subject to change - check back regularly for the latest schedule and details about conference events.</p>
                    <p><span>Some events require an additional preregistration fee and ticket</span>, while the rest are included in the overall conference registration.</p>
                    <table class="acschedule fourc" border="0" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <td colspan="2">Wednesday, July 6</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>4:30 p.m.-7:30 p.m.</td>
                                <td>Welcome Reception</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="acschedule fourc" border="0" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <td colspan="2">Thrusday, July 7</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>7:00 a.m.-6:00 p.m.</td>
                                <td>Conference Registration</td>
                            </tr>
                            <tr>
                                <td>8:00 a.m.-12:00 p.m.</td>
                                <td><span class="acbenjamins">Preconference Workshops</span></td>
                            </tr>
                            <tr>
                                <td>8:30 a.m.-8:45 a.m.</td>
                                <td>International Education Expo: Opening Ceremony</td>
                            </tr>
                            <tr>
                                <td>8:30 a.m.-3:30 p.m.</td>
                                <td>Expo Hall</td>
                            </tr>
                            <tr>
                                <td>9:30 a.m.-10:30 a.m.</td>
                                <td>First-Timers Orientation</td>
                            </tr>
                            <tr>
                                <td>2:30 p.m.-3:45 p.m.</td>
                                <td>Concurrent Sessions and Seminars</td>
                            </tr>
                            <tr>
                                <td>5:30 p.m.-8:00 p.m.</td>
                                <td>Special Event: Opening Celebration</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="acschedule fivec" border="0" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <td colspan="2">Friday, July 8</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>7:00 a.m.-5:30 p.m.</td>
                                <td>Conference Registration</td>
                            </tr>
                            <tr>
                                <td>8:30 a.m.-10:00 a.m.</td>
                                <td>Poster Fairs</td>
                            </tr>
                            <tr>
                                <td>8:30 a.m.-5:00 p.m.</td>
                                <td>Expo Hall</td>
                            </tr>
                            <tr>
                                <td>8:45 a.m.-9:45 a.m. </td>
                                <td>Concurrent Sessions</td>
                            </tr>
                            <tr>
                                <td>8:45 a.m.-9:45 a.m. </td>
                                <td>Member Interest Group Meetings</td>
                            </tr>
                            <tr>
                                <td>10:15 a.m. -11:15 a.m.</td>
                                <td>Concurrent Sessions</td>
                            </tr>
                            <tr>
                                <td>11:15 a.m.-12:45 p.m.</td>
                                <td>Poster Fairs</td>
                            </tr>
                            <tr>
                                <td>11:45 a.m.-12:45 p.m.</td>
                                <td>Concurrent Sessions</td>
                            </tr>
                            <tr>
                                <td>1:15 p.m.-2:15 p.m.</td>
                                <td>Concurrent Sessions</td>
                            </tr>
                            <tr>
                                <td>1:15 p.m.-2:15 p.m.</td>
                                <td>Member Interest Group Meetings</td>
                            </tr>
                            <tr>
                                <td>2:00 p.m.-3:30 p.m. </td>
                                <td>Poster Fairs</td>
                            </tr>
                            <tr>
                                <td>2:45 p.m.-3:45 p.m.</td>
                                <td>Concurrent Sessions</td>
                            </tr>
                            <tr>
                                <td>2:45 p.m.-3:45 p.m.</td>
                                <td>Member Interest Group Meetings</td>
                            </tr>
                            <tr>
                                <td>5:30 p.m.-6:30 p.m. </td>
                                <td>Regional Update Meetings </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="acschedule sixc" border="0" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <td colspan="2">Saturday, July 9</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>7:00 a.m.-5:30 p.m.</td>
                                <td>Conference Registration</td>
                            </tr>
                            <tr>
                                <td>8:00 a.m.-9:00 a.m.</td>
                                <td>Concurrent Sessions and Seminars</td>
                            </tr>
                            <tr>
                                <td>8:00 a.m.-9:00 a.m.</td>
                                <td>Member Interest Group Meetings</td>
                            </tr>
                            <tr>
                                <td>8:30 a.m.-5:00 p.m.</td>
                                <td>Expo Hall</td>
                            </tr>
                            <tr>
                                <td>9:30 a.m.-10:30 a.m.</td>
                                <td>Concurrent Sessions and Seminars&nbsp;</td>
                            </tr>
                            <tr>
                                <td>10:00 a.m.-12:00 p.m.</td>
                                <td><span>Poster Fairs</span></td>
                            </tr>
                            <tr>
                                <td>10:30 a.m.-2:00 p.m.</td>
                                <td>Dedicated Expo Hall Time *<em>No concurrent sessions scheduled at this time</em></td>
                            </tr>
                            <tr>
                                <td>12:00 p.m.-1:30 p.m.</td>
                                <td><a>Liberal Arts Institutions and Women's Colleges Luncheon</a></td>
                            </tr>
                            <tr>
                                <td>12:00 p.m.-1:30 p.m.</td>
                                <td><a>Community Colleges Luncheon</a></td>
                            </tr>
                            <tr>
                                <td colspan="1">11:00 a.m.-11:30 a.m. &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td colspan="1">Annual Business Meeting</td>
                            </tr>
                            <tr>
                                <td>2:00 p.m.-3:15 p.m.</td>
                                <td>Concurrent Sessions &nbsp;</td>
                            </tr>
                            <tr>
                                <td>2:00 p.m.-3:30 p.m.</td>
                                <td>Poster Fairs&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="acschedule fourc" border="0" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <td colspan="2">Sunday, July 10</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>7:30 a.m.-12:00 p.m.</td>
                                <td>Conference Registration</td>
                            </tr>
                            <tr>
                                <td>8:00 a.m.-9:00 a.m.</td>
                                <td>Concurrent Sessions</td>
                            </tr>
                            <tr>
                                <td>8:30 a.m.-11:15 a.m.</td>
                                <td>Expo Hall</td>
                            </tr>
                            <tr>
                                <td>9:00 a.m.-10:30 a.m.</td>
                                <td>Technology Fair</td>
                            </tr>
                            <tr>
                                <td>9:30 a.m.-10:30 a.m.</td>
                                <td>Concurrent Sessions</td>
                            </tr>
                            <tr>
                                <td>11:00 a.m.-12:15 p.m.</td>
                                <td>Concurrent Sessions</td>
                            </tr>
                            <tr>
                                <td>12:00 p.m.-1:30 p.m.</td>
                                <td><a>Pathways to Peace Luncheon</a></td>
                            </tr>
                            <tr>
                                <td>1:30 p.m.-2:30 p.m.</td>
                                <td>Concurrent Sessions &nbsp;</td>
                            </tr>
                            <tr>
                                <td>4:00 p.m.-5:30 p.m.</td>
                                <td>Special Event: Closing Celebration and Welcome to NAFSA 2016, Denver, Colorado</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
