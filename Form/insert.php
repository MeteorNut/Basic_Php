
    <?php
    include("header.php");
    ?>
<?php
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
?>
<center>
<?php
    $firstname = $_POST['txt_firstname'];
    $name = $_POST['txt_name'];
    $Lastname = $_POST['txt_Lastname'];
    $sex = $_POST['txt_sex'];
    $birthdate = $_POST['txt_birthdate'];
    $address = $_POST['txt_address'];
    $number = $_POST['txt_number'];
    $email = $_POST['txt_email'];

    echo $firstname;
    echo $name;
    echo "&nbsp;&nbsp;", $Lastname;
    echo "<br/>";
    echo "เพศ : ", $sex;
    echo "<br/>"; 
    echo "วันที่เกิด : ", $birthdate;
    echo "<br/>";
    echo "ที่อยู่ : ", $address;
    echo "<br/>";
    echo "เบอร์โทร : ", $number;
    echo "<br/>";
    echo "Email : ", $email;
?>
</center>

<?php
    include("footer.php");
    ?>