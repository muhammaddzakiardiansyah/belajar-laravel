<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main page</title>
</head>
<body>
    <h1>Saya {{$name}}, saya ber umur {{$age}} id saya {{$id}}</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama buah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$d}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>