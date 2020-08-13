function curlPost($trackNo){
    $url = 'http://v5-api.17track.net:8044/handlertrack.ashx?fc=0&sc=0&nums='.$trackNo;
    $header = array('17token:66666666EB1546666666669E66666666');
    $data = '';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
    $result = curl_exec ($ch);
    curl_close($ch);
    if ($result == NULL) {
        return false;
    }
    return $result;
}
