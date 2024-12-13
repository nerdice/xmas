<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add New Gift Type</title>
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

        <form method="{{route('gift_types.store')}}" action="post">
            @csrf
            <label for="type_name">Gift type: </label> <br>
            <input type="text" name="type_name" id="type_name">
            <input type="submit" value="submit">
        </form>

    </body>
</html>