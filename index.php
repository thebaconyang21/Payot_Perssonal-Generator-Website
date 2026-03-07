<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Profile</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        :root {
            --primary: #6c5ce7;
            --secondary: #a29bfe;
            --bg: #dfe6e9;
            --text: #2d3436;
        }

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
            box-shadow: 0 10px 25px rgba(114, 18, 138, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h1 {
            text-align: center;
            color: var(--primary);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 400;
            color: #636e72;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #000000;
            border-radius: 8px;
            font-family: inherit;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        .radio-group, .checkbox-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.9rem;
        }

        button {
            display: flex;
            justify-content: center;
            width: 50%;
            margin: 0 auto;
            padding: 10px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #5649c0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Personal Profile Generator</h1>
        
        <form action="profile.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required placeholder="Beah Payot">
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" min="1" max="120" required>
            </div>

            <div class="form-group">
                <label for="course">Course / Program:</label>
                <input type="text" id="course" name="course" required placeholder="e.g. Information Technoloy">
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required placeholder="beah@email.com">
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <div class="radio-group">
                    <label class="checkbox-item">
                        <input type="radio" name="gender" value="Male" required> Male
                    </label>
                    <label class="checkbox-item">
                        <input type="radio" name="gender" value="Female"> Female
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label>Hobbies:</label>
                <div class="checkbox-group">
                    <label class="checkbox-item"><input type="checkbox" name="hobbies[]" value="Reading"> Reading manga/manwha</label>
                    <label class="checkbox-item"><input type="checkbox" name="hobbies[]" value="Watch"> Watching Movies</label>
                    <label class="checkbox-item"><input type="checkbox" name="hobbies[]" value="Music"> Listening Music</label>
                    <label class="checkbox-item"><input type="checkbox" name="hobbies[]" value="Write"> Writing</label>
                </div>
            </div>

            <div class="form-group">
                <label for="bio">Short Biography:</label>
                <textarea id="bio" name="bio" rows="4" required placeholder="Tell us about yourself..."></textarea>
            </div>

            <div class="form-group">
                <label for="profile_image">Upload Profile Image:</label>
                <input type="file" id="profile_image" name="profile_image" accept="image/*" required>
            </div>

            <button type="submit">Generate Profile</button>
        </form>
    </div>

</body>
</html>