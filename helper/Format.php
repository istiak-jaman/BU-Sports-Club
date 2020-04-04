<?php
/**
 * Format Class
 */
class Format{
    public function formatDate($date){
        return date('F j, Y, g:i a', strtotime($date));
    }
    public function textShorten($text, $limit = 400){
        $text = $text. "";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text."....";
        return $text;
    }
    
    public function validation($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    public function title(){
        $path = $_SERVER['SCRIPT_FILENAME'];
        $title = basename($path, '.php');
        if($title == 'index' ){
            $title = 'home';
        } elseif ($title == 'gallary') {
            $title = 'gallary';
        }
        elseif ($title == 'event') {
            $title = 'event';
        }elseif ($title == 'about') {
            $title = 'about';
        }elseif ($title == 'contact') {
            $title = 'contact';
        }elseif ($title == 'privacy') {
            $title = 'privacy';
        }elseif ($title == 'login') {
            $title = 'login';
        }elseif ($title == 'sports') {
            $title = 'sports';
        }elseif ($title == 'shop') {
            $title = 'shop';
        }
        
        return $title = ucfirst($title);
        
    }
         
}
?> 
