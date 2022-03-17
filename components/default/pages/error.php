<?PHP

namespace Steampixel;

// Lets create and print a default page layout
Component::create('layouts/default/index')->assign([
  'title' => 'Error!',
  'subtitle' => 'Sorry :-( An error occured.',
  'lang' => 'en'
])->print();
