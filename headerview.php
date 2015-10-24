<?php ?>
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