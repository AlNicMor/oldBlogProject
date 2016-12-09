<?php
 
class UsersModel extends Model
{
    private $_userName;
    private $_lastName;
    private $_firstName;
    private $_email;
    private $_password;
     
    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }
     
    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;
    }
     
    public function setEmail($email)
    {
        $this->_email = $email;
    }
     
    public function setUsername($userName)
    {
        $this->_userName = $userName;
    }
    
    public function setPassword($password)
    {
        $this->_password = $password;
    }
     
    public function log()
    {
        $sql = "SELECT
                    *
                FROM
                    users
                WHERE 
                    users.username = ?";
         
       
        $this->_setSql($sql);
        
        
        
        $logresult = $this->getRow(array($this->_userName));
        
        
        
        if(empty($logresult)){
            return false;
        }
        else{
            
            if (password_verify($this->_password, $logresult['password']))
            
            return $logresult;
        }
            
        
        
    }
    
    public function saveUser(){
        
          
        $sql = "INSERT INTO users
                    (username, name, last_name, email, password)
                VALUES
                    (?, ?, ?, ?, ?)";

        $this->_password = password_hash($this->_password, PASSWORD_DEFAULT);
        $data = array(
            $this->_userName,
            $this->_firstName,
            $this->_lastName,
            $this->_email,
            $this->_password
        );

        $sth = $this->_db->prepare($sql);
        return $sth->execute($data);
        
    }
    
    public function userExists(){
        $sql = "SELECT
                    *
                FROM
                    users
                WHERE 
                    users.username = ?";
         
       
        $this->_setSql($sql);
        
        
        
        $user = $this->getRow(array($this->_userName));
        
        return $user;
    }
    
    public function emailExists(){
        $sql = "SELECT
                    *
                FROM
                    users
                WHERE 
                    users.email = ?";
         
       
        $this->_setSql($sql);
        
        
        
        $email = $this->getRow(array($this->_email));
        
        return $email;
    }
   
    
    
}