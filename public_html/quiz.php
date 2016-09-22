<?php
echo"<form action = 'quiz2.php' method = 'get'>";
echo"enter your first name<input type = 'text' name = 'FN'><br />";
echo"enter your last name<input type = 'text' name = 'LN'><br />";
echo"enter a password<input type = 'password' name = 'password'><br />";
echo"enter your email<input type = 'text' name = 'email'><br />";
echo"male<input type = 'radio' name = 'sex' value = 'male'>";
echo"female<input type = 'radio' name = 'sex' value = 'female'>";
echo"<input type = 'checkbox' name = 'val[]' value = 'hamburger'>hamburger&nbsp";
echo"<input type = 'checkbox' name = 'val[]' value = 'cheeseburger'>cheeseburger&nbsp";
echo"<input type = 'checkbox' name = 'val[]' value = 'hot dog'>hot dog&nbsp";
echo"<input type = 'checkbox' name = 'val[]' value = 'macaroni salad'>macaroni salad&nbsp";
echo"<input type = 'checkbox' name = 'val[]' value = 'brownie'>brownie&nbsp";
echo"<select name = 'payment'>";
echo"<option 'cash'>cash</option>";
echo"<option 'check'>check</option>";
echo"<option 'visa'>visa</option>";
echo"<option 'master card'>master card</option>";
echo"<input type = 'submit' value = 'submit'>";
echo"</form>";
?>
