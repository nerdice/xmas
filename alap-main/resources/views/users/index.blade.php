<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users</title>
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

        <h3>Users: </h3>
        <ol>
            @foreach ($users as $user)
                <li>
                    <b>Név:</b> {{$user->person_name}} <br>
                    <b>Email:</b> {{$user->email}} <br>
                </li>
            @endforeach
        </ol>
        

    </body>
</html>