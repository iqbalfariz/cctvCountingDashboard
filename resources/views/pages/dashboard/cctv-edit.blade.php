<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Edit the cctv</h1>
    <form action="{{ route('cctv.update', $cctv) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{ $cctv->name }}" />
        </div>
        <div>
            <label>Amount</label>
            <input type="number" name="amount" placeholder="Amount" value="{{ $cctv->amount }}" />
        </div>
        <div>
            <label>Active</label>
            <input type="text" name="active" placeholder="Active" value="{{ $cctv->active }}" />
        </div>
        <div>
            <input type="submit" value="edit cctv" />
        </div>
    </form>
</body>

</html>
