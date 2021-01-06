<?php
$matches = [];
$ornateReadMe = file_get_contents('/var/www/html/ornate/README.md');

if(!empty($ornateReadMe)){
    preg_match_all('/###\s\[(.*?)]/', $ornateReadMe, $matches);
}

foreach ($matches[1] as $match){
    echo `/home/rrivera/.config/composer/vendor/bin/neoan3 new component {$match} -t:route -v:y -f:ornate`;
}
