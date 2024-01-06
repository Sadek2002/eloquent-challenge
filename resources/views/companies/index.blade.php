<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Companies</title>
</head>

<body>
    @foreach ($profiles as $profile)
        @foreach ($companies as $company)
            <br>
            {{ $company->company_name }}
            {{ ' | ' }}
            {{ $company->profile->telephone }}
            <hr>
        @endforeach
    @endforeach
</body>

</html>
