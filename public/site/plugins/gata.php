<?php

$kirby->set('page::method', 'summary', function($page) { return $page->text()->excerpt(100); });
