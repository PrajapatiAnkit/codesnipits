<?php

    //$url = "http://localhost/projects/codesnipits/curl/script.php";
    $url = "https://sknessentials.com/ajax/ajax_enquiry.php";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, true);

    $data = array(
        'q' => 'saveCallMeBack',
        'name' => 'nmsdvvjvmxvnsk',
        'phone' => '4574545436636463',
        'timing' => '12:00AM'
    );

    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $output = curl_exec($ch);
    $info = curl_getinfo($ch);
    print_r( $output );
    curl_close($ch);
