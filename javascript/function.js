
// Chargement de la scene "cartes" au click du boutton

function change() {
    document.getElementById("Titre").style.display = "none";
    let imag = document.getElementById("image")
    imag.style.width = "300px";
    document.getElementById("bold").style.display = "none";
    let elem = document.getElementById('elem');
    elem.style.display = 'block';
    
}

let button = document.getElementById("bold");
button.addEventListener("click",change);


// Selection de la carte avec attributs correspondants au click sur la carte

class Pokemon {    
    name;
    life;
    atak;
    state;
  constructor(n, l, a, s) {
    this.name = n;
    this.life = l;
    this.atak = a;
    this.state = s;
  }
}

const pokemon1 = new Pokemon("","","",false)

let cardSelectBulbizar = document.getElementById("bulbizar");

cardSelectBulbizar.addEventListener('click', function(){    
  let bulbizardata = cardSelectBulbizar;    
  bulbizardata.style.background = "#DEDEDE";
  bulbizardata.style.width = "250px";
  bulbizardata.style.height = "380px";
  bulbizardata.style.boxShadow = "10px 5px 5px #3860aa";
  pokemon1.name = bulbizardata.dataset.name;
  pokemon1.life = bulbizardata.dataset.life;
  pokemon1.atak = bulbizardata.dataset.atak;
  pokemon1.state = true;
})


const pokemon2 = new Pokemon("","","",false)

let cardSelectPikachu = document.getElementById("pikachu");

cardSelectPikachu.addEventListener('click', function(){    
  let pikachudata = cardSelectPikachu;
  pikachudata.style.background = "#DEDEDE";
  pikachudata.style.width = "250px";
  pikachudata.style.height = "380px";
  pikachudata.style.boxShadow = "10px 5px 5px #3860aa";
  pokemon2.name = pikachudata.dataset.name;
  pokemon2.life = pikachudata.dataset.life;
  pokemon2.atak = pikachudata.dataset.atak;
  pokemon2.state = true;
})


const pokemon3 = new Pokemon("","","",false)

let cardSelectSalameche = document.getElementById("salameche");

cardSelectSalameche.addEventListener('click', function(){    
  let salamechedata = cardSelectSalameche;
  salamechedata.style.background = "#DEDEDE";
  salamechedata.style.width = "250px";
  salamechedata.style.height = "380px";
  salamechedata.style.boxShadow = "10px 5px 5px #3860aa";
  pokemon3.name = salamechedata.dataset.name;
  pokemon3.life = salamechedata.dataset.life;
  pokemon3.atak = salamechedata.dataset.atak;
  pokemon3.state = true;
})


const pokemon4 = new Pokemon("","","",false)

let cardSelectCarapuce = document.getElementById("carapuce");

cardSelectCarapuce.addEventListener('click', function(){    
  let carapucedata = cardSelectCarapuce;
  carapucedata.style.background = "#DEDEDE";
  carapucedata.style.width = "250px";
  carapucedata.style.height = "380px";
  carapucedata.style.boxShadow = "10px 5px 5px #3860aa";
  pokemon4.name = carapucedata.dataset.name;
  pokemon4.life = carapucedata.dataset.life;
  pokemon4.atak = carapucedata.dataset.atak;
  pokemon4.state = true;
})
// functions de choix de cartes

function p1p2() {
  let f1 = document.getElementById('containerdisp');
  f1.style.display = 'none';
  let f2 = document.getElementById('combat1');
  f2.style.display = 'block';
  let f3 = document.getElementById('bbattle');
  f3.style.display = 'none';
  let f4 = document.getElementById('rejouer');
  f4.style.display = 'flex';
}

function p1p3() {
  let f1 = document.getElementById('containerdisp');
  f1.style.display = 'none';
  let f2 = document.getElementById('combat2');
  f2.style.display = 'block';
  let f3 = document.getElementById('bbattle');
  f3.style.display = 'none';
  let f4 = document.getElementById('rejouer');
  f4.style.display = 'flex';
}

function p1p4() {
  let f1 = document.getElementById('containerdisp');
  f1.style.display = 'none';
  let f2 = document.getElementById('combat3');
  f2.style.display = 'block';
  let f3 = document.getElementById('bbattle');
  f3.style.display = 'none';
  let f4 = document.getElementById('rejouer');
  f4.style.display = 'flex';
}

function p2p3() {
  let f1 = document.getElementById('containerdisp');
  f1.style.display = 'none';
  let f2 = document.getElementById('combat4');
  f2.style.display = 'block';
  let f3 = document.getElementById('bbattle');
  f3.style.display = 'none';
  let f4 = document.getElementById('rejouer');
  f4.style.display = 'flex';
}

function p2p4() {
  let f1 = document.getElementById('containerdisp');
  f1.style.display = 'none';
  let f2 = document.getElementById('combat5');
  f2.style.display = 'block';
  let f3 = document.getElementById('bbattle');
  f3.style.display = 'none';
  let f4 = document.getElementById('rejouer');
  f4.style.display = 'flex';
}

function p3p4() {
  let f1 = document.getElementById('containerdisp');
  f1.style.display = 'none';
  let f2 = document.getElementById('combat6');
  f2.style.display = 'block';
  let f3 = document.getElementById('bbattle');
  f3.style.display = 'none';
  let f4 = document.getElementById('rejouer');
  f4.style.display = 'flex';
}

// click boutton battle

function testResult(){

    if (pokemon1.state === true && pokemon2.state === true){
      p1p2()
      console.log("Bulbizar & Pikachu")
    }
    if (pokemon1.state === true && pokemon3.state === true){
      p1p3()
      console.log("Bulbizar & Salameche")
    }
    if (pokemon1.state === true && pokemon4.state === true){
      p1p4()
      console.log("Bulbizar & Carapuce")
    }
    if (pokemon2.state === true && pokemon3.state === true){
      p2p3()
      console.log("Pikachu & Salameche")
    }
    if (pokemon2.state === true && pokemon4.state === true){
      p2p4()
      console.log("Pikachu & Carapuce")
    }
    if (pokemon3.state === true && pokemon4.state === true){
      p3p4()
      console.log("Salemeche & Carapuce")
  }
  }


let fightButton = document.getElementById("bbattle");
fightButton.addEventListener("click",testResult);

