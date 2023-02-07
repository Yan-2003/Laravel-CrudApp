<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/icon.png">
    <link rel="stylesheet" href="/style/home.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
</head>
<body>
    <header>
        <p class="title">CRUD Application</p>
        <nav>
           <a class="button" href="/add">Add</a>
        </nav>
    </header>
    <main>
        <div class="container">
            @foreach($user as $key => $value)
                <div class="user--content">
                    <a class="user" href="/{{ $value->id }}">
                        <p>First Name:{{ $value->firstName }}</p>
                        <p>Last Name:{{ $value->lastName }}</p>
                        <p>Age: {{ $value->age }}</p>
                        <p>Course: {{ $value->course }}</p>
                    </a>
                    <div class="buttons">
                        <a href="/user/edit/{{ $value->id }}" class="btn">Edit</a>
                        <a href="/user/delete/{{ $value->id }}" class="btn">Delete</a>
                    </div>
                </div>

            @endforeach
        </div>
    </main>
</body>
</html>

