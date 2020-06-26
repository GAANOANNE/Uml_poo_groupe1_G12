<<!DOCTYPE html>
<html>
<head>

  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
  <form class="col-md-3">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="number">Nom</label>
      <input type="text" class="form-control" id="nom">
    </div>
    <div class="form-group col-md-6">
      <label for="text">Prenom</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="number">Telephone</label>
      <input type="text" class="form-control" id="nom">
    </div>
    <div class="form-group col-md-6">
      <label for="date">date de naissance</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="00/00/1992">
    </div>
  </div>

  <div class="form-group">
    <label for="inputMail">Addresse mail</label>
    <input type="mail" class="form-control" id="inputAddress" placeholder="gaano@gmail.com">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">type</label>
      <select id="inputState" class="form-control">
        <option selected>type...</option>
        <option>Boursier</option>
        <option>Non-boursier</option>
      </select>
    </div>
  </div>
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

</body>
</html>
