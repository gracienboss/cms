<?php

class Render  // environnement graphique
{
    // singleton

    private static $_instance = null;
    private function __construct(){

    }
    public static function getInstance()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new Render();
        }
        return self::$_instance;
       
    }

        /*
        * Render
        * Input  $menu contain the html
        * Input  $title contain the title iniated inside the controller
        * Input  $template contain the template
        * output : return the complete HTML page to display on the view
        */


    public function render($menu, $title, $content, $template)
    {
       $finalHtml = "";
       $finalHtml = $this->renderMenu($menu, $template);             // methode global, elle rassemble les 3 methodes en dessous
       $finalHtml = $this->renderTitle($title, $finalHtml);
       $finalHtml = $this->renderContent($content, $finalHtml);
       return $finalHtml;     
    }

    public function renderMenu($menu, $template)
    {
        return str_replace('%%MENU%%', $menu, $template);        
    }

            // remplace le titre

    public function renderTitle($title, $template)
    {
        return str_replace('%%TITLE%%', $title, $template);
    }

            // remplace le content

    public function renderContent($content, $template)
    {
        return str_replace('%%CONTENT%%', $content, $template);
        
    }
    
}