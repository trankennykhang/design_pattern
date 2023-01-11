<?php
namespace Kupman\Pattern\Behavioural\Chain\Abn;

class Abn {
    /** @var string $type */
    protected $type = null;

    /** @var int $number description */
    protected $number = null;

    /** @var string $name description */
    protected $name = null;

    /** @var string $status description */
    protected $status = null;

    /** @var string $desc description */
    protected $desc = null;

    public function __construct(string $type = null, string $name) {
        $this->type = $type;
        $this->name = $name;
    }
    public function get(string $property){
        if (isset($this->$property)) {
            return $this->$property;
        }
        return false;
    }
    public function set(string $property, string $value)
    {
        if (isset($this->$property)) {
            $this->$property = $value;
        }
    }
    public function __toString()
    {
        return "type: " . $this->type . " and name: " . $this->name;
    }
}
?>