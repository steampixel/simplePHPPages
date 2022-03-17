<?PHP

namespace Steampixel;

// Lets create and print a default page layout
Component::create('layout/sidebar')->assign([
  'title' => 'Contact',
  'subtitle' => 'Just contact us ...',
  'lang' => 'en'
])->print();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Load the "thanks" component and push the form data to it
  Portal::send('contents-main',
    Component::create('content/contact-thanks')
    ->assign(['data' => $_POST])
  );

} else {

  // Load the contact form and send it to the main content section
  Portal::send('contents-main',
    Component::create('content/contact')
  );

}

// Always send a text to the sidebar
Portal::send('sidebar',
  Component::create('content/text')
  ->assign(['text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. '])
);
