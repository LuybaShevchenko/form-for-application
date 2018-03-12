<html>
	<head>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<body>

<form class="form-horizontal">
<fieldset>



<!-- Form Name -->
<legend>Расчет суточной нормы ккал</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Имя</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Иван" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Пол</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="М" checked="checked">
      М
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Ж">
      Ж
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Рост</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="160" class="form-control input-md">
  <span class="help-block">ввести данные в см</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Реальный вес</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="55" class="form-control input-md">
  <span class="help-block">ввести данные в кг</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Желаемый вес</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="52" class="form-control input-md">
  <span class="help-block">ввести данные в кг</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Уровень активности</label>
  <div class="col-md-5">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">минимальная активность, сидячий образ жизни</option>
      <option value="2">легкая нагрузка 1–3 раза в неделю</option>
      <option value="3">тренировки 3–5 раз в неделю</option>
      <option value="4">тренировки ежедневно</option>
      <option value="5">тяжелая физическая работа, тренировки 2 раза в день</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Рассчитать </button>
  </div>
</div>

</fieldset>
</form>


</body>
</html>