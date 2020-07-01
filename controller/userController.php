<?php
require_once 'models/user.php';
class userController {
    public function registro(){
        require_once('./view/includes/header.php');
        require_once('./view/includes/footer.php');
    }
}
public function saveUser($data){
    $errores = '';
    if(isset($data['email'])){
        $errores = "<p>Falta nombre</p>"
    }
    $user =>new User();
    $user->saveUser($data);
}

?>