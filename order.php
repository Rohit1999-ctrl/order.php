
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>order</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="hello" style="background-image: url('images/fc_barcelona_patterns_02.jpg');">
    <div class="order">
      <form class="" onsubmit="rendering()" action="includes/signup.php" method="post">
        <table>
          <h2 class="orderd fontd">Customer Details</h2>
          <hr>
          <tr>
            <td><label class="fontd" for="">Name</label></td>
            <td><input id="name" class="inputb" type="text" name="fname" value="" onkeyup="checkname()"></td>
            <td><p id="checkname" class="invalid1">invalid name</p></td>
            <td><p id="mandatory" class="invalid1">*mandatory</p></td>
          </tr>
          <tr>
            <td><p class="fontd">Phone No</p></td>
            <td><input id="number" type="text" name="phone" value="" onkeyup="checkphone()"></td>
            <td><p id="checknum" class="invalid2">invalid number</p></td>
            <td><p id="mandatory1" class="invalid1">*mandatory</p></td>
          </tr>
          <tr>
            <td><p class="fontd">Email</p></td>
            <td><input id="email" type="email" name="email" value="" onkeyup="checkmail()"></td>
            <td><p id="checkemail" class="invalid3">invalid Email</p></td>
            <td><p id="mandatory2" class="invalid1">*mandatory</p></td>
          </tr>
          <tr>
            <td class="fontd">Address</td>
            <td><textarea name="address" rows="8" cols="80"></textarea></td><br>
          </tr>
          <tr>
              <td class="fontd submit"><button type="submit" name="button">Submit</button></td>
          </tr>
        </table>

      </form>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="index1.js" charset="utf-8"></script>
    </div>



  </body>
</html>
