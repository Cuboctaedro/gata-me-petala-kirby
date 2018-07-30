<div class=" videobox">
<?php 
if ($data->source() == 'vimeo') {
    echo kirbytag(array( 'vimeo'  => $data->videolink()));
} else {
    echo kirbytag(array( 'youtube'  => $data->videolink()));
}
?>
</div>
