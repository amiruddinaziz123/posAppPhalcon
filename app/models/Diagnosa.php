<?php

class Diagnosa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $diagnosa_id;

    /**
     *
     * @var string
     */
    public $admission_id;

    /**
     *
     * @var string
     */
    public $person_id;

    /**
     *
     * @var string
     */
    public $rm_id;

    /**
     *
     * @var string
     */
    public $diagnosa;

    /**
     *
     * @var string
     */
    public $diagnosa_type;

    /**
     *
     * @var integer
     */
    public $is_active;

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
        $this->setSource("diagnosa");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'diagnosa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Diagnosa[]|Diagnosa|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Diagnosa|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
