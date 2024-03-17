<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Create the product</h1>
    <form action="{{ route('cctv.store') }}" method="POST">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Amount</label>
            <input type="number" name="amount" placeholder="Amount" />
        </div>
        <div>
            <label>Active</label>
            <input type="text" name="active" placeholder="Active" />
        </div>
        <div>
            <input type="submit" value="add cctv" />
        </div>
    </form>
</body>

</html>
