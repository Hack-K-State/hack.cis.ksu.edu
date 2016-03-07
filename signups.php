<?php

file_put_contents("signups.txt", json_encode($_POST) . "\n", FILE_APPEND);
