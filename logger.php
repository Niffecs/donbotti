<?
 
/**
 * Logger
 */
function logger($team){
   create_logger_file();
   $datei = fopen("v2/log.txt", "a+");
   $ip = $_SERVER["REMOTE_ADDR"];  
   $host = gethostbyaddr($ip);
   $datum = date("d.m.Y",time());
   $uhrzeit = date("H:i",time());
   $token = $_GET['token'];

   

   if($token == ""){
      $token = "Invalid Token";
      $team = "Invalid Team";
      };


   $data = $ip.";".$host.";".$datum.";".$uhrzeit.";".$token.";".strval($team)."\n";
   fwrite($datei, $data);
   fclose($datei);
}


/**
 *  create logger file
 */ 
function create_logger_file(){
    if (!file_exists('v2/log.txt')) {   
      // touch('log.txt');
      $datei = fopen("v2/log.txt", "a+");
      $data =  "IP; Host; Date; Time; Token; Team \n"   ;
      fwrite($datei, $data);
      fclose($datei);
        }
}
