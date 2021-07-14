<?php

header('Content-Type: application/json; charset: utf-8');
include('ApiResponse/apiresponse.php');
include('Auth/auth.php');

class ApiRest{
    
    public static function open($req, $httpMethod){
        
        try{
            $url = explode('/', $req);
            
            $classe = ucfirst($url[0]);
            array_shift($url);
            
            $metodo = $url[0];
            array_shift($url);

            if ($httpMethod == 'POST'){
                $parametros = json_decode(file_get_contents('php://input'), true);
            }else{
                $parametros = array();
                $parametros = $url; 
            }
        
            if (class_exists($classe)){
                if (method_exists($classe, $metodo)){
                    $retorno = call_user_func_array(array( new $classe, $metodo), [$parametros]);

                    return json_encode(array(new ApiResponse($retorno, [], false, true)));
                }else{
                    return json_encode(array(new ApiResponse([], ['Não foi possível acessar o recurso'], true, false)));     
                }

            }else{
                return json_encode(array(new ApiResponse([], ['Não foi possível acessar o recurso'], true, false))); 
            }
        
        }catch(Exception $ex){
            return json_encode(array(new ApiResponse([], [$ex->getMessage()], true, false)));
        }
    }
}

if (isset($_REQUEST)){
    echo ApiRest::open($_REQUEST['url'], $_SERVER['REQUEST_METHOD']);
}
