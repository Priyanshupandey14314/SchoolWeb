
<?php
session_start(); // Start the session

include('./admin/pdoConnection.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the login ID and password from the form
    $loginID = $_POST['loginId'];
    $password = $_POST['password'];

    try {
        $stmt = $connection->prepare("SELECT * FROM userdetails WHERE loginId = :loginID AND Password = :password");
        $stmt->execute([
            ':loginID' => $loginID,
            ':password' => $password
        ]);

        if ($stmt->rowCount() > 0) {
            // User credentials are correct
            $_SESSION['userLogin'] = $loginID;
            
            // Redirect the user to the dashboard
            header("Location: admin/dashboard.php");
            exit();
        } else {
            // User credentials are incorrect
            echo "Login Failed";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
}
?>

