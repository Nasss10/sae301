

liste = recupCookie("panier")
if (liste!=null) var montab = JSON.parse(liste)
else var montab =Array()
console.log(montab)

var panier =0
montab.forEach(element => {   panier+= element.quantite })

document.getElementById('panier').innerHTML=panier

function recupCookie(nom){

    if(document.cookie.length == 0)return null;

    var cookies = document.cookie.split("; "); //separe chaque parametre contenu dans le cookie
    cookies.forEach(element => {
        ligne=element.split("=");
        if(ligne[0]===nom) sortie =ligne[1]
        else sortie=null;
    })
    return sortie
}