<?PHP

  $data = $this->prop('data',[
    'type' => 'array',
    'required' => true
  ]);
?>

Got some data:
<pre>
<?=print_r($data, true) ?>
</pre>
