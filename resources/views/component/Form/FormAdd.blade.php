


<div class="formbg">
<div class="formContact">

  <h5>Detail de Contact </h5>
  <form  method="post" action="/store" id="formContact">
  @csrf
  <input type="hidden" name="id_contact" id="id_contact">
  <div class="child_nom" style="display: flex;">
    <div class="child" style="flex: 1;">
        <label for="prenom">Prénom</label><br>
        <input type="text" name="prenom" id="prenom" style="width: 100%;">
    </div>
    <div class="child" style="flex: 1;">
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" id="nom" style="width: 100%;">
    </div>
</div>


    <div class="child">
    <label for="">E-mail</label><br>
      <input type="email" name="email" id="email">
    </div>
    <div class="child">
    <label for="">Entreprise</label><br>
      <input type="text" name="entreprise" id="entreprise">
    </div>
    <div class="child">
    <label for="">Adresse</label><br>
      <textarea name="adresse" id="adresse" cols="30" rows="3"></textarea>
    </div>
    <div class="child3">
          <div>Code postal <br>
          <input type="number" name="Cpostal" id="Cpostal">
        </div>
          <div>Ville <br>
            <input type="text" name="ville" id="ville">
          </div>
    </div>

    <div class="child">
    <label for="">Statut</label><br>
      <select name="statut" id="statut">
           <option value="client">Client</option>
           <option value="lead">Lead</option>
           <option value="prospect">Prospect</option>
      </select>
    </div>

    <div class="formFooter">
      <input type="submit" value="Valider" name="submit">
      <input type="reset" value="Annulle" id="reset">
    </div>
  </form>
</div>
</div>

</div>





<div class="alert-delete">
<div class="modal">
  <div class="modal-background"></div>
  <div class="modal-content">
 
  <!-- <div class="mx-auto"> -->
  

 <div class="modal-header">
    <h3 class="modal-title">    
   <span class="custom-icon">
    <svg class="custom-svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
    </svg>  
  </span>  Supprimer le contact</h3>
    </div>
    <div class="modal-body">
      <p class="modal-text">etes-vous sure de voulez supprimer le contact ? <br>cette operation est irreversible</p>
    </div>
    <div class="modal-footer">
      <form action="/dell" method="post">
        @csrf
        <input type="hidden" name="id_contact" value="" id="id_contact">
        <button class="btn btn-secondary" type="reset" id="annuler">annuler</button>
        <button class="btn btn-danger" type="submit">Confirmer</button>
      </form>
    </div>
  </div>
</div>
        