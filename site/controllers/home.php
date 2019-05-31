<?php

return function($page, $pages, $site) {

    $projectlist = $site->find('work')->children()->listed()->limit(18);


    return compact('projectlist');

};
