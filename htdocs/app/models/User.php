<?php

/*
 * This is a blank Model as an example. By default the 'User' model will will refer to
 * the 'user' table in your database. We can override this by adding the 'getSource' method
 * and returning a string containing the name of the table that should be used
 */

class User extends Phalcon\Mvc\Model
{

    public function getSource()
    {

        return "ph_users";

    }

}