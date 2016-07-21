<?php
             
            include("libs/Smarty.class.php");
            define('APP_PATH',dirname(__FILE__));
            $tpl = new Smarty();
            $tpl->template_dir = APP_PATH . "/templates/";
            $tpl->compile_dir = APP_PATH . "/templates_c/";
            $tpl->config_dir = APP_PATH . "/configs/";
            $tpl->cache_dir = APP_PATH . "/cache/";
            $tpl->assign("title","雅登精品名店-進銷存管理系統");
           
          session_start();
          
           