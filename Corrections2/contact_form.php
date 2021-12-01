<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulaire de contact</title>
  </head>
  <body>
      <div class="container">
        <h1 class="text-center py-5">Me contacter</h1>

        <form action="contact.php" method="post">
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Vos nom et prénom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Votre email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="subject" class="col-sm-2 col-form-label">Sujet de votre message</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="content" class="col-sm-2 col-form-label">Votre message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="content" name="content" required></textarea>
                </div>
            </div>
        
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
