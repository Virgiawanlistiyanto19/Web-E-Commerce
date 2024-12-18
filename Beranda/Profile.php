<?php
// Include koneksi dan mulai sesi
include 'Koneksi.php';
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['UserID'])) {
    header("Location: Login.php");
    exit();
}

// Ambil data pengguna dari session
$UserID = $_SESSION['UserID'];
$Username = $_SESSION['Username'];
$Email = $_SESSION['Email'];
$Photo = null;  // Gambar akan disimpan dalam bentuk biner

// Ambil foto profil dari database
$query = "SELECT Photo FROM users WHERE UserID = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $UserID);
$stmt->execute();
$stmt->bind_result($Photo);
$stmt->fetch();
$stmt->close();

// Update profil jika form di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateProfile'])) {
    $newUserID = htmlspecialchars(trim($_POST['user-id']));
    $newUsername = htmlspecialchars(trim($_POST['username']));
    $newEmail = htmlspecialchars(trim($_POST['email']));

    // Validasi input
    if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.');</script>";
    } else {
        if (!empty($_FILES['photo']['name'])) {
            $imageData = file_get_contents($_FILES['photo']['tmp_name']);
            $Photo = $imageData;
        }

        $updateQuery = $conn->prepare("UPDATE users SET Username = ?, Email = ?, Photo = ? WHERE UserID = ?");
        $updateQuery->bind_param("sssi", $newUsername, $newEmail, $Photo, $UserID);

        if ($updateQuery->execute()) {
            $_SESSION['UserID'] = $newUserID;
            $_SESSION['Username'] = $newUsername;
            $_SESSION['Email'] = $newEmail;
            echo "<script>alert('Profile updated successfully!');</script>";
            header("Refresh:0");
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }

        $updateQuery->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="layout/css/profile_style.css"/>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">Profile</div>
        <div class="profile-content">
            <div class="file-input">
                <?php
                if ($Photo) {
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($Photo) . '" alt="Profile Photo"/>';
                } else {
                    echo '<img src="default-photo.jpg" alt="Profile Photo"/>';
                }
                ?>
                <input id="file" name="photo" type="file" form="updateProfileForm"/>
                <span>No file chosen</span>
                <span>Maximum file size: 1 MB</span>
            </div>
            <form id="updateProfileForm" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                <div class="form-field">
                        <label for="user-id">ID<span style="color: red;">*</span></label>
                        <input id="user-id" name="user-id" type="text" value="<?php echo htmlspecialchars($UserID); ?>"readonly/>
                    </div>
                    <div class="form-field">
                        <label for="username">Username  <span style="color: red;">*</span></label>
                        <input id="username" name="username" type="text" value="<?php echo htmlspecialchars($Username); ?>"/>
                    </div>
                    <div class="form-field">
                        <label for="email">Email <span style="color: red;">*</span></label>
                        <input id="email" name="email" type="email" value="<?php echo htmlspecialchars($Email); ?>"readonly/>
                    </div>
                </div>
                <div class="form-group">
                <div class="form-field">
                    <label for="about-me">About me</label>
                    <textarea id="about-me" name="about-me" readonly></textarea>
                </div>
                </div>
                <div class="update-button">
                    <button type="submit" name="updateProfile">Update</button>
                </div>
            </form>
            <a href="homepage.php"><span class="icon">🏠</span> Back</a>
            <a href="logout.php"><span class="icon">🚪</span> Logout</a>
        </div>
    </div>
</body>
</html>
