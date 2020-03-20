</p>
<button class="btn btn-success" id="addModalBtn" data-toggle="modal" data-target="#addModal">Ajouter</button>
<button class="btn btn-primary" id="addBtn" data-toggle="modal" data-target="#addModal">Importer</button></p>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Num</th>
        <th>Annuaire</th>
        <th>Statut</th>
        <th class="not-export-col">Modifier</th>
        <th class="not-export-col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($people as $person)
      <tr>
          <td>{{ $person->id }}</td>
          <td>{{ $person->lastname }}</td>
          <td>{{ $person->firstname }}</td>
          <td>{{ $person->email ?? 'Non renseigné' }}</td>
          <td>{{ $person->num }}</td>
          <td>{{ $person->directory->name}}</td>
          <td>{{ $person->status->title }}</td>
          <td class="not-export-col"><button class="btn btn-warning" data-toggle="modal" data-target="#editModal">Modifier</button></td>
          <td class="not-export-col"><button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Supprimer</button></td>
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
      <form action="" id="addForm">
        <div class="modal-body" id="addModalBody">
          <label for="addLastname">Nom :</label></br>
          <input type="text" name="addLastname" id="addLastName" class="form-control" required><br/>

          <label for="addFirstname">Prénom :</label></br>
          <input type="text" name="addFirstname" id="addFirstname" class="form-control" required><br/>

          <label for="addFirstname">Email :</label></br>
          <input type="text" name="addEmail" id="addEmail" class="form-control"><br/>
          
          <label for="addFirstname">Num :</label></br>
          <input type="number" name="addNum" id="addNum" class="form-control" required><br/>
          
          <label for="addDirectory">Annuaire :</label></br>
          <select name="addDirectory" id="addDirectory" class="form-control" required>
            <option value=""> -- Sélectionnez une option -- </option>
          </select>
          </p>

          <label for="addStatus">Status :</label></br>
          <select name="addStatus" id="addStatus" class="form-control" required>
            <option value=""> -- Sélectionnez une option -- </option>
          </select>
          </br>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
      </from>
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
        <h5 class="modal-title" id="exampleModalLabel">Supprimer l'individu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Oui</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
      </div>
    </div>
  </div>
</div>



<script>
  setDataTable();
  function appendToSelect(selectId, data)
  {
      $.each(data, function(key, value) {   
        $('#' + selectId).append($("<option></option>")
              .attr("value",value.id)
              .text(value.title ?? value.name)); 
      });
  }
  $(document).ready(function()
  {
    $.get("/Status/GetStatuses", function(data) {
      appendToSelect("addStatus", JSON.parse(data));
    });

    $.get("/Directory/GetDirectories", function(data) {
        appendToSelect("addDirectory", JSON.parse(data));
    });
  })
  
  $('#addModal').on('show.bs.modal', function(e) {
    $("#addLastName, #addFirstname, #addEmail, #addNum").val("");
  });
</script>