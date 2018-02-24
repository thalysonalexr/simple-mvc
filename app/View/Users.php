<?php

header("Content-type: text/plain");

echo json_encode( $_REQUEST["users"] , JSON_PRETTY_PRINT );
