<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        #includePHPFile {
            background-color: #51eabc;
        }
        
        h5 {
            display: inline;
            background: #27c8e1;
            opacity: 0.5;
        }
        
        
    </style>
    <title>Login Tester</title>
</head>

<body>
    <?php
        ob_start();
    ?>

    <body>
    
<!--    GET     -->
    <form method="get">
        <label for="#username">Username: </label>
        <input id="username" name="user" type="text" placeholder="Enter your username">
        <label for="#password">Password: </label>
        <input id="password" name="password" type="password" placeholder="Enter your password">
        <input id="submit" name="submit" type="submit" value="submit">
    </form>
    
<!--    To access values from form     -->
    <?php
        
        
        if(isset($_GET["submit"])) { // To check if the form has been submitted
            if($_GET["user"] == "cse470" && $_GET["password"] == "cse470") {
            echo "<p class='text-success'>Login Passed!</p>";
        }
        else {
            echo "<p class='text-danger'>Incorrect username and/or password!</p>";
        }
        echo "<br>";
        }
        
    ?>
    

</body>

    
    
    
    
    
    
    
    
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

    <script>
        // Get the current year for the copyright
        $('#year').text(new Date().getFullYear());
    </script>
</body>

</html>
