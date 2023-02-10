<?php 
session_start();
session_destroy();
echo 'Your session was destroyed';