<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../default.css">
    <style>
    #xcontainer {
        height: 685px;
    }
    </style>
    <script>
    var selectedSpeaker;
    var selectedLi;

    function loaded(eve) {
        var list = document.getElementById("speakerlist");
        selectedLi = list.children[0];
        selectedLi.className = " listactive";
        selectedSpeaker = "Slawomir";
    }

    function selectList(eve) {

        selectedLi.className = ""
        document.getElementById(selectedSpeaker).className = "speaker";

        var ele = eve.target;
        selectedLi = ele;
        selectedLi.className = " listactive";

        selectedSpeaker = selectedLi.getAttribute("value");
        document.getElementById(selectedSpeaker).className += " active";
    }
    </script>
</head>

<body onload="loaded(event)">
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
            <div id="speakermenu">
                <ul id="speakerlist">
                    <li name="speakers" onclick="selectList(event)" value="Slawomir">Slawomir Koziel</li>
                    <li name="speakers" onclick="selectList(event)" value="Rommie">Rommie Amaros</li>
                    <li name="speakers" onclick="selectList(event)" value="Jackie">Jackie Chen</li>
                    <li name="speakers" onclick="selectList(event)" value="Victor">Victor Raskinn</li>
                    <li name="speakers" onclick="selectList(event)" value="yaroslav">Yaroslav D. Sergeyev</li>
                </ul>
            </div>
            <div id="speakercontainer">
                <div id="Slawomir" class="speaker active">
                    <div style="float: left; margin-right: 30px;">
                        <a href=""><img class="expand" src="../images/speakers/koziel_photo.bmp" alt="Slawomir Koziel" width="150"></a>
                    </div>
                    <div><a href="http://koziel.ru.is/"><span style="font-weight:bold;">Slawomir Koziel</span></a>
                        <br>Reykjavik University, Iceland
                        <br>
                        <!--Bio-->
                    </div>
                    <div style="float: left;">
                        <br><span style="font-weight:bold;">ABSTRACT</span>
                        <br>
                        <br>Computer simulation tools have become ubiquitous in contemporary engineering and science over the decade. High-fidelity simulations provide accuracy that is beyond capability of any theoretical models and allow reliable representation of complex components and systems, including coupled and often multi-physics phenomena therein. Modeling accuracy is critical for quality of the design process; however, it comes at a high computational cost. In many engineering areas (electrical, structural, aerospace, etc.) typical simulation times of realistic 3D models are as long as many hours, days, or even weeks. Obviously, this hinders application of simulation tools for solving designs tasks that require multiple evaluations of the system at hand, such as parametric optimization. In this talk, the strategies of reducing computational cost of simulation-driven design are discussed. The focus is on surrogate-assisted design techniques which are the most promising approaches to expedited design involving expensive computer models. Several specific algorithmic frameworks are presented, including space mapping, response correction techniques, feature-based optimization, shape-preserving response prediction, as well as multi-fidelity design. Applications for solving real-world design problems in various engineering fields including electrical and aerospace engineering are also provided.</div>
                </div>
                <div id="Rommie" class="speaker">
                    <div style="float: left; margin-right: 30px;">
                        <a href=""><img class="expand" src="../images/speakers/rommieamaro_big_psd.jpg" alt="Slawomir Koziel" width="150"></a>
                    </div>
                    <div><a href="https://amarolab.ucsd.edu/people_pi.html"><span style="font-weight:bold;">Rommie Amaro</span></a>
                        <br>University of California, USA
                        <br>
                        <!--Bio-->
                    </div>
                    <div style="float: left;">
                        <br><span style="font-weight:bold;">ABSTRACT</span>
                        <br>
                        <br>Early discussion regarding a talk at the First-Timers Luncheon highlighted the opportunity for an oldtimer to welcome first timers, encourage participation, and provide perspectives. Throughout my career, I have been privileged to be able to connect my personal career with activities for the broad, educational-computing community. This talk reflects on factors that have impacted both my own career and the evolution of broader groups --- particularly WC-CSIT. Some general principles (e.g., inclusion, respect, service and social responsibility) seem clear, but even then circumstances present challenges and contradictions. Other principles (e.g., encouraging creative brainstorming, utilizing serendipity, listening to people) may be less obvious, but equally vital. Many have described the WC-CSIT community as a professional family, and this talk seeks to celebrate that community as promotes a vision for fulfilling personal careers and continued organizational development.</div>
                </div>
                <div id="Jackie" class="speaker">
                    <div style="float: left; margin-right: 30px;">
                        <a href=""><img class="expand" src="../images/speakers/JacquelineChen.jpg" alt="Slawomir Koziel" width="150"></a>
                    </div>
                    <div><a href="https://amarolab.ucsd.edu/people_pi.html"><span style="font-weight:bold;">Jackie Chen</span></a>
                        <br>Sandia National Laboratories, USA
                        <br>
                        <!--Bio-->
                    </div>
                    <div style="float: left;">
                        <br><span style="font-weight:bold;">ABSTRACT</span>
                        <br>
                        <br>In the decade since Unlocking the Clubhouse: Women in Computing (MIT Press, 2002) was published, educational institutions have coalesced around the mission of increasing women’s participation in computing. Yet, despite the uptick of interest in computer science majors and the surge of technology shaping all aspects of our lives, the numbers of women majoring in computer science are still abysmally small. In this talk, I will further reflect on why this is the case, and make connections to the issues raised in Stuck in the Shallow End: Education, Race, and Computing---the underrepresentation in computer science of students of color. I will examine how underrepresentation in computing relates to the larger educational crisis in this country and issues we face as world citizens. This talk is part of an overarching mission to understand how inequality is produced in this country and the types of social action required to equalize opportunities and broaden participation in computing</div>
                </div>
                <div id="Victor" class="speaker">
                    <div style="float: left; margin-right: 30px;">
                        <a href=""><img class="expand" src="../images/speakers/raskin.gif" alt="Slawomir Koziel" width="150"></a>
                    </div>
                    <div><a href="https://amarolab.ucsd.edu/people_pi.html"><span style="font-weight:bold;">Victor Raskinn</span></a>
                        <br>Purdue University, Indiana, USA
                        <br>
                        <!--Bio-->
                    </div>
                    <div style="float: left;">
                        <br><span style="font-weight:bold;">ABSTRACT</span>
                        <br>
                        <br>As the reality of the highly limited extent, to which statistics can replace knowledge in computational information processing sets in and infantile naivete about natural language wears out, the need to compute meaning becomes clear. This acute need will necessarily squeeze out the notorious fear of semantics, and the leaders of machine learning are already into the ontologization and semanticalization of their work. It is being discovered that semantics is a technology that can be learned and that its resources are accessible to professionals and easily and affordably propagated.In this newly promising environment, putting a long-overdue end to a bizarre and highly brittle situation when data and language processing has been attempted for 3 decades without understanding them, the notion of context remains perhaps the last vestige of apprehensions about semantics expressed in such statements as, “Oh, it all depends on the context,” meaning that we are not going there, that contextual cognition is not computable. This address directly challenges this defeatist approach to cognition and its computation.If an ontological semantic technology allows us to represent meaning in a way that emulates human understanding, contextual meaning augments that understanding by relating it to additional representations of what the processor, human or computer, knows prior to any act of representation. Humans or computers may possess different amounts of relevant information, and the understanding varies from minimum to an almost unlimited maximum (as between Dr. Watson’s generic and Sherlock Holmes phenomenally rich and specific backround) but it is fully controllable by the developer/designer of any computational system, thus making it easier to deal with than with the individual background of a new human acquaintance.The address will illustrate this with specific examples and proclaim the importance and accessibility of computational context for virtually any application of some complexity.</div>
                </div>
                <div id="yaroslav" class="speaker">
                    <div style="float: left; margin-right: 30px;">
                        <a href=""><img class="expand" src="../images/speakers/yaroslav.gif" alt="Slawomir Koziel" width="150"></a>
                    </div>
                    <div><a href="https://amarolab.ucsd.edu/people_pi.html"><span style="font-weight:bold;">Yaroslav D. Sergeyev</span></a>
                        <br>Lobachevsky State University, Nizhni Novgorod, Russia
                        <br>
                        <!--Bio-->
                    </div>
                    <div style="float: left;">
                        <br><span style="font-weight:bold;">ABSTRACT</span>
                        <br>
                        <br>The lecture presents a recently introduced methodology allowing one to execute numerical computations with finite, infinite, and infinitesimal numbers on a new type of a computer – the Infinity Computer patented in USA and Europe. The new approach is based on the principle ‘The whole is greater than the part’ (Euclid’s Common Notion 5) that is applied to all numbers (finite, infinite, and infinitesimal) and to all sets and processes (finite and infinite). The new computational methodology is not related to the non-standard analysis and gives the possibility to execute computations of a new type simplifying fields of Mathematics where the usage of infinity and/or infinitesimals is required (e.g., divergent series, limits, derivatives, integrals, measure theory, probability theory, optimization, fractals, etc.). The main attention in the lecture is dedicated to the explanation of how practical numerical computations with infinities and infinitesimals can be executed. Examples regarding optimization, numerical differentiation, and ODEs are given. The Infinity Calculator using the Infinity Computer technology is presented during the talk.</div>
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
    </div>
</body>

</html>
