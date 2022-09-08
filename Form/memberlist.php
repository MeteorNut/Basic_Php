<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Center Game</title>
</head>
<body>
    <?php
    include("config.inc.php");
    include("header.php");

    $sql ="select * from tbl_member";
    $objQuery = mysqli_query ($conn, $sql);
    ?>
    <br />

<main>
    <center>
        <p><h1>รายชื่อสมาชิก</h1></p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">คำนำหน้า</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">นามสกุล</th>
      <th scope="col">เพศ</th>
      <th scope="col">วัน/เดือน/ปีเกิด</th>
      <th scope="col">ที่อยู่</th>
      <th scope="col">เบอร์โทร</th>
      <th scope="col">อีเมล์</th>
      <th scope="col">แก้ไขข้อมูล</th>
      <th scope="col">ลบข้อมูล</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
    ?>
    <tr>
      <td><?php echo $objResult['id']; ?></td>
      <td><?php echo $objResult['firstname']; ?></td>
      <td><?php echo $objResult['name']; ?></td>
      <td><?php echo $objResult['lastname']; ?></td>
      <td><?php echo $objResult['sex']; ?></td>
      <td><?php echo $objResult['birthday']; ?></td>
      <td><?php echo $objResult['address']; ?></td>
      <td><?php echo $objResult['tel']; ?></td>
      <td><?php echo $objResult['email']; ?></td>
      <td><a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a></td>
      <td><a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
    </center>
</main>

    <?php
    include("footer.php");
    ?>

</body>
</html>