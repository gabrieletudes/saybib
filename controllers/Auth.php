<?php
namespace Controller;
/**
 * Définit la vue à proposer à l’utilisateur pour se connecter
 * @return array
 */
use Model\Auth as AuthModel;
class Auth extends Page {

    function getLogin(): array
    {
        return ['view' => 'views/getLogin.php'];
        var_dump("welcome");
    }
    function getLogout()
    {
        $_SESSION = array();
        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', 1,
                $params['path'], $params['domain'],
                $params['secure'], $params['httponly']
            );
        }
        session_destroy();
        header('Location: http://saybib.app');
        exit;
    }

    function postLogin(): void
    {
        $_SESSION['user'] = null;
        $email = $_POST['email'];
        echo $password = sha1($_POST['password']);
        $authmodel = new AuthModel();
        $user = $authmodel->checkUser($email, $password);

        if (!$user) {
            header('Location: http://saybib.app');
            exit;
        }

        $_SESSION['user'] = $user;
        die('Welcome');
        header('Location: http://saybib.app/index.php?a=index&r=books');
        exit;
    }
}
