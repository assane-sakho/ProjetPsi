<button class="btn btn-success" id="btnAdd" data-toggle="modal" data-target="#addModal">Ajouter</button>
</p>

</p>
<div class="table-responsive">
  <table class="table table-striped table-sm" id="dataTable">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom du groupe</th>
        <th class="not-export-col">Modifier</th>
        <th class="not-export-col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($groups as $group)
      <tr>
          <td>{{ $group->id }}</td>
          <td>{{ $group->name }}</td>
          <td class="not-export-col"><button class="btn btn-warning" data-toggle="modal" data-target="#editModal" data-id="{{ $group->id }}" data-name="{{ $group->name }}">Modifier</button></td>
          <td class="not-export-col"><button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $group->id }}" data-name="{{ $group->name }}">Supprimer</button></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>


<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un groupe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="addForm">
        <div class="modal-body">
            @csrf
            <b for="addName">Nom du groupe</label> :<br/>
            <input type="text" name="addName" id="addName">
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
        <h5 class="modal-title" id="exampleModalLabel">Modifier un groupe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="editForm">
        <div class="modal-body">
          @csrf
          <input type="hidden" name ="editId" id="editId">
          <input type="hidden" name ="editOldName" id="editOldName">
          <label for="editName">Nom du groupe</label> : <br/>
          <input type="text" name ="editName" id="editName" class="form-control">
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
        <h5 class="modal-title" id="exampleModalLabel">Supprimer le groupe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" id="deleteForm">
        <div class="modal-body">
          @csrf
          <input type="hidden" name="deleteId" id="deleteId">
          Voulez-vous supprimer <span id="deleteGroupName"></span> ?
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Oui</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>

    function checkIfExist(formData){
        return $.ajax({
            url:'/Groups/AlreadyExist',
            type:'POST',
            data: formData
        });
    }

    $('#addForm').submit(function(e){
        e.preventDefault();
        var formData = $("#addForm").serialize();
        var name = $("#addName").val();

        checkIfExist(formData + "&name=" +  name).then(function(response)
        {
            if (response == 'false')
            {
                $.ajax({
                    url:'/Groups/Add',
                    type:'POST',
                    data:$("#addForm").serialize(),
                    success:function(data){
                      displayToastr("saved");
                      setPage('Groups', false); 
                    },
                    error: function(){
                      displayToastr("error");
                    }
                });
                $('#addModal').modal('toggle');
            }
            else
            {
              displayToastr('warning', 'Un groupe portant le même nom existe déjà')
            }
        });
    });

    $('#editForm').submit(function(e){
      e.preventDefault();
      var formData = $("#editForm").serialize();
      var name = $("#editName").val();
      
      checkIfExist(formData + "&name=" +  name).then(function(response)
      {
          if($("#editOldName").val() == $("#editName").val())
          {
            displayToastr('warning', 'Aucune modification n\'a été apporté.')
          }
          else if (response == 'false')
          {
            $.ajax({
                url:'/Groups/Update',
                type:'POST',
                data:$("#editForm").serialize(),
                success:function(data){
                  displayToastr("updated");
                  setPage('Groups', false); 
                },
                error: function()
                {
                  displayToastr("error");
                }
            });
            $('#editModal').modal('toggle');
          }
          else
          {
            displayToastr('warning', 'Un groupe portant le même nom existe déjà')
          }
      });
    });

    $('#deleteForm').submit(function(e){
      e.preventDefault();
      $.ajax({
          url:'/Groups/Delete',
          type:'POST',
          data:$("#deleteForm").serialize(),
          success:function(data){
            displayToastr("deleted");
            setPage('Groups', false);          },
          error: function()
          {
            displayToastr("error");
          }
      });
      $('#deleteModal').modal('toggle');
    });

    $('#editModal').on('show.bs.modal', function(e) {
      var id = $(e.relatedTarget).data('id');
      var name = $(e.relatedTarget).data('name');

      $("#editId").val(id);   
      $("#editOldName, #editName").val(name);   
    });

    $('#deleteModal').on('show.bs.modal', function(e) { 
      var id = $(e.relatedTarget).data('id');
      var name = $(e.relatedTarget).data('name');

      $("#deleteId").val(id);   
      $("#deleteGroupName").text(name);
    });

</script>