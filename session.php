<?php

// error_reporting(0);

// **PREVENTING SESSION FIXATION**
// Session ID cannot be passed through URLs
// ini_set('session.use_only_cookies', 1);

// Uses a secure connection (HTTPS) if possible
//  ini_set('session.cookie_secure', 1);

// **PREVENTING SESSION HIJACKING**
// Prevents javascript XSS attacks aimed to steal the session ID
// ini_set('session.cookie_httponly', 1);

session_set_cookie_params(0, '/', 'localhost', false, true);
// session_set_cookie_params(0, '/', 'kwick.co.in', true, true);

session_start();

?>