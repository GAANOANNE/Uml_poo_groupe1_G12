<style>
  #scrollZone
  {
    max-height:280px;
    overflow: scroll;
  }

</style>
<p>
<br>
</p>

<div class="row col-6 offset-3">
  Search
  <input type="text" placeholder="search matricule" id="search_mat" name='matricule' class="form-control col">
      <select id="search_profil" class="form-control col">
        <option value="">--search profil--</option>
        <option value="boursier">Boursier</option>
        <option value="nonBoursier">Non-boursier</option>
        <option value="loger">Loger</option>
      </select>

</div>
<br>
<span class="h4 col_princ1">Liste des étudiants</span>
<br>
<div class="col  text-center" id="scrollZone">
	<table class="table table-bordered shadow-lg">
    <thead>
      <tr>
        <th class="">Matricule</th>
        <th class="">Nom</th>
        <th class="">Prenom</th>
        <th class="">Date Nais.</th>
        <th class="">Phone</th>
        <th class="">Email</th>
        <th class="">Adresse</th>
        <th class="">Bourse</th>
        <th class="">Chambre</th>
      </tr>
    </thead>
    <tbody class="small" id="table">
    </tbody>
  </table>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title col_princ1">Modifier Étudiant</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form class="col justify-content-center card shadow-lg" id="form_update" method="POST" action="Javascript:void(0)">
            <br>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="number">Nom</label>
                  <input type="text" class="form-control" id="mod_nom">
                </div>
                <div class="form-group col-md-6">
                  <label for="text">Prenom</label>
                  <input type="text" class="form-control" id="mod_prenom">
                </div>
              </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="number">Telephone</label>
                  <input type="text" class="form-control" id="mod_tel">
                </div>
                <div class="form-group col-md-6">
                  <label for="date">date de naissance</label>
                  <input type="date" class="form-control" id="mod_date" placeholder="00/00/1992">
                </div>
              </div>

              <div class="form-group">
                <label for="inputMail">Adresse mail</label>
                <input type="email" class="form-control" id="mod_email" placeholder="gaano@gmail.com">
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputState">type</label>
                  <select id="mod_type" class="form-control">
                    <option value="">--Choisir Profile--</option>
                    <option value="boursier">Boursier</option>
                    <option value="nonBoursier">Non-boursier</option>
                    <option value="loger">Loger</option>
                  </select>
                </div>
              </div>
              <div id="content_profil">
              </div>
              <div class="row">
                <button type="reset" class="btn btn-danger text-white col">Annuler</button>
                <button type="submit" id="btn_update" class="btn color_princ1 text-white col">Enregistrer</button>
             </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>
<script src="<?=BASE_URL?>/public/js/etudiant.js"></script>
