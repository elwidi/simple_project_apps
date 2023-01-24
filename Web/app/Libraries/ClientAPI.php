<?php
namespace App\Libraries;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientAPI
 *
 * @author user
 */
class ClientAPI {
    private $ssoId;
    private $userId;
    private $userName;
    private $appUrl;
    const API_URL_SERVER="http://application.moratelindo.co.id/index.php/Task/Bgprocess/verifyApplication/";
    const CLIENT_URL="http://engineering.apps.moratelindo.co.id/";
    const APP_URL="http://application.moratelindo.co.id/?pageSource=http://presales.apps.moratelindo.co.id/";
    const SSOID='SSOID';
    
    function __construct(){
        
    }
    
    function setSsoID($ssoId){
        $this->ssoId = $ssoId;
    }
    
    function getSsoID(){
        return $this->ssoId;
    }
    
    function getUserId(){
        return $this->userId;
        
    }
    
    function setUserId($userId){
        $this->userId = $userId;
    }
    
    
    function getUserName(){
        return $this->userName;
        
    }
    
    function setUserName($userName){
        $this->userName = $userName;
    }
    
    function setAppURL($appUrl){
        $this->appUrl  = $appUrl;
    }
    
    function getAppURL(){
        return $this->appUrl;
    }
    
    function retrieveData(){
        if(array_key_exists(self::SSOID, $_COOKIE))
        {
            
            if($_COOKIE[self::SSOID]!=null)
            {
               return $_COOKIE['SSOID']; 
                
            }
            else
            {
                header("location:".self::APP_URL.'');
            }
        }
	else
	{

                header("location:".self::APP_URL.'');
	}
    }
    
    
    function doCurl()
    {
			$ch = curl_init();
            $cookie=		$this->retrieveData();
            #var_dump( $cookie);
            #                  $url = 'MTcrbXVyYQ==/?page=http://freeradius.moratelindo.co.id';
            $url = $cookie.'/?page='.self::CLIENT_URL;

            #echo $url; //exit;

			curl_setopt($ch, CURLOPT_URL, self::API_URL_SERVER.$url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			
			curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
                        $output = curl_exec($ch);

			curl_close($ch);
            #var_dump($output);
			$result = json_decode($output);
                   #print_r($result);
            #exit;
                        if($result){


                            $arr = (array) $result;
                            if($arr){
                                if($arr['ISALLOWABLE']==1){
                                    // redirect to your app
                                    #echo "true";
#                                    header("location:http://freeradius.moratelindo.co.id");
                                }
                                else
                                   header("location:http://application.moratelindo.co.id/index.php/Task/Bgprocess/denyAccess");
					//header('location:'.self::APP_URL);
                            }
                        }
   }
}


?>
