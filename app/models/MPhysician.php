<?php

class MPhysician extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $physician_id;

    /**
     *
     * @var string
     */
    public $physician_name;

    /**
     *
     * @var string
     */
    public $person_id;

    /**
     *
     * @var string
     */
    public $spesialis;

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
        $this->setSource("m_physician");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'm_physician';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MPhysician[]|MPhysician|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MPhysician|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
