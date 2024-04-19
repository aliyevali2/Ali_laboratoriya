<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
   
    return false;
  }
}
</script>
</head>
<body>

<h2>JavaScript Validation</h2>

<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
  Name: <input type="text" name="fname"    oninvalid="this.setCustomValidity('ad daxil et')" required >
  <input type="submit" value="Submit">
  <br>
  <span id="error" style="color:red"></span>
</form>

</body>
</html>