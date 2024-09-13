<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    <p>congrats you are logged in.</p>

    <form action = "/firstwebsite/public/logout" method = "POST">
        @csrf
        <button>Log Out</button>
    </form>

    <div style = "border: 3px solid black">
        <h2>Create a New Post</h2>
        <form action = "/firstwebsite/public/create-post" method = "POST">
            @csrf
            <input type = "text" name = "title" placeholder = "post title"></input>
            <textarea name = "body" placeholder = "body content ..."></textarea>
            <button>Submit Post</button>
        </form>
    </div>
    @else

    <div style = "border: 3px solid black;">
        <h2>Register</h2>
        <form action = "/firstwebsite/public/register" method = "POST">
            @csrf
            <input name = "name" type = "text" placeholder = "name">
            <input name = "email" type = "text" placeholder = "email">
            <input name = "password" type = "password" placeholder = "password">
            <button>Register</button>
        </form>
    </div>


    <div style = "border: 3px solid black;">
        <h2>Login</h2>
        <form action = "/firstwebsite/public/login" method = "POST">
            @csrf
            <input name = "loginname" type = "text" placeholder = "name">
            <input name = "loginpassword" type = "password" placeholder = "password">
            <button>Login in</button>
        </form>
    </div>


    @endauth

</body>
</html>