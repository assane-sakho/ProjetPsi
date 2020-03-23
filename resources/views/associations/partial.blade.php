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
        <th>Numéro</th>
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
            <td class="not-export-col">
              <button class="btn btn-warning" 
              data-toggle="modal"
              data-target="#editModal"
              data-id="{{ $association->id }}"
              data-personid="{{ $association->person->id }}"
              data-name="{{ $association->person->firstname . ' ' . $association->person->lastname }}"
              data-groupid="{{ $association->group->id }}"
              data-year="{{ $association->year }}">Modifier</button>
            </td>
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

<div class="modal fade" id="addModal"  role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une association</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="addForm">
        @csrf
        <div class="modal-body">
        <label for="selectAddGroup">Groupe :</label></br>
          <select name="selectAddGroup" id="selectAddGroup" class="form-control" required style="width: 400px">
            <option value=""> -- Sélectionnez une option -- </option>
          </select>
          </p>
          <label for="selectAddPerson">Individu :</label></br>
          <select name="selectAddPerson" id="selectAddPerson" class="form-control" required style="width: 400px">
            <option value=""> -- Sélectionnez une option -- </option>
          </select>
          </p>

          <label for="selectAddYear">Année :</label></br>
          <select name="selectAddYear" id="selectAddYear" class="form-control" required style="width: 400px">
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
        <h5 class="modal-title" id="exampleModalLabel">Modifier une association</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="editForm">
      <input type="hidden" name="editId" id="editId">
      <input type="hidden" name="editPersonId" id="editPersonId">
        @csrf
        <div class="modal-body">
        <label for="selectEditGroup">Groupe :</label></br>
          <select name="selectEditGroup" id="selectEditGroup" class="form-control" required style="width: 400px">
            <option value=""> -- Sélectionnez une option -- </option>
          </select>
          </p>
          <label for="editPerson">Individu :</label></br>
          <b id="editPerson" name="editPerson"></b>
          </select>
          </p>

          <label for="selectEditYear">Année :</label></br>
          <select name="selectEditYear" id="selectEditYear" class="form-control" required style="width: 400px">
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

 
  $(document).ready(function()
  {
    $.get("/People/GetAll", function(data) {
      appendToSelect("selectAddPerson", JSON.parse(data));
    });

    $.get("/Groups/GetAll", function(data) {
      appendToSelect("selectAddGroup", JSON.parse(data));
      appendToSelect("selectEditGroup", JSON.parse(data));
    });

    $.get("/SchoolYears/GetAll", function(data) {
      appendToSelect("selectAddYear", JSON.parse(data));
      appendToSelect("selectEditYear", JSON.parse(data));
    });

    $("#selectAddYear, #selectEditYear").select2('destroy'); 
    $('#selectAddYear, #selectEditYear').select2({
        tags: true,
        tokenSeparators: [",", " "],
        createTag: function (tag) {
        if(!isNaN(tag.term) && (tag.term.length == 4) && (tag.term.substring(0,2) == "20")){
          return {
              id: tag.term,
              text: tag.term + " - " + (parseInt(tag.term)+1),
              isNew : true
          };
          }
        else
        {
            
        }
      }
    });

  });

  $('#addModal').on('show.bs.modal', function(e) {
    $("select").val("").change();
  });

  $('#editModal').on('show.bs.modal', function(e) {
    $("select").val("").change();
    var id = $(e.relatedTarget).data('id');
    var name = $(e.relatedTarget).data('name');
    var personId = $(e.relatedTarget).data('personid');
    var groupid = $(e.relatedTarget).data('groupid');
    var year = $(e.relatedTarget).data('year');

    $("#editId").val(id);
    $("#editPersonId").val(personId);
    $("#editPerson").text(name);
    $("#selectEditGroup").val(groupid).change();
    $("#selectEditYear").val(year).change();
  });

  $('#deleteModal').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('id');
    var name = $(e.relatedTarget).data('name');
    var year = $(e.relatedTarget).data('year');
    var groupname = $(e.relatedTarget).data('groupname');

    $("#deleteId").val(id);
    $("#deleteMessage").text(name + " en " + year + " pour le groupe " + groupname);

  });

  function checkIfExist(formData){
    return $.ajax({
        url:'/Associations/AlreadyExist',
        type:'POST',
        data: formData
    });
  }
  
  $('#addForm').submit(function(e){
      e.preventDefault();
      var formData = $("#addForm").serialize();
    
      var groupId = $("#selectAddGroup").val();
      var personId = $("#selectAddPerson").val();
      var year = $("#selectAddYear").val();

      var data = formData + 
      "&groupId=" +  groupId + 
      "&personId=" +  personId + 
      "&year=" +  year;

      checkIfExist(data).then(function(response)
      {
          if (response == 'false')
          {
              $.ajax({
                  url:'/Associations/Add',
                  type:'POST',
                  data: formData,
                  success:function(data){
                    displayToastr("saved");
                    setPage('Associations', false); 
                  },
                  error: function(){
                    displayToastr("error");
                  }
              });
              $('#addModal').modal('toggle');
          }
          else
          {
            displayToastr('warning', 'Une association entre ce groupe, cet individu et pour l\'année sélectionnée existe déjà')
          }
      });
  });

  $('#editForm').submit(function(e){
    e.preventDefault();

    var formData = $("#editForm").serialize();

    var groupId = $("#selectEditGroup").val();
    var personId = $("#editPersonId").val();
    var year = $("#selectEditYear").val();

    var data = formData + 
    "&groupId=" +  groupId + 
    "&personId=" +  personId + 
    "&year=" +  year;
    
    checkIfExist(data).then(function(response)
    {
      if (response == 'false')
      {
          $.ajax({
              url:'/Associations/Update',
              type:'POST',
              data:formData,
              success:function(data){
                displayToastr("updated");
                setPage('Associations', false);
              },
              error: function(){
                displayToastr("error");
              }
          });
          $('#editModal').modal('toggle');
      }
      else
      {
        displayToastr('warning', 'Une association entre ce groupe, cet individu et pour l\'année sélectionnée existe déjà')
      }
    });
  });

  $('#deleteForm').submit(function(e){
    e.preventDefault();
    $.ajax({
        url:'/Associations/Delete',
        type:'POST',
        data:$("#deleteForm").serialize(),
        success:function(data){
          displayToastr("deleted");
          setPage('Associations', false);  
        },
        error: function()
        {
          displayToastr("error");
        }
    });
    $('#deleteModal').modal('toggle');
  });

</script>
