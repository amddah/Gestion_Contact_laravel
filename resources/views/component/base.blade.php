<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     
     @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>
<div class="contenier">
    @yield('content')

</div>
<script>
    
function affiche(params) {
   
    document.querySelector('.alert-delete').style.display='initial';
    document.getElementById('id_contact').value=params;

}



    function show(...id) {
    fetch('/show?id='+id[0], { // Envoyer l'id comme paramètre de requête
        method: 'GET', // Vous pouvez spécifier GET ici
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        Detail(data,id[1]);
    })
    .catch(error => {
        console.error('Error uploading audio:', error);
    });
    }

function Detail(...data){
    // Sélectionnez tous les éléments de formulaire dans le formulaire avec l'ID "formContact"
var form =  document.querySelector('#formContact');
var formElements = form.elements;

// Parcourez tous les éléments de formulaire et désactivez-les
for (var i = 0; i < formElements.length-1; i++) {
    if (data[1] == null) {
  formElements[i].disabled = true;
} else {
  formElements[i].disabled = false;
}

}
data=data[0];
    console.log('Réponse JSON reçue :', data);
        document.querySelector('.formContact').style.display='initial';
        document.querySelector('.formbg').style.display='initial'
        // Remplir les champs du formulaire avec les données
        document.getElementById('prenom').value = data.contact.prenom;
        document.getElementById('nom').value = data.contact.nom;
        document.getElementById('email').value = data.contact.e_mail;
        document.getElementById('entreprise').value = data.org.nom;
        document.getElementById('adresse').value = data.org.adresse;
        document.getElementById('Cpostal').value = data.org.code_postal;
        document.getElementById('ville').value = data.org.ville;
        
        // Pour le champ select (statut), vous pouvez utiliser une boucle pour sélectionner l'option appropriée
        var select = document.getElementById('statut');
        for (var i = 0; i < select.options.length; i++) {
            console.log();
            if (select.options[i].value.toLowerCase() === data.org.statut.toLowerCase()) {
                select.selectedIndex = i;
                break;
            }
        }

        
}
function update(id){
    document.getElementById('id_contact').value = id;
            show(id,false);//Appelle la fonction 'show' pour afficher les détails du contact
}
</script>
</body>
</html>