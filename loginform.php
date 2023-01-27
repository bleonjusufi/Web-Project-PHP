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
      <div class="container">
        <div class="log-in__container">
          <form
            action="connect.php"
            method="post"
            id="form"
            class="form"
            autocomplete="off"
          >
            <h2>Regjistrohu</h2>
            <div class="form-control">
              <label for="username">Emri i përdoruesit</label>
              <input
                type="text"
                id="username"
                placeholder="Shëno emrin tuaj të përdoruesit"
                name="emri"
              />
              <small>Error message</small>
            </div>
            <div class="form-control">
              <label for="email">Adresa Elektornike</label>
              <input
                type="text"
                id="email"
                placeholder="Shëno adresën elektronike"
                name="email"
              />
              <small>Error message</small>
            </div>
            <div class="form-control">
              <label for="password">Fjalëkalimi</label>
              <input
                type="password"
                id="password"
                placeholder="Shëno fjalëkalimin"
                name="password"
              />
              <small>Error message</small>
            </div>
            <div class="form-control">
              <label for="Numri Kontaktues">Numri Kontaktues</label>
              <input
                type="number"
                id="nrKontakt"
                placeholder="Shëno Numrin Kontaktues"
                name="nrKontakt"
              />
              <small>Error message</small>
            </div>
            <div class="buttons">
              <a href="./home.php" class="cancel-button">Kthehu Mbrapa</a>
              <button type="submit">Regjistrohu</button>
            </div>
          </form>
        </div>
      </div>
    </main>
    <script src="./JavaScript/loginform.js"></script>
  </body>
</html>
