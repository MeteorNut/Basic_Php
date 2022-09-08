<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        echo "    
        <script>
        Swal.fire({
            icon: 'success',
            title: '<h3>ระบบทำการบันทึกข้อมูลสำเร็จ</h3>',
            type: 'success',
            showConfirmButton: false,
            timer: 2000
        }).then(function() {
            window.location = 'FormRegister.php';
        });
        </script>
        ";
    }else
    {
        echo "        
        <script>
        Swal.fire({
            icon: 'error',
            title: '<h3>ระบบทำการบันทึกข้อมูลไม่สำเร็จ</h3>',
            type: 'error',
            showConfirmButton: false,
            timer: 2000
        }).then(function() {
            window.location = 'FormRegister.php';
        });
        </script>";
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