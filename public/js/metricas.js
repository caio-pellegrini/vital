const peso = parseFloat(document.getElementById('peso').value);
const altura = parseFloat(document.getElementById('altura').value);
const genero = document.getElementById('genero').value;
const idade = parseInt(document.getElementById('idade').value);
let classificação;
let tmb;

function calcularIMC(peso, altura) {
    const imc = peso / (altura * altura);
    if (imc < 18.5) classificação = "Abaixo do peso";
    else if (imc <= 24.9) classificação = "Peso normal";
    else if (imc <= 29.9) classificação = "Sobrepeso";
    else classificação = "Obesidade";
    return [imc, classificação];
}

function calcularTMB(genero, peso, altura, idade) {
    if (genero === "masculino") tmb = 88.362 + (13.397 * peso) + (4.799 * altura) - (5.677 * idade)
    else tmb = 447.593 + (9.247 * peso) + (3.098 * altura) - (4.330 * idade)
    return tmb;
}

function calcularPesoIdeal(peso, genero, altura) {
    let pesoIdeal;
    if (genero === "masculino") pesoIdeal = 50 + 0.91 * (altura - 152.4)
    else pesoIdeal = 45.5 + 0.91 * (altura - 152.4)
    return pesoIdeal;
}

document.addEventListener('DOMContentLoaded', function () {
    window.calculateResults = function () {
        const peso = parseFloat(document.getElementById('peso').value);
        const altura = parseFloat(document.getElementById('altura').value) / 100; // convertendo cm para metros
        const genero = document.getElementById('genero').value;
        const idade = parseInt(document.getElementById('idade').value);

        const [imc, classificacao] = calcularIMC(peso, altura);
        const tmb = calcularTMB(genero, peso, altura * 100, idade); // altura deve ser em cm para TMB
        const pesoIdeal = calcularPesoIdeal(peso, genero, altura * 100);

        const resultsContainer = document.getElementById('resultsContainer');
        resultsContainer.classList.remove('hidden');

        document.getElementById('resultIMC').textContent = imc.toFixed(2);
        document.getElementById('classificationIMC').textContent = classificacao;
        document.getElementById('resultTMB').textContent = tmb.toFixed(2);
        document.getElementById('resultPesoIdeal').textContent = pesoIdeal.toFixed(2);
    };
});
