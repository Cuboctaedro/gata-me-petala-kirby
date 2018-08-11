<?php

    class ArticlePage extends Page {

        public function summary() {

            return $this->text()->excerpt(30, 'words');

        }

    }
