<?php  require dirname(__FILE__) . DIRECTORY_SEPARATOR .'vendor/autoload.php'; ?>
<?php 

use \PHPWineVanillaFlavour\Wine\System\Validate_v2 as v2; 
new \PHPWineVanillaFlavour\Wine\Optimizer\Html;

$v2 = new class extends v2 {

/**
  * @var 
  * @property 
  * defined array key $validate_tag property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/  
public static array|string|null $validate_tag;

/**
  * @var 
  * @property 
  * defined array key $request_value property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/  
public static array|string|null $request_value;

/**
  * @var 
  * @property 
  * defined array key $tooltips_validate_tag property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/  
public static array|string|null $tooltips_validate_tag;

/**
  * @var 
  * @property 
  * defined array key $tooltips property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/  
public static array|string|null $tooltips;

/**
  * @var 
  * @property 
  * defined array key $tooltips_validate_tag property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/  
  public static array|string|null $tooltips_email_tag;

  /**
    * @var 
    * @property 
    * defined array key $tooltips property
    * @since v1.2.0.0 
    * @since 02.07.2022
    **/  
  public static array|string|null $validtype_email;

/**
  * @var 
  * @property 
  * defined array key $validtype_email_tag property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/  
  public static array|string|null $validtype_email_tag;

  /**
    * @var 
    * @property 
    * defined array key $tooltips_email property
    * @since v1.2.0.0 
    * @since 02.07.2022
    **/  
  public static array|string|null $tooltips_email;

/**
  * @var 
  * @property 
  * defined array key $validtype_validate_tag property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/ 
public static array|string|null $validtype_validate_tag;

/**
  * @var 
  * @property 
  * defined array key $validtype property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
public static array|string|null $validtype;


/**
  * @var 
  * @property 
  * defined array key $require_fields property
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
private static array $require_fields = [
           
      'username'  => [

            'mandatory'  => 'Please Enter your username',
            'tooltips'   => [ 
                               MINLENGTH           => [  8 , 'MINLENGTH' ]      ,  // Not less than 8 Char !
                               CONTAIN_SPECIALCHAR => [ 'CONTAIN_SPECIALCHAR' ]    // Must have special characters such underscore _

                            ],
            'valid_type' => [

                              MINLENGTH           => [ 8 , 'Invalid username!' ] ,  
                              CONTAIN_SPECIALCHAR => [ 'Invalid username!' ] 
            ]
          
       ],
      
      'last_name' => [

            'mandatory'  => 'Please Enter your last name',
            'tooltips'   => [],
            'valid_type' => []
      
      ],

      'email'     => [

            'mandatory'  => 'Please Enter your email',
            'tooltips'   => [ VALID_EMAIL => ['VALID_EMAIL'] ],
            'valid_type' => [ VALID_EMAIL => ['Invalid Email !'] ]
          
       ],

      'website'   => [

            'mandatory'  => 'Please Enter your website or social media',
            'tooltips'   => [],
            'valid_type' => []
          
       ],

      'message'   => [ 

            'mandatory'  => 'Please Enter your message',
            'tooltips'   => [],
            'valid_type' => []
          
       ]
    
 ];

 public function __construct() {
 
    new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerElem;
    new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerSetElemAttr;
    new \PHPWineVanillaFlavour\Wine\Optimizer\EnhancerDoIf;
    new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlH1; 
    new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlDiv;
    new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlUl;
    new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlStyle;
    new \PHPWineVanillaFlavour\Wine\Optimizer\HtmlForm;
    
  }

/**
  * @var 
  * @property MANDATORY
  * defined array key to MANDATORY Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
 public static function mandatory_validate_tag(  array|string  $tag_name ) { return v2::MANDATORY( $tag_name , SELF::$require_fields ); }
 
/**
  * @var 
  * @property TOOLTIPS
  * defined array key toTOOLTIPS Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  public static function tooltips_validate_tag(  string  $tag_name ) { return v2::TOOLTIPS( $tag_name , SELF::$require_fields ); }

/**
  * @var 
  * @property VALIDTYPE
  * defined array key to VALIDTYPE Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  public static function validtype_validate_tag(  string $tag_name ) { return v2::VALIDTYPE( $tag_name , SELF::$require_fields ); }

  /**
  * @var 
  * @property SANITIZED_VALUE
  * defined array key to SANITIZED_VALUE Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  public static function sanitized_request_value( array|string  $tag_name ) { return v2::SANITIZED_VALUE( $tag_name ); }

}; // END OF CLASS VALIDATION
 
 
if($_SERVER["REQUEST_METHOD"] == "POST")
{  

   # SANITIZED FOR DATABASE
   $v2::$request_value = $v2::sanitized_request_value( ['username','last_name','email'] );

/**
  * @var 
  * @property MANDATORY_ARRAY_TYPE 
  * defined array key to MANDATORY Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  $v2::$validate_tag  = $v2::mandatory_validate_tag(  [ 'username','last_name', 'email', 'website', 'message' ] );
  
  $required  = []; foreach ($v2::$validate_tag as $value) { $required[] =  ELEM('li',  $value ); } 
  
  echo div( ELEM('UL', implode("", $required ) ) );

/**
  * @var 
  * @property VALIDTYPE_STRING_TYPE_ONLY
  * defined to VALIDTYPE Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  $v2::$validtype_validate_tag  = $v2::validtype_validate_tag( 'username' );   
  $v2::$validtype_email_tag     = $v2::validtype_validate_tag( 'email' ); 

  echo div( UL(function() use ($v2) { $print = ''; 

     $print .= ( !empty($v2::$validtype_validate_tag) ) ? elem('li',$v2::$validtype_validate_tag, [['class'],['red']]) : '';
     $print .= ( !empty($v2::$validtype_email_tag) )    ? elem('li',$v2::$validtype_email_tag,    [['class'],['red']]) : '';

     return ($print);

  }));

 /**
  * @var 
  * @property TOOLTIP_STRING_TYPE_ONLY
  * defined to TOOLTIP Form Handling validation version 2
  * @since v1.2.0.0 
  * @since 02.07.2022
  **/
  $v2::$tooltips_validate_tag  = $v2::tooltips_validate_tag( 'username' );   

  if( ( $v2::$tooltips_validate_tag == MINLENGTH )  || ( $v2::$tooltips_validate_tag == CONTAIN_SPECIALCHAR )  || is_null( $v2::$tooltips_validate_tag) ) 
   {

    echo style( ' .red { color: red; } .green { color: green; } ' );
    
    $v2::$tooltips = UL([ CHILD => [
        ['li', VALUE => ['Not less than 8 Characters']
             , ATTR  => [ 'class' => (!empty( $v2::$tooltips_validate_tag ) &&  $v2::$tooltips_validate_tag == MINLENGTH ) ? 'red' : 'green' ]],
        ['li', VALUE => ['Must have atleast 1 Special Character']
             , ATTR  => [ 'class' => ((!empty( $v2::$tooltips_validate_tag ) &&  $v2::$tooltips_validate_tag == MINLENGTH ) || (!empty( $v2::$tooltips_validate_tag ) &&  $v2::$tooltips_validate_tag == CONTAIN_SPECIALCHAR )  ) ? 'red' : 'green'  ]]
    ]]);

  }

  $v2::$tooltips_email_tag  = $v2::tooltips_validate_tag( 'email' );   
    
  if( ( $v2::$tooltips_email_tag == VALID_EMAIL ) || is_null( $v2::$tooltips_email_tag) ) 
  {

   $v2::$tooltips_email = UL([ CHILD => [
    ['li', VALUE => ['Must be Valid Email ex. youremail@domain.com']
         , ATTR  => [ 'class' => ( !empty( $v2::$tooltips_email_tag ) &&  $v2::$tooltips_email_tag == VALID_EMAIL ) ? 'red' : 'green' ]],
    
   ]]);

  }
  
  
  } # END POST METHOD FORM SUBMIT !

/*******************************************************************
 * PROGRAM FOR ID_SECTION : contact-form
 *******************************************************************/

 $contact_form = div(function() use ($v2) {

    return form([ CHILD => [

     ['div', ATTR => ['id'=>'user_name_con'], INNER => [

        ['div'  , VALUE => [ (!empty($v2::$tooltips)) ? $v2::$tooltips : false ]],
        ['label', ATTR  => ['id' =>'label_username'], VALUE => ['Username: ']],
        ['input', ATTR  => [
            'type'  => 'text', 
            'id'    => 'username',
            'name'  => 'username',
            'value' => (!empty($v2::$request_value[0]) ? $v2::$request_value[0] : false)
        ]]

     ]],
     ['div', ATTR => ['id'=>'last_name_con'], INNER => [

        ['label', ATTR  => ['id' =>'label_last_name'], VALUE => ['Last name: ']],
        ['input', ATTR  => [
            'type'  => 'text', 
            'id'    => 'last_name',
            'name'  => 'last_name',
            'value' => (!empty($v2::$request_value[1]) ? $v2::$request_value[1] : false)
        ]]

     ]],
     ['div', ATTR => ['id'=>'email_con'], INNER => [

        ['div'  , VALUE => [(!empty($v2::$tooltips_email)) ? $v2::$tooltips_email : false ]],
        ['label', ATTR  => ['id' =>'email'], VALUE => ['Email: ']],
        ['input', ATTR  => [
            'type'  => 'text', 
            'id'    => 'email',
            'name'  => 'email',
            'value' => (!empty($v2::$request_value[2]) ? $v2::$request_value[2] : false)
        ]]

     ]],
     ['div', ATTR => ['id'=>'website_con'], INNER => [

        ['label', ATTR  => ['id' =>'website'], VALUE => ['Website: ']],
        ['input', ATTR  => [
            'type'  => 'text', 
            'id'    => 'website',
            'name'  => 'website'
        ]]

     ]],
     ['div', ATTR => ['id'=>'messages_con'], INNER => [

        ['label', ATTR  => ['id' =>'message'], VALUE => ['Message: ']],
        ['input', ATTR  => [
            'type'  => 'text', 
            'id'    => 'message',
            'name'  => 'message'
        ]]

     ]],
     ['button', VALUE => ['Submit'], ATTR  => [
        'type'  => 'submit', 
        'id'    => 'submit',
        'name'  => 'submit'
    ]]

    ]], attr : setElemAttr(['action','method'],[ htmlspecialchars($_SERVER["PHP_SELF"]), 'POST']) );

  },[['id'],['contact']] );


  echo (!empty( $contact_form )) ? $contact_form : false ;

/**
 * 
 * Would you like me to treat a cake and coffee ?
 * Become a donor, Because with you! We can build more...
 * Donate:
 * GCash : +639650332900
 * Paypal account: syncdevprojects@gmail.com
 * 
 **/
