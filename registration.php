<?php

$page_title = "Registration";

include 'includes/header.html';

include 'includes/navbar.html';

if (isset ($_SESSION['username'])){
	echo "Logged in with name '" . $_SESSION['username'] . "'. You can <a href='logout.php'>logout</a>";
}
else{
    include 'includes/registration.html';

?>


<?php

include 'includes/footer.html';

}

?>