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
        <th>Numéro</th>
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
          <input type="text" name="addLastname" id="addLastname" class="form-control" required><br/>

          <label for="addFirstname">Prénom :</label></br>
          <input type="text" name="addFirstname" id="addFirstname" class="form-control" required><br/>

          <label for="addFirstname">Email :</label></br>
          <input type="text" name="addEmail" id="addEmail" class="form-control"><br/>
          
          <label for="addFirstname">Num :</label></br>
          <input type="number" name="addNum" id="addNum" class="form-control" required><br/>
          
          <label for="addDirectory">Annuaire :</label></br>
          <select name="addDirectory" id="addDirectory" class="form-control" required style="width: 400px">
            <option value=""> -- Sélectionnez une option -- </option>
          </select>
          </p>

          <label for="addStatus">Status :</label></br>
          <select name="addStatus" id="addStatus" class="form-control" required style="width: 400px">
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
      <input type="hidden" name="editOldNum" id="editOldNum">
      <input type="hidden" name="editOldLastname" id="editOldLastname">
      <input type="hidden" name="editOldFirstname" id="editOldFirstname">
        @csrf
        <div class="modal-body">
          <label for="editLastname">Nom :</label></br>
          <input type="text" name="editLastname" id="editLastname" class="form-control" required><br/>

          <label for="editFirstname">Prénom :</label></br>
          <input type="text" name="editFirstname" id="editFirstname" class="form-control" required><br/>

          <label for="editEmail">Email :</label></br>
          <input type="text" name="editEmail" id="editEmail" class="form-control"><br/>
          
          <label for="editFirstname">Num :</label></br>
          <input type="number" name="editNum" id="editNum" class="form-control" required><br/>
          
          <label for="editDirectory">Annuaire :</label></br>
          <select name="editDirectory" id="editDirectory" class="form-control" required style="width: 400px">
            <option value=""> -- Sélectionnez une option -- </option>
          </select>
          </p>

          <label for="editStatus">Status :</label></br>
          <select name="editStatus" id="editStatus" class="form-control" required style="width: 400px">
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
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Importer des individus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="importInputDiv">
        <label for="">Fichier : </label><input type="file" id="fileImport" name="fileImport" accept=".xlsx" onchange="xlsImport(event)" onclick="$(this).val('')"/>
        </div>
        </p>
        <div class="alert alert-danger" role="alert">
        <h3>Attention</h3><br/>
          Veuillez vous assurer que le fichier est en .xlsx et qu'il comporte les colonnes <span class="text-info">NOM</span>, <span class="text-info">PRENOM</span>, <span class="text-info">EMAIL</span>, <span class="text-info">NUMERO</span>, <span class="text-info">ANNUAIRE</span>, et <span class="text-info">STATUT</span> (tout en majuscule).</p></p>
          <a href="{{ asset('files/importModel.xlsx') }}" download="Modele d'import d'individu.xlsx">Télécharger le modèle d'import</a></p>
          Pour rappel, la liste des annuaires et des statuts disponibles sont:</br>
          <select id="availableDirectory" class="form-control" required style="width: 400px">
          </select></p> 
          <select id="availableStatus" class="form-control" required style="width: 400px">
          </select>
        </div>
      
        Les <b class="text-warning">Emails non renseigné</b> ne sont pas bloquant pour l'import.</p>
        A l'inverse les champs <b class="text-danger">Nom, Prénom, Num, Annuaire et Statut</b> le sont.</p>
        
        <h5>Résultat:</h5>
       
        <span id="importResult" class="text-primary"></span></br>
        <button class="btn btn-success" id="importDataBtn">Ajouter</button></p>

        <table id="tableImport" class="table">
          <thead>
            <tr>
            <td>Ajoutable</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Email</td>
            <td>Numéro</td>
            <td>Annuaire</td>
            <td>Statut</td>
            <td>Existe déjà</td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<script>

  $(document).ready(function(){
    statusTitleArray = [];
    directoryNameArray = [];
    ajaxArray = [];
    
    $.get("/Status/GetAll", function(data) {
      appendToSelect("addStatus", JSON.parse(data));
      appendToSelect("editStatus", JSON.parse(data));
      appendToSelect("availableStatus", JSON.parse(data));
      $.each(JSON.parse(data), function( key, value ) {
        statusTitleArray.push(value.title);
      });
    });

    $.get("/Directory/GetAll", function(data) {
      appendToSelect("addDirectory", JSON.parse(data));
      appendToSelect("editDirectory", JSON.parse(data));
      appendToSelect("availableDirectory", JSON.parse(data));

      $.each( JSON.parse(data), function( key, value ) {
        directoryNameArray.push(value.name);
      });
    });

    $('#addModal').on('show.bs.modal', function(e) {
      $("#addLastname, #addFirstname, #addEmail, #addNum").val("");
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
      $("#editOldLastname, #editLastname").val(lastname);
      $("#editOldFirstname, #editFirstname").val(firstname);
      $("#editEmail").val(email);
      $("#editOldNum, #editNum").val(num);
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

    $('#importModal').on('show.bs.modal', function(e) {
      $('#fileImport').val("");
      $("#importDataBtn").hide();
      $("#importResult").text("");
      $("#tableImport").DataTable().clear().draw().destroy();
    });

    $('#importModal').on('hide.bs.modal', function(e) {
      toastr.clear();

      $.each(ajaxArray, function(value ) {
        this.abort();
      });
      console.clear()
    });

    $("button").click(function(){
      console.clear();
    });

  });

    function xlsImport(e)
    {
        $("#tableImport").DataTable().clear().draw().destroy();

        var jsonData;
        var i = 0, j = 0, k =1,  pourcentage = 0, totalRow = 0, countNotExist = 0 ;
        var textExist;

        handleFile(e, function(jsonData)
        {
          toastr.success('<div class="progress" style="height: 20px"><div id="processing" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div></div>', 'Vérification de la présence des individus dans la base', { timeOut: 0 });

          jsonObj = [];

          $.each( jsonData, function( key, value ) {
            var lastname = value.NOM ?? 'Non renseigné';
            var firstname = value.PRENOM ?? 'Non renseigné';
            var email = value.EMAIL ?? 'Non renseigné';
            var num = value.NUMERO  ?? 'Non renseigné';
            var directory = value.ANNUAIRE ? value.ANNUAIRE.toUpperCase() : 'Non renseigné';
            var status = value.STATUT ? value.STATUT.toUpperCase() : 'Non renseigné';
            
            item = {}
            item ["lastname"] = lastname;
            item ["firstname"] = firstname;
            item ["email"] = email;
            item ["num"] = num;
            item ["directory"] = directory ;
            item ["status"] = status;
            item ["alreadyExist"] = 'Recherche en cours...';
            item ["canBeAdded"] = 'Recherche en cours...';

            jsonObj.push(item);
          });

          var table =  $('#tableImport').DataTable( {
              data: jsonObj,
              columns: [
                  { data: 'canBeAdded' },
                  { data: 'lastname' },
                  { data: 'firstname' },
                  { data: 'email' },
                  { data: 'num' },
                  { data: 'directory' },
                  { data: 'status' },
                  { data: 'alreadyExist' }
              ]
          });

          totalRow = table.data().count();
          table.rows().every( function (rowIdx) {
            var d = this.data();
            i = 0;
            if(i == 0)
            {
              checkIfExistPromise(d["lastname"], d["firstname"], d["num"])
                .then(exist => {
                  var cellCanBeAdded = table.cell({row:rowIdx, column:0});
                  var canBeAdded = true;

                  if(exist == "true")
                  {
                    textExist = "Oui";
                    canBeAdded = false;
                  }
                  else
                  {
                    textExist = "Non";
                  }

                  table.cell({row:rowIdx, column:7}).data(textExist);
                
                  k = 1;
                  $.each( d, function( key, value ) {
                    var cell = table.cell({row:rowIdx, column:k}).node();

                    if(key == "directory" && !directoryNameArray.includes(value))
                    {
                      $(cell).addClass( 'bg-danger' );
                      canBeAdded = false;
                    }
                    else if(key == "status" && !statusTitleArray.includes(value))
                    {
                      $(cell).addClass( 'bg-danger' );
                      canBeAdded = false;
                    }
                    else if(key == "num")
                    {
                      if(isNaN(value))
                      {
                        $(cell).addClass( 'bg-danger' );
                        canBeAdded = false;
                      }
                    }

                    if(value == "Non renseigné")
                    {
                      if(key == "email")
                      {
                        $(cell).addClass( 'bg-warning' );
                      }
                      else
                      {
                        $(cell).addClass( 'bg-danger' );
                        canBeAdded = false;
                      }
                    }
                    k++;
                  });
                  if(!canBeAdded)
                  {
                    cellCanBeAdded.data('<i class="fa fa-times text-danger"></i>');
                  }
                  else
                  {
                    countNotExist++;
                    cellCanBeAdded.data('<i class="fa fa-check text-success"></i>');
                  }
                  j++;

                  pourcentage = ((j / totalRow) * 100).toFixed();

                  $("#processing").text(pourcentage + " %");
                  $("#processing").css({"width" : pourcentage + "%"});

                  if(j == totalRow)
                  {
                    displayToastr("checked");
                    $("#importResult").text(countNotExist + " sur " + totalRow + " individus peuvent être ajouté.");
                    if(countNotExist > 0)
                    {
                      $("#importDataBtn").show();
                    }
                  }
              });
            }
          });
          table.draw();
        });
      }

  
      function checkIfExist(formData, numChange, lastnamOrFirstnameChange){
      if(numChange == false && lastnamOrFirstnameChange && false)
      {
        return false;
      }

      return $.ajax({
          url:'/People/AlreadyExist',
          type:'POST',
          data:"_token={{ csrf_token() }}&"+ formData + "&numChange=" + numChange + "&lastnamOrFirstnameChange=" + lastnamOrFirstnameChange
      });
    }

    function checkIfExistPromise(lastname, firstname, num) {
      return new Promise((resolve, reject) => {
        var dataToSend = 
              "lastname=" +  lastname + 
              "&firstname=" +  firstname + 
              "&num=" +  num;
        var request = $.ajax({
          url:'/People/AlreadyExist',
          type:'POST',
          data:"_token={{ csrf_token() }}&"+ dataToSend + "&numChange=&lastnamOrFirstnameChange=",
          success: function(data) {
            resolve(data)
          },
          error: function(error) {
            reject(error)
          },
        });
        ajaxArray.push(request);
      });
    }

    $('#addForm').submit(function(e){
        e.preventDefault();

        var formData = $("#addForm").serialize();
        var lastName = $("#addLastname").val();
        var firstName = $("#addFirstname").val();
        var num = $("#addNum").val();
        var data = formData + 
        "&lastname=" +  lastName + 
        "&firstname=" +  firstName + 
        "&num=" +  num;
      
        checkIfExist(data).then(function(response){
        if (response == 'false')
          {
              $.ajax({
                  url:'/People/Add',
                  type:'POST',
                  data:$("#addForm").serialize(),
                  success:function(data){
                    displayToastr("saved");
                    setPage('People', false);
                  },
                  error: function(){
                    displayToastr("error");
                  }
              });
              $('#addModal').modal('toggle');
          }
          else
          {
            displayToastr('warning', 'Un individu portant le même nom et prénom ou portant le même numéro existe déjà')
          }
      });
    });

    $('#editForm').submit(function(e){
      e.preventDefault();

      var formData = $("#editForm").serialize();
      var lastName = $("#editLastname").val();
      var firstName = $("#editFirstname").val();
      var num = $("#editNum").val();
      var data = formData + 
      "&lastname=" +  lastName + 
      "&firstname=" +  firstName + 
      "&num=" +  num;

      var numChange =  (num != $("#editOldNum").val());
      var lastnamOrFirstnameChange = (lastName != $("#editOldLastname").val() || firstName !=  $("#editOldFirstname").val());
      
      checkIfExist(data, numChange, lastnamOrFirstnameChange).then(function(response){
        if (response == 'false' || (numChange == false && lastnamOrFirstnameChange == false))
        {
            $.ajax({
                url:'/People/Update',
                type:'POST',
                data:$("#editForm").serialize(),
                success:function(data){
                  displayToastr("updated");
                  setPage('People', false);
                },
                error: function(){
                  displayToastr("error");
                }
            });
            $('#editModal').modal('toggle');
        }
        else
        {
          displayToastr('warning', 'Un individu portant le même nom et prénom ou portant le même numéro existe déjà')
        }
      });

    });

    $('#deleteForm').submit(function(e){
      e.preventDefault();
      $.ajax({
          url:'/People/Delete',
          type:'POST',
          data:$("#deleteForm").serialize(),
          success:function(data){
            displayToastr("deleted");
            setPage('People', false);
          },
          error: function()
          {
            displayToastr("error");
          }
      });
      $('#deleteModal').modal('toggle');
    });

    $("#importDataBtn").click(function(){
      var table =  $('#tableImport').DataTable();
      var data = table.rows().data();
      $.each( data, function( key, value ) {

        if(value.canBeAdded == '<i class="fa fa-check text-success"></i>')
        {
          var lastname = value.lastname;
          var firstname = value.firstname;
          var email = value.email;
          var num = value.num;
          var directory = value.directory;
          var status = value.status;

          var data = 
          "_token={{ csrf_token() }}" +
          "&lastname=" + lastname + 
          "&firstname=" + firstname + 
          "&email=" + email + 
          "&num=" + num + 
          "&directoryName=" + directory +
          "&statusTitle=" + status;
          $.post("/People/Add", data);
        }
      });
      $('#importModal').modal('toggle');
      displayToastr("saved");
      setPage('People', false);
    });
</script>