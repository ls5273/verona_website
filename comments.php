<!-- 
@ASSESSME.USERID: ls5273
@ASSESSME.AUTHOR: Lana Sorak
@ASSESSME.ANALYZE: YES
-->

<?php 
    $title1 = "Comments";
    $title2 = "Comments";
    $style_sheet = "layout.css";
    include('assets/php/header.php');
    include('assets/php/menu.php');

    //My info copy-pasted from GitHub CA
    $host = "localhost";
    $username = "ls5273";
    $password = 'Diction9$serfdom';
    $database = "ls5273";
    $port = "3306";

    $conn = new mysqli($host,$username,$password,$database,$port);

    if ($conn->connect_error) {
        die("Connection failed; " . $conn->connect_error);
        exit();
    }

    $conn->query("
        CREATE TABLE IF NOT EXISTS comments (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            comment TEXT NOT NULL,
            created_at DATETIME NOT NULL)
    ");

    $error = "";
    $successMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(trim($_POST['name']));
        $comment = htmlspecialchars(trim($_POST['comment']));

        if (!empty($name) && !empty($comment) && !is_numeric($name)) {
            $stmt = $conn->prepare("INSERT INTO comments (name, comment, created_at) VALUES (?, ?, NOW())");
            $stmt->bind_param("ss", $name, $comment);

            if ($stmt->execute()) {
                $successMessage = '<h2> Thank you for your submission, ' . htmlspecialchars($name) .'! </h2>';
            }
            else {
                $error = "Error saving comment: " . $stmt->error;
            }
            $stmt->close();
        }
        else {
            $error = "Invalid input: Please make sure all fields are filled correctly!";
        }
    }

    $result = $conn->query("SELECT name, comment, created_at FROM comments ORDER BY created_at DESC");
?>

    <div class="main">

        <h2>Please leave your feedback!</h2>
        <form name="form" method="post" onsubmit="return validateForm();">
            <div class="form-group">
                <label>Name: </label>
                <input type="text" name="name" id="name" class="input-field"> <br/>
            </div>

            <div class="form-group">
                <label>Comment: </label>
                <textarea name="comment" id="comment" class="input-field"></textarea> <br />
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" class="submit">
            </div>
        </form>

        <div class="comments-section">
            <h2>Previous Comments</h2>
            <?php
            if($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="comment">';
                    echo '<p><strong>' . htmlspecialchars($row['name']) . '</strong> - ' . htmlspecialchars($row['comment']) . " - " . 
                                        date('F j, Y, g:i a', strtotime($row['created_at'])) . '</p> <br />';
                    echo '</div>';
                }
            }
            else {
                echo '<p> No comments yet. Be the first one to comment!!! </p>';
            }

            $conn->close();
            ?>
        </div>

    </div>
