<?php
    include "functions/function.php";
    $recup  = recuperation();
    echo "bonjourrrrr";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLASS SCHEDULE</title>
    <link rel="stylesheet" href="../Styles/classSchedule.css">
</head>
<body>
        <div class="ClassSchedule">
            <div class="schedule_header">
                <h2>Class Schedule</h2>
                <div class="classNname">
                    <span>Prof: Mme Sarobidy</span> <br><br>
                    <span> Classe:Terminale </span>
                </div>
            </div>
            <table id="scheduleTable">
                <thead>
                    <tr>
                        <th>Hours</th>
                        <th>Monday</th>
                        <th>Tuestay</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div>
                <button class="update">Update</button>
            </div>
        </div>
        <script src="../js/classSchedule.js"></script>
</body>
</html>