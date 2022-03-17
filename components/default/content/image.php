<?PHP

  // Get the component props
  $src = $this->prop('src', [
    'type' => 'string',
    'required' => true
  ]);

  $title = $this->prop('title',[
    'type' => 'string',
    'required' => false
  ]);

?>

<section class="section">

  <div class="container">

    <img src="<?=$src ?>" />

    <?PHP if($title) { ?>
      <div>
        <sub><?=$title ?></sub>
      </div>
    <?PHP } ?>

  </div>

</section>
