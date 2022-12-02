
document.getElementById('ajout').addEventListener('click',function() {
    var id = document.getElementById('id').value
    var article= document.getElementById('article').innerHTML
    var affiche= document.getElementById('affiche').src

    var prix= document.getElementById('prix').innerHTML
    console.log( id + " " + article + " " + prix + " " + affiche )

    index = montab.findIndex(element => element.id == id); //trouver l'article dans la liste du panier
    if(index>-1){
        console.log("l'article est deja dans le panier, il faut juste incrementer la qte")
        montab[index].quantite	= parseInt(montab[index].quantite) +parseInt(document.getElementById('qte').value)
        console.log(montab)
    }
    else        {
        console.log("l'article n'est pas pour l'instant dans le panier, il va falloir l'ajouter")
        montab.push({ 'id': id, 'affiche': affiche, 'article': article, 'quantite': document.getElementById('qte').value , 'prix': prix})
        console.log(montab)
    }

    panier+=parseInt(document.getElementById('qte').value); // incrementation de la valeur du panier
    document.getElementById('panier').innerHTML=panier; // affichage de la valeur du nouveau panier
    document.cookie = "panier="+JSON.stringify(montab)+"; path=/"

    // sauvegarde des infos dans le cookie "liste"
})
// document.getElementById('ajout').addEventListener('click',function() {
//     console.log("ça clique!")
//     })

