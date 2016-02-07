<?php
include "../../../privada/Curriculum/config.php";
require_once PRIVADA . "Session.php";

Session::destroy();
header("Location: index.php");