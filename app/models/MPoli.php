<?php

class MPoli extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $poli_id;

    /**
     *
     * @var string
     */
    public $poli_name;

    /**
     *
     * @var string
     */
    public $tags;

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
        $this->setSource("m_poli");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'm_poli';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MPoli[]|MPoli|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MPoli|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
