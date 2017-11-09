<?php
 print_r($_POST);
 $enteredName=$_POST['name'];
 $myArray = array("Anish", "Riya", "John", "Aleyamma");
 $isPresent = false;
 if ($_POST){
    foreach ($myArray as $key => $value){
        echo $value;
        if($value == $enteredName){
         $isPresent = true;
        }
    }
 if($isPresent){
        echo "<p>Hello ".$enteredName."</p>";
    }
 else{
     echo "<p> I don't know you </p>";
 }
 }

?>



<form method="post">

    <p>Please enter a number.</p>
    <input type="text" name="Number">
    
    <p>Please enter your name.</p>
    <input type="text" name="name">
    <input type="submit" value="Go!">
</form>

