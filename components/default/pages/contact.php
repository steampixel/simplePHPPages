<?PHP

namespace Steampixel;

// Lets create and print a default page layout
Component::create('layouts/default/index')->assign([
  'title' => 'Contact',
  'subtitle' => 'Just contact us ...',
  'lang' => 'en'
])->print();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Load the "thanks" component and push the form data to it
  $contact_thanks = Component::create('content/contact-thanks');
  $contact_thanks->assign(['data' => $_POST]);
  Portal::send('contents-main', $contact_thanks);

} else {
  // Load the contact form and send it to the main content section
  $contact_form = Component::create('content/contact');
  Portal::send('contents-main', $contact_form);
}
