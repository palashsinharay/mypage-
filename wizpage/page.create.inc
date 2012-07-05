<?php
// Implementation of page callback function from hook_menu
function create_page(){
     global $user;
    
    $username = $user -> name;
    
    //$output = drupal_get_form('createpage_form');
    $welcomeText = "hi $username </br>Welcome to cypages - the simple business directory</br>Use this wizard to create content for your site easily</br></br>You can use the navigation bar at the top to move between steps<br></br>Once you are done,your site will be ready";
    $fr = drupal_get_form('createpage_form');
    $output = $welcomeText."</br>". $fr;
      return $output;
      
}
// Implementation of hook_form

function createpage_form(&$form_state){

	
        $form['submit'] = array(
	'#type' => 'submit',
	'#value' => t('NEXT'),
	'#attributes' => array('class' => 'bg_small')
	);

    //$form['#theme'] = 'attendance_form';

    return $form;
}

// Implementation of hook_form_submit
function createpage_form_submit($form, &$form_state){

    drupal_goto('/wizpage/next');
   
}
// Implementation of page callback function from hook_menu
function create_page_next(){

	$fr = drupal_get_form('createpage_form_next');
    $output = $welcomeText."</br>". $fr;
      return $output;
       
}

function create_page_next2(){
    
    $fr = drupal_get_form('createpage_form_next2');
    $output = $welcomeText."</br>". $fr;
      return $output;
}

function create_page_next3(){
    
    $fr = drupal_get_form('createpage_form_next3');
    $output = $welcomeText."</br>". $fr;
      return $output;
}

// Implementation of hook_form
function createpage_form_next(&$form_state){

    
    
   $query = "SELECT *  FROM {node} WHERE title ='Home page'";
   $res = db_fetch_array(db_query($query));
   
   $node_id = $res['nid'];
   
   //echo $node_id;
   $node = node_load($node_id);
   /*echo "<pre>";
  
   print_r($node);
   echo "</pre>"; */
  // node_save($node);
    
    
    
    
    
    
    if($node->body){
     
      $form = array('#attributes' => array('enctype' => 'multipart/form-data'));  
    $form['title'] = array(
    '#type' => 'textfield', 
    '#title' => 'Page Name', 
    '#required' => TRUE, 
    '#default_value' => 'About us',
    '#description' => t('Give A name to Homepage. This is the name that will appear on the menu bar. Good Example are "About us","About the company"')
  ); 
    
    $form['body'] = array(
    '#type' => 'textarea', 
    '#title' => 'Page Content', 
    '#required' => TRUE, 
    '#default_value' => $node->body,
    '#description' => t('Describe your business here. Use The tools to format your content as you please. You can even upload images to make your content look nice!')
  ); 
    
   
    $form['file'] = array(
        '#type' => 'file',
        '#title' => t('Upload LOGO'),
        '#size' => 48,
        '#description' => t('Pick a jpg file to upload.'),
    );

    
    
    $form['submit'] = array(
	'#type' => 'submit',
	'#value' => t('Update'),
	'#attributes' => array('class' => 'bg_small')
	);

    } else {
    
    //echo "hit2";
    //die(1);
    $form['title'] = array(
    '#type' => 'textfield', 
    '#title' => 'Page Name', 
    '#required' => TRUE, 
    '#default_value' => 'About us',
    '#description' => t('Give A name to Homepage. This is the name that will appear on the menu bar. Good Example are "About us","About the company"')
  ); 
    
    $form['body'] = array(
    '#type' => 'textarea', 
    '#title' => 'Page Content', 
    '#required' => TRUE, 
    '#default_value' => '',
    '#description' => t('Describe your business here. Use The tools to format your content as you please. You can even upload images to make your content look nice!')
  ); 
    
    $form['file'] = array(
        '#type' => 'file',
        '#title' => t('Upload LOGO'),
        '#size' => 48,
        '#description' => t('Pick a jpg file to upload.'),
    );
    
    
   $form['submit'] = array(
	'#type' => 'submit',
	'#value' => t('NEXT2'),
	'#attributes' => array('class' => 'bg_small')
	);
    }

    //$form['#theme'] = 'attendance_form';

    return $form;

}

// Implementation of hook_form
function createpage_form_next2(&$form_state){

   $query = "SELECT *  FROM {contactus}";
   $res = db_fetch_array(db_query($query));
   
   //$node_id = $res['nid'];
   
   //echo $node_id;
   //$node = node_load($node_id);
    
    if (1){
        
        $form['pagename'] = array(
    '#type' => 'textfield', 
    '#title' => 'Page Name', 
    '#required' => TRUE, 
    '#default_value' => 'Contact us',
        '#prefix' => 'Give A name to your contact page. This is the name that will appear on the menu bar. Good Example are "Contact us","Reach us"'
  ); 
    
    $form['field1'] = array(
    '#type' => 'textfield', 
    '#title' => 'street Address', 
    '#required' => TRUE, 
    '#default_value' => $res['street'],
        '#prefix' => 'Mention your complete Address here'
  ); 
    
      $form['field2'] = array(
    '#type' => 'textfield', 
    '#title' => 'Town/City', 
    '#required' => TRUE, 
    '#default_value' => $res['city'],
  );
       $form['field3'] = array(
    '#type' => 'textfield', 
    '#title' => 'zip', 
    '#required' => TRUE, 
    '#default_value' => $res['zip'],
  );
        $form['field4'] = array(
    '#type' => 'textfield', 
    '#title' => 'Country', 
    '#required' => TRUE, 
    '#default_value' => $res['country'],
  );
         $form['field5'] = array(
    '#type' => 'textfield', 
    '#title' => 'state', 
    '#required' => TRUE, 
    '#default_value' => $res['state'],
  );
          $form['field6'] = array(
    '#type' => 'textfield', 
    '#title' => 'phone', 
    '#required' => TRUE, 
    '#default_value' => $res['phone'],
              '#prefix' => 'Mention your complete Street address here
Mention as many phone number as you wish, Seperated by commas. Eg 765768163,011455454'
  );
           $form['field7'] = array(
    '#type' => 'textfield', 
    '#title' => 'Email', 
    '#required' => TRUE, 
    '#default_value' => $res['email'],
               '#prefix' => 'Mention your e-mail address (Separated multiple entires with commas)'
  );
    
    $form['submit'] = array(
	'#type' => 'submit',
	'#value' => t('update'),
	'#attributes' => array('class' => 'bg_small')
	);
    }
    
    else {
        $form['pagename'] = array(
    '#type' => 'textfield', 
    '#title' => 'Page Name', 
    '#required' => TRUE, 
    '#default_value' => 'Contact us',
        '#prefix' => 'Give A name to your contact page. This is the name that will appear on the menu bar. Good Example are "Contact us","Reach us"'
  ); 
    
    $form['field1'] = array(
    '#type' => 'textfield', 
    '#title' => 'street Address', 
    '#required' => TRUE, 
    '#default_value' => '',
        '#prefix' => 'Mention your complete Address here'
  ); 
    
      $form['field2'] = array(
    '#type' => 'textfield', 
    '#title' => 'Town/City', 
    '#required' => TRUE, 
    '#default_value' => '',
  );
       $form['field3'] = array(
    '#type' => 'textfield', 
    '#title' => 'zip', 
    '#required' => TRUE, 
    '#default_value' => '',
  );
        $form['field4'] = array(
    '#type' => 'textfield', 
    '#title' => 'Country', 
    '#required' => TRUE, 
    '#default_value' => '',
  );
         $form['field5'] = array(
    '#type' => 'textfield', 
    '#title' => 'state', 
    '#required' => TRUE, 
    '#default_value' => '',
  );
          $form['field6'] = array(
    '#type' => 'textfield', 
    '#title' => 'phone', 
    '#required' => TRUE, 
    '#default_value' => '',
              '#prefix' => 'Mention your complete Street address here
Mention as many phone number as you wish, Seperated by commas. Eg 765768163,011455454'
  );
           $form['field7'] = array(
    '#type' => 'textfield', 
    '#title' => 'Email', 
    '#required' => TRUE, 
    '#default_value' => '',
               '#prefix' => 'Mention your e-mail address (Separated multiple entires with commas)'
  );
    
    $form['submit'] = array(
	'#type' => 'submit',
	'#value' => t('NEXT3'),
	'#attributes' => array('class' => 'bg_small')
	);
    }

    //$form['#theme'] = 'attendance_form';

    return $form;

}

// Implementation of hook_form
function createpage_form_next3(&$form_state){

   $query = "SELECT *  FROM {node} WHERE title ='Product page'";
   $res = db_fetch_array(db_query($query));
   
   $node_id = $res['nid'];
   
   //echo $node_id;
   $node = node_load($node_id);
    if($node->body){
        
        $form['product_page'] = array(
    '#type' => 'textfield', 
    '#title' => 'Page Name', 
    '#required' => TRUE, 
    '#default_value' => 'Products and services',
    '#prefix' => '<strong>Give A name to your products and services. This is the name that will appear on the menu bar. Good Example are "Our products","Services we offer"</strong>'
  ); 
    
    $form['body'] = array(
    '#type' => 'textarea', 
    '#title' => 'Page Content', 
    '#required' => TRUE, 
    '#default_value' => $node->body,
        '#prefix' => '<strong>Describe your products and services here. Use The tools to format your content as you please. You can even upload images to make your content look nice!</srtong>'
  ); 
    
    $form['submit'] = array(
	'#type' => 'submit',
	'#value' => t('Update'),
	'#attributes' => array('class' => 'bg_small')
	);
    }
    
    else{
    $form['product_page'] = array(
    '#type' => 'textfield', 
    '#title' => 'Page Name', 
    '#required' => TRUE, 
    '#default_value' => 'Products and services',
    '#prefix' => '<strong>Give A name to your products and services. This is the name that will appear on the menu bar. Good Example are "Our products","Services we offer"</strong>'
  ); 
    
    $form['body'] = array(
    '#type' => 'textarea', 
    '#title' => 'Page Content', 
    '#required' => TRUE, 
    '#default_value' => '',
        '#prefix' => '<strong>Describe your products and services here. Use The tools to format your content as you please. You can even upload images to make your content look nice!</srtong>'
  ); 
    
    $form['submit'] = array(
	'#type' => 'submit',
	'#value' => t('NEXT4'),
	'#attributes' => array('class' => 'bg_small')
	);
    }

    //$form['#theme'] = 'attendance_form';

    return $form;

}

// Implementation of hook_form_submit
function createpage_form_next_submit($form, &$form_state){

    global $user;

    
  $username = $user -> name;
    //home page node
  //$count = 0 ;
  //$count = db_result(db_query("SELECT COUNT(*)  FROM {node} WHERE title ='Home page' "));
  
  $query = "SELECT *  FROM {node} WHERE title ='Home page'";
   $res = db_fetch_array(db_query($query));
   
   $node_id = $res['nid'];
   
   //echo $node_id;
   $node = node_load($node_id);
   //echo "<pre>";
  
  // print_r($node);
   //echo "</pre>";
  if (!$node->body )
  {
  $node = new StdClass();
  $node->type = 'page';
  $node->status = 1;
  $node->promote = 0;
  $node->uid = 1;
  //$node->nid = 1;
  
  $node->name = $username;
  $node->path = $_POST['title'];
  $node->title = 'Home page';
  $node->body = $_POST['body'];
  
  node_save($node);
  menu_rebuild();
  //taxonomy_node_save(&$node, "help,sam");
  //unset($node);
  
    //upload file 
    $validators = array();
    $file = file_save_upload('file', $validators, '/var/www/drupal/sites/default/files');
    file_set_status($file, FILE_STATUS_PERMANENT);
    //echo $file;
    //die(1);
    //$variables['logo'] = $file;
  
  //building primary links
$link = array('menu_name' => 'primary-links', 'link_path' => "node/$node->nid", 'link_title' => $node->path, 'weight' => 50);
    menu_link_save($link);
    unset($node);
  
    
  } else {
            drupal_set_message("Home page exits");
            // $node = new StdClass();
            $node->type = 'page';
            $node->status = 1;
            $node->promote = 0;
            $node->uid = 1;
            //$node->nid = 1;

            $node->name = $username;
            $node->path = $_POST['title'];
            $node->title = 'Home page';
            $node->body = $_POST['body'];

            node_save($node);
            unset($node);
            menu_rebuild();
            
    // file upload
    $validators = array();
    $file = file_save_upload('file', $validators,'/var/www/drupal/sites/default/files');
    file_set_status($file, FILE_STATUS_PERMANENT);
//echo $file;
  //  die(1);    
//$variables['logo'] = $file;
      
  }
    
    drupal_goto('/wizpage/next2');

   
}
// Implementation of hook_form_submit
function createpage_form_next2_submit($form, &$form_state){
    //pr($_POST['pagename']);
    $count = 0 ;
    $count = db_result(db_query("SELECT COUNT(*)  FROM {contactus}"));
   // echo $count;
    //die(1);
    if($count == 0 ){
    db_query("INSERT INTO {contactus} (street,city,zip,country,state,phone,email) VALUES ('%s','%s','%d','%s','%s','%d','%s')",$_POST['field1'],$_POST['field2'],$_POST['field3'],$_POST['field4'],$_POST['field5'],$_POST['field6'],$_POST['field7']);
     $pagename = $_POST['pagename'];
  
  
  //building primary links
$link = array('menu_name' => 'primary-links', 'link_path' => 'contactus', 'link_title' => $pagename, 'weight' => 50);
    menu_link_save($link);
   
    }
    
    else {
        
        db_query("UPDATE {contactus} SET street = '%s' ,city = '%s',zip = '%d',country = '%s',state = '%s',phone = '%d',email = '%s'",$_POST['field1'],$_POST['field2'],$_POST['field3'],$_POST['field4'],$_POST['field5'],$_POST['field6'],$_POST['field7']);
     $pagename = $_POST['pagename'];
        drupal_set_message("contact us details Updated");
        
    }
    
drupal_goto('/wizpage/next3');
//die(1);
  
}

// Implementation of hook_form_submit
function createpage_form_next3_submit($form, &$form_state){

    global $user;

    
  $username = $user -> name;
    //home page node
  $query = "SELECT *  FROM {node} WHERE title ='Product page'";
   $res = db_fetch_array(db_query($query));
   
   $node_id = $res['nid'];
   
   //echo $node_id;
   $node = node_load($node_id);
  if (!$node->body)
  {
  $node = new StdClass();
  $node->type = 'page';
  $node->status = 1;
  $node->promote = 0;
  $node->uid = 1;
  //$node->nid = 1;
  $node->name = $username;
  $node->path = $_POST['product_page'];
  $node->title = 'Product page';
  $node->body = $_POST['body'];
  
  node_save($node);
  //taxonomy_node_save(&$node, "help,sam");
  //unset($node);
  
  //building primary links
$link = array('menu_name' => 'primary-links', 'link_path' => "node/$node->nid", 'link_title' => $node->path, 'weight' => 50);
    menu_link_save($link);
    unset($node);
    menu_rebuild();
  } else
  {
       // $node = new StdClass();
        $node->type = 'page';
        $node->status = 1;
        $node->promote = 0;
        $node->uid = 1;
        //$node->nid = 1;
        $node->name = $username;
        $node->path = $_POST['product_page'];
        $node->title = 'Product page';
        $node->body = $_POST['body'];
       // $node->taxonomy = array(1 => taxonomy_get_term(1));
  
       node_save($node);
      // print_r($node->taxonomy);
       //die(1);
       //unset($node);
       menu_rebuild();
      drupal_set_message("products and services page updated");
      
      
  }
    
   // drupal_goto('/wizpage/next2');

   
}

function pr($arr)
{
       echo "<pre>" ;
	print_r($arr);
       echo "</pre>";
}

