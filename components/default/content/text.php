<?PHP

  // Get the component props
  $header = $this->prop('header', [
    'type' => 'string',
    'required' => false
  ]);

  $text = $this->prop('text', [
    'type' => 'string',
    'required' => true
  ]);

?>

<section class="section">

	<div class="container">

		<?PHP if($header) { ?>
			<h2 class="title"><?=$header ?></h2>
		<?PHP } ?>

		<p><?=nl2br($text) ?></p>

	</div>

</section>
