<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        .row:nth-of-type(2n) {
            flex-direction: row-reverse;
        }
    </style>

    <title>Ma bibliothèque</title>
  </head>
  <body>
      <div class="container">
        <h1 class="text-center mt-3 mb-4">Ma bibliothèque</h1>

        <form action="" class="col-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Titre / auteur" aria-label="Rechercher" aria-describedby="button-addon1">
                <button class="btn btn-outline-secondary" type="button" id="button-addon1">Rechercher</button>
              </div>
        </form>
    
    
        <div class="row my-5">
            <div class="col-3 text-center">
                <img class="img-fluid" src="couvertures/7.jpg" alt="Villa Vortex" />
            </div>
            <div class="col-9">
                <h2>Villa Vortex</h2>
                <p>écrit par Maurice G. Dantec 🇫🇷 en 2003</p>
                <p>(ISBN : <strong>2070370437</strong>) - <em>Noir / Science-Fiction</em></p>
                <p>Le 11 septembre 2001, l'inspecteur Kernal décroche son téléphone qui lui explose à la figure. Agonisant, Kernal remonte le temps, nous racontant les dix dernières années de son existence, cette décennie où le monde tel que nous le connaissons part en fumée.
                    Fraîchement débarqué à la police de Vitry après de brillantes études en sciences sociales, Kernal avait été confronté à une série de crimes horribles entre 1991 et 1993 : des corps de jeunes filles recouverts de composants électroniques retrouvés aux environs de centrales électriques et nucléaires. Comme si le tueur voulait faire de ses victimes des marionnettes dernier cri…
                    Nous retrouvons dans Villa Vortex tous les thèmes chers à l'auteur : serial killer technologique, décor urbain apocalyptique, drogues synthétiques, sous oublier l'inscription du récit dans la réalité sociale et politique : l'ex-Yougoslavie, l'Algérie, la délinquance en banlieues, les attentats du World Trade Center… Dans cette critique hallucinée de la décennie 1990 qui a vu fleurir en Europe la misère économique, la violence, l'insécurité généralisée et la haine, l'auteur dépeint une société gangrenée par un Mal qui devient de plus en plus absolu à mesure même qu'il se dévoile.</p>
                
                <p class="text-success">Disponible</p>
                <p class="text-danger">Emprunté par Matthieu Colas depuis 3400 jours</p>
            </div>
        </div>

        

      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
