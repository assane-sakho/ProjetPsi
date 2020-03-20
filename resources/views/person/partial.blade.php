</p>
<button class="btn btn-success" id="addModalBtn" data-toggle="modal" data-target="#addModal">Ajouter</button>
<button class="btn btn-primary" id="importBtn" data-toggle="modal" data-target="#importModal">Importer</button></p>

<div class="table-responsive">
  <table class="table table-striped table-sm" id="dataTable">
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
          <td class="not-export-col">
            <button class="btn btn-warning" 
            data-toggle="modal"
            data-target="#editModal"
            data-id="{{ $person->id }}"
            data-lastname="{{ $person->lastname }}"
            data-firstname="{{ $person->firstname }}"
            data-email="{{ $person->email }}"
            data-num="{{ $person->num }}"
            data-directoryId="{{ $person->directory->id}}"
            data-statusId="{{ $person->status->id}}">Modifier</button>
          </td>
          <td class="not-export-col">
            <button class="btn btn-danger" 
            data-toggle="modal"
            data-target="#deleteModal"
            data-id="{{ $person->id }}"
            data-lastname="{{ $person->lastname }}"
            data-firstname="{{ $person->firstname }}"
            data-email="{{ $person->email ?? 'Non renseigné' }}"
            data-num="{{ $person->num }}"
            data-directory="{{ $person->directory->name}}"
            data-status="{{ $person->status->title}}">Supprimer</button>
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
      <form action="" id="addForm">
        @csrf
        <div class="modal-body">
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
      </form>
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
      <form action="" id="editForm">
      <input type="hidden" name="editId" id="editId">
        @csrf
        <div class="modal-body">
          <label for="editLastname">Nom :</label></br>
          <input type="text" name="editLastname" id="editLastname" class="form-control" required><br/>

          <label for="editFirstname">Prénom :</label></br>
          <input type="text" name="editFirstname" id="editFirstname" class="form-control" required><br/>

          <label for="editFirstname">Email :</label></br>
          <input type="text" name="editEmail" id="editEmail" class="form-control"><br/>
          
          <label for="editFirstname">Num :</label></br>
          <input type="number" name="editNum" id="editNum" class="form-control" required><br/>
          
          <label for="editDirectory">Annuaire :</label></br>
          <select name="editDirectory" id="editDirectory" class="form-control" required>
            <option value=""> -- Sélectionnez une option -- </option>
          </select>
          </p>

          <label for="editStatus">Status :</label></br>
          <select name="editStatus" id="editStatus" class="form-control" required>
            <option value=""> -- Sélectionnez une option -- </option>
          </select>
          </br>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Modifier</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
      </form>
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
      <form action="" id="deleteForm">
      <input type="hidden" name="deleteId" id="deleteId">
        @csrf
        <div class="modal-body">
          Voulez-vous suppripmer <b id="deleteName"></b> ?
          </p>
          </p>
          <table class="table table striped">
          <tr>
            <td>Email</td>
            <td id="tdDeleteEmail"></td>
          </tr>
          <tr>
            <td>Num</td>
            <td id="tdDeleteNum"></td>
          </tr>
          <tr>
            <td>Annuaire</td>
            <td id="tdDeleteDirectory"></td>
          </tr>
          <tr>
            <td>Statut</td>
            <td id="tdDeleteStatus"></td>
          </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Supprimer</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Importer des individus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="">Fichier : </label>
        <input type="file" id="fileImport" name="fileImport" accept=".xlsx, .xls, .csv"/>
        <input type="text" id="jsonInput">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Importer</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<script>

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
    setDataTable();

    $.get("/Status/GetStatuses", function(data) {
      appendToSelect("addStatus", JSON.parse(data));
      appendToSelect("editStatus", JSON.parse(data));

    });

    $.get("/Directory/GetDirectories", function(data) {
      appendToSelect("addDirectory", JSON.parse(data));
      appendToSelect("editDirectory", JSON.parse(data));
    });
    
    $('#fileImport').change(function(e)
    {
      var jsonData;
      handleFile(e, function(jsonData)
      {
        $("#jsonInput").val(jsonData);
        console.log(jsonData);
      });
    });
  })
  
  $('#addModal').on('show.bs.modal', function(e) {
    $("#addLastName, #addFirstname, #addEmail, #addNum").val("");
  });

  $('#editModal').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('id');
    var lastname = $(e.relatedTarget).data('lastname');
    var firstname = $(e.relatedTarget).data('firstname');
    var email = $(e.relatedTarget).data('email');
    var num = $(e.relatedTarget).data('num');
    var directoryId = $(e.relatedTarget).data('directoryid');
    var statusId = $(e.relatedTarget).data('statusid');

    $("#editId").val(id);
    $("#editLastname").val(lastname);
    $("#editFirstname").val(firstname);
    $("#editEmail").val(email);
    $("#editNum").val(num);
    $("#editDirectory").val(directoryId).change();
    $("#editStatus").val(statusId).change();
  });

  $('#deleteModal').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('id');
    var lastname = $(e.relatedTarget).data('lastname');
    var firstname = $(e.relatedTarget).data('firstname');
    var email = $(e.relatedTarget).data('email');
    var num = $(e.relatedTarget).data('num');
    var directory = $(e.relatedTarget).data('directory');
    var status = $(e.relatedTarget).data('status');

    $("#deleteId").val(id);
    $("#deleteName").text(lastname + " " + firstname);
    $("#tdDeleteEmail").text(email);
    $("#tdDeleteNum").text(num);
    $("#tdDeleteDirectory").text(directory);
    $("#tdDeleteStatus").text(status);
  });

  function checkIfExist(){
      return $.ajax({
          url:'/Group/AlreadyExist',
          type:'POST',
          data:$("#addForm").serialize(),
      });
  }

  $('#addForm').submit(function(e){
    e.preventDefault();

    checkIfExist().then(function(response)
    {
        if (response == 'false')
        {
            $.ajax({
                url:'/Person/Add',
                type:'POST',
                data:$("#addForm").serialize(),
                success:function(data){
                  displayToastr("saved");
                  setPage('Person', false);
                },
                error: function(){
                  displayToastr("error");
                }
            });
        }
    });
    $('#addModal').modal('toggle');
  });

  $('#editForm').submit(function(e){
    e.preventDefault();
    $.ajax({
        url:'/Person/Update',
        type:'POST',
        data:$("#editForm").serialize(),
        success:function(data){
            displayToastr("updated");
            setPage('Person', false);
        },
        error: function()
        {
          displayToastr("error");
        }
    });
    $('#editModal').modal('toggle');
  });

  $('#deleteForm').submit(function(e){
    e.preventDefault();
    $.ajax({
        url:'/Person/Delete',
        type:'POST',
        data:$("#deleteForm").serialize(),
        success:function(data){
          displayToastr("deleted");
          setPage('Person', false);
        },
        error: function()
        {
          displayToastr("error");
        }
    });
    $('#deleteModal').modal('toggle');
  });

</script>