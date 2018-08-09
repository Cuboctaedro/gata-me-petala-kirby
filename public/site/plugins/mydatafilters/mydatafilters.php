<?php

class MyDataFilters {

    static function getCollections($data) {
        $data = $data->filterBy('intendedTemplate', 'collection');
        return $data;
    }
}
