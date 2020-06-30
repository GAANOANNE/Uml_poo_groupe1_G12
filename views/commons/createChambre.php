 <p>
<br>
<br>
</p>
<span class="h4 col_princ1">Ajouter Chambre</span>
<br>
<br>
<form class="col-6 offset-3 card shadow-lg" action="Javascript:void(0) " method="post"  id="form_chambre">
<br>
  <div class="form-row">
   <div class="form-group  col">
      <label for="text"><span>Numero batimat</span> </label>
      <input type="text"  name="numero_batiment" class="form-control" error="error1" id="inputPassword4">
    </div>
  </div>
  <small class="text-danger" id="error1"></small>
  <br>

  <div class="form-row">
    <div class="form-group col">
     
      <label for="text"><span>Type de chambre</span> </label>
      <select name="type" class="form-control requireinput" error="error2" >
        <option value="">--type chambre-- </option>
        <option value="individuel">Individuel</option>
        <option value="double" >Double</option>
      </select>
    </div>
  </div>
  <small class="text-danger" id="error2"></small>
  <br>
  <div class="form-group">
  </div>
  <button type="submit"  id="addChambre" name="addChambre" value="addChambre"  class="btn color_princ1 text-white">Enregistrer</button>
</form>

<script src="<?=BASE_URL?>/public/js/validateChambre.js"></script>

