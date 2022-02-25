<?php
session_start(['name' => 'curso']);
session_destroy();
echo '<script> window.location.href="'. SERVERURL .'" </script>';