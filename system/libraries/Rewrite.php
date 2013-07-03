<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Rewrite
    {
        private $URL = '';

        function __construct() {
            $this->link = $this->curPageURL();
            $this->link = str_replace('http://localhost/admin/',"",$this->link);
            ini_set('display_errors',1);
        }

      public function curPageURL() {
            $pageURL = 'http';


            //if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
                // $pageURL .= "://";
            if ($_SERVER["SERVER_PORT"] != "80") {
                $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
            } else {
                $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
            }
            return $pageURL;
        }





        function clearURL($url) {

            $url = trim($url);
            $url = trim($url,",");
            $url = trim($url,"-");

            $url = Security::secured_toReal($url);

            $url = str_replace(",","-",$url);
            $url = str_replace(".","-",$url);
            $url = str_replace(" ","-",$url);
            $url = str_replace("+","-",$url);
            $url = str_replace("(","-",$url);
            $url = str_replace(")","-",$url);
            $url = str_replace("_","-",$url);
            $url = str_replace("?","-",$url);
            $url = str_replace("ç","c",$url);
            $url = str_replace("Ç","c",$url);
            $url = str_replace("ı","i",$url);
            $url = str_replace("ş","s",$url);
            $url = str_replace("ö","o",$url);
            $url = str_replace("ü","u",$url);
            $url = str_replace("ğ","g",$url);
            $url = str_replace("Ğ","g",$url);
            $url = str_replace("Ş","s",$url);
            $url = str_replace("Ç","c",$url);
            $url = str_replace("İ","i",$url);
            $url = str_replace("Ü","u",$url);
            $url = str_replace("Ö","o",$url);
            $url = str_replace("'","-",$url);
            $url = str_replace('"',"-",$url);
            $url = str_replace('’',"-",$url);
            $url = str_replace('`',"-",$url);
            $url = str_replace('“',"-",$url);

            $url = trim($url,"-");

            return strtolower($url);
        }

        public function setURL() {

            $link1 = explode("/",$this->link);

            if(is_array($link1)) {
                $_GET['segment1']=$link1[0];
                $_GET['segment2']=$link1[1];
                $_GET['segment3']=$link1[2];
                $_GET['segment4']=$link1[3];
                $_GET['segment5']=$link1[4];
            }
            else {
                $_GET['segment1'] = $this->link;
            }
            return true;

        }


        function header(){

        }



    }



?>