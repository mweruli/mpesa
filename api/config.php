<?php
    date_default_timezone_set("Africa/Nairobi");
    
    define('CONSUMER_KEY', 'nEEsiRMAupE8lMD3l3MGnwp0T1qR7FVR');
    define('CONSUMER_SECRET', '8983F6AlM1FYwg9G');

    $env = 0;
    $ssl = true;

    $ShortCode = '174379';
    $BusinessShortCode = '174379';
    $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
    
    if ($env == 1) {
        define('STATE', 'api');
    } else {
        define('STATE', 'sandbox');
    }

    $base_sec = $ssl === true ? 'https://' : 'http://';
  
    $Timestamp = date('YmdHis');
    $Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);

    /* lnmo api urls */
    define('LNMO_CALLBACK_URL', 'https://hazinisha.com/lnmo.php?oid=');
