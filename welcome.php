<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #e3f2fd;
            padding: 40px;
        }

        .info-box {
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

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        span {
            font-weight: bold;
            color:rgba(255, 0, 81, 0.78);
        }

        .back-button {
            margin-top: 20px;
            display: block;
            text-align: center;
        }

        .back-button a {
            background-color:rgba(255, 0, 140, 0.81);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
        }

        .back-button a:hover {
            background-color:rgb(179, 0, 18);
        }

    </style>
</head>
<body>

<div class="info-box">
    <h2>Student Information Data</h2>
    <p><span>Name:</span> <?php echo $_POST['name']; ?></p>
    <p><span>Age:</span> <?php echo $_POST['age']; ?></p>
    <p><span>Email:</span> <?php echo $_POST['email']; ?></p>
    <p><span>Phone:</span> <?php echo $_POST['phone']; ?></p>
    <p><span>City:</span> <?php echo $_POST['city']; ?></p>
    <p><span>Course:</span> <?php echo $_POST['course']; ?></p>

    <div class="back-button">
        <a href="Index.php">Go Back</a>
    </div>
</div>

</body>
</html>

