<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/home.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
</head>
<body>
    <form action="/user/update/{{ $value->id }}" method="post" class="main--form" autocomplete="off">
        @csrf
        <p>Update People</p>
        <input class="input--style" type="text" name="fname" placeholder="First name" value="{{ $value->firstName }}">
        <input class="input--style" type="text" name="lname" placeholder="Last name" value="{{ $value->lastName }}">
        <input class="input--style" type="number" name="age" placeholder="Age" value="{{ $value->age }}">
        <input class="input--style" type="text" name="course" placeholder="Course" value="{{ $value->course }}">
        <button class="submit--button" type="submit" name="submit">Update</button>
        <a href="/" class="submit--button">Back</a>
    </form>
</body>
</html>
