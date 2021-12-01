<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Confirmation de l'envoi</title>
  </head>
  <body>
      <div class="container">
        <h1 class="text-center py-5">Confirmation de l'envoi</h1>

        <?php

            $mandatoryFields = [
                'email' => $_POST['email'],
                'sujet' => $_POST['subject'],
                'message' => $_POST['content'],
            ];

            $errors = [];

            foreach ($mandatoryFields as $key => $field) {
                if (empty($field)) {
                    $errors[] = $key;
                }
            }

            if (count($errors) > 0) {
                $message = "Les champs en erreur sont : ";
                foreach ($errors as $error) {
                    $message .= $error . " ";
                }
            } else {

                $email = $_POST['email'];
                $name = $_POST['name'];
                $subject = $_POST['subject'];
                $content = $_POST['content'];

                $message  = "<p><strong>Reçu le : </strong>" . date('d F Y - H:i:s') . "</p>";
                $message .= "<p><strong>De : </strong>" . $email;
                
                if (!empty($name)) {
                    $message .= " (" . $name . ")";
                }

                $message .= "</p>";
                $message .= "<p><strong>Sujet : </strong>" . $subject . "</p>";
                $message .= "<p><strong>Message : </strong>" . $content . "</p>";

            }

            echo $message;
            
        ?>

        <a href="contact_form.php" class="mt-3">Retour au formulaire</a>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
