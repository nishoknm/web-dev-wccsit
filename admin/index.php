<?php
session_start();
if(!empty($_SESSION["admin"]))
{
    require_once('../database.php');
    $rquery = "SELECT * FROM reviewer";
    $reviewers = $db->query($rquery);
    $uquery = "SELECT * FROM users";
    $users = $db->query($uquery);
    $pquery = "SELECT * FROM paper";
    $papers = $db->query($pquery);
    $rpquery = "SELECT reviewpapers.email, paper.paperid, paper.title, paper.file FROM reviewpapers INNER JOIN paper ON paper.paperid = reviewpapers.paperid";
    $rpapers = $db->query($rpquery);
    $cquery = "SELECT * FROM comments";
    $comments = $db->query($cquery);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../default.css">
        <script>
        if (document.location.hash == "" || document.location.hash == "#")
            document.location.hash = "#reviewer";

        var currentForm;

        function oncheck(event , storeOld) {
            var element = event.target;
            currentForm = element.form;
            var row = element.parentNode.parentNode;
            var children = row.children;
            if (element.checked) {
                for (var i = 0; i < children.length; i++) {
                    var cell = children[i].children[0];
                    cell.setAttribute("name", cell.getAttribute("xname"));
                    if(cell != element){
                        cell.removeAttribute("disabled");
                    }
                }
                diableEnableCheck(element, true);
                enableDisableUpdateDelete(true);
            } else {
                for (var i = 0; i < children.length; i++) {
                    var cell = children[i].children[0];
                    cell.removeAttribute("name");
                    if (cell != element) {
                        cell.setAttribute("disabled", true);
                    }
                }
                diableEnableCheck(element, false);
                enableDisableUpdateDelete(false);
            }
            storeOldValues(currentForm, storeOld);
        }

        function storeOldValues(form, store) {
            if(store) {
                var attrval;
                var old;
                var olds = currentForm.querySelectorAll("#old");
                for (var i = 0; i < olds.length; i++) {
                    old = olds[i];
                    attrval = old.getAttribute("oldname");
                    old.setAttribute("value",currentForm.querySelector("[name='"+attrval+"']").value);
                }
            }
        }

        function setFile(event) {
            var element = event.target;
            var row = element.parentNode.parentNode;
            row.querySelector("#file").value = element.selectedOptions[0].getAttribute("filename");
        }

        function diableEnableCheck(element, disable) {
            var checks = currentForm.querySelectorAll(".check");
            var check;
            for (var i = 0; i < checks.length; i++) {
                check = checks[i];
                if (check != element) {
                    if (disable) check.disabled = true;
                    else check.disabled = false;
                }
            }
        }

        function enableDisableUpdateDelete(enable) {
            var update = currentForm.querySelector("#update");
            var deletebtn = currentForm.querySelector("#delete")
            if (enable) {
                update.removeAttribute("disabled");
                deletebtn.removeAttribute("disabled");
            } else {
                update.setAttribute("disabled", true);
                deletebtn.setAttribute("disabled", true);
            }
        }

        function changeborder(cell, selected) {
            if (selected) cell.className += " border";
            else cell.className = cell.className.replace(' border', '');
        }
        </script>
    </head>
    <body>
        <?php if(empty($_SESSION["admin"])) : ?>
        <div id="dialogdiv">
            <div class="dialog">
                <form action="../adminlogin.php" method="post" id="reg" name="reg">
                    <div class="clearfix _58mh padtop">
                        <div class="mbm rfloat _ohf">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <input name="uname" type="text" class="inputtext transparent" placeholder="User Name">
                            </div>
                        </div>
                        <div class="mbm rfloat _ohf">
                            <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                <input name="pass" type="password" class="inputtext transparent" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="clearfixadmin">
                        <button type="submit" name="webloginadmin" id="u_admin">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <?php else : ?>
        <div id="container">
            <div id="header">
                <div>
                    <img src="../images/images.jpg" title="WC-CSIT" />
                    <div style="float:right;height:50px">
                        <div>Admin Login</div>
                        <div id="login">
                            Logged in as :
                            <?php echo $_SESSION["admin"] ?>
                            <form action="../logout.php" method="post" id="logout" name="logout" class="formlogout">
                                <button type="submit" class="loginoutbutton" name="weblogOff" id="u_0_11">Logout</button>
                            </form>
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
                    <li><a href="#reviewer">Reviewer</a> | </li>
                    <li><a href="#rpaper">Reviewer Papers</a> | </li>
                    <li><a href="#user">Users</a> | </li>
                    <li><a href="#comments">Comments</a></li>
                </ul>
            </div>
            <div id="entrycontent">
                <section>
                    <div class="admintable" id="reviewer">
                        <div class="pvl toolbar">
                            <div class="_52lq">Add Reviewer</div>
                        </div>
                        <div>
                            <form action="../addreviewer.php" method="post" id="reviewerform" name="reviewerform">
                                <div class="toolbar">
                                    <button id="delete" disabled class="u_admin_toolbar" type="submit" name="websubmit" value="Delete">Delete</button>
                                    <button id="update" disabled class="u_admin_toolbar" type="submit" name="websubmit" value="Update">Update</button>
                                </div>
                                <table class="admint">
                                    <thead>
                                        <tr>
                                            <th class="checkcell"></th>
                                            <th><input class="ainputtext" readonly value="Email"></th>
                                            <th><input class="ainputtext" readonly value="First Name"></th>
                                            <th><input class="ainputtext" readonly value="Last Name"></th>
                                            <th><input class="ainputtext" readonly value="Number"></th>
                                            <th><input class="ainputtext" readonly value="Password"></th>
                                            <th><input class="ainputtext" readonly value="Address"></th>
                                            <th><input class="ainputtext" readonly value="Sex"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $reviewers as $reviewer ) : ?>
                                        <tr>
                                            <td><input class="check" xname="check" onclick="oncheck(event, false)" type="checkbox"></td>
                                            <td><input disabled readonly class="ainputtext" xname="uemail" value='<?php echo $reviewer['email']; ?>' ></td>
                                            <td><input disabled class="ainputtext" xname="ufName" value='<?php echo $reviewer['fname']; ?>' ></td>
                                            <td><input disabled class="ainputtext" xname="ulName" value='<?php echo $reviewer['lname']; ?>' ></td>
                                            <td><input disabled class="ainputtext" xname="unumber" value='<?php echo $reviewer['number']; ?>' ></td>
                                            <td><input disabled class="ainputtext" xname="upassword" value='<?php echo $reviewer['password']; ?>' ></td>
                                            <td><input disabled class="ainputtext" xname="uaddress" value='<?php echo $reviewer['address']; ?>' ></td>
                                            <td>
                                                <select disabled class="ainputtext" xname="usex" readonly>
                                                    <?php if ($reviewer['sex'] == 'Male'): ?>
                                                        <option value="Male" title="Male" selected>Male</option>
                                                        <option value="Female" title="Female">Female</option>
                                                    <?php else: ?>
                                                        <option value="Male" title="Male">Male</option>
                                                        <option value="Female" title="Female" selected>Female</option>
                                                    <?php endif ?>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                        <tr>
                                            <td></td>
                                            <td><input name="email" placeholder="Email" type="text" class="ainputtext transparent"></td>
                                            <td><input name="fName" placeholder="First name" type="text" class="ainputtext transparent"></td>
                                            <td><input name="lName" placeholder="Last name" type="text" class="ainputtext transparent"></td>
                                            <td><input name="number" placeholder="Mobile number" type="text" class="ainputtext transparent"></td>
                                            <td><input name="password" placeholder="New password" type="password" class="ainputtext transparent"></td>
                                            <td><input name="address" placeholder="Address" type="text" class="ainputtext transparent"></td>
                                            <td>
                                                <select name="sex" id="sex" class="ainputtext transparent">
                                                    <option value="select">--Select--</option>
                                                    <option value="Male" title="Male">Male</option>
                                                    <option value="Female" title="Female">Female</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="adminc">
                                    <div class="clearfix">
                                        <button type="submit" class="_52lq" name="websubmit" value="Add Reviewer" id="u_admin_review">Add Reviewer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="admintable" id="rpaper">
                        <div class="pvl toolbar">
                            <div class="_52lq">Edit Review Paper Information</div>
                        </div>
                        <div>
                            <form action="../editreviewpaper.php" method="post" id="reviewerpaperform" name="reviewerpaperform">
                                <div class="toolbar">
                                    <button id="delete" disabled class="u_admin_toolbar" type="submit" name="websubmit" value="Delete">Delete</button>
                                    <button id="update" disabled class="u_admin_toolbar" type="submit" name="websubmit" value="Update">Update</button>
                                </div>
                                <table class="admint">
                                    <thead>
                                        <tr>
                                            <th class="checkcell"></th>
                                            <th><input class="ainputtext" readonly value="Reviewer Email"></th>
                                            <th><input class="ainputtext" readonly value="Paper Title"></th>
                                            <th><input class="ainputtext" readonly value="File Name"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $rpapers as $rpaper ) : ?>
                                        <tr>
                                            <td><input class="check" xname="check" onclick="oncheck(event,true)" type="checkbox"></td>
                                            <td>
                                                <select disabled class="ainputtext" xname="rfemail">
                                                    <?php foreach ( $reviewers as $reviewer ) : ?>
                                                        <?php if ($rpaper['email'] == $reviewer['email']): ?>
                                                            <option value='<?php echo $reviewer['email']; ?>' title="Reviewer Email" selected><?php echo $reviewer['email']; ?></option>
                                                        <?php else: ?>
                                                            <option value='<?php echo $reviewer['email']; ?>' title="Reviewer Email"><?php echo $reviewer['email']; ?></option>
                                                        <?php endif ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select disabled class="ainputtext" xname="rftitle" onchange="setFile(event)">
                                                    <?php foreach ( $papers as $paper ) : ?>
                                                        <?php if ($rpaper['paperid'] == $paper['paperid']): ?>
                                                            <option value='<?php echo $paper['paperid']; ?>' filename='<?php echo $paper['file']; ?>' title="Paper Title" selected><?php echo $paper['title']; ?></option>
                                                        <?php else: ?>
                                                            <option value='<?php echo $paper['paperid']; ?>' filename='<?php echo $paper['file']; ?>' title="Paper Title"><?php echo $paper['title']; ?></option>
                                                        <?php endif ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td><input id="file" disabled readonly class="ainputtext" xname="rffilename" value='<?php echo $rpaper['file']; ?>' ></td>
                                        </tr>
                                    <?php endforeach; ?>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <select class="ainputtext transparent" name="email">
                                                    <option value="-- Select Reviewer Email --">-- Select Reviewer Email --</option>
                                                    <?php foreach ( $reviewers as $reviewer ) : ?>
                                                        <option value='<?php echo $reviewer['email']; ?>' title="Reviewer Email"><?php echo $reviewer['email']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="ainputtext transparent" name="title" onchange="setFile(event)">
                                                    <option value="-- Select a Paper --">-- Select a Paper --</option>
                                                    <?php foreach ( $papers as $paper ) : ?>
                                                        <option value='<?php echo $paper['paperid']; ?>' filename='<?php echo $paper['file']; ?>' title="Paper Title"><?php echo $paper['title']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td><input id="file" readonly name="filename" placeholder="File Name" type="text" class="ainputtext transparent"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="adminc">
                                    <div class="clearfix">
                                        <button type="submit" class="_52lq" name="websubmit" value="Add Review Paper" id="u_admin_review">Add Review Paper</button>
                                    </div>
                                </div>
                                <input id="old" name="old_email" value='' oldname="rfemail" style="display:none">
                                <input id="old" name="old_paperid" value='' oldname="rftitle" style="display:none">
                            </form>
                        </div>
                    </div>
                    <div class="admintable" id="user">
                        <div class="pvl toolbar">
                            <div class="_52lq">Edit Users</div>
                        </div>
                        <div>
                            <form action="../edituser.php" method="post" id="userform" name="userform">
                                <div class="toolbar">
                                    <button id="delete" disabled class="u_admin_toolbar" type="submit" name="websubmit" value="Delete">Delete</button>
                                    <button id="update" disabled class="u_admin_toolbar" type="submit" name="websubmit" value="Update">Update</button>
                                </div>
                                <table class="admint">
                                    <thead>
                                        <tr>
                                            <th class="checkcell"></th>
                                            <th><input class="ainputtext" readonly value="Email"></th>
                                            <th><input class="ainputtext" readonly value="First Name"></th>
                                            <th><input class="ainputtext" readonly value="Last Name"></th>
                                            <th><input class="ainputtext" readonly value="Number"></th>
                                            <th><input class="ainputtext" readonly value="Password"></th>
                                            <th><input class="ainputtext" readonly value="Address"></th>
                                            <th><input class="ainputtext" readonly value="Attendee"></th>
                                            <th><input class="ainputtext" readonly value="Sex"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ( $users as $user ) : ?>
                                        <tr>
                                            <td><input class="check" xname="check" onclick="oncheck(event, false)" type="checkbox"></td>
                                            <td><input disabled readonly class="ainputtext" xname="eemail" value='<?php echo $user['email']; ?>' ></td>
                                            <td><input disabled class="ainputtext" xname="efName" value='<?php echo $user['fname']; ?>' ></td>
                                            <td><input disabled class="ainputtext" xname="elName" value='<?php echo $user['lname']; ?>' ></td>
                                            <td><input disabled class="ainputtext" xname="enumber" value='<?php echo $user['number']; ?>' ></td>
                                            <td><input disabled class="ainputtext" xname="epassword" value='<?php echo $user['password']; ?>' ></td>
                                            <td><input disabled class="ainputtext" xname="eaddress" value='<?php echo $user['address']; ?>' ></td>
                                            <td>
                                                <select disabled class="ainputtext" xname="eattendee">
                                                    <?php if ($user['attendee'] == 'Author'): ?>
                                                        <option value="Author" title="Paper Title" selected>Author</option>
                                                        <option value="Student" title="Paper Title">Student</option>
                                                        <option value="Regular Attendee" title="Paper Title">Regular Attendee</option>
                                                    <?php elseif ($user['attendee'] == 'Student'): ?>
                                                        <option value="Author" title="Paper Title">Author</option>
                                                        <option value="Student" title="Paper Title" selected>Student</option>
                                                        <option value="Regular Attendee" title="Paper Title">Regular Attendee</option>
                                                    <?php else: ?>
                                                        <option value="Author" title="Paper Title">Author</option>
                                                        <option value="Student" title="Paper Title">Student</option>
                                                        <option value="Regular Attendee" title="Paper Title" selected>Regular Attendee</option>
                                                    <?php endif ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select disabled class="ainputtext" xname="esex" readonly>
                                                    <?php if ($user['sex'] == 'Male'): ?>
                                                        <option value="Male" title="Male" selected>Male</option>
                                                        <option value="Female" title="Female">Female</option>
                                                    <?php else: ?>
                                                        <option value="Male" title="Male">Male</option>
                                                        <option value="Female" title="Female" selected>Female</option>
                                                    <?php endif ?>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div class="admintable" id="comments">
                        <div id="signup">
                            <div class="cpvl">
                                <div class="_52lq">Comments</div>
                            </div>
                            <ul>
                                <?php foreach ( $comments as $comment ) : ?>
                                    <li>
                                        <div id="reg_form_box" class="large_form">
                                            <div class="mbm">
                                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                                    <div class="placeholder"><b>Full Name : </b>
                                                        <?php echo $comment['lname'].", ".$comment['fname'] ?>
                                                    </div>
                                                    <input disabled name="name" type="text" class="inputtext transparent _58mg">
                                                </div>
                                            </div>
                                            <div class="mbm">
                                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                                    <div class="placeholder"><b>E-mail : </b>
                                                        <?php echo $comment['email'] ?>
                                                    </div>
                                                    <input disabled name="email" type="text" class="inputtext transparent _58mg">
                                                </div>
                                            </div>
                                            <div class="mbm">
                                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                                    <div class="placeholder"><b>Comments : </b>
                                                        <?php echo $comment['comment'] ?>
                                                    </div>
                                                    <textarea disabled name="email" type="text" class="inputtext transparent _58mg"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </section>
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
        <?php endif; ?>
    </body>
</html>