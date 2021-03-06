<?php
/**
 * @package ImpressPages
 *
 */

namespace Modules\developer\form;




class Fieldset{
    protected $fields;
    protected $label;
    
    public function __construct() {
        $this->fields = array();
    }
    
    /**
     * 
     * Add field to last fielset. Create fieldset if does not exist.
     * @param Field $field
     */
    public function addField(Field\Field  $field) {
        $this->fields[] = $field;
    }

    /**
     * Remove field from fieldset
     * @param string $fieldName
     * @return int removed fields count
     */
    public function removeField($fieldName) {
        $count = 0;
        foreach($this->fields as $key => $field) {
            if ($field->getName() == $fieldName) {
                unset($this->fields[$key]);
                $count++;
            }
        }
        return $count;
    }
    
    /**
     * 
     * Return all fields
     */
    public function getFields() {
        return $this->fields;
    }
    
    public function getField($name) {
        $allFields = $this->getFields();
        foreach($allFields as $key => $field) {
            if ($field->getName() == $name) {
                return $field;
            }
        }
        return false;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setLabel($label) {
        $this->label = $label;
    }

}