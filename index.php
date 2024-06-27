<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Homepage</h2>
<h3>Search by username in users table</h3>
<form action="search.php" method="post">
    <label for="username">Search for user:</label>
    <input type="text" name="username" placeholder="Search...">
<!--    id=username can make problems-->
    <button>Search</button>
</form>

<h3>Login</h3>
<form action="includes/login.inc.php" method="post">
    <input type="text" name="username" placeholder="Username...">
    <input type="password" name="pwd" placeholder="Password...">
    <button>Login</button>
</form>

<h3>Signup</h3>
<form action="includes/signup.inc.php" method="post">
    <input type="text" name="username" placeholder="Username...">
    <input type="password" name="pwd" placeholder="Password...">
    <input type="text" name="email" placeholder="Email...">
    <button>Signup</button>
</form>

</body>
</html>
