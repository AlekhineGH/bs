<?php

class Login_model extends CI_Model{
    
    function __construct() 
    {
        parent::__construct();
    }
    
    /**
     * 
     * method for checking the user's credentials
     * 
     * @return boolean
     */
    function validate()
    {
        
        $q = $this->db
            ->select()
            ->from('Utilizator')
            ->where('utilizator', $this->input->post('username'))
            ->get();
         
        if(isset($q) && $q != null)
            // the user exists in database
            if($q->num_rows() == 1)
            {
                $result = $q->result()[0];
                $password = hash('sha512', $this->input->post('password'));
                $activ = $result->activ;
                
            }else
            {
                // this user doesn't exist
                return false;
            }

            
        // check to see if user's password is correct    
        $q = $this->db
                ->select()
                ->from('Utilizator')
                ->where('utilizator', $this->input->post('username'))
                ->where('parola', $password)
                ->get();
        
        if(isset($q) && $q!=null)
            if($q->num_rows() == 1)
            {
                // check to see if the user's account is active or not
                if(!$activ)
                    return false;

                return true;
            }
        
        // incorrect password
        return false;
    }
        
}

?>
