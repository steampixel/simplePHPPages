<?PHP

  namespace Steampixel;

  // Get the component props
  $title = $this->prop('title', [
    'type' => 'string',
    'required' => true
  ]);

?>

<head>

  <?=Component::create('layouts/default/title')->assign(['title'=>$title])->render() ?>

  <?=Component::create('layouts/default/meta')->render() ?>

  <?=Component::create('layouts/default/style')->render() ?>

</head>
