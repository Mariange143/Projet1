<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student's List</title>
    <link rel="stylesheet" href="../styles/studentList.css">
    <link rel="stylesheet" href="../styles/fontawesome/css/all.min.css">
</head>
<body>
    <section id="student_list">
        <div id="table_header">
            <h3>Lessons</h3>
            <div class="div1">
                <input type="text" placeholder="Research..." class="filter-input">
                <button class="filter-btn"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="list_tittle">
            <div class="box1">
                <i class="fas fa-list"></i>
                <h2>Students List</h2>
            </div>
            <div class="box2">
                <div class="add_std">
                    <i class="fas fa-plus-circle"></i>
                    <span>_Add Student</span>
                </div>
                <div class="add_sign">
                    <i class="fas fa-plus-circle"></i>
                    <span>_Re-enroll Student</span>
                </div>
            </div>
        </div>
        <div id="tableau">
            <table>
                <thead>
                    <tr>
                        <th>Student Photo</th>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Adress</th>
                        <th>Nationality</th>
                        <th>Class</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td_Images">
                            <div class="membersPdp">
                                <img src="../images/pdp.jpg" alt="" class="imgPdp">
                            </div>
                        </td>
                        <td> 01</td>
                        <td> Raheliniaina Sarobidy</td>
                        <td>Malagasy</td>
                        <td>Tanjombato</td>
                        <td>Términale</td>
                        <td>0123456789</td>
                        <td>F</td>

                    </tr>
                    <tr>
                        <td class="td_Images1">
                            <div class="membersPdp">
                                <img src="../images/pdp1.jpg" alt="" class="imgPdp">
                            </div>
                        </td>
                        <td>02</td>
                        <td>RAHARISOA Mariange</td>
                        <td>IAV 270 R Iavoloha</td>
                        <td>Malagasy</td>
                        <td>Términale</td>
                        <td>0123456789</td>
                        <td>F</td>

                    </tr>
                    <tr>
                        <td class="td_Images2">
                            <div class="membersPdp">
                                <img src="../images/pdp2.jpg" alt="" class="imgPdp">
                            </div>
                        </td>
                        <td>03</td>
                        <td>Riantsoa</td>
                        <td>Ampandrana</td>
                        <td>Malagasy</td>
                        <td>Términale</td>
                        <td>0123456789</td>
                        <td>F</td>

                    </tr>
                    <tr>
                        <td class="td_Images2">
                            <div class="membersPdp">
                                <img src="../images/pdp2.jpg" alt="" class="imgPdp">
                            </div>
                        </td>
                        <td>04</td>
                        <td>Adeline</td>
                        <td>Analamahitsy</td>
                        <td>Malagasy</td>
                        <td>Términale</td>
                        <td>0123456789</td>
                        <td>F</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>