# HandlingFormValidation_v2
PHPWine Handling form validation v2 (Vanilla Flavour v1.4)

```PHP
 // Define property and fill in madatory ! 
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

```
