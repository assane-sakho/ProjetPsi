  </p>
  <button class="btn btn-success" id="btnAdd">Ajouter</button></p>
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
      </tr>
    </thead>
    <tbody>
    @foreach ($persons as $person)
      <tr>
          <td>{{ $person->id }}</td>
          <td>{{ $person->lastname }}</td>
          <td>{{ $person->firstname }}</td>
          <td>{{ $person->email }}</td>
          <td>{{ $person->num }}</td>
          <td>{{ $person->directoryId }}</td>
          <td>{{ $person->statusId }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>


<script>
  $(".table").DataTable();
</script>
