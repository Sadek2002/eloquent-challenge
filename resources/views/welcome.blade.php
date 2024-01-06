<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($profiles as $profile)
        {{ $profile->user->name }}
    @endforeach

    @foreach ($companies as $company)
        {{ $company->user->telephone }}
    @endforeach
</body>

</html>
