<button class="btn btn-success" id="btnAdd" data-toggle="modal" data-target="#addModal">Ajouter</button>
</p>

</p>
<div class="table-responsive">
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
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un groupe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" id="form">
            @csrf
            <b for="groupeName">Nom du groupe</label> :<br/>
            <input type="text" name="groupeName">
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
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
        <h5 class="modal-title" id="exampleModalLabel">Supprimer le groupe</h5>
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

    function checkIfExist(){
        return $.ajax({
            url:'/Group/AlreadyExist',
            type:'POST',
            data:$(form).serialize(),
        });
    }

    $('#form').submit(function(e){
        e.preventDefault();

        checkIfExist().then(function(response)
        {
            if (response == 'false')
            {
                $.ajax({
                    url:'/Group/AddGroup',
                    type:'POST',
                    data:$(form).serialize(),
                    success:function(data){
                    }
                });
            }
        })
    });

</script>