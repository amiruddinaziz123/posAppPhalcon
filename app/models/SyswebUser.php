<?php

class SyswebUser extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $user_name;

    /**
     *
     * @var string
     */
    public $user_password;

    /**
     *
     * @var string
     */
    public $roles;

    /**
     *
     * @var string
     */
    public $as_role;

    /**
     *
     * @var string
     */
    public $person_id;

    /**
     *
     * @var string
     */
    public $full_name;

    /**
     *
     * @var string
     */
    public $tags;

    /**
     *
     * @var string
     */
    public $created_date;

    /**
     *
     * @var string
     */
    public $created_by;

    /**
     *
     * @var string
     */
    public $created_by_name;

    /**
     *
     * @var string
     */
    public $modified_date;

    /**
     *
     * @var string
     */
    public $modified_by;

    /**
     *
     * @var string
     */
    public $modified_by_name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("klinik_zicare");
        $this->setSource("sysweb_user");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sysweb_user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SyswebUser[]|SyswebUser|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SyswebUser|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
