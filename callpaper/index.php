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
                            Logged in as : <?php echo $_SESSION["id"] ?>
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
            <div class="entry-content">
                <h1 style="padding-bottom: 30px;">Call for Papers</h2>
            <div style="float: right; margin-left: 50px;">
                <br>
                <a href="https://www.ieee.org/index.html" target="_blank"><img style="border: none;" alt="IEEE - logo" src="../images/ieee.jpg"></a>
            </div>
            <p style="text-align: justify;">Authors are invited to submit manuscripts reporting original, unpublished research and recent developments in Computational Sciences. All accepted <span style="text-decoration:underline;">full papers</span> will be included in the <strong>open-access</strong> <b><a href="http://www.ieee.org/index.html" target="_blank">IEEE</a></b> series and indexed by Scopus, ScienceDirect, Thomson Reuters Conference Proceedings Citation (former ISI Proceedings) – an integrated index within Web of Science. The papers will contain linked references, XML versions and citable DOI numbers.</p>
            <p style="text-align: justify;">WC-CSIT 2016 invites original contributions on all topics related to Computational Science, including, but not limited to:</p>
            <ul>
                <li>Artificial Intelligence</li>
                <li>Problem Solving Environments</li>
                <li>Computer Security</li>
                <li>Web- and Grid-based Simulation and Computing</li>
                <li>Parallel and Distributed Computing</li>
                <li>Advanced Computing Architectures and New Programming Models</li>
                <li>Parallel Processing</li>
                <li>New Algorithmic Approaches to Computational Kernels and Applications</li>
                <li>Computational Humanities and Sociology</li>
                <li>Human Computer Interface</li>
            </ul>
            <p style="text-align: justify;">The manuscripts of up to <strong>10 pages</strong>, written in <strong>English</strong> and&nbsp;formatted according to the WS-CSIT templates, and should be submitted electronically (link coming soon).&nbsp;<strong>Templates</strong> will be available for download in the WS-CSIT right-hand-side menu in a 'New submission' mode. </p>
            <p style="text-align: justify;"><b>Papers must be based on <strong>unpublished original work</strong> and must be submitted to WS-CSIT only.&nbsp;</b><span style="text-decoration: underline;">Submission implies the willingness of at least one of the authors to register and present the paper.</span></p>
            <p style="text-align: justify;"><strong>Deadlines</strong> for draft paper submission, notification of acceptance, camera-ready paper submission and registration may be found in the <a title="Important Dates" href="important-dates.html">Important Dates</a> section.</p>
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
