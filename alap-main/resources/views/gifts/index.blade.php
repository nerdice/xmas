<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gifts</title>
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

        <h3>Gifts: </h3>
        <ul>
            @foreach ($gifts as $gift)
                <li>
                    <b>Gift name:</b> {{$gift->gift_name}} <br>
                    <b>Price:</b> {{$gift->price}}
                </li>
            @endforeach
        </ul>
        

    </body>
</html>