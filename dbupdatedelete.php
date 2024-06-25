<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3> Change account</h3>
<form action="includes/userupdate.inc.php" method="post">

    <input type="text" name="username" placeholder="Username">
    <input type="text" name="pwd" placeholder="pwd">
    <input type="text" name="email" placeholder="Email">
    <button>Update</button>
</form>
<h3> Delete account</h3>
<form action="includes/userdelete.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="text" name="pwd" placeholder="pwd">
    <button>Delete</button>
</form>
</body>
</html>
