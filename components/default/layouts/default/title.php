<?PHP

  // Get the component props
  $title = $this->prop('title', [
    'type' => 'string',
    'required' => true
  ]);

?>

<title><?=$title ?></title>
