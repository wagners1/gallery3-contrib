<?php defined("SYSPATH") or die("No direct script access.") ?>
<div id="g-add-to-basket">
<div id="basketThumb">
 <img src="<?= $item->thumb_url()?>" title="<?= $item->title?>" alt="<?= $item->title?>" />
</div>
<b>Kies het afdrukformaat en aantal afdrukken</b>
<div id="basketForm">
<? /*<b>Kies het gewenste fotoformaat en het aantal foto's</b> */ ?>
  <?= $form ?>
</div>
</div>