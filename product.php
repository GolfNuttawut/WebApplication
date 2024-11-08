<?php
require('server/connection.php');

$product_id = $_POST["product_id"];

$sql = "SELECT * FROM products WHERE product_id = '$product_id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

$ch = $row["product_id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
  <link rel="stylesheet" href="\static\css\styles2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: #be0029;">
<div id="google_translate_element"></div>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> </script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'google_translate_element'
            );
        }
    </script>
  <div class="container">
    <div class="detail">
        <div class="indetail">
          <br><br>
          <div class="picside">
            <img style="width: 100%; border-top-left-radius: 10px; border-top-right-radius: 10px;" src="\static\productimage\<?php echo $row["product_id"]; ?>.PNG" alt="">
            <br>
            <p style="text-align: center; font-size: 2.5vw;"><?php echo $row["product_name_th"]; ?></p>
            <p style="text-align: center; font-size: 2vw;"><?php echo $row["detail_th"]; ?></p>
          </div>
          <br><br>
          <div class="formside">
          
          <?php
          if(substr($ch,0,1)==='A' || substr($ch,0,1)==='B'){
          ?>

          <form action="addCart.php" method="POST">
          <input type="hidden" value="<?php echo $row["product_id"];?>" name="product_id">
          <input type="hidden" value="<?php echo $row["product_name"];?>" name="product_name">
          <input type="hidden" value="<?php echo $row["product_name_th"];?>" name="product_name_th">
          <input type="hidden" value="<?php echo $row["price_s"];?>" name="price_s">
          <input type="hidden" value="<?php echo $row["price_l"];?>" name="price_l">
            <div class="input-group input-group-lg">
              <label class="input-group-text" for="size">ขนาด</label>
              <select class="form-select" name="size" required value="">
                <option value="S">S</option>
                <option value="L">L</option>
              </select>
            </div>
            <br>
            <div class="input-group input-group-lg">
              <label class="input-group-text" for="soup">น้ำสต๊อก</label>
              <select class="form-select" name="soup" value="">
                <option value="pork">หมู</option>
                <option value="beef">เนื้อ</option>
              </select>
            </div>
            <br>
            <div class="input-group input-group-lg">
              <span class="input-group-text">ระดับความเผ็ด</span>
              <input type="number" class="form-control" name="degree" aria-label="Sizing example input" max="10" min="0" aria-describedby="inputGroup-sizing-default" value="0">
            </div>
            <br>
            <div class="input-group input-group-lg">
              <label class="input-group-text" for="vegetable">ผัก</label>
              <select class="form-select" name="vegetable" value="">
                <option value="no">ไม่ใส่</option>
                <option value="yes">ใส่</option>
              </select>
            </div>
            <br><br>
            <div class="input-group input-group-lg">
              <span class="input-group-text">จำนวน</span>
              <input type="number" class="form-control" name="count" aria-label="Sizing example input" min="0" aria-describedby="inputGroup-sizing-default" value="0">
            </div>
            <br><br>
            <div style="right: 0;">
            <input type="submit" value="เพิ่มลงตะกร้า" class="btn btn-success">
            <input type="Reset" value="ยกเลิก" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">กลับหน้าเเรก</a>
            </div>
          </form>

          <?php
          }
          ?>

          <?php
          if(substr($ch,0,1)==='C'){
          ?>

          <form action="addCart.php" method="POST">
          <input type="hidden" value="<?php echo $row["product_id"];?>" name="product_id">
          <input type="hidden" value="<?php echo $row["product_name"];?>" name="product_name">
          <input type="hidden" value="<?php echo $row["product_name_th"];?>" name="product_name_th">
          <input type="hidden" value="<?php echo $row["price_s"];?>" name="price_s">
          <input type="hidden" value="<?php echo $row["price_l"];?>" name="price_l">
            <div class="input-group input-group-lg">
              <label class="input-group-text" for="size">ขนาด</label>
              <select class="form-select" name="size" required value="">
                <option value="S">S</option>
                <option value="L">L</option>
              </select>
            </div>
            <br>
            <div class="input-group input-group-lg">
              <span class="input-group-text">จำนวน</span>
              <input type="number" class="form-control" name="count" aria-label="Sizing example input" min="0" aria-describedby="inputGroup-sizing-default" value="0">
            </div>
            <br><br>
            <div style="right: 0;">
            <input type="submit" value="เพิ่มลงตะกร้า" class="btn btn-success">
            <input type="Reset" value="ยกเลิก" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">กลับหน้าเเรก</a>
            </div>
          </form>
          <?php
          }
          ?>

          <?php
          if(substr($ch,0,1)==='D'){
          ?>

          <form action="addCart.php" method="POST">
          <input type="hidden" value="<?php echo $row["product_id"];?>" name="product_id">
          <input type="hidden" value="<?php echo $row["product_name"];?>" name="product_name">
          <input type="hidden" value="<?php echo $row["product_name_th"];?>" name="product_name_th">
          <input type="hidden" value="<?php echo $row["price_s"];?>" name="price_s">
          <input type="hidden" value="<?php echo $row["price_l"];?>" name="price_l">
            <div class="input-group input-group-lg">
              <span class="input-group-text">จำนวน</span>
              <input type="number" class="form-control" name="count" aria-label="Sizing example input" min="0" aria-describedby="inputGroup-sizing-default" value="0">
            </div>
            <br><br>
            <div style="right: 0;">
            <input type="submit" value="เพิ่มลงตะกร้า" class="btn btn-success">
            <input type="Reset" value="ยกเลิก" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">กลับหน้าเเรก</a>
            </div>
          </form>
          <?php
          }
          ?>

          </div>
        </div>
    </div>
  </div>
</body>

</html>