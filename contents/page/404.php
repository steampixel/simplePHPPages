<?PHP

namespace Steampixel;

// Lets create and print a default page layout
Component::create('layout/boxed')->assign([
  'title' => '404',
  'subtitle' => 'Page not found',
  'lang' => 'en'
])->print();
