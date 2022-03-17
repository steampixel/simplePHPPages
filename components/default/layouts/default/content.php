<?PHP

  namespace Steampixel;

  $title = $this->prop('title', [
    'type' => 'string',
    'required' => true
  ]);

  $subtitle = $this->prop('subtitle', [
    'type' => 'string',
    'required' => false
  ]);

  // Add a hero component
  Component::create('content/hero')
  ->assign(['title' => $title, 'subtitle' => $subtitle])
  ->print();

  Portal::open('contents-main');

?>
