<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="profile.php" method="post" enctype="multipart/form-data">
        <label for="fname">Full name:</label>
        <input type="text" id="fname" name="fname"><br>
        
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" max="120"><br>

        <label for="Course/Program">Course/Program:</label>
        <input type="text" id="Course/Program" name="Course/Program"><br>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email"><br>

        <label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="male">Male</label>
        <input type="radio" id="male" name="gender" value="male"><br>

        <input type="checkbox" id="watchmovie" name="watchmovie" value="movie">
        <label for="watchmovie">Watching Movies</label><br>
        <input type="checkbox" id="reading" name="reading" value="read">
        <label for="reading">Reading</label><br>
        <input type="checkbox" id="vWritng" name="Writng" value="Write">
        <label for="vWritng">Writing about life</label><br><br>

        <label for="message">Short Biography:</label><br>
        <textarea id="message" name="Short Biography" rows="5" cols="30"></textarea>

        <input type="file" name="fileToUpload" id="fileToUpload" accept="image/png, image/jpeg" hidden/><br>
    
        <label for="fileToUpload">Upload a profile image</label>
    
        <input type="submit" value="Upload Image" name="submit"><br>

        <input type="submit" value="Submit">

        
       

        



    </form>
    
</body>
</html>