<!DOCTYPE html>
<html>

<head>
    <title>Tenant Domain Created</title>
</head>

<body>
    <h1>Welcome, {{ $tenant->name }}!</h1>
    <p>Your domain {{ $tenant->domain }} has been successfully created.</p>
    <p>Your login credentials:</p>
    <p>Email: {{ $tenant->email }}</p>
    <p>Password: {{ $password }}</p>
    <p>Please log in using these credentials.</p>
    <p>URL: <a href="{{$tenant->domain}}.localhost:8000">Click here</a></p>


</body>

</html>