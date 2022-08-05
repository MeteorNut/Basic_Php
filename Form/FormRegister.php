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
    include("header.php");
    ?>

<main>
    &nbsp;
    &nbsp;
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
            <i class="bi bi-star-fill"></i> Register <i class="bi bi-star-fill"></i>
            </div>
            <div class="card-body">
                <form name="form1" action="#" method="post">
                    <div class="row"> <!-- row1 -->
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1" class="form-label"><i class="bi bi-bookmark-star"></i> คำนำหน้าชื่อ</label>
                            <select name="firstname" id="firstname" class="form-control">
                                <option value="">คำนำหน้า</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <label for="exampleFormControlInput1" class="form-label"><i class="bi bi-bookmark-star"></i> ชื่อ</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="กรุณากรอกข้อมูล">
                        </div>
                        <div class="col-md-5">
                            <label for="exampleFormControlInput1" class="form-label"><i class="bi bi-bookmark-star"></i> นามสกุล</label>
                            <input type="text" class="form-control" name="Lastname" id="Lastname" placeholder="กรุณากรอกข้อมูล">
                        </div>
                    </div> <!-- row1 -->
                    &nbsp;
                    &nbsp;
                    <div class="row"> <!-- row2 -->
                        <div class="col-md-2">
                            <label for="exampleFormControlInput1" class="form-label"><i class="bi bi-gender-ambiguous"></i> เพศ </label>
                            <div>
                            <input type="radio" class="form-check-input" name="sex" id="sex"> ชาย
                            <input type="radio" class="form-check-input" name="sex" id="sex"> หญิง
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="exampleFormControlInput1" class="form-label"><i class="bi bi-balloon-heart-fill"></i> วัน/เดือน/ปี เกิด</label>
                            <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate" placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th">
                        </div>
                        <div class="col-md-7">
                            <label for="exampleFormControlInput1" class="form-label"><i class="bi bi-house-heart-fill"></i> ที่อยู่</label>
                            <textarea class="form-control" name="txt_address" id="txt_address" placeholder="กรุณากรอกข้อมูล"></textarea>
                        </div>
                    </div> <!-- row2 -->
                    &nbsp;
                    &nbsp;
                    <div class="row"> <!-- row3 -->
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label"><i class="bi bi-telephone-fill"></i> เบอร์โทร</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="กรุณากรอกข้อมูล">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label"><i class="bi bi-envelope-fill"></i> อีเมลล์</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="กรุณากรอกข้อมูล">
                        </div>
                    </div> <!-- row3 -->
                    &nbsp;
                    &nbsp;
                    <center>
                        <button class="btn btn-success btn-sm" type="submit"><i class="bi bi-check-circle-fill"></i>  บันทึก   </button>
                        <button class="btn btn-warning btn-sm" type="submit"><i class="bi bi-x-circle-fill"></i>  ยกเลิก</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</main>

    <?php
    include("footer.php");
    ?>

</body>
</html>