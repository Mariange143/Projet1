<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard MasterSchool</title>
    <link rel="stylesheet" href="../Styles/dash1.css">
    <link rel="stylesheet" href="../styles/fontawesome/css/all.min.css">
</head>
<body>
<section id="section_dash">
        <div class="menu_dash">
            <div class="menu_slide">
                <div class="logo">
                    <div class="logoImg">
                        <img src="../images/logo.png">
                    </div>
                </div>
                 <div class="angle_left">
                    <i class="fa fa-angle-left"></i>
                 </div>
            </div>
            <div class="line_dash">
                <div class="line1">
                    <i class="fa fa-home"></i>
                    <span class="span_menu_dash">Tableau de bord</span>
                </div>
                <div class="line1">
                    <i class="fas fa-user-graduate"></i>
                    <span class="span_menu_dash"> Elèves</span>
                </div>
                 
                <div class="line1">
                    <i class="fas fa-school"></i>
                    <span class="span_menu_dash">Scolarité</span>
                </div>
                <div class="line1">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span class="span_menu_dash">Enseignant</span>
                </div>
                <div class="line1">
                    <i class="fas fa-book"></i>
                    <span class="span_menu_dash">Cours</span>
                </div>
                <div class="line1">
                    <i class="fas fa-pen"></i>
                    <span class="span_menu_dash">Emargement</span>
                </div>
                <div class="line1">
                    <i class="fas fa-door-closed"></i>
                    <span class="span_menu_dash">Salle</span>
                </div>
                <div class="line1">
                    <i class="fas fa-users"></i>
                    <span class="span_menu_dash">Classe</span>
                </div>
                <div class="line1">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="span_menu_dash">Emplois du temps</span>
                </div>
            </div><br><br>
            <!-- <div class="service_gratuite">
                <span></span>
                <h6></h6>
                <button class="btn_service_gratuite">Creer</button>
            </div> -->
        </div>
        
        <!-- fizarana II -->
    <div class="middle_section">
        <!-- blocI -->
        <div class="section_dash">
            <div class="filter-container">
                <div class="div1">
                    <input type="text" placeholder="Rechercher..." class="filter-input">
                    <button class="filter-btn"><i class="fas fa-search"></i></button>
                </div>
                <div class="date-container" id="current-date"></div>
            </div>

            <div class="welcome_div">
                <div class="welcome">
                    <h2>Welcome back, SchoolManager!</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, ut?</p>
                    <div class="btn_welcome">
                        <img src="../images/acheter-des-livres.png" class="buyImgWhite">
                        <!-- <img src="../images/acheter.png" class="buyImgBlue"> -->
                        <strong class="buy_lesson">Buy Lesson</strong>
                    </div>
                </div>
                <div class="representational_image">
                    <img src="../images/wel_books.png">
                </div>
                <!-- <div class="representational_image1">
                    <img src="../images/casquette-de-graduation.png">
                </div> -->
            </div>
        </div>

        <!-- bloc II -->
        <div class="second_div">
            <div id="table_header">
                <h3>Classes</h3>
                <div class="div1">
                    <input type="text" placeholder="Rechercher..." class="filter-input">
                    <button class="filter-btn"><i class="fas fa-search"></i></button>
                </div>
                <div class="viewAll">
                    <span class="view">
                        <h6>View All
                            <i class="fa fa-chevron-circle-right"></i>
                        </h6>
                    </span>
                </div>
            </div>
            <div class="div_classAbout">
                <div class="class1">
                    <h5>Design unit 1</h5>
                    <div id="unit1">
                        <div class="unit_Images">
                            <div class="classPdp">
                                <img src="../images/pdp.jpg" alt="" class="imgPdp">
                            </div>
                            <div class="classPdp1">
                                <img src="../images/pdp1.jpg" alt="" class="imgPdp">
                            </div>
                            <div class="classPdp2">
                                <img src="../images/pdp2.jpg" alt="" class="imgPdp">
                            </div>
                            <div id="class_members_number">
                                <span>3+</span>
                            </div>
                        </div>
                        <div class="unit_schedule">
                            <div class="fnt1">
                                <i class="fa fa-file"></i>
                                <span>10 files</span>
                            </div>
                            <div class="fnt1">
                                <i class="fa fa-clock"></i>
                                <span>Teacher learner</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class1">
                    <h5>Design unit 2</h5>
                    <div id="unit1">
                        <div class="unit_Images">
                            <div class="classPdp">
                                <img src="../images/pdp.jpg" alt="" class="imgPdp">
                            </div>
                            <div class="classPdp1">
                                <img src="../images/pdp1.jpg" alt="" class="imgPdp">
                            </div>
                            <div class="classPdp2">
                                <img src="../images/pdp2.jpg" alt="" class="imgPdp">
                            </div>
                            <div id="class_members_number">
                                <span>3+</span>
                            </div>
                        </div>
                        <div class="unit_schedule">
                            <div class="fnt1">
                                <i class="fa fa-file"></i>
                                <span>10 files</span>
                            </div>
                            <div class="fnt1">
                                <i class="fa fa-clock"></i>
                                <span>Teacher learner</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="class1">
                    <h5>Design unit 3</h5>
                    <div id="unit1">
                        <div class="unit_Images">
                            <div class="classPdp">
                                <img src="../images/pdp.jpg" alt="" class="imgPdp">
                            </div>
                            <div class="classPdp1">
                                <img src="../images/pdp1.jpg" alt="" class="imgPdp">
                            </div>
                            <div class="classPdp2">
                                <img src="../images/pdp2.jpg" alt="" class="imgPdp">
                            </div>
                            <div id="class_members_number">
                                <span>9+</span>
                            </div>
                        </div>
                        <div class="unit_schedule">
                            <div class="fnt1">
                                <i class="fa fa-file"></i>
                                <span>10 files</span>
                            </div>
                            <div class="fnt1">
                                <i class="fa fa-clock"></i>
                                <span>Teacher learner</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- blocII -->
        <!-- TABLEAU -->
        
        <div class="sectionI">
            <div id="tableau">
                <div id="table_header">
                    <h3>Lessons</h3>
                    <div class="div1">
                        <input type="text" placeholder="Rechercher..." class="filter-input">
                        <button class="filter-btn"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="viewAll">
                        <span class="view">
                            <h6>View All
                                <i class="fa fa-chevron-circle-right"></i>
                            </h6>
                        </span>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Class</th>
                            <th>teacher classroom</th>
                            <th>members</th>
                            <th>starting</th>
                            <th>materials</th>
                            <th>payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10th grade</td>
                            <td> RAHELINIANINA Sarobidy</td>
                            <td class="td_Images">
                                <div class="membersPdp">
                                    <img src="../images/pdp.jpg" alt="" class="imgPdp">
                                </div>
                                <div class="membersPdp1">
                                    <img src="../images/pdp1.jpg" alt="" class="imgPdp">
                                </div>
                                <div class="membersPdp2">
                                    <img src="../images/pdp2.jpg" alt="" class="imgPdp">
                                </div>
                                <div id="members_number">
                                    <span>3+</span>
                                </div>
                            </td>
                            <td>11.03.25</td>
                            <td>Download</td>
                            <td>
                                <div class="payment">
                                    <input type="checkbox" name="" id="input_done">
                                    <span>done</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>11th grade</td>
                            <td> RAHARISOA Mariange</td>
                            <td class="td_Images1">
                                    <div class="membersPdp">
                                        <img src="../images/pdp.jpg" alt="" class="imgPdp">
                                    </div>
                                    <div class="membersPdp1">
                                        <img src="../images/pdp1.jpg" alt="" class="imgPdp">
                                    </div>
                                    <div class="membersPdp2">
                                        <img src="../images/pdp2.jpg" alt="" class="imgPdp">
                                    </div>
                                    <div id="members_number">
                                        <span>7+</span>
                                    </div>
                            </td>
                            <td>12.03.25</td>
                            <td>Download</td>
                            <td>
                                <div class="payment">
                                    <input type="checkbox" name="" id="input_pending">
                                    <span>pending</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>12th grade</td>
                            <td>Riantsoa</td>
                            <td class="td_Images2">
                                <!-- <div class="membersPdp">
                                    <img src="images/pdp.jpg" alt="" class="imgPdp">
                                </div> -->
                                <div class="membersPdp1">
                                    <img src="../images/pdp1.jpg" alt="" class="imgPdp">
                                </div>
                                <div class="membersPdp2">
                                    <img src="../images/pdp2.jpg" alt="" class="imgPdp">
                                </div>
                                <div id="members_number1">
                                    <span>7+</span>
                                </div>
                            </td>
                            <td>13.03.25</td>
                            <td>Download</td>
                            <td>
                                <div class="payment">
                                    <input type="checkbox" name="" id="input_done">
                                    <span>done</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="section_agenda">
        <div class="user_menu">
            <div class="pdf_user">
                <div class="user_profil">
                    <img src="../images/pdp2.jpg" alt="">
                    <div class="dot"> </div>
                </div>
                <h6>Lalaina RAHARISOA</h6>
                <div class="student_span">
                    <span>Student</span>
                </div>
                <div class="student_profil">
                    <span><i class="fa fa-user-graduate"></i></span>
                    <strong class="strong1">Profile</strong>

                </div>
            </div>
        </div>

        <div id="WRAPPER">
            <div class="wrapper">
                <header>
                    <div class="icons">
                        <span id="prev" class="material-icons"><i class="fa fa-chevron-left"></i></span>
                        <p class="current-date">March 2025</p>
                        <span id="next" class="material-icons"><i class="fa fa-chevron-right"></i></span>
                    </div>
                </header>

                <div class="calendar">
                    <ul class="weeks">
                        <li>Sun</li> <li>Mon</li> <li>Tue</li> <li>Wed</li> <li>Thu</li> <li>Fri</li> <li>Sat</li>
                    </ul>
                    <ul class="days"></ul>
                </div>
            </div>

            <div id="reminders">
                <p class="rimenders-title">Reminders</p>
                <div class="remind1">
                    <div class="icon_bell">
                        <i class="fa fa-bell"></i>
                    </div>
                    <div class="date_reminds">
                        <h4>web - user interface</h4>
                        <span>13 dec 2024</span>
                    </div>
                </div>
                <div class="remind1">
                    <div class="icon_bell">
                        <i class="fa fa-bell"></i>
                    </div>
                    <div class="date_reminds">
                        <h4>web - user interface</h4>
                        <span>13 dec 2024</span>
                    </div>
                </div>
                <div class="remind1">
                    <div class="icon_bell">
                        <i class="fa fa-bell"></i>
                    </div>
                    <div class="date_reminds">
                        <h4>web - user interface</h4>
                        <span>13 dec 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="../JavaScript/dash1.js"></script>
    
</body>
</html>