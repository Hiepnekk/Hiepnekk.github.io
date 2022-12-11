<?php

        if(isset($_POST['napthe'])){
        $type = strtoupper($_POST['loaithe']); // type=viettel, vinaphone, mobifone
        $code = $_POST['mathe'];
        $serial = $_POST['seri'];
        $amount = $_POST['menhgia']; // Mệnh giá
        $request_id = rand(100009, 999999);
        if( !$type || !$code || !$serial){
        echo '<div class="thongbaoloi">⛔️ Vui lòng nhập đầy đủ thông tin.</div>';
        }else{

   $partner_id = '29954359839';
   $partner_key = '5dff677e0aaead9e9950a59e29655daf';
    $url = "https://trumnapthe.vn/chargingws/v2";
    $command = 'charging';
    $sign = md5($partner_key.$code.$serial);

        $data_post = array();
        $data_post['partner_id'] = $partner_id;
        $data_post['telco'] = $type;
        $data_post['code'] = $code;
        $data_post['serial'] = $serial;
        $data_post['amount'] = $amount;
        $data_post['request_id'] = $request_id;
        $data_post['sign'] = $sign;
        $data_post['command'] = $command;
        
    $data = http_build_query($data_post);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    curl_setopt($ch, CURLOPT_REFERER, $actual_link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $obj = json_decode($result, true);

        if($obj['status'] == '1') {
        //Nạp thẻ thành công
        // if(db_execute('insert into the (serial,pin,menhgia,trangthai,request_id) values ('.$serial.','.$pin.','.$amount.',0,'.$request_id.')')){
        echo '<div class="thongbaoloi">⛔️ Nạp thẻ không thành công. Mã số thẻ cào không chính xác hoặc đã được sử dụng.</div>';
        }else{
        echo '<div class="thongbaoloi">⛔️ Nạp thẻ không thành công. Mã số thẻ cào không chính xác hoặc đã được sử dụng.</div>';
        echo $obj['status'];
        }
        }
        }
    ?>