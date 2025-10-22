<html>
    <head>
        <title>LOGIN FORM</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
      <div class="container">
        <div class="loginform">
        <form action="./connect.php" method="post">
            <label for="name" class="lab">name</label>
            <input type="text" class="inp" name="name" id="name" required><br><br>
            <label for="email" class="lab">email</label>
            <input type="email" class="inp" name="email" id="email" required><br><br>
            <button type="submit" name="submit">submit</button>
        </form>
        </div>
      </div>
    </body>
</html>