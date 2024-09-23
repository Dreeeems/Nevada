<?php
namespace Nevada\include\traits;

trait Singleton{
    public function __construct(){

    }

    public function __clone(){}

    final public static function get_instance(){
        static $instace = [];
        $called_class= get_called_class();
        if(!isset($instace[  $called_class])){
            $instace[$called_class] = new $called_class();
            do_action( sprintf('nevada_theme_singleton_init%s', $called_class));
            return $instance[$called_class];
        }
    }
}

?>