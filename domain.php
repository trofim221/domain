<?php

class subDomain
{
    public function extractDomain($domain)
    {
        if(preg_match("/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,7})$/i", $domain, $matches))
        {
            return $matches['domain'];
        } else {
            return $domain;
        }
    }

    public function extractSubDomains($domain)
    {
        $sub_domains = $domain;
        $domain = $this->extractDomain($sub_domains);

        $sub_domains = rtrim(strstr($sub_domains, $domain, true), '.');

        if($sub_domains == true) {
            return true;
        } else {
            return false;
        }
    }
}


$domainArray = array(
    'antonov.kiev.ua',
    'sub1.antonov.kiev.ua',
    'sub1.antonov.kiev.ua',
    'sub1.sub2.antonov.kiev.ua',
    'sub1.sub2.sub3.antonov.kiev.ua'
);

$extract_domain = new subDomain();

foreach($domainArray as $k => $v)
{
    echo $k." => ".$extract_domain->extractSubDomains($v)."<br>";
}


