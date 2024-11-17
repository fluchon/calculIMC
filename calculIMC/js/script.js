
const calculerImc = (poids, taille) => {
    result = poids / (taille * taille);
    result = result.toFixed(2);
    return result;
}
const calculerQuantiteEau = (poids, taille) => {
    return (((poids - 20) * 15) + 1500) / 1000;
}
const calculerProteines = (poids) => {
    return poids * 1.5;
}

calculer.addEventListener('click', () => {
    poids = parseFloat(document.getElementById('poids').value);
    taille = parseFloat(document.getElementById('taille').value);
    const imc = calculerImc(poids, taille);
    const quantiteEau = calculerQuantiteEau(poids, taille);
    const proteines = calculerProteines(poids);
    const resultIMC = document.getElementById('resultIMC');
    const resultQuantiteEau = document.getElementById('resultQuantiteEau');
    const resultProteines = document.getElementById('resultProteines');
    resultIMC.innerHTML = imc;
    resultQuantiteEau.innerHTML = quantiteEau + ' L';
    resultProteines.innerHTML = proteines + ' G';

});


