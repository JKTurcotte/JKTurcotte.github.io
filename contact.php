<?php

mail("justin@kturcotte.me", $_POST['subject'], $_POST['message']. "From: ". $_POST['firstName']. " ". $_POST['lastName']. ",". $_POST['email']);

readfile('index.html');
?>