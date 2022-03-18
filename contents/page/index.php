<?PHP

namespace Steampixel;

// Lets create and print a default page layout
Component::create('layout/boxed')->assign([
  'title' => 'Startpage',
  'subtitle' => 'Lorem Ipsum',
  'lang' => 'en',
  'hero_size' => 'medium'
])->print();

// Send contents to the main contents portal
Portal::send('contents-main', [

  // Add text component
  Component::create('content/text')
    ->assign([
      'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
    ]),

  // Add image component
  Component::create('content/image')
    ->assign([
      'src' => 'https://cdn.pixabay.com/photo/2020/06/05/16/18/meadow-5263664_960_720.jpg',
      'title' => 'Image by: https://pixabay.com/de/photos/wiese-gras-baum-landschaft-sommer-5263664/'
    ]),

  // Add a text component
  Component::create('content/text')
    ->assign([
      'header' => 'Lorem ipsum dolor sit amet',
      'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'
    ])

]);
