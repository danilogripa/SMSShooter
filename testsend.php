<?php

require('/src/SMSShooter.php');

$sms = new SMSSHooter();

echo $sms->send();