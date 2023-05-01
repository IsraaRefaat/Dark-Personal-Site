<?php

$name=$_POST["name"];
$email=$_POST["email"];
 $number=$_POST["num"];
$ms=$_POST["ms"];

if ($name) {
         echo '<script>
       alert("Stayed Connected");
       window.location="../HTML/index.html";
    </script>';
}