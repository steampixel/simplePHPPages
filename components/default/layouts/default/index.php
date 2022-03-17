<?PHP

  namespace Steampixel;

  // Get the component props
  $lang = $this->prop('lang', [
    'type' => 'string',
    'required' => true
  ]);

  $title = $this->prop('title', [
    'type' => 'string',
    'required' => true
  ]);

  $subtitle = $this->prop('subtitle', [
    'type' => 'string',
    'required' => false
  ]);

?><!DOCTYPE html>
<html lang="<?=$lang ?>">

  <?=Component::create('layouts/default/head')->assign(['title' => $title]) ?>

  <?=Component::create('layouts/default/body')->assign(['title' => $title, 'subtitle' => $subtitle]) ?>

</html>
