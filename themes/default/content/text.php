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

	<div class="mb-6">

		<?PHP if($header) { ?>
			<h2 class="title"><?=$header ?></h2>
		<?PHP } ?>

		<p><?=nl2br($text) ?></p>

	</div>
