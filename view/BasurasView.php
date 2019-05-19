<?php
require_once('libs/Smarty.class.php');

class BasuraView
{

    private  $smarty;

    function __construct()
    {
      $this->smarty = new Smarty();
    }
    
    function PublicView()
    {
    }

    function ViewBase()
    {
    }

}


?>
