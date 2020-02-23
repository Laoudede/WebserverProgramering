<?php
	include 'dbconnect.php';

	if(isset($_POST['länID'])) {
			$db = new DbConnect;
			$conn = $db->connect();
			$stmt = $conn->prepare("SELECT * FROM geo_municipalities WHERE countyid = " . $_POST['länID']);
			$stmt->execute();
			$kommuner = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($kommuner);
		}

	function laddaLän() {
		$db = new DbConnect;
		$conn = $db->connect();
		$stmt = $conn->prepare("SELECT * FROM geo_counties");
		$stmt->execute();
		$län = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $län;
	}
	?>
