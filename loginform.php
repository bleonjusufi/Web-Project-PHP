<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UBT University-Join Us</title>
    <link rel="stylesheet" href="./CSS/loginform.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.12.1/css/all.css"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <main>
      <div class="log-in__container" style="margin: 40px auto">
        <form
          id="form"
          class="form"
          autocomplete="off"
          method="POST"
          action="register.php"
          onsubmit="return validateForm();"
        >
          <h2>Regjistrohu</h2>
          <div class="form-control">
            <label for="username">Emri i përdoruesit</label>
            <input
              type="text"
              id="username"
              name="username"
              placeholder="Shëno emrin tuaj të përdoruesit"
            />
            <small>Error message</small>
          </div>
          <div class="form-control">
            <label for="email">Adresa Elektornike</label>
            <input
              type="text"
              id="email"
              name="email"
              placeholder="Shëno adresën elektronike"
            />
            <small>Error message</small>
          </div>
          <div class="form-control">
            <label for="password">Fjalëkalimi</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Shëno fjalëkalimin"
            />
            <small>Error message</small>
          </div>
          <div class="form-control">
            <label for="password2">Konfirmimi i Fjalëkalimit</label>
            <input
              type="password"
              id="password2"
              name="password2"
              placeholder="Shëno fjalëkalimin përsëri"
            />
            <small>Error message</small>
          </div>
          <div class="buttons">
            <a href="home.php" class="cancel-button">Kthehu Mbrapa</a>
            <button type="submit" value="submit" name="register">
              Regjistrohu
            </button>
          </div>
          <p></p>
          <a href="./userlogin.php" id="keni">Keni një llogari, Kyçuni!</a>
        </form>
      </div>
    </main>
    <!-- <script src="./JavaScript/loginform.js"></script> -->
  </body>
</html>
