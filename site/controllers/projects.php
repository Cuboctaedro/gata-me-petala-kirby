<?php

return function($page, $tag) {

      // fetch the basic set of pages
    $projectlist = $page->children()->listed();


    // add the tag filter


    if ($tag) {
        $projectlist = $projectlist->filterBy('tagslugs', $tag, ',');
    }


  // fetch all tags
  $tags = $projectlist->pluck('tags', ',', true);


  return compact('projectlist', 'tags', 'tag');

};
