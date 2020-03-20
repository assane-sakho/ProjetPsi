<button class="btn btn-success" id="btnAdd" data-toggle="modal" data-target="#addModal">Ajouter</button>
</p>

</p>
<div class="table-responsive" id="dataTable">
  <table class="table table-striped table-sm">
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
            <b for="groupeName">Nom du groupe</label> :<br/>
            <input type="text" name="groupeName">
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
          <span id="deleteMessage"> </span>
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
    setDataTable();

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
                    url:'/Group/AddGroup',
                    type:'POST',
                    data:$("#addForm").serialize(),
                    success:function(data){
                      displayToastr("saved");
                      setPage('Group', false);
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
          url:'/Group/EditGroup',
          type:'POST',
          data:$("#editForm").serialize(),
          success:function(data){
             displayToastr("updated");
             setPage('Group', false);
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
          url:'/Group/DeleteGroup',
          type:'POST',
          data:$("#deleteForm").serialize(),
          success:function(data){
            displayToastr("deleted");
            setPage('Group', false);
          },
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
      $("#editName").val(name);   
    });

    $('#deleteModal').on('show.bs.modal', function(e) {
      var id = $(e.relatedTarget).data('id');
      var name = $(e.relatedTarget).data('name');

      $("#deleteId").val(id);   
      $("#deleteMessage").text("Voulez-vous supprimer le groupe " + name + " ?");
    });

</script>