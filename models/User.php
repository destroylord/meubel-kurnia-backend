<?php

namespace app\models;

use App\core\DbModel;

class User extends DbModel {
        
        public string $firstname;
        public string $lastname;
        public string $email;
        public string $password;
        public string $confirmPassword;


        public function tableName() : string
        {
            return 'user';
        }

        public function register()
        {
            $this->save();
        }

        public function rules(): array
        {
            return [
                'firstname'     => [self::RULE_REQUIRED],
                'lastname'      => [self::RULE_REQUIRED],
                'email'         => [self::RULE_REQUIRED, self::RULE_EMAIL],
                'password'      => [self::RULE_REQUIRED, [
                                            self::RULE_MIN,'min' => 8, 
                                            self::RULE_MAX, 'max' => 24]
                                    ],
                'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH,'match' => 'password']],
            ];
        }

        public function attributes(): array
        {
            return ['firstname', 'lastname', 'email', 'password'];
        }
    }


?>