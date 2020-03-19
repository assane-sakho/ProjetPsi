<button class="btn btn-success" id="btnAdd">Ajouter</button></p>
<form action="" id="form">
    @csrf
    <input type="text" name="groupeName">
    <button id="btnSubmit">sumbit</button>
</form>
</p>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom du groupe</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($groups as $group)
      <tr>
          <td>{{ $group->id }}</td>
          <td>{{ $group->name }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

<script>
    $("table").DataTable();

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