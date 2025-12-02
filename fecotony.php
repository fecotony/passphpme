<?php
header('Access-Control-Allow-Credentials: true');

// Allowed methods and headers for preflight
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

header('Content-Type: application/json');
echo '{ "token": "8374623882:AAEBZA2ktEV-uZOMD8hUUzVkYm2gpp2Li6U"",
  "chatID": "886465809"}';



