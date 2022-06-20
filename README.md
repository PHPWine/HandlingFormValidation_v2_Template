# HandlingFormValidation_v2
PHPWine Handling form validation v2 (Vanilla Flavour v1.4)

```PHP

 /**
  * @var 
  * @property 
  * defined array key $require_fields property
  **/
private static array $require_fields = [
           
      'username'  => [

            'mandatory'  => 'Please Enter your username',
            'tooltips'   => [ 
                               MINLENGTH           => [  8 , 'MINLENGTH' ],  // Not less than 8 Char !
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
      
      ]
    
 ];

```

```PHP
// Constant param
LESS_THAN 
MINLENGTH
MAXLENGTH
EQUALTO
EQUAL_STRICT
GREATER_THAN
VALID_EMAIL
STRINGTYPE
NUMERICTYPE
INTEGERTYPE
FLOATTYPE
CONFIRMPASSWORD
CONTAIN_UPPERCASE
CONTAIN_LOWERCASE
CONTAIN_NUMBER
CONTAIN_SPECIALCHAR
VALIDPASSWORD 

Getting Array Argument:
// First Set Validation param you need ex. below :
$err_catch = VALIDATE::CATCH( $err_input, $err_bind, $validType = [
   
   // Stay empty array to figure out the argument
   // Click Submit button or run the program then the error message will popup 
   // Then the arguments will show to you included data type
   // Otherwise go with documentation | Documentation is currently on going.. .
   STRINGTYPE   => [ ]
       
]); 

Usage: 
// Handling Validation Catch method
$err_catch = VALIDATE::CATCH( $err_input, $err_bind, $validType = [
       
   STRINGTYPE   => [USERNAME,'No special character letter and space are allowed'],
   MAXLENGTHT   => [USERNAME,5,'Not more than 5 characters!']
       
]); 

// FORM Validation
$validation = VALIDATE::FORM( $userpassword_err, $validType = [
        
    MINLENGTH        => ['password', 8,'Password must have atleast 8 characters.'],
    VALIDPASSWORD    => ['password',   'Requere password has at least 8 characters + one number + one upper case letter + one lower case letter and one special character.' ],
    CONFIRMPASSWORD  => [$userpassword, $conpassword,  'Not Match!'  ] 
    
]);
```

```PHP
 // PHPWine v 1.0 [ logic is thesame replace Element tag / Merge HTML with v1.4 ] 
 // Display all Error in one time & Design errors static PHP in one time return result (tooltips) !
 // Display all Error in one time
 // Replace NULL first argument $username_err to run one at the time
 $catch_un      = VALIDATION::FORM( $username_err, $validType = [
       
 MINLENGTH      => [ 'username', 7, 'MINLENGTH' ], // 'MIN of 7 characters!'
 STRINGTYPE     => [ 'username', 'STRINGTYPE' ] // Must be Alphanumeric
      
]);

// Design errors static PHP in one time return result !
$eCatch_ =  _xUL( 'id-eCatch_err',
   
   _xSTYLE( '
             
             .green { color: green; }
             .red { color: red;   } 

             ' 
             , null, ' Display all Error in one time ', FUNC_ASSOC ) 
    .DOIF( ( $catch_un == 'MINLENGTH' ||  $catch_un == 'STRINGTYPE') || is_null($catch_un) 
    ,_xUL( 'Child_id',
     ELEM('li','MIN of 7 characters!' ,setElemAttr(['class'],[ (   !empty($catch_un) && $catch_un == 'MINLENGTH' ) ? 'red' : 'green' ] ))
    .ELEM('li','Must be Alphanumeric' ,setElemAttr(['class'],[ (  (!empty($catch_un) && $catch_un == 'MINLENGTH') || (!empty($catch_un) && $catch_un == 'STRINGTYPE') ) ? 'red' : 'green' ] )) 
  
    ,setElemAttr(['class'],['err_username_msg']), 'Child_Class', 'end-of-Child_id' , FUNC_ASSOC) , FUNC_ASSOC)

,null
,'eCatch_error'
,'end-of-id-eCatch_err'
,FUNC_ASSOC );

echo (!empty($eCatch_)) ? $eCatch_ : '';

```

```PHP
     // loop through it [ PHPWine v1.4 ]
     if( !empty( $errors = UL( function() { $print = [];

        foreach([
             
          $this->catch_un?? '', $this->catch_ue?? '', 
          $this->catch_um?? '', $this->catch_up?? '', 
          $this->conpassword_err?? ''] 
          
          as $error) 

        {  $print[] = $error? ELEM('li',$error,setElemAttr(['class'],['err_msg'])) : '';  }

        return (implode("", $print));

    }
    , attr  : []
    , id    : 'id-eCatch_err'
    , class : 'eCatch_error'

    ))) {
        
        echo $errors;

    } 
```

<h2>Thanks To:</h2>
<h5>
Github : To allow me to upload my PHPWine plugin Vanilla Flavour to repository<br /> 
php.net : To oppurtunity Develop web application using corePHP - PHPFrameworks<br />
</h5>


<hr />
Would you like me to treat a cake and coffee ? <br />
Become a donor, Because with you! We can build more... 

Donate: <br />
GCash : +639650332900 <br /> 
Paypal account: syncdevprojects@gmail.com
<hr />
<br />
Thanks and good luck! 
