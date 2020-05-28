<?php

//isset($_POST['rowID']) ? $_POST['rowID'] : '';
if (isset($_POST['submit'])) {
  session_start();
  $_SESSION["age"] = $_POST['age'];
  $_SESSION["name"]=$_POST['name'];
  $_SESSION["gender"] = $_POST['gender'];
  $greeting=$_SESSION["name"];

  if ($_SESSION["age"] <= 12 && $_SESSION["gender"]=="M") {
    //$msg="Child";

    header("Location: greeter.php?msg=Child, ${greeting}&submit=yes");
  }
  elseif ($_SESSION["age"] <=12 && $_SESSION["gender"]=="F") {
    //echo "Young lady";
    header("Location: greeter.php?msg=Young lady, ${greeting}&submit=yes");
  }
  elseif ($_SESSION["age"]>=13 && $_SESSION["age"]<=19 && $_SESSION["gender"]=="M") {
    //echo "Adolescent";
    header("Location: greeter.php?msg=Adolescent, ${greeting}&submit=yes");
  }
  elseif ($_SESSION["age"]>=13 && $_SESSION["age"]<=19 && $_SESSION["gender"]=="F") {
    //echo "Teenie";
    header("Location: greeter.php?msg=Teenie, ${greeting}&submit=yes");
  }
  elseif ($_SESSION["age"]>=20 && $_SESSION["age"]<=30 && $_SESSION["gender"]=="M") {
    //echo "Youth";
    header("Location: greeter.php?msg=Youth, ${greeting}&submit=yes");
  }
  elseif ($_SESSION["age"]>=20 && $_SESSION["age"]<=30 && $_SESSION["gender"]=="F") {
    //echo "Miss";
    header("Location: greeter.php?msg=Miss, ${greeting}&submit=yes");
  }
  elseif ($_SESSION["age"]>30 && $_SESSION["gender"]=="F") {
    //echo "Woman";
    header("Location: greeter.php?msg=Great Woman, ${greeting}&submit=yes");
  }
  else {
    //echo "Mzito";
    header("Location: greeter.php?msg=Great Man, ${greeting}&submit=yes");
  }
}

 ?>
