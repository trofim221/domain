<?php

class Domain
{
    function verifySubDomain($url)
    {
        $verify_domain = (substr_count($url, '.'));

        if ($verify_domain < 2) {
            return false;
        } elseif ($verify_domain >= 3) {
            return true;
        } elseif ($verify_domain >= 2 && !empty(preg_match('/com.\w{2}/', $url))) {
            return false;
        } else {
            return true;
        }
    }
}

$verify_domain = new Domain();

echo $verify_domain->verifySubDomain('example.com');
echo '<br>';
echo $verify_domain->verifySubDomain('sub.example.com');
echo '<br>';
echo $verify_domain->verifySubDomain('sub.example.com.ua');