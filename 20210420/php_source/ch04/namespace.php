<?php

namespace GnuWiz\GnuStudy;

class Student {
    protected $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function name()
    {
        return $this->_name;
    }
}

namespace GnuWiz\JspStudy;

class Student {
    protected $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function name()
    {
        return $this->_name;
    }
}

$gnuStudy = new \GnuWiz\GnuStudy\Student('GnuStudy');
echo $gnuStudy->name()."<br/>";

$jspStudy = new \GnuWiz\JspStudy\Student('JspStudy');
echo $jspStudy->name()."<br/>";

?>