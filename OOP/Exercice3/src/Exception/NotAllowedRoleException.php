<?php

namespace Exception;

use Throwable;

class NotAllowedRoleException extends \RuntimeException
{


    public function __construct(array $roles, string $label, $message = "", $code = 0, Throwable $previous = null)
    {
        $tmpMessage = 'The role ' . $label . ' is not allowed';
        $tmpMessage .= ' only ' . implode(',', $roles) . ' are allowed ';
        $tmpMessage .= $message;
        parent::__construct($tmpMessage, $code, $previous);
    }


}

//throw new NotAllowedRoleException(
//    ['user', 'admin'],
//    'alan',
//    'Hey!! how are you'
//);