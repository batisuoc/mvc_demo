<?php
class Form
{
    private $_currItem = null;

    private $_postData = array();

    public function __construct()
    { }

    /**
     * Get POST data value and import to an array
     * @param string $field Input field name
     */
    public function post($field)
    {
        $this->_postData[$field] = $_POST[$field];
        $this->_currItem = $field;
        return $this;
    }

    public function fetch($fieldName = false)
    {
        if ($fieldName) {
            if (isset($this->_postData[$fieldName])) {
                return $this->_postData[$fieldName];
            } else return false;
        } else {
            return $this->_postData;
        }
    }
}
