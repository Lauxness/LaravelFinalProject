<!DOCTYPE html>
<html>

<head>
    <title>Customer concers</title>
</head>

<body>
    <h1>Message from {{ $tenant->companyName ?? 'Unknown Company' }}</h1>

    <p><strong>Email:</strong> {{ $tenant->email ?? 'N/A' }}</p>

    <hr>

    <p><strong>Concern:</strong></p>
    <p>{{ $concern }}</p>
</body>


</html>