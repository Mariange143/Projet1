<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emargement</title>
    <link rel="stylesheet" href="../styles/studentList.css">
    <link rel="stylesheet" href="../styles/emargement.css">
    <link rel="stylesheet" href="../styles/fontawesome/css/all.min.css">
</head>
<body>
    <section id="student_list">
        <div id="table_header">
            <div class="div0">
                <div class="annee_scolaire">
                    <span class="span_span">Semester </span>:<h3> One</h3>
                </div>
                <div class="annee_scolaire">
                    <span class="span_span">School year </span>:<h3> 2024 - 2025</h3>
                </div>
            </div>
            <div class="div1">
                <input type="text" placeholder="Research..." class="filter-input">
                <button class="filter-btn"> <i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="list_tittle">
            <div class="box1">
                <i class="fas fa-list"></i>
                <h2>Terminale</h2>
            </div>
            <div class="box3">
                <select name="other_class" id="other_class">
                    <option value="Second">Second</option>
                    <option value="Premiére">Premiére</option>
                    <option value="Terminale">Terminale</option>
                </select>
            </div>
        </div>
        <div id="tableau">
            <table>
                <thead>
                    <tr>
                        <th>Student Photo</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Student ID</th>
                        <th>Subject</th>
                        <th>Prof</th>
                        <th>DIH</th>
                        <th>Presence</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="td_Images">
                            <div class="membersPdp">
                                <img src="../images/pdp.jpg" alt="" class="imgPdp">
                            </div>
                        </td>
                        <td> RAHELINIANINA</td>
                        <td>Sarobidy</td>
                        <td>T/000172</td>
                        <td>Math</td>
                        <td>Mr Badoda</td>
                        <td>14h - 16h</td>
                        <td >
                            <input type="radio" name="choix" class="present" id="present"><label for="present" class="label_present">Present</label>
                            <input type="radio" name="choix"  class="absent"><label for="" class="label_absent">Absent</label>
                            <input type="radio" name="choix"  class="quit"><label for="" class="label_quit">Quit</label>
                        </td>
                        <!-- <td>
                            <button class="btn_present">present</button>
                            <button class="btn_Absent">Absent</button>
                            <button class="btn_quit">quit</button>
                        </td> -->
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>