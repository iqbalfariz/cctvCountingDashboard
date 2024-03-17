<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>CCTV</h1>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Active</th>
            </tr>
            @foreach ($cctvs as $cctv)
                <tr>
                    <td>{{ $cctv->id }}</td>
                    <td>{{ $cctv->name }}</td>
                    <td>{{ $cctv->amount }}</td>
                    <td>{{ $cctv->active }}</td>
                    <td>
                        <a href="{{ route('cctv.edit', ['cctv' => $cctv]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('cctv.destroy', $cctv->id)}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <a class="nav-link" href="{{ route('cctv.create') }}">add cctv</a>
</body>

</html>
