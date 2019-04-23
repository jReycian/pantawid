<?php
// --- New PASSWORD of mySQL equivalent
    function encrypt($string) {
        return substr('*'.strtoupper(sha1(pack('H*',sha1($string)))), 0, 20);
    }