<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="./database.php" method="POST" id="form" autocomplete="off">
            <h1>Feedback Form</h1>
            <div class="Form">
                
                <label>First Name</label>
                <input type="text" name="fname" required><br>
            
                <label>Last Name</label>
                <input type="text" name="lname"required><br>
            
                <label>Email</label>
                <input type="email" name="email"required><br>
                
                <textarea  name="msg" placeholder="Write your valuable feedback or any suggestions..." style="height:200px"></textarea><br>
                
            </div>
            <button type="submit" value="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>