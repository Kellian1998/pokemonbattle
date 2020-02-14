
// recup les objets

let pokemons = document.getElementsByClassName("avatar");
//boucle
for(let i = 0 ; 1 < (pokemons.length) ; i++){
pokemons[i].addEventListener('click',function(){
let pok = pokemons[i];
})
}


// select card

let cardSelect = document.getElementsByClassName("card");

    for(let i = 0 ; 1 < (cardSelect.length) ; i++)
    {
        cardSelect[i].addEventListener('click',function()
    {
        let pokc = cardSelect[i];
        
        pokc.style.cursor = "no-drop";
        pokc.style.background = "#DEDEDE";
        pokc.style.width = "260px";
        pokc.style.height = "390px";
        pokc.style.boxShadow = "10px 5px 5px #3860aa";
    }
)
}
