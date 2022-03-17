<?PHP

  namespace Steampixel;

  // Get some props
  $title = $this->prop('title', [
    'type' => 'string',
    'required' => true
  ]);

  $subtitle = $this->prop('subtitle', [
    'type' => 'string',
    'required' => false
  ]);

?>

<body>

  <?=Component::create('layouts/default/navigation') ?>

  <?=Component::create('layouts/default/content')->assign(['title' => $title, 'subtitle' => $subtitle]) ?>

  <?=Component::create('layouts/default/footer') ?>

  <?=Component::create('layouts/default/javascript') ?>

</body>
