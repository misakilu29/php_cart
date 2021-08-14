<?php
session_start();

//header('content-type: application/json');

echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);