<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 

    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <form action="/login" method="post" >
        @csrf
        <input type="text" name="email" id="email">

        <input type="password" name="password" id="password">
        <button type="submit">Login</button>

    </form>
    
</body>
</html>