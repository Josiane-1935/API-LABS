<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="greeter.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>
<body>
<div id="my_form" >

<form method="post"  action="process.php">
  <h2>Salimia Me</h2>
<div id="name">
  Name:
  <input type="text" name="name" required placeholder="Enter Your Name" pattern="[A-Za-z]{3,30}" title="Can have less than or 30 letters and no numbers" />
</div>
<div id="age">
<label for="age">Age: </label>
<input type="number" id="age" name="age" min="5" max="80" required>
</div>
<div id="gender">
<label for="gender"> Gender: </label>
<input type="radio" id="male" name="gender" value="M">Male
<input type="radio" id="female" name="gender" value="F">Female
</div>
<div id="button">
<input type="submit" name="submit" value="Salimia me">
</div>
</form>
</div>
<div id="ta"

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script type="text/javascript">
<?php if($_GET['submit'] == "yes"):?>
Toastify({
  text: "<?="Hello ".$_GET['msg'];?>",
  duration: 3500,
  destination: "#",
  newWindow: false,
  close: false,
  gravity: "top", // `top` or `bottom`
  position: 'center', // `left`, `center` or `right`
  backgroundColor: "linear-gradient(90deg, rgb(0, 100, 0) 0%, rgb(0, 100, 0) 6%, rgba(255,255,255,1) 98%)",
  stopOnFocus: true, // Prevents dismissing of toast on hover
  avatar: 'greeter3.gif',
  className: 'toasty-greeter',
  onClick: function(){} // Callback after click
}).showToast();
<?php endif; ?>




</script>


</body>
</html>
