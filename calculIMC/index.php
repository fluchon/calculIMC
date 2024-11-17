<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculer votre IMC</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Calculer votre IMC</h1>

    </header>
    <main>
        <section>
            <div id="formIMC">
                <div class="form-group">
                    <label for="poids">Votre poids</label>
                    <input type="text" name="poids" id="poids" placeholder="Votre poids en kg">
                </div>
                <div class="form-group">
                    <label for="taille">Votre taille</label>
                    <input type="text" name="taille" id="taille" placeholder="Votre taille en m">
                </div>
                <div class="btn-block">
                    <button id="calculer">Calculer</button>
                </div>
            </div>
            <div id="block_resultat">
                <h2>Votre Résultat</h2>
                <div id="resultat">
                    <div id="imc">
                        <h3>Votre IMC</h3>
                        <span id="resultIMC"> 0</span>
                    </div>

                    <div id="eau">
                        <h3>Quantité d'eau</h3>
                        <span id="resultQuantiteEau"> 0</span>
                    </div>

                    <div id="proteine">
                        <h3>Quantité Protéine</h3>
                        <span id="resultProteines"> 0</span>
                    </div>
                </div>

            </div>

        </section>

    </main>


    <footer>
        <p>Calcul IMC - Tous droit réserver</p>
        <p><a href="../index.php">Retour à la liste de projet</a></p>

    </footer>





<script src="js/script.js"></script>
</body>
</html>
