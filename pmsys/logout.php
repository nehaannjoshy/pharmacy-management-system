<?php
// require_once"conn.php";
if(isset($_POST['logout'])) {
header('Location: index.php'); 
}
?>
<form method="POST">
<input type="submit" name="logout" />
</form>
