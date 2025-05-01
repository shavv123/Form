<!DOCTYPE html>
<html>
<head>
    <title>Student Information Form</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f8ff;
            padding: 40px;
        }

        .form-container {
            max-width: 500px;
            background: #ffffff;
            margin: auto;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color:rgba(106, 255, 0, 0.81);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color:rgba(75, 179, 0, 0.74);
        }

    </style>
</head>
<body>

<div class="form-container">
    <h2>Student Information Form</h2>
    <form action="welcome.php" method="post">
        <label> Name:</label>
        <input type="text" name="name" required>

        <label>Gender</label>
        <input type="text" name="Gender" require>

        <label>Age:</label>
        <input type="number" name="age" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Phone:</label>
        <input type="text" name="phone" required>

        <label>City:</label>
        <input type="text" name="city" required>

        <label>Course:</label>
        <input type="text" name="course" required>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
