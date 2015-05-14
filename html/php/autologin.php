<?php
	// Include database connection details.
	require_once('db.php');

	function autologin() {
		$id = $_COOKIE['USER_ID'];
		global $conn;

		if ($id) {
			$sql = "SELECT correo, nombre FROM Usuarios WHERE idUsuario=$id";
			$result = $conn->query($sql);
			
			if ($result) {
				if ($result->num_rows > 0) {
					session_regenerate_id();
					$user = $result->fetch_assoc();
					$_SESSION['USER_ID'] = $id;
					$_SESSION['USER_EMAIL'] = $user['correo'];
					$_SESSION['USER_NAME'] = $user['nombre'];
					$result->close();
					session_write_close();
				}
			}
			else {
				die("Query failed: " . $conn->error);
			}
		}
	}
?>