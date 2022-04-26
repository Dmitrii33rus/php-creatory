<?php
class User
{
    public $name;
    public $surname;
    private $age;
    private $phone;
    private $email;
    private $password;

    private function isAgeCorrect($age)
    {
        return $age >= 18 and $age <= 60;
    }

    public function getAge()
    {
           return $this->age;
    }

    public function setAge($age)
    {
        if ($this->isAgeCorrect($age))
        {
            $this->age = $age;
        }
    }
    private function isPhone($phone) {
        return $phone >= +7 and $phone <= +0;
    }
    public function getPhone () {
        return $this->phone;
    }
    public function setPhone($phone) {
        if ($this->isPhone($phone)) {
            $this->phone = $phone;
        }
    }
    private function isEmail($email) {
        return $email;
    }
    public function getEmail () {
        return $this->email;
    }
    public function setEmail () {
        if ($this->isEmail()) {
            return $this->email;
        }
    }
    private function isPasswords($password) {
        $user_login = empty('user_login');
        $user_password = empty('user_password');
    }
    public function getPasswords () {
        $login = $this->user;
        $passwords = $this->password;
    }
}

$user = new User();
$user->setAge(23);
echo ($user->getAge());
echo ('<br>');
$text = $user->getAge();
echo ($text);
$user->name = "Иван";
$user->surname = "Иванович";
echo('<br>');
echo($user->name.' '.$user->surname);
$phone = +792054676837;
$email = $this->email;
/////////////////////////////
echo('<br>');
$user2 = new  User();
$user2->name = 'Кирил';
$user2->surname = 'Федорович';
$user2->setAge(30);
$phone = +79105566008;
$email = $this->email;
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Карточка пользователя</title>
</head>
<body>
    <div class="card">
        <div class="name">
            <div class="property">Имя</div>
            <div class="value"><?=$user2->name?></div>
        </div>
        <div class="surname">
            <div class="property">Фамилия</div>
            <div class="value"><?=$user2->surname?></div>
        </div>
        <div class="age">
            <div class="property">Возраст</div>
            <div class="value"><?=$user2->getAge()?></div>
        </div>
        <div class="phone">
            <div class="property">Телефон</div>
            <div class="value"><?=$phone?></div>
        </div>
       <div class="email">
          <div class="property">Майл</div>
           <div class="value"><?=$email?></div>
           <form action="" method="post">
               Логин <input <?=$this->user?> type="text"><br>
               Пароль <input <?=$this->password?> type="password"><br>
               <input name="chek" type="submit" value="Проверка">
           </form>
        </div>
        <style>
            .name {
                display: flex;
                justify-content: space-between;
            }
            .surname {
                display: flex;
                justify-content: space-between;
            }
            .age {
                display: flex;
                justify-content: space-between;
            }
            .phone {
                display: flex;
                justify-content: space-between;
            }
            .email {
                display: flex;
                justify-content: space-between;
            }

        </style>
</body>
</html>
