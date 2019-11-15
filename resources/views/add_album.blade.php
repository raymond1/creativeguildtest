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
        <form action=/api/albums method="post">
            User id: <input name="user_id"><br>
            Title:<input name="title"><br>
            Description:<input name="description"><br>
            Img:<input name="img"><br>
            Date:<input name="date"><br>
            Featured:<input name="featured" type="checkbox"><br>
<!--            <input type="hidden" name="_method" value="delete" />-->
            <input type='submit'>
        </form>
    </body>
</html>
