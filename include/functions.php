<?php
class curl {
    //funcion que retorna la consulta del stock available mediante la API en C#

    function stockAvailable(){
     $curl = curl_init();
     curl_setopt($curl, CURLOPT_URL,  'http://www.stockavailableapi.somee.com/api/Product/GetStockAvailable');
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
     curl_setopt($curl, CURLOPT_HTTPGET,true);
     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($curl, CURLOPT_HEADER, 0);
     $data = curl_exec($curl); /** Ejecutamos petición*/
     $d = json_decode($data, true);
     curl_close($curl);
     return $d;
    }

    function productDetails($id){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,  'http://www.stockavailableapi.somee.com/api/Product/productDetails/'. $id);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($curl, CURLOPT_HTTPGET,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        $data = curl_exec($curl); 
        $d = json_decode($data, true);
        curl_close($curl);
        return $d;
    }

}
     


?>