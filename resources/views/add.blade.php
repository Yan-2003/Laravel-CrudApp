<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/home.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
</head>
<body>
    <form action="/add/people" method="post" class="main--form" autocomplete="off">
        @csrf
        <p>Add People</p>
        <input class="input--style" type="text" name="fname" placeholder="First name">
        <input class="input--style" type="text" name="lname" placeholder="Last name">
        <input class="input--style" type="number" name="age" placeholder="Age">
        <input class="input--style" type="text" name="course" placeholder="Course">
        <button class="submit--button" type="submit" name="submit">Submit</button>
        <a href="/" class="submit--button">Back</a>
    </form>
</body>
</html>
