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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
        }

        h2 {
            text-align: center;
            color: blueviolet;
            margin-bottom: 30px;
        }

        img {
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Generated Profile</h2>

        <img src="<?php echo $folder; ?>" alt="profile_image" class="rounded" wwidth="304" height="236"><br>

        <div class="row">
            <div class="col">
                <b>Full Name:</b> <?php echo $fullname; ?><br>
                <b>Age:</b> <?php echo $age; ?><br>
                <b>Course:</b> <?php echo $course; ?><br>
                <b>Email:</b> <?php echo $email; ?><bsr>
                <b>Gender:</b> <?php echo $gender; ?><br>
                <b>Hobbies:</b> <?php echo $hobbies; ?><br>

            </div>
            <div class="col">
                <b>Biography:</b> <?php echo $bio; ?>
            </div>
        </div>
    </div>

</body>
</html>