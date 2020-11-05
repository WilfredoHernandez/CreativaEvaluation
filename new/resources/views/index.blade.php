<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical CRUD</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Creativa Evaluation</h1>
    <table>
    <tr>
    <th> Name  </th>
    <th> Last Name  </th>
    <th> DUI  </th>
    <th> NIT  </th>
    <th> Address  </th>
    <th> Tel-number  </th>
    <th> Phone number</th>
    <th> Notes  </th>
    </tr>
    @foreach ($clients as $client)
    <tr>
    <td>{{ $client->name }}</td>
    <td> Last Name  </td>
    <td> DUI  </td>
    <td> NIT  </td>
    <td> Address  </td>
    <td> Tel-number  </td>
    <td> Phone number</td>
    <td> Notes  </td>
    </tr>
    @endforeach
    </table>
    
</body>
</html>