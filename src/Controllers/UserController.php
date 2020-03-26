<?php


namespace Rentit\Controllers;


use Rentit\Controller;
use Rentit\Models\User;
use Rentit\Session;

class UserController extends  Controller{

    public function __construct($request) {

        parent::__construct($request);

    }

    public function index () {

        $data=["title"=>"prueba"];
        $this->render($data);

    }

    public function create_user($email,$passwd,$phone){
        $user=User::create([
            'email'=>$email,
            'passw'=>$passwd,
            'phone'=>$phone]);
        return $user;
    }


    public function register(){

        $this->render(null, "register");

    }

    public function login(){

        $this->render(null, "login");

    }

    public function signup()
    {
        if (!empty($_REQUEST['email']) &&
            !empty($_REQUEST['passwd']) &&
            !empty($_REQUEST['passwd2']) &&
            !empty($_REQUEST['phone'])
        ) {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $passwd1 = filter_input(INPUT_POST, 'passwd', FILTER_SANITIZE_STRING);
            $passwd2 = filter_input(INPUT_POST, 'passwd2', FILTER_SANITIZE_STRING);
            $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
            if ($passwd1 == $passwd2) {
                $passwdhash = password_hash($passwd1,PASSWORD_ARGON2I);
                try {
                    $user = $this->create_user($email, $passwdhash, $phone);
                    header('location:/');
                } catch (\PDOException $e) {
                    $this->error($e->getMessage());
                }
            } else {
                $this->error("Password does not match");
            }
        }
        $this->error("Fill the form");
    }

    public function signin(){
        if (!empty($_REQUEST['email']) && !empty($_REQUEST['passwd'])){

           $user = User::where("email", '=', $_REQUEST['email'])->first();

            if (isset($user) && password_verify($_REQUEST['passwd'], $user->passw) == true){
                Session::destroy();
                Session::init();
                Session::set("logged", true);
                Session::set("id", $user->id);

                header("location:/");
            } else {
                $this->error("User or password incorrect");
            }
        } else {
            $this->error("Fill the form");
        }
    }

    public function getSingleResult($sql, $params = null)
    {
        // TODO: Implement getSingleResult() method.
    }

    public function getResults($sql, $params = null)
    {
        // TODO: Implement getResults() method.
    }

    public function json(array $dataview)
    {
        // TODO: Implement json() method.
    }
}