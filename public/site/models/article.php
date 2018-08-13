<?php


class ArticlePage extends Page {


    public function format_date() {

        if ($this->site()->language()->locale() == 'en_US') { 

            return $this->date('l, F j, Y');

        } else {

            return l::get($this->date('l')) . ', ' . $this->date('j') . ' ' . l::get($this->date('F')) . ', ' . $this->date('Y');

        }

    }


}


