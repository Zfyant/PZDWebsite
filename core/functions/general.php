<?php
ob_start();


function array_sanitize($item) {
	$item = mysql_real_escape_string($item);
}

function sanitize($data) {
	return mysql_real_escape_string($data);
}

function output_errors($errors) {
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}

function user_bg() {
	return mysql_result(mysql_query("SELECT `Background` FROM `users` "),0);
}


function setComments($connect, $data) {
	if (isset($_POST['commentSubmit'])) {
		$uid = sanitize($_POST['uid']);
		$date = sanitize($_POST['date']);
		$message = sanitize($_POST['message']);
		
		//mysql_query("INSERT INTO `comments` (`uid`, `date`, `message`) 
		//VALUES ('$uid', '$date', '$message')");
		
		$sql = mysql_query("INSERT INTO `comments` (`uid`, `date`, `message`) 
		VALUES ('$uid', '$date', '$message')");
		if (mysql_num_rows($sql) > 0) {
		}
	}
}
function getComments($connect) {
	$query = mysql_query("SELECT * FROM `comments` ORDER BY ID DESC");
	
	while ($row = mysql_fetch_assoc($query)) {
		$id = $row['UID'];
		$query2 = mysql_query("SELECT * FROM `users` WHERE UserID = '$id'");
		if ($row2 = mysql_fetch_assoc($query2)) {
			echo "<li><div class='user-stamp'><span>";
			echo $row2['Username'] . "</span><br>&nbsp;";
			echo $row['Date'] . "</div><p>"; 
			echo nl2br($row['Message']);
			echo"</p>";
			if (isset($_SESSION['user_id'])) {
				if ($_SESSION['user_id'] == $row2['UserID']) {
					echo"
					<form class='edit-btn' method='POST' action='comment_edit.php'>
						<input type='hidden' name='id' value='".$row['ID']."'>
						<input type='hidden' name='uid' value='".$row['UID']."'>
						<input type='hidden' name='date' value='".$row['Date']."'>
						<input type='hidden' name='message' value='".$row['Message']."'>
						<button>Edit</button>
					</form>
					<form class='del-btn' method='POST' action='".deleteComments($connect)."'>
						<input type='hidden' name='id' value='".$row['ID']."'>
						<button type='submit' name='commentDelete'>Delete</button>
					</form>";
				}
				else {
					echo"
					<form class='reply-btn' method='POST' action='comment_reply.php'>
						<input type='hidden' name='id' value='".$row['ID']."'>
						<input type='hidden' name='uid' value='".$row['UID']."'>
						<input type='hidden' name='date' value='".$row['Date']."'>
						<input type='hidden' name='reply' value='".$row['Reply']."'>
						<button>Reply</button>
					</form>";
				} // Else
			} // If
			echo "</li>";
		} // If
		// Insert IF For Replies
	} // While
}// Function

function editComments($connect) {
	if (isset($_POST['commentSubmit'])) {
		$id = $_POST['id'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];
		
		mysql_query("UPDATE `comments` SET `message` = '$message' WHERE ID = '$id'");
		header("Location: comment_page.php");
	}
}

function replyComments($connect) {
	if (isset($_POST['commentSubmit'])) {
		$id = $_POST['id'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$reply = $_POST['reply'];
		
		mysql_query("INSERT INTO `comments` (`uid`, `date`, `reply`) 
		VALUES ('$uid', '$date', '$reply')");
		
		header("Location: comment_page.php");
	}
}

function deleteComments($connect) {
	if (isset($_POST['commentDelete'])) {
		$id = $_POST['id'];
		
		mysql_query("DELETE FROM `comments` WHERE ID = '$id'");
		header("Location: comment_page.php");
	}
}

date_default_timezone_set('America/Chicago');



?>