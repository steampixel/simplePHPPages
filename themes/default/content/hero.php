<?PHP

  // Get the component props
  $title = $this->prop('title', [
    'type' => 'string',
    'required' => true
  ]);

  $subtitle = $this->prop('subtitle',[
    'type' => 'string',
    'required' => false
  ]);

  $size = $this->prop('size',[
    'type' => 'string',
    'required' => false,
    'default' => 'small'
  ]);

?>

<section class="hero is-<?=$size ?> is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        <?=$title ?>
      </h1>
      <?PHP if($subtitle) { ?>
        <h2 class="subtitle">
          <?=$subtitle ?>
        </h2>
      <?PHP } ?>
    </div>
  </div>
</section>
