<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add User?</title>
    </head>
    <body>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
        @if(session('success'))
            <p>{{session('success')}}</p>
        @endif

        <form action="{{route('users.store')}}" method="post">
            @csrf
            <label for="">Name: </label> <br>
            <input type="text" name="person_name" id="person_name"> <br>
            <label for="">Email: </label> <br>
            <input type="text" name="email" id="email"> <br>
            <input type="submit" value="submit">
        </form> 

        

    </body>
</html>