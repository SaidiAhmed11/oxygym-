   <?php // Authorisation details.
	$username = "ahmed.saidi@esprit.tn";
	$hash = "bd426c280afbd61e37ff5ac83851fb576477d86b16b7b627ed16fc319c240193";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "oxygym"; // This is who the message appears to be from.
	$numbers = "21620566666"; // A single number or a comma-seperated list of numbers
	$message = "votre Paiement est confirmé";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
    header('Location: AjouterPaiements.php');
    ?>