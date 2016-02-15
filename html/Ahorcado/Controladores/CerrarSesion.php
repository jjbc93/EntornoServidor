<?php
include "../../../privada/Ahorcado/Config/config.php";
require_once PRIVADA . "Session.php";

Session::destroy();
header("Location: index.php");