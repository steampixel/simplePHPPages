<?PHP

namespace Steampixel;

// Lets create and print a default page layout
Component::create('layout/boxed')->assign([
  'title' => 'Imprint',
  'subtitle' => 'Lorem Ipsum Dolor',
  'lang' => 'en'
])->print();

// Send contents to the main contents portal
Portal::send('contents-main', [

  // Add text component
  Component::create('content/text')
    ->assign([
      'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
    ])

]);
