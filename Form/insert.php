
    <?php
    include("header.php");
    ?>

<?php
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
?>
<center><?php
include("config.inc.php"); //-- ไฟล์ใช้ในการเพิ่มข้อมูลเข้าฐานข้อมูล  

    $firstname = $_POST['txt_firstname'];
    $name = $_POST['txt_name'];
    $lastname = $_POST['txt_Lastname'];
    $sex = $_POST['txt_sex'];
    $date = $_POST['txt_birthdate'];
    $address = $_POST['txt_address'];
    $tell = $_POST['txt_number'];
    $email = $_POST['txt_email'];
    $sql = "INSERT INTO tbl_member (id, firstname, name, lastname, sex, birthday, address, tel, email) VALUES ('', '$firstname','$name','$lastname','$sex','$date','$address','$tell','$email')";
    
    if (mysqli_query($conn, $sql)) 
    {
        echo "เพิ่มข้อมูลสำเร็จ";
    }else
    {
        echo "เพิ่มข้อมูลไม่สำเร็จ";
    }
    $conn -> close();
    /*
    echo $firstname;
    echo $name;"       ";
    echo "&nbsp;&nbsp;&nbsp;",$lastname;
    echo "<br/>";
    echo "เพศ =:",$sex;
    echo "<br/>";
    echo "วันเกิด =",$date;
    echo "<br/>";
    echo "เบอร์ =:",$tell;
    echo "<br/>";
    echo "ที่อยู่ =",$address;
    echo "<br/>";
    echo "อีเมล์ =:",$email;
    echo "<br/>";
    */
?></center>

<?php
    include("footer.php");
?>