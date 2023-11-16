<!DOCTYPE html>
<html>
<head>
    <title>User Information</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="userinfo-form animated-form">
        <form action="process_userinfo.php" method="post">
            <h2>User Information</h2>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="phone"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone" name="phone" required>

            <label for="dt"><b>Description</b></label>
            <textarea placeholder="Enter Description" name="dt" required></textarea>

            <button type="submit" class="submitbtn">Submit</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
