<?PHP

namespace Steampixel;

// Lets create and print a default page layout
Component::create('layouts/default/index')->assign([
  'title' => '404',
  'subtitle' => 'Page not found',
  'lang' => 'en'
])->print();
