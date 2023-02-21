<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-08-21 19:50:36 --> Severity: Warning --> Error while sending QUERY packet. PID=74306 /home/hautec10/irex.pk/msps/main/database/drivers/mysqli/mysqli_driver.php 305
ERROR - 2019-08-21 19:50:36 --> Query error: MySQL server has gone away - Invalid query: UPDATE `school_sessions` SET `timestamp` = 1566399036
WHERE `id` = '0b5af97dccaa9050d951a051939c8991602d65b9'
ERROR - 2019-08-21 19:50:36 --> Severity: Warning --> Unknown: Failed to write session data (user). Please verify that the current setting of session.save_path is correct (school_sessions) Unknown 0
ERROR - 2019-08-21 19:50:36 --> Query error: MySQL server has gone away - Invalid query: SELECT RELEASE_LOCK('b1f056de997a9044471353775e7b1399') AS ci_session_lock
ERROR - 2019-08-21 21:07:18 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'hautec10_msps'@'localhost' (using password: YES) C:\xampp\htdocs\msps\main\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2019-08-21 21:07:18 --> Unable to connect to the database
