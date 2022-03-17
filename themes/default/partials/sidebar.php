<?PHP

  namespace Steampixel;

  $title = $this->prop('title', [
    'type' => 'string',
    'required' => true
  ]);

?>
  <h2 class="subtitle"><?=$title ?></h2>
<?php

  Portal::open('sidebar');

?>
