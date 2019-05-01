<h2>Belépés</h2>
  <form class="form-horizontal" action="?oldal=belepes_feldolgoz"  method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="felhasznalonev">Felhasználónév:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="felhasznalonev" placeholder="Felhasználónév:" name="felhasznalonev" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jelszo">Jelszó:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="jelszo" placeholder="Jelszó:" name="jelszo" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Elküld</button>
      </div>
    </div>
  </form>
  
  <h2>Regisztráció</h2>
  <form class="form-horizontal" action="?oldal=regisztracio_feldolgoz"  method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="vezeteknev">Vezetéknév:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="vezeteknev" placeholder="Vezetéknév:" name="vezeteknev" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="keresztnev">Keresztnév:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="keresztnev" placeholder="Keresztnév:" name="keresztnev" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="felhasznalonev">Felhasználónév:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="felhasznalonev" placeholder="Felhasználónév:" name="felhasznalonev" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jelszo">Jelszó:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="jelszo" placeholder="Jelszó:" name="jelszo" pattern=".{6,}" title="A jelszó minimum 6 karakter kell legyen" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Elküld</button>
      </div>
    </div>
  </form>
