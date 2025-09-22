<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h2>Update User</h2>
            <p>Edit user information below</p>
        </div>

        <?php
        // db Connection
        require_once __DIR__ . '/../backend/dbConnection.php';

        // check id in URL
        if (isset($_GET['id'])){
            $id = $_GET['id']; // simple sanitize

            // get user by id
            $sql = "SELECT * FROM user_details WHERE id = '$id'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $name = $row['name'];
                $email = $row['email'];
                $password = $row['password'];
                ?>

                <!-- update form -->

                <form action="../backend/update.inc.php" method="post">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                    
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" value="<?php echo htmlspecialchars($password); ?>" required>
                    </div>
                    
                    <div class="btn-group">
                        <button type="submit" class="btn btn-update">Update User</button>
                        <a href="../frontend/display.php" class="btn btn-cancel">Cancel</a>
                    </div>
                </form>

                <?php
            } else {
                 // no record found
                echo '<div class="error-message">No record found with the specified ID.</div>';
            }
        } else {
            // id missing
            echo '<div class="error-message">ID parameter is missing from the URL.</div>';
        }
        ?>
    </div>
</body>
</html>
