<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Utilisation de l'API
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Pour utiliser l'API vous devez envoyer une requette <span class="text-success">GET</span> à l'endpoint suivant: <h6 id="apiEndpoit"></h6>
        </p>
        <button onClick="copy()" class="btn btn-primary">Copier</button>
        </p>
        <h4>Informations complémentaires</h4>
        <table class="table">
          <tr>
              <td>Nom du groupe</td>
              <td><span class="text-success">group_name</span></td>
          </tr>
          <tr>
              <td>Nom de l'individu</td>
              <td><span class="text-success">lastname</span></td>
          </tr>
          <tr>
              <td>Prénom de l'individu</td>
              <td><span class="text-success">firstname</span></td>
          </tr>
          <tr>
              <td>Email de l'individu</td>
              <td><span class="text-success">email</span></td>
          </tr>
          <tr>
              <td>Num</td>
              <td><span class="text-success">num</span></td>
          </tr>
          <tr>
              <td>Annuaire</td>
              <td><span class="text-success">directory_name</span></td>
          </tr>
          <tr>
              <td>Statut</td>
              <td><span class="text-success">status_title</span></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<script>

$(document).ready(function(){
  $("#apiEndpoit").text(window.location.href.split('#')[0] + "api/associations");

});

function copy() {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($("#apiEndpoit").text()).select();
  document.execCommand("copy");
  $temp.remove();
  toastr.info("Endpoint de l'API copié",  $("title").text() + " - " + "Administration");
}

</script>
