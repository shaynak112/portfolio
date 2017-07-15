<?php 
      class formValidation
      {
        //regEx for specific fields
        const dateR = "[0-9]{4}[-/][0-9]{1,2}[-/][0-9]{1,2}\$";
        const email = "/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";
        const postcode = "/[a-z][0-9][a-z][- ]?[0-9][a-z][0-9]$/i";
        const phone = "\d{10}";
        public $Message = "";
        
        //email field
        public function emailLogic($form)
        {
            if(empty($form) && !preg_match(self::email, $form))
            {
                $Message = "Required field&#42;";
            }
           else
            {
                $Message = "";
            }
            return $Message;
        }

        //date field
        public function dateLogic($form)
        {
            if(empty($form) && !preg_match(self::dateR, $form))
            {
                $Message = "Required field&#42;";
            }
            else
            {
                $Message = "";
            }
            return $Message;
        }

        //postCode field
        public function postCodeLogic($form)
        {
            if(empty($form) && !preg_match(self::postcode, $form))
            {
                $Message = "Required field&#42;";
            }
            else
            {
                $Message = "";
            }
            return $Message;
        }

        //phone field
        public function phoneLogic($form)
        {
            if(empty($form) && !preg_match(self::phone, $form) )
            {
                $Message = "Required field&#42;";
            }
            else
            {
                $Message = "";
            }
            return $Message;
        }

        //empty fields
        public function inputTextLogic($form)
        {
            if(empty($form))
            {
                $Message = "Required field&#42;";
            }
            else
            {
                $Message = "";
            }
            return $Message;
        }
    }

?>