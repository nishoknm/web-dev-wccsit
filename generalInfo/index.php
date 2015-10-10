<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../default.css">
    <style>
    #xcontainer {
        height: 685px;
    }
    </style>
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
        <div id="entrycontent">
            <div class="leftcontent">
                <div>
                    <h1 style="text-align: center; padding-bottom: 30px;">WC-CSIT 2016, Orlando, FL, USA</h1>
                    <p style="text-align: justify;"><strong>The  World Congress CS-IT Conferences</strong> is an annual conference that brings together researchers and scientists from mathematics and computer science as basic computing disciplines, researchers from various application areas who are pioneering computational methods in sciences such as physics, chemistry, life sciences, and engineering, as well as in arts and humanitarian fields, to discuss problems and solutions in the area, to identify new issues, and to shape future directions for research.</p>
                    <p style="text-align: justify;">WC-CSIT 2016 in Orlando, FL, USA, will be the sixteenth in this series of highly successful conferences. Located on the Pacific coast of California, Orlando is known for its beautiful beaches and parks, warm climate and world-class attractions like SeaWorld and the Orlando Zoo.</p>
                    <p>Location : Hilton Hotel, Orlando, FL, USA , Conference only block certain number of rooms until May 20th 2016 for a discount rate</p>
                    <p style="text-align: justify;">Since its inception in 2001, WC-CSIT has attracted increasingly higher quality and numbers of attendees and papers. Average attendance each year is about 350 participants. The proceedings series have become a major intellectual resource for computational science researchers and serve to both define and advance the state of the art of the field. An archive of the previous meetings is available through the <a title="Previous WC-CSIT" href="previous-wc-csit/">Previous WC-CSIT conferences page</a>.</p>
                    <p style="text-align: justify;">Out of the submitted full papers to the main track, we will select some 30% high-quality papers for presentation at the conference and publication in the proceedings. These are published by IEEE in the open-access <a title="IEEE" href="https://www.ieee.org/index.html">IEEE series</a> and indexed by Scopus, ScienceDirect, Thomson Reuters Conference Proceedings Citation (former ISI Proceedings) – an integrated index within Web of Science. The papers will contain linked references, XML versions and citable DOI numbers.</p>
                    <p style="text-align: justify;">WC-CSIT is well known for its excellent line up of <a title="Keynote Lectures" href="../speakers">keynote speakers</a>.
                        <br>
                    </p>
                    <p style="text-align: center;"><strong>We look forward to welcoming you to this exciting event in Orlando!</strong></p>
                    <div style="border-bottom: 1px solid; margin: 10px 0px;"></div>
                    <h4 style="text-align: center; padding-bottom: 30px;float:left;width:50%">WC-CSIT 2016 is organised by:</h4>
                    <div style="padding-top: 15px;">
                        <a title="Montclair State University" href="http://www.montclair.edu/" target="_blank"><img src="../images/msu.jpg" alt="MSU" height="50" width="250"></a>
                    </div>
                </div>
            </div>
            <div class="rightcontent">
                <div>
                    <div id="attachment_37" style="text-align: center;">
                        <a href=""><img src="../images/images.jpg" alt="LOGO2"></a>
                    </div>
                    <div style="text-align: center;">
                        <a href="new.html"><img id="fblogo" src="../images/facebook_blue.png" alt="facebook_logo" height="60" width="60"></a>
                        <a href="new.html"><img id="fblogo" src="../images/Twitter_logo_blue.png" alt="logo_twitter_withbird_1000_allblue" height="58" width="60"></a>
                    </div>
                    <hr width="75%">
                    <div style="text-align: center; margin: 20px 0px;"><strong>Corporate Supporters</strong></div>
                    <div style="text-align: center;">
                        <a title="Elsevier" href="http://www.elsevier.com/"><img style="margin-bottom: 25px;" src="../images/elsevier_logo.png" alt="elsevier_logo" height="121" width="109"></a>
                        <a title="Journal of Computational Science" href="https://www.ieee.org/index.html"><img style="margin-bottom: 25px;" src="../images/IEEE.jpg" alt="IEEE" height="162" width="122"></a>
                        <a href="http://www.sdsc.edu/" title="SDSC"><img src="../images/SDSC_logo.jpg" alt="SDSC Logo" style="margin-bottom:25px;" height="85%" width="85%"></a>
                        <a title="University of Amsterdam" href="http://uva.computationalscience.nl/"><img style="margin-bottom: 25px;" src="../images/UVA_en.jpg" alt="UVA_en" height="63" width="180"></a>
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
    </div>
</body>


</html>
