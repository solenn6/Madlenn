<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Patisserie Madlenn</title>
        <link rel="stylesheet" media="screen" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1> <span>Patisserie Madlenn</span> </h1>
        <h2> Espace Administrateur </h2>
        <h3> Se connecter </h3>
        <form action="admin.php" method='POST'>
            <div>
                <div class="col-md-6 form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control ">
                </div>
                <div>
                    <div class="col-md-6 form-group">
                        <input type="submit" value="Se connecter" class="btn btn-primary px-3 py-3">
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>