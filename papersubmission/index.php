<?php
session_start();
if(!empty($_SESSION["id"]))
{
    require_once('../database.php');
    $email = $_SESSION["id"];
    $query = "SELECT * FROM paper WHERE email = '$email'";
    $papers = $db->query($query);
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../default.css">
    <script>
    var pdfFrame;
    function viewPaper(event) {
        pdfFrame = pdfFrame ? pdfFrame : document.getElementById("pdfviewer");
        var pdfWindow = pdfFrame.contentWindow;
        pdfFrame.style.border = 0;
        var element = event.target;
        var elements = document.getElementsByName("papertitle");
        for(var i=0; i< elements.length; i++) elements[i].classList.remove("paperactive");
        element.classList.add("paperactive");
        pdfWindow.location.href = "../uploads/"+element.previousElementSibling.textContent;
    }
    </script>
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
            <?php if(!empty($_SESSION["id"]) && empty($_SESSION["reviewer"])) : ?>
            <div id="upload-signup">
                <div class="pvl">
                    <div class="_52lt">Upload Paper</div>
                </div>
                <form action="../upload.php" method="post" id="reg" enctype="multipart/form-data">
                    <div id="reg_form_box" class="large_form">
                        <div class="mbm">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <input name="title" type="text" placeholder="Paper Title" class="inputtext transparent _58mg">
                            </div>
                        </div>
                        <div class="mbm" id="u_0_3">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <input name="file" type="file" placeholder="Select Paper" class="inputtext transparent _58mg">
                            </div>
                        </div>
                        <div class="clearfix">
                            <button type="submit" class="_52lq" name="webupload" id="u_0_9">Upload</button>
                        </div>
                    </div>    
                </form>
                <div class="pvl">
                    <div class="_52lt">Uploaded Papers</div>
                </div>
                <?php foreach ( $papers as $paper ) : ?>
                    <div class="mbm">
                        <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                            <div id="pathdiv" style="display:none"><?php echo $paper['file']; ?></div>
                            <div id="paperdiv" onclick="viewPaper(event)" disabled name="papertitle" type="text" class="inputtext transparent _58mg"><?php echo $paper['title']; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <iframe id="pdfviewer" class="pdfviewer" src="../defaultpreviewer.html"></iframe>
            <?php elseif(!empty($_SESSION["reviewer"])) : ?>
            <div id="signup">
                <div class="pvl">
                    <div class="_52lt">Upload Paper</div>
                </div>
                <div id="reg_form_box" class="large_form">
                    <div class="pvl">
                        <div class="_52lt">Please use<a style="text-decoration:none" href="../revieweronline"> Reviewer Online</a> to review.</div>
                    </div>
                </div>
            </div>
            <?php else : ?>
            <div id="signup">
                <div class="pvl">
                    <div class="_52lt">Upload Paper</div>
                </div>
                <div id="reg_form_box" class="large_form">
                    <div class="pvl">
                        <div class="_52lt">Please <a style="text-decoration:none" href="../onlineregistration">Sign-in</a> to upload.</div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
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
