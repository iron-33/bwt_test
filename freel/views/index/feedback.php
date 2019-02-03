<div class="col-md-12 margin-0-auto" style="display: grid; padding: 20px;">
	<div class="col-md-6 margin-0-auto centered">
<form action="/feedback_add/" method="POST">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input type="email" name="email" class="form-control" id="email" placeholder="Ваш E-mail" required="required">
  </div>
  <div class="input-group">
  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  	<input type="name" name="name" class="form-control" id="name" placeholder="Ваше имя" required="required">
  </div>
 <div class="input-group">
    <span class="input-group-addon">Сообщение</span>
    <input id="msg" type="text" class="form-control" name="message" placeholder="Ваше сообщение" required="required">
  </div>
  <button type="submit" class="btn btn-default btn-block">Отправить</button>
</form>
</div>
</div>