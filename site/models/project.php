<?php


class ProjectPage extends Page {

    public function tagslugs() {

        $list = [];

        foreach ($this->tags()->split(',') as $tagname) {
            $list[] = Str::kebab($tagname);
        }

        return implode(",",$list);

    }

}
