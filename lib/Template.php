<?php
class  Template{

    // contains path
    private $template;

    // contains all templates
    private $vars=array();

    // intialise object with its path
    public function __construct($template){
        $this->template=$template;
    }

    // set the properties of the template object
    public function __set($key,$value){
        $this->vars[$key]=$value;
    }

    // function to return the properties of the object
    public function __get($key){
        return $this->vars[$key];
    }

    // function to extract
    public function __toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        //buffer
        ob_start();
        include basename($this->template);

        return ob_get_clean();
    }
}
?>