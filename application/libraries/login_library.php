<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Login_library {
    
function logIn($email, $password)
{
    
    echo "A";
    
    $ci = &get_instance();
        
    if($email=="abc" && $password=="123")
    {
        
        echo "B";
        
        $newdata = array(
                   'email'     => 'johndoe@some-site.com',
                   'logged_in' => TRUE
               );

               echo "C";
        
        $ci->session->set_userdata('is_logged_in', $newdata);
    }
    
    echo "D";
    
    redirect('day1');
}

function LoggedIn()
{
    $ci = &get_instance();
    
    $logged_in = $ci->session->userdata('is_logged_in');
    return (isset($logged_in) && $logged_in);
}



}

?>
