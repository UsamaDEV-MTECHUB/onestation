<?php
require "vendor/autoload.php";
$gateway = new Braintree\Gateway([
    'environment' => 'sandbox',
    'merchantId' => 'p9yg7p2rz23prbvv',
    'publicKey' => '26nm7jnc97bwtqyr',
    'privateKey' => '76754579336b1108d38b9aab51361a2f'
    
  ]);
?>