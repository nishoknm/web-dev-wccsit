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
        <?php include('../headerview.php') ?>
        <div id="entrycontent">
            <div id="signup">
                <div class="pvl">
                    <div class="_52lt">Feedback...!</div>
                </div>
                <form action="../model.php" method="post" id="reg" name="reg">
                    <div id="reg_form_box" class="large_form">
                        <div class="clearfix _58mh">
                            <div class="mbm _3-90 lfloat _ohe">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <input name="fname" type="text" placeholder="First name" class="inputtext transparent">
                                </div>
                            </div>
                            <div class="mbm rfloat _ohf">
                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                    <input name="lname" type="text" placeholder="Last name" class="inputtext transparent">
                                </div>
                            </div>
                        </div>
                        <div class="mbm">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <input name="email" type="email" placeholder="Email" class="inputtext transparent _58mg">
                            </div>
                        </div>
                        <div class="mbm" id="u_0_3">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <input name="number" type="number" placeholder="Mobile number" class="inputtext transparent _58mg">
                            </div>
                        </div>
                        <div class="mbm" id="u_0_4">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <input name="subject" type="text" placeholder="Feedback about ?" class="inputtext transparent _58mg">
                            </div>
                        </div>
                        <div class="mbm" id="u_0_7">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <textarea name="comment" class="inputtext transparent _58mg" placeholder="Please leave your comment here..!!"></textarea>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button type="submit" class="_52lq" name="websubmit" value="comments" id="u_0_9">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php include('../footerview.php') ?>
    </div>
</body>

</html>
