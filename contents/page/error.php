<?PHP

namespace Steampixel;

// Lets create and print a default page layout
Component::create('layout/boxed')->assign([
  'title' => 'Error!',
  'subtitle' => 'Sorry :-( An error occured.',
  'lang' => 'en'
])->print();
