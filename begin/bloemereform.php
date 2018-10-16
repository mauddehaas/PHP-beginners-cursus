<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="form.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
<title>Page title</title>
<body>
    <header>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <p class="navbar-brand">loginpagina</p>
                </div>
            </div>
        </nav>
    </header>
<form method="post" name="myemailform" action="form-to-email.php">
<p>Enter Name:</p><input type="text" name="name">
<p>Enter Email Address:</p><input type="text" name="email">
<p>Enter Message: </p><textarea name="message"></textarea>

 

<input type="submit" value="Send Form">

</form>

</form>   



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>