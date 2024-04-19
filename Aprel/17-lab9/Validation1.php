<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  let error = document.getElementById("error");
  if (x == "") {
    error.innerHTML = "Name must be filled out";
    return false;
  }
}
</script>
</head>
<body>

<h2>JavaScript Validation</h2>

<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
  Name: <input type="text" name="fname"  >
  <input type="submit" value="Submit"><br>
  <span id="error" style="color: red;"></span>
</form>

</body>
</html>