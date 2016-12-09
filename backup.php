<?php
public function register(){
    
    if (!isset($_POST['registerFormSubmit'])){
        header('Location: /users/index');
    }

    $errors = array();
    $check = true;

         
    $firstName = isset($_POST['name']) ? trim($_POST['name']) : NULL;
    $lastName = isset($_POST['last_name']) ? trim($_POST['last_name']) : NULL;
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $username = isset($_POST['username']) ? trim($_POST['message']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : NULL;

    if(empty($firstName)){
        $check = false;
        array_push($errors, "First name is required!")
    }

    if (empty($lastName)) {
        $check = false;
        array_push($errors, "Last name is required!")
    }

    if (empty($email)){
        $check = false;
        array_push($errors, "E-mail is required!");
    }
    else if (!filter_var( $email, FILTER_VALIDATE_EMAIL )){
        $check = false;
        array_push($errors, "Invalid E-mail!");
    }

    else if (emailExists($email) == true){
        $check = false;
        array_push($errors, "E-mail already registered!");
    }

    if(empty($username)){
        $check = false;
        array_push($errors, "You need to choose a username!");
    }

    else if (userExists($username) == true){
        $check = false;
        array_push($errors, "Username already in use!");
    }

    if (!$check)
    {
        $this->_setView('result');
        $this->_view->set('title', 'Invalid form data!');
        $this->_view->set('errors', $errors);
        $this->_view->set('formData', $_POST);
        return $this->_view->output();
    }


    try {
                 
        $user = new UsersModel();
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setEmail($email);
        $user->setUsername($username);
        $user->setPassword($password);
        $user->saveUser();
                 
        $this->_setView('result');
        $this->_view->set('title', 'Register success!');
                 
        $data = array(
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'message' => $message
    );
                 
        $this->_view->set('userData', $data);

    } catch (Exception $e)

}