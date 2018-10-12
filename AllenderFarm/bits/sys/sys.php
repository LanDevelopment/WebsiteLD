<?php
	error_reporting(E_ALL);
	date_default_timezone_set('UTC');
	
	// Check form data is valid
	/*function CheckForm() {
		// Remove slashes from date (xx/xx/xxxx)
		$from = preg_replace("/", "", $_POST['from']);
		$to = preg_replace("/", "", $_POST['to']);
		
		// Check dates are likely dates
		if ((gettype($from) != integer) || (strlen($from) > 8))
			$error['from'] = 'Invalid Date';
		
		if ((gettype($to) != integer) || (strlen($to) > 8))
			$error['to'] = 'Invalid Date';
		
		checkdate($from[0].$from[1], $from[2].$from[3], $from[4].$from[5].$from[6].$from[7]);
		
	}*/
	
	// On form submit
	/*if (isset($_POST['BookOnlineSubmit'])) {
		//CheckForm();
		
		$mail['dest'] = 'joedeso.heaton@gmail.com';
		$mail['subject'] = 'New Booking - by ' . filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$mail['message'] = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		$mail['headers'] = 'From: webmaster@example.com' . "\r\n" .
			'Reply-To: webmaster@example.com' . "\r\n";
		
		$mail['body'] = 'Hi. test.';
		
		// If personally message, append to email body
		if (!empty($mail['message']))
			$mail['body'] = $mail['body'] . "\n\nTheir message:" . $mail['message'];
		
		wordwrap($mail['body'], 70, "\r\n");
		
		mail($mail['$dest'], $$mail['subject'], $$mail['body'], $$mail['headers']);
	}*/
	
	
	/*
	 * Connect as AvaiCal user to 
	 */
	/*try {
		$dbcal = new PDO('mysql:host=localhost;dbname=s_Allender_AvCal;port=3306', 's_Allender_AvCal', '8SbTEeBN9ATXqu92');
	} catch(PDOException $e) {
		echo $e->getMessage();
	}
	
	$dbcal->exec('INSERT INTO bookings (the_date, id_state) VALUES ()');
	*/
	
	/*if ($_GET['p'] == 'admin') {
		
		// Check for Database+Tables
		$db->exec('CREATE TABLE AllenderFarm_Form
		(
			id INTEGER PRIMARY KEY,
			from TEXT,
			to TEXT,
			name TEXT,
			phone TEXT,
			email TEXT,
			pets TEXT,
			address TEXT,
			message TEXT,
			adults INTEGER,
			children INTEGER,
		)');
	
	}
	
	$db = null;
	*/
?>
