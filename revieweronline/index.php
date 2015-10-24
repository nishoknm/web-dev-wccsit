<?php
session_start();
if(!empty($_SESSION["reviewer"]))
{
    require_once('../database.php');
    $papers = get_review_papers_by_email($_SESSION["reviewer"]);
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
        <?php include('../headerview.php') ?>
        <div id="entrycontent">
            <?php if(empty($_SESSION["reviewer"])) : ?>
            <div id="signup">
                <div class="pvl">
                    <div class="_52lq">Reviewer Login</div>
                </div>
                <form action="../model.php" method="post" id="reg" name="reg">
                    <div id="reg_form_box" class="large_form">
                        <div class="clearfix _58mh">
                            <div class="mbm _3-90 lfloat _ohe">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <input name="uname" type="text" placeholder="User Name" class="inputtext transparent">
                                </div>
                            </div>
                            <div class="mbm rfloat _ohf">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <input name="pass" type="password" placeholder="Password" class="inputtext transparent">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button type="submit" class="_52lq" name="websubmit" value="reviewer_login" id="u_0_9">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php else : ?>
            <div id="upload-signup">
                <div class="pvl">
                    <div class="_52lt">Review Papers</div>
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
            <?php endif; ?>
        </div>
        <?php include('../footerview.php') ?>
    </div>
</body>

</html>
