<?php

// This is class Make for notfound action  and show views for all classes controllers
// This is class Make TO prevent Repetition of Code in  all class controllers
// we need this code in all classes controllers

namespace PHPMVC\controllers;

use const PHPMVC\lib\NOT_FOUND_ACTION;
use const PHPMVC\lib\NOT_FOUND_CONTROL;

class Abstract_
{


    public $_control;
    public $_action;
    public $_params;
    public $_data = array();

  public function set($C ,$A ,$P )
  {
      $this->_control = $C;
      $this->_action = $A;
      $this->_params = $P;

  }

    public function notfound()
    {
        $this->_view();
    }

    protected function _view()
    {
        if($this->_action == NOT_FOUND_ACTION)
        {
            require VIEW_PATH . DS .  'notfound' . DS . 'notfound.php';   // not found action == not found function in class control
        }
        elseif ($this->_control == "site" && $this->_action == "main")
        {
            require VIEW_PATH . DS .  'site' . DS . 'main.php';
        }
        else
        {
          if(isset($this->_params[0]) )
          {
              if($this->_params[0] != "")
                  $View = VIEW_PATH . DS . $this->_control . DS . $this->_action .$this->_params[0] .'.php';
          }
          else
          {
              $View = VIEW_PATH . DS . $this->_control . DS . $this->_action .'.php';// we can use it for all  several actions and require several views.
          }


            //echo $View;
            if(file_exists($View))
            {
                //extract($this->_data);
               require TEMPLATE_PATH . DS ."templateheadstart.php";
               require TEMPLATE_PATH . DS ."templateheadend.php";
               require TEMPLATE_PATH . DS ."templatenav.php";
               require TEMPLATE_PATH . DS ."templateheader.php";
               require TEMPLATE_PATH . DS ."templatenavII.php";
               require TEMPLATE_PATH . DS . "templatebodystart.php";
               require $View;
               require TEMPLATE_PATH . DS . "templatebodyend.php";
               require TEMPLATE_PATH . DS . "templatefooter.php";


            }
            else
            {
                require VIEW_PATH . DS .  'notfound ' . DS . 'noview.php';
            }

        }

    }

}

