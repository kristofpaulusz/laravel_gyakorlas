<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szakdoga Feladat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="js/main.js" type="module"></script>
</head>
<body>
    <main>
        <div class="title">Admin oldal</div>
        <div class="tablaHelye">
            <table class="table">
                <thead>
                    <tr>
                        <th>Szakdolgozat címe</th>
                        <th>Készítők neve</th>
                        <th>Github Link</th>
                        <th>Szakdolgozat elérhetősége</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="infoHelye">

                </tbody>
            </table>
        </div>
        <div class="form">
            <form>
                <div class="form-group">
                    <label for="szakdoga_nev"></label>
                    <input name="szakdoga_nev" type="text"></input>
                    <label for="tagokneve"></label>
                    <input name="tagokneve" type="text"></input>
                    <label for="oldallink"></label>
                    <input name="oldallink" type="text"></input>
                    <label for="githublink"></label>
                    <input name="githublink" type="text"></input>
                </div>
            </form>
        </div>
    </main>
</body>
</html>