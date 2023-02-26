<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikimi Online</title>
    <link rel="stylesheet" href="./CSS/contact.css" />
  </head>
  <body>
    <main>
      <div class="log-in__container">
        <form
          id="form"
          class="form"
          autocomplete="off"
          method="POST"
          action="Contact-CRUD/contact-crud.php"
          onsubmit="return validateForm();"
        >
          <h2>Apliko</h2>
          <div class="form-control">
            <label for="Emri">Emri juaj</label>
            <input
              type="text"
              id="Emri"
              name="Emri"
              placeholder="Shëno emrin tuaj të përdoruesit"
              required
            />
            <small>Error message</small>
          </div>
          <div class="form-control">
            <label for="NumriPersonal">Numri Personal</label>
            <input
              type="text"
              id="NumriPersonal"
              name="NumriPersonal"
              placeholder="Shëno Numrin Personal"
              required
            />
            <small>Error message</small>
          </div>
          <div class="form-control">
            <label for="Email">Adresa Elektornike</label>
            <input
              type="text"
              id="Email"
              name="Email"
              placeholder="Shëno adresën elektronike"
              required
            />
            <small>Error message</small>
          </div>
          <div class="form-control">
            <label for="Departamenti">Departamenti</label>
            <input
              type="text"
              id="Departamenti"
              name="Departamenti"
              placeholder="Shëno departamentin"
              required
            />
            <small>Error message</small>
          </div>
          <div class="buttons">
            <a href="home.php" class="cancel-button">Kthehu Mbrapa</a>
            <button type="submit" value="submit" name="register">
              Regjistrohu
            </button>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
