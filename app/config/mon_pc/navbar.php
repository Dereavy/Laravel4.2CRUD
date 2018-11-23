
<?php
/**
 *  <title>
 *      {{ Config::get('navbar.title')}}
 *  </title>
 */
return array(
    'title' => 'malabar navbar',
    'liens' => [
        'Liens'=>'liens' , 
        'Home'=>url('/') , 
        'All Contacts'=>url('contact'),
        'Contact Us'=>url('contact/add')
    ],
    'color' => 'blue'
    );
?>
