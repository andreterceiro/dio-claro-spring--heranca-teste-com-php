<?php
require_once "./Father.php";
class Child extends Father {
    public function publicMethodOfChild() {
        $this->protectedMethodOfFather();
        echo "\n\nPublic method of child\n\n";
    }
}