<?php
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$course = $_POST['course'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$bio = $_POST['bio'];

$hobbies = "";
if(isset($_POST['hobbies'])){
    $hobbies = implode(", ", $_POST['hobbies']);
}

$imageName = $_FILES['profile_image']['name'];
$tempName = $_FILES['profile_image']['tmp_name'];

$folder = "uploads/".$imageName;

move_uploaded_file($tempName, $folder);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Profile</title>
</head>
<body>
<h2>Generated Profile</h2>

<img src="<?php echo $folder; ?>" alt="profile_image" width="200"><br>

<b>Full Name:</b> <?php echo $fullname; ?><br>
<b>Age:</b> <?php echo $age; ?><br>
<b>Course:</b> <?php echo $course; ?><br>
<b>Email:</b> <?php echo $email; ?><br>
<b>Gender:</b> <?php echo $gender; ?><br>
<b>Hobbies:</b> <?php echo $hobbies; ?><br>
<b>Biography:</b> <?php echo $bio; ?><br>

    

</body>
</html>