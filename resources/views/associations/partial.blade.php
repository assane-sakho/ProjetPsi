</p>
<button class="btn btn-success" id="addBtn" data-toggle="modal" data-target="#addModal">Ajouter</button>
</p>

<div class="table-responsive">
  <table class="table table-striped table-sm" id="dataTable">
    <thead>
      <tr>
        <th>#</th>
        <th>#<br/>Groupe</th>
        <th>Nom du groupe</th>
        <th>#<br/>Individu</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Num</th>
        <th>Annuaire</th>
        <th>Statut</th>
        <th>Année</th>
        <th class="not-export-col">Modifier</th>
        <th class="not-export-col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($associations as $association)
      <tr>
            <td>{{ $association->id }}</td>
            <td>{{ $association->group->id }}</td>
            <td>{{ $association->group->name }}</td>
            <td>{{ $association->person->id }}</td>
            <td>{{ $association->person->lastname }}</td>
            <td>{{ $association->person->firstname }}</td>
            <td>{{ $association->person->email ?? 'Non renseigné' }}</td>
            <td>{{ $association->person->num }}</td>
            <td>{{ $association->person->directory->name}}</td>
            <td>{{ $association->person->status->title }}</td>
            <td>{{ $association->year }} - {{ $association->year + 1 }} </td>
            <td class="not-export-col"><button class="btn btn-warning" data-toggle="modal" data-target="#editModal">Modifier</button></td>
            <td class="not-export-col">
              <button class="btn btn-danger" 
              data-toggle="modal"
              data-target="#deleteModal"
              data-id="{{ $association->id }}"
              data-name="{{ $association->person->firstname .' '.$association->person->lastname }}"
              data-year="{{ $association->year }}"
              data-groupname="{{ $association->group->name}}">Supprimer</button>
            </td>
      </tr>
    @endforeach 
      </tbody>
  </table>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un individu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Enregistrer</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier un individu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Modifier</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer l'association</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" id="deleteForm">
      <input type="hidden" name="deleteId" id="deleteId">
        @csrf
        <div class="modal-body">
          Voulez-vous suppripmer l'association de <b id="deleteMessage"></b> ?
          </p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Supprimer</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

<script>
  setDataTable();

  $('#deleteModal').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('id');
    var name = $(e.relatedTarget).data('name');
    var year = $(e.relatedTarget).data('year');
    var groupname = $(e.relatedTarget).data('groupname');

    $("#deleteId").val(id);
    $("#deleteMessage").text(name + " en " + year + " pour le groupe " + groupname);

  });
</script>
