<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Album</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body>
    'name', 'phone','email','bio', 'profile_picture'
        <form action=/api/users method="post">
            Name:<input name="name"><br>
            Phone:<input name=phone><br>
            Email: <input name=email><br>
            Bio:<input name=bio><br>
            Profile Picture:<input name=profile_picture><br>
            <input type='submit'>
        </form>
    </body>
</html>
