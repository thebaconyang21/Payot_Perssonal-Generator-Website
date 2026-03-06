<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile Generator</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color:#d9d6bd;
        }

        .form-container{
            width:420px;
            padding:30px;
            border:2px solid #777;
            border-radius:12px;
            background-color:#e7cda9;
            box-shadow:0 4px 8px rgba(0,0,0,0.2);
        }

        h2{
            text-align: center;
            margin-bottom:10px;
        }

        hr{
            margin-bottom: 20px;
        }
 
        label{
            display:inline-block;
            width:140px;
            text-align:right;
            margin-right:5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        textarea{
            width: 200px;
            background:#d9d9d9;
            border:1px solid #888;
            padding:5px;
        }

        textarea{
            width:100px;
            background: #d9d6bd;
            border: 1px solid #888;
        } 

        input[type="radio"],
        input[type="checkbox"]{
            margin-left:5px;
            margin: 10px 0;
        }

        input[type="file"]{
            margin-top:10px;
        }

        input[type="submit"]{
            display: block;
            margin: 20px auto 0;
            background:#7ee08a;
            border:1px solid #444;
            padding:6px 20px;
            border-radius:4px;
            cursor:pointer;
        }

        input[type="submit"]:hover{
            background:#66c973;
        }

    </style>

</head>
<body>

    <div class="form-container">
        <h2>Personal Profile Generator</h2>
        <hr>
        <form action="profile.php" method="POST" enctype="multipart/form-data">
            <label for="fullname">Full name:</label>
            <input type="text" id="fullname" name="fullname"><br><br>
        
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" max="120"><br><br>

            <label for="course">Course/Program:</label>
            <input type="text" id="course" name="course"><br><br>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email"><br>

           <input type="radio" id="Female" name="gender" value="Female">
           <label for="Female">Female</label>
           <input type="radio" id="Male" name="gender" value="Male">
           <label for="Male">Male</label><br>


            Hobbies:<br>
            <input type="checkbox" id="Movie" name="hobbies[]" value="Movie">
            <label for="Movie">Watching Movies</label><br>
            <input type="checkbox" id="Read" name="hobbies[]" value="Read">
            <label for="Read">Reading</label><br>
            <input type="checkbox" id="Write" name="hobbies[]" value="Write">
            <label for="Write">Writing about life</label><br><br>

            <label for="bio">Short Biography:</label><br>
            <textarea id="bio" name="bio" rows="5" cols="30"></textarea><br>
    
            <label for="fileToUpload">Upload a profile image</label>
            <input type="file" name="profile_image" id="profile_image" accept="image/png, image/jpeg">

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>