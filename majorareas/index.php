<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../default.css">
    <style>
    #entrycontent {
        padding-left: 10%;
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
            <ul>
                <li class="_52lp">Computer Security</li>
                <ul>
                    <li>Basic cryptography</li>
                    <li>Authentication and handshake protocols</li>
                    <li>Electronic commerce</li>
                    <li>System security</li>
                </ul>
                <li class="_52lp">Artificial Intelligent</li>
                <ul>
                    <li>Mobile Robot Competition</li>
                    <li>Innovative Applications of AI</li>
                    <li>Trading Agents Competition</li>
                    <li>AI and the Web</li>
                </ul>
                <li class="_52lp">Software Engineering</li>
                <ul>
                    <li>Usability and Usability-Engineering</li>
                    <li>User-oriented Usability TestingI</li>
                    <li>Web-analytics</li>
                    <li>SOA – Service-oriented Architectur</li>
                </ul>
                <li class="_52lp">Parallel Processing</li>
                <ul>
                    <li>Parallel algorithms</li>
                    <li>GPU computation</li>
                    <li>Scientific Parallel Systems</li>
                    <li>Parallel Processing</li>
                </ul>
                <li class="_52lp">Clouding Computing</li>
                <ul>
                    <li>Cloud Security</li>
                    <li>Virtualization</li>
                    <li>Big Data</li>
                    <li>Webzilla bytes-up its cloud storage</li>
                </ul>
                <li class="_52lp">Sematic web</li>
                <ul>
                    <li>Proof Explanation and Visualization </li>
                    <li>Update Languages</li>
                    <li>Semantic Web Query Algebra</li>
                    <li>Rule Interchange</li>
                </ul>
                <li class="_52lp">Simulation and Modeling</li>
                <ul>
                    <li>Discrete-Event Simulation</li>
                    <li>Security/Emergency Support Tools</li>
                    <li>Enterprise Resource Planning</li>
                    <li>Virtual Reality and Graphical Simulations</li>
                </ul>
                <li class="_52lp">Computer Visualization</li>
                <ul>
                    <li>Visualization Techniques</li>
                    <li>Human Perception and Cognition Concepts</li>
                    <li>Abstract Visualization Concepts</li>
                    <li>Aesthetics in Visualization</li>
                </ul>
                <li class="_52lp">Human Computer Interface</li>
                <ul>
                    <li>WIMP (computing)</li>
                    <li>Window managers</li>
                    <li>Zooming user interface (ZUI)</li>
                    <li>Crossing-based interfaces</li>
                </ul>
            </ul>
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
