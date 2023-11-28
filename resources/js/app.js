import './bootstrap';



let btn = document.querySelector('.inline-flex');
let del =document.querySelector('.btn-D');

document.getElementById('annuler').addEventListener('click',()=>{
    document.querySelector('.alert-delete').style.display='none';  
})



// affiche la formulaire detail de contact
const btn_add = document.querySelector('.btn-add');
const formContact = document.querySelector('.formContact');
const reset =document.getElementById('reset');

btn_add.addEventListener('click',()=>{
      // Sélectionnez tous les éléments de formulaire dans le formulaire avec l'ID "formContact"
var form =  document.querySelector('#formContact');
var formElements = form.elements;

// Parcourez tous les éléments de formulaire et désactivez-les
for (var i = 0; i < formElements.length; i++) {
    formElements[i].disabled = false;
}
    formContact.style.display='initial';
    document.querySelector('.formbg').style.display='initial'
})

reset.addEventListener('click',()=>{
    formContact.style.display='none';
    document.querySelector('.formbg').style.display='none';
    document.querySelector('.alert-delete').style.display='none';
})



