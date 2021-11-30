<?php

class User
{
    public $id;

    public $username;

    public $password;

    public $firstname;

    public $lastname;

    public static function find_all_users()
    {
        return self::find_this_query("SELECT * FROM users");
    }

    public static function find_user_by_id($id)
    {
        global $database;

        $result = self::find_this_query("SELECT * FROM users WHERE id = $id LIMIT 1");

        $found_user = mysqli_fetch_array($result);

        return $found_user;

    }

    public static function find_this_query($sql)
    {
        global $database;

        $result_set = $database->query($sql);

        return $result_set;
    }

    private static function instatiation()
    {
        $the_object = new self;

        $the_object->id = $found_user['id'];
        $the_object->username = $found_user['username'];
        $the_object->password = $found_user['password'];
        $the_object->first_name = $found_user['first_name'];
        $the_object->last_name = $found_user['last_name'];

        return $the_object;
    }
}