// Arrays
const rarezas = ["Común", "Raro", "Épico", "Legendario"];
const fabricantes = ["Jakobs", "Maliwan", "Torgue"];

// Función para elegir aleatorio
function elegir(lista) {
  return lista[Math.floor(Math.random() * lista.length)];
}

// Función principal
function generarArma() {
  let rareza = elegir(rarezas);   // variable
  let fabricante = elegir(fabricantes); // variable
  let daño = 50;

  // if: bonus por rareza
  if (rareza === "Épico") daño += 20;
  if (rareza === "Legendario") daño += 40;

  // switch: rasgo por fabricante
  let rasgo;
  switch (fabricante) {
    case "Jakobs": rasgo = "Críticos rápidos"; break;
    case "Maliwan": rasgo = "Daño elemental"; break;
    case "Torgue": rasgo = "Explosivo"; break;
    default: rasgo = "Normal";
  }

  // objeto arma
  return { rareza, fabricante, daño, rasgo };
}

// Mostrar resultado
function mostrarArma() {
  let arma = generarArma();
  let texto = "<h2>Arma generada:</h2><ul>";

  // bucle para recorrer propiedades
  for (let prop in arma) {
    texto += `<li><strong>${prop}:</strong> ${arma[prop]}</li>`;
  }
  texto += "</ul>";

  document.getElementById("resultado").innerHTML = texto;
}