<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create New Gift</title>
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

        <form action="" method="post">
            @csrf
            <label for="">Gift name: </label> <br>
            <input type="text" name="gift_name" id="gift_name"> <br>
            <label for="">Price</label> <br>
            <input type="text" name="price" id="price"> <br>
            <label for="">Gift type: </label> <br>
            <select name="gift_type_id" id="gift_type_id">
                @foreach ($gift_types as $gift_type)
                   <option value="{{$gift_type->id}}"> {{$gift_type->type_name}}</option>
                @endforeach
            </select> <br>
            <input type="submit" value="submit">
        </form>

    </body>
</html>