function verifierForm() {
    var nom = document.getElementById("nom").value.trim();
    var telephone = document.getElementById("telephone").value.trim();

    if (nom === "") {
        alert("Le nom ne doit pas être vide.");
        return false;
    }

    if (telephone.length !== 10 || isNaN(telephone)) {
        alert("Le numéro de téléphone doit contenir exactement 10 chiffres.");
        return false;
    }

    if (telephone.substring(0, 2) !== "06" && telephone.substring(0, 2) !== "07") {
        alert("Le numéro de téléphone doit commencer par 06 ou 07.");
        return false;
    }

    return true;
}