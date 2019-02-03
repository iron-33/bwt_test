<?php
// контролер
Class Controller_Index Extends Controller_Base {
	
	// шаблон
	public $layouts = "first_layouts";
	
	// экшен
	function index() {

		//Получение нескольких строк из таблицы: ===>>>
		// создаем запрос
		$select = array(
			'where' => 'id >= 1 AND id <= 5', // условие
			'group' => 'name', // группируем
			'order' => 'id DESC', // сортируем
			'limit' => 10 // задаем лимит
		);
		$model = new Model_Users($select); // создаем объект модели
		$usersInfo = $model->getAllRows(); // получаем все строки
		//var_dump($usersInfo);exit; // выводим данные
		// <<<===
		
		/*// Получение одной строки из таблицы: ===>>>
		$select = array(
			'where' => 'id = 2'
		);
		$model = new Model_Users($select);
		$usersInfo = $model->getOneRow();
		var_dump($usersInfo);
		// <<<===*/
		
		
		/*//Помимо получения строк, мы можем получать значения конкретных столбцов: ===>>>
		// запрос
		$select = array(
			'where' => 'id = 2'
		);
		$model = new Model_Users($select); 
		$model->fetchOne(); // извлекаем данные
		// получаем значения столбцов
		$firstName = $model->first_name;
		$lastName = $model->last_name;
		// выводим
		var_dump($firstName);
		var_dump($lastName);
		*/
		
		
		/*//Также просто, как и получать, мы можем и записывать данные:
		// создаем объект
		$model = new Model_Users();
		// задаем значения для полей таблицы
		$model->id = 10; // id можно и пропустить, если для этого поля настроен авто инкремент 
		$model->first_name = 'Иван';
		$model->last_name = 'Иванов';
		$result = $model->save(); // создаем запись
		var_dump($result); // проверяем результат:  true или false
		//<<<===*/
		
		
		/*//Обновление записей в таблице тоже не составит проблем, выглядеть это будет так:
		// запрос
		$select = array(
			'where' => 'id = 10'
		);
		// модель
		$model = new Model_Users($select);
		// извлекаем данные
		$model->fetchOne(); 
		// задаем новые значения
		$model->first_name = 'Петр';
		$model->last_name = 'Петров';
		// обновляем запись
		$result = $model->update();
		var_dump($result); // проверяем результат:  true или false
		//<<<===*/
		
		
		/*//И последнее элементарное действие с базой данных – удаление записей.
		// модель
		$model = new Model_Users();
		// условие удаления
		$select = array(
			'where' => 'id > 10'
		);
		// удаляем
		$result = $model->deleteBySelect($select);
		var_dump($result); // проверяем результат. Вернется количество удаленных
		//<<<===*/
		
		/*//И еще один доступный вариант удаления, для одной записи:
		// запрос
		$select = array(
			'where' => 'id = 10'
		);
		// модель
		$model = new Model_Users($select);
		// извлекаем данные
		$model->fetchOne();
		// удаляем строку
		$result = $model->deleteRow();
		var_dump($result);
		//<<<===*/
		
		
		
		$this->template->vars('userInfo', $usersInfo);
		$this->template->view('index');
	}

	function weather(){
		$this->template->view('weather');
	}

	function feedback(){
		$this->template->view('feedback');
	}

	function login(){
		$this->template->view('login');
	}

	function success_enter(){
		$this->template->view('success_enter');
	}

	function logout(){
		session_start();
		session_destroy();
		$this->template->view('logout');
	}

	function exit_auth(){

		header("Location /logout/");
		// exit;
	}

	function test(){
		$select = array(
			'where' => 'id >= 1 AND id <= 5', // условие
			'group' => 'name', // группируем
			'order' => 'id DESC', // сортируем
			'limit' => 10 // задаем лимит
		);
		$model = new Model_Users($select); // создаем объект модели
		$usersInfo = $model->getAllRows(); 
		var_dump($usersInfo);
	}

	function enter(){

		$select = array(
			'where' => 'id > 1'
		);
		$model = new Model_Users($select); 
		$asdf = $model->getAllRows();
		foreach ($asdf as $baza) {
		$name = $baza['name'];
		$password = $baza['password'];
		}

		$login = $_POST['login'];
		$password_post = md5($_POST['password']);

		
		if ($login == $name && $password_post == $password) {
			session_start();
			$_SESSION['username'] = $login;
			header("Location: /success_enter/");
		}else{
			header("Location: /fail/");

		}
		
	}

	function admin_page(){

	}

	function registration(){
				$model = new Model_Users();
		// задаем значения для полей таблицы
		$model->name = $_POST['name'];
		$model->email = $_POST['email'];
		$model->password = md5($_POST['password']);
		$result = $model->save(); // создаем запись
		if($result == true){
		header("Location: /success/");
	}else{
		header("Location: /fail/");
	}
	}

	function register_now(){
		$model = new Model_Users();
		$this->template->vars('model_users', $model);
		$this->template->view('register_now');
	}

	function auth(){
		$index = new Controller_Index();
		$select = array(
'where' => 'id < 1'
		);
		$model = new Model_Users($select); // создаем объект модели
		$usersInfo = $model->getAllRows(); // получаем все строки
		$login = $_POST['login'];
		$pass = $_POST['password'];
		$password = md5($pass);
		if($login == 'admin' && $password == '21232f297a57a5a743894a0e4a801fc3'){
			$_SESSION['admin'] = $login;?>
<script>
     window.location = '/admin_page'; //мгновенная переадресация на другую страницу
</script>
			<?php
		}else{
			echo "Не правильно введен логин или пароль для администратора";
		}
	}

function success(){
	$this->template->view('success');
}

function fail(){
	$this->template->view('fail');
}

function feedback_add(){
$model = new Model_Feedback();
		// задаем значения для полей таблицы
		$model->name = $_POST['name'];
		$model->email = $_POST['email'];
		$model->message = $_POST['message'];
		$result = $model->save(); // создаем запись
		if($result == true){
		$this->template->view('success_feedback');
	}else{
		$this->template->view('fail_feedback');
	}
}

function success_feedback(){
	
}

function fail_feedback(){

}
	
}