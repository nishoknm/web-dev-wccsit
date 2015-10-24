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
            <h1 style="padding-bottom: 30px;text-align:center">Important Dates</h2>
            <table id="impdates" cellpadding="1">
                <tbody>
                    <tr class="odd">
                        <td style="width: 50%;">Full paper submission</td>
                        <td>December 5th, 2015</td>
                    </tr>
                    <tr>
                        <td>Notification of acceptance of papers</td>
                        <td>January 26th, 2016</td>
                    </tr>
                    <tr class="odd">
                        <td>Camera-ready papers</td>
                        <td>February 26th, 2016</td>
                    </tr>
                    <tr>
                        <td>Author registration</td>
                        <td>January 27 - March 4, 2016</td>
                    </tr>
                    <tr class="odd">
                        <td>Participant (non-author) early registration</td>
                        <td>January 27 - April 22, 2016</td>
                    </tr>
                    <tr>
                        <td>Participant (non-author) late registration</td>
                        <td>April 23, 2016</td>
                    </tr>
                    <tr class="odd">
                        <td><strong>Welcome Reception</strong></td>
                        <td><strong>July 6, 2016 (17:00)</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Conference sessions</strong></td>
                        <td><strong>July 7th - 10th, 2016</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <?php include('../footerview.php') ?>
    </div>
</body>

</html>
