<?php

class Domain {
    public function verifySubDomain($domain)
    {
        if (count(explode('.', $domain)) > 2) {
            return true;
        } else {
            return false;
        }
    }
}

$verify_domain = new Domain();
echo $verify_domain->verifySubDomain('example.com');

