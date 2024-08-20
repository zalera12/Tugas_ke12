<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<h1>Sign Up Forms</h1>
<form  action="/welcome">
    <div>
        <label>First name : </label>
        <input type="text" name="first_name">
    </div>
    <div>
        <label>Last name : </label>
        <input type="text" name="last_name">
    </div>
    <div>
        <label>Gender : </label>
        <select name="gender">
            <option value="pria">pria</option>
            <option value="wanita">wanita</option>
        </select>
    </div>
    <button type="submit">kirim</button>
</form>  
</body>
</html>