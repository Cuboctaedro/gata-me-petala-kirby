<?php
class ItemPage extends Page {

    public function cover() {

        if ($this->featuredimage()->exists() && $this->featuredimage()->isNotEmpty()) {

            return $this->featuredimage()->toFile();

        } elseif ($this->hasImages()) {

            return $this->images()->first();

        } else {

            return false;

        }

    }

}
