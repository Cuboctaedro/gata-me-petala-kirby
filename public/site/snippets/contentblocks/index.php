<?php 
foreach ($page->contentblocks()->toStructure() as $section) {
    if ($section->_fieldset() == 'text') {    
        snippet('contentblocks/text', array('data'=> $section));
    }
    if ($section->_fieldset() == 'heading') {
        snippet('contentblocks/heading', array('data'=> $section));
    }
    if ($section->_fieldset() == 'subheading') {
        snippet('contentblocks/subheading', array('data'=> $section));
    }
    if ($section->_fieldset() == 'image') {
        snippet('contentblocks/image', array('data'=> $section));
    }
    if ($section->_fieldset() == 'largetext') {    
        snippet('contentblocks/largetext', array('data'=> $section));
    }
    if ($section->_fieldset() == 'video') {    
        snippet('contentblocks/video', array('data'=> $section));
    }
    if ($section->_fieldset() == 'infobox') {    
        snippet('contentblocks/infobox', array('data'=> $section));
    }
}
?>
