<?PHP

namespace Steampixel;

// Get the component props
$id = $this->prop('id', [
  'type' => 'string',
  'required' => true
]);

// Lets create and print a default page layout
Component::create('layout/boxed')->assign([
  'title' => 'User admin section',
  'subtitle' => 'Edit user with id '.$id,
  'lang' => 'en'
])->print();

// Send contents to the main contents portal
Portal::send('contents-main', [

  // Add text component
  Component::create('content/text')
    ->assign([
      'header' => 'Edit user with id '.$id,
      'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
    ])

]);
