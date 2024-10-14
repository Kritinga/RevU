<?php 

$url = isset($_GET['url']) ? $_GET['url'] : 'index';

switch ($url) {
	case 'HomePage':
		include 'homepage.php';
		break;
	case 'LoginHere':
		include 'login.php';
		break;
	case 'AdminPage':
		include 'admin.php';
		break;
		case 'StudentAccount':
		include 'student_acc.php';
		break;
	case 'Forgot':
		include 'forgot.php';
		break;
	default:
		echo "<script>window.location.href='LoginHere'</script>";
		break;
}




?>