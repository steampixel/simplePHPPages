<?PHP

namespace Steampixel;

// Lets create and print a default page layout
Component::create('layouts/default/index')->assign([
  'title' => 'About',
  'subtitle' => 'Learn more about us',
  'lang' => 'en'
])->print();

// Send contents to the main contents portal
// The portal is located somewhere inside of the layouts subcomponent
Portal::send('contents-main', [

  // Add text component
  Component::create('content/text')
    ->assign([
      'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
    ])

]);
