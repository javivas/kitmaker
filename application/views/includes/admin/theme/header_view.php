<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CMS para m&oacute;biles</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/front/js/jqueryconfig.js"></script>
    </head>
    <body>
        <div id="wrapper" data-role="page" data-title="Título de la página" data-theme="a">
            <div data-role="header" data-position="fixed">

                <div id="mobiledetection">
                    <?php
                    require_once APPPATH . 'libraries/WurflCloudClient/Client/Client.php';

                    // Create a configuration object 
                    $config = new WurflCloud_Client_Config();

                    // Set your WURFL Cloud API Key 
                    $config->api_key = '577686:UjnfmJVrCd8xw7DbucqY0ZaHSN63kAXM';

                    // Create the WURFL Cloud Client 
                    $client = new WurflCloud_Client_Client($config);

                    // Detect your device 
                    $client->detectDevice();

                    try {
                        // Check if the device is mobile
                        if ($client->getDeviceCapability('brand_name') == 'generic web browser') {
                            echo "This is a desktop web browser";
                        } else {
                            echo "This is a mobile device<br>";
                            echo('<span>Brand:</span>');
                            echo '<span>' . $client->getDeviceCapability('brand_name') . '<span>';
                            echo('<span>Modelo:</span>');
                            echo '<span>' . $client->getDeviceCapability('model_name') . '<span>';
                        }
                    } catch (Exception $e) {
                        echo 'Error: ' . $e->getMessage();
                    }
                    ?>
                </div>
            </div>