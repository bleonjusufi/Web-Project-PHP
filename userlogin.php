<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/login.css" />
  </head>
  <body>
    <main>
      <div class="log-in__container">
        <form id="form" method="POST" action="login.php">
          <h1>Kyçuni</h1>
          <div class="input-control">
            <label for="email" id="ep" autocomplete="off">Email</label>
            <input id="email" name="email" type="text" autocomplete="off" />
            <div class="error"></div>
          </div>
          <div class="input-control">
            <label for="password" id="f">Fjalëkalimi</label>
            <input type="password" name="password" id="password" />
            <div class="error"></div>
            <div class="buttons">
            <a href="home.php" id="cancel-button">Kthehu Mbrapa</a>
              <button type="submit" value="submit" id="signUpButton">
                Hyni
              </button>
            </div>
          </div>
          <p></p>
          <a href="loginform.php">Dëshironi të regjistroheni?</a>
        </form>
      </div>
    </main>
  </body>
</html>
