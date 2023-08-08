<?php
if (isset($_POST['submit'])) {
    include 'config.php';

    // personalinfo inert database
    $p_fname = $_POST['pfname'];
    $p_lname = $_POST['plname'];
    $p_email = $_POST['pemail'];
    $p_phone = $_POST['pphone'];
    $p_date = $_POST['pdate'];

    $sql1 = "INSERT INTO personalinfo(pfname, plname, pemail, pphone, pdate) 
    VALUE('$p_fname', '$p_lname', '$p_email', '$p_phone', $p_date)";

    $result1 = mysqli_query($conn, $sql1);


    // jobrequred inert database
    $job_skill = $_POST['jobskill'];
    $job_career = $_POST['jobcareer'];
    $job_title = $_POST['jobtitle'];
    $job_subtitle = $_POST['jobsubtitle'];
    $job_experience = $_POST['jobexperience'];


    $sql2 = "INSERT INTO jobrequred(jobskill, jobcareer, jobtitle, jobsubtitle, jobexperience) 
    VALUE('$job_skill', '$job_career', '$job_title', '$job_subtitle', '$job_experience')";

    $result2 = mysqli_query($conn, $sql2);


    // education inert database
    $e_title = $_POST['etitle'];
    $e_versity = $_POST['eversity'];
    $e_passyear = $_POST['epassyear'];
    $e_language = $_POST['elanguage'];



    $sql3 = "INSERT INTO education(etitle, eversity, epassyear, elanguage) 
    VALUE('$e_title', '$e_versity', '$e_passyear', '$e_language')";

    $result3 = mysqli_query($conn, $sql3);


}


?>