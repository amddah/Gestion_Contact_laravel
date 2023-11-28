<h5>Liste des contacts</h5>

  <form class="d-flex" action="/" method="get" >
      <div class="search d-flex">
        <input class="form-control me-2" type="search" name="search" id="search" value="{{request()->get('search')}}" placeholder="Recherche..." aria-label="Search" width="" >
       
        <button class="btn btn-outline-success" type="submit">Search</button>
      </div>
        <button class="btn-add" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
</svg> Ajouter</button>

      </form>