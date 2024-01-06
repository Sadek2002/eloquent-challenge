<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profiles and Companies</title>
</head>

<body>

    <table border="1px solid black">
        <tr>
            <th>Phone numbers</th>
            <th>Company</th>
        </tr>

        @foreach ($profiles as $index => $profile)
            <tr>
                <td>{{ $profile->telephone }}</td>
                <td>{{ $companies[$index]->company_name }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
