"use strict";
let aantalIngredient = 1;
function maakNieuwIngredient(){

    let ouder = document.getElementById('parent');
    let tr = document.createElement('tr');

    let tdSelect = document.createElement('td');
    let tdAantalInput = document.createElement('td');
    let tdEenheidInput = document.createElement('td');

    let aantalInput = document.getElementById('aantalIngredient');
    let HoofdSelect = document.getElementById('ingredient');
    let eenheidInput = document.getElementById('eenheidIngredient');

    let select = HoofdSelect.cloneNode(true);
    let inputAantal = aantalInput.cloneNode(true);
    let inputEenheid = eenheidInput.cloneNode(true);

    select.name = `ingredient[${aantalIngredient}][0]`;
    select.id = `ingredient${aantalIngredient}`;

    inputAantal.name = `ingredient[${aantalIngredient}][1]`;
    inputAantal.id = `aantalIngredient${aantalIngredient}`;

    inputEenheid.name = `ingredient[${aantalIngredient}][2]`;
    inputEenheid.id = `eenheidIngredient${aantalIngredient}`;
    
    tdSelect.appendChild(select);
    tdAantalInput.appendChild(inputAantal);
    tdEenheidInput.appendChild(inputEenheid);
  
    ouder.appendChild(tr);
    tr.appendChild(tdSelect);
    tr.appendChild(tdAantalInput);
    tr.appendChild(tdEenheidInput);
    aantalIngredient++;
}
