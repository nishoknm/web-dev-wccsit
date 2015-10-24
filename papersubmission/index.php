<?php
session_start();
if(!empty($_SESSION["id"]))
{
    require_once('../database.php');
    $papers = get_paper($_SESSION["id"]);
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
            <?php if(!empty($_SESSION["id"]) && empty($_SESSION["reviewer"])) : ?>
            <div id="upload-signup">
                <div class="pvl">
                    <div class="_52lt">Upload Paper</div>
                </div>
                <form action="../model.php" method="post" id="reg" enctype="multipart/form-data">
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
                            <button type="submit" class="_52lq" name="websubmit" value="upload" id="u_0_9">Upload</button>
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
        <?php include('../footerview.php') ?>
    </div>

</body>

</html>
