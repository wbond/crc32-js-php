<?php
// The $string must encoded using UTF-8 and the
// call to sprintf() is required since crc32()
// returns an unsigned integer
echo sprintf('%u', crc32($string));