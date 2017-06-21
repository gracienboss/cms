<?php
require_once('../Library/RenderClass.php');
Class Page
{
    protected $title;
    protected $content;
    protected $render;
    protected $menu;
    
    


    public function __construct ($title, $content)
    {
        $this->render = Render::getInstance();
        $this->title = $title;
        $this->content = $content;
        $this->menu = file_get_contents('../Views/menu.php'); 
    }


    // methode qui renvoi tout vers la vue

    public function display()
    {
        $template = file_get_contents('../Views/template.php');
        echo $this->render->render($this->menu, $this->title, $this->content, $template);
        
    }
}
