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
                <div>
                    <h1>Guidelines for Paper Submission</h1>
                    <br>
                    <div>
                        <ol>
                            <li>Policy on Plagiarism</li>
                            <p>
                                All papers submitted to IEEE WC-CSIT 2016 will be checked for plagiarism (including self-plagiarism). If a paper is found to fall in the category of plagiarism, the paper will not be reviewed and automatically rejected. Even if a paper is accepted and paid for registration, the program committee has a right to reject the paper and will not publish the paper in the proceedings. Please note that a list of authors of the papers identified in the category of plagiarism will be forwarded to the IEEE.
                            </p>
                            <li>Templates</li>
                            <p>
                                To help ensure correct formatting, please use the style files for U.S. Letter Size found at the link below as templates for your submission. These include Word and LaTeX.
                                <br>
                                <a title="LaTeX and Word Templates" href="http://www.ieee.org/conferences_events/conferences/publishing/templates.html"><img src="../images/link_template1-300x45.png" alt="link_template" width="300" height="48"></a>
                            </p>
                            <li>Paper Format</li>
                            <ul style="list-style: square;">
                                <li>Number of Pages:
                                    <br> Papers should not exceed eight pages, including figures, tables and references (up to two additional pages will be permitted (for a total of 10 pages) in a paper, at the cost of $125 US per additional page).</li>
                                <li>Page Size:
                                    <br> U.S. Letter format (8.5" x 11")</li>
                                <li>File Format:
                                    <br> PDF only</li>
                                <li>Abstract:
                                    <br> It is important that the abstract be a meaningful description of your paper.</li>
                                <li>Keywords:
                                    <br> Choose from three to eight keywords.</li>
                                <li>Color:
                                    <br> Use of color is encouraged, but since readers will usually print the papers in black and white, it is the author"s responsibility to ensure that all figures/plots an be printed and understood in black and white.</li>
                            </ul>
                            <p>
                                Violations of any of the above paper specifications may result in rejection of your paper. Please note that the Latex template does not allow for keywords. If you are using the Latex template, do not include keywords in your paper.
                            </p>
                            <li>Paper submission system</li>
                            <p>To submit your paper, please visit following link.
                                <br>
                                <a href="../papersubmission" title="Link to submission page">Link to submission page</a></p>
                            <li>Ensuring PDF Xpress Compatibility</li>
                            <p>
                                The final versions of all accepted papers must be compatible with PDF Xpress. In order to assist contributors to WC-CSIT"2016, a PDF Xpress account has been created for this conference.
                            </p>
                            <p>
                                The instructions to access the account created for this conference at PDF Xpress are available on 20th February 2016.
                            </p>
                            <li>Copyright Form</li>
                            <p>
                                After uploading the final version of your accepted paper, please continue to complete the online electronic Copyright transfer form called eCF.
                            </p>
                            <p>
                                <strong>NOTE:</strong> If you are not automatically directed to the online electronic copyright transfer form after uploading the final version of your paper, then please kindly fill in a hard-copy copyright form (the form can be obtained <a title="copy　right　form" href="http://www.ieee.org/publications_standards/publications/rights/copyrightmain.html" target="_blank">here</a>), sign it, scan it and email it (in PDF) to the Proceedings Chair: Dr. Akira Oyama ( aki -at- flab.isas.jaxa.jp ). Please don’t forget to indicate your paper number in the subject of your email message.</p>
                        </ol>
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
