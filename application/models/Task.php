<?php
/**
 * Created by PhpStorm.
 * User: Getry
 * Date: 2017-11-02
 * Time: 3:48 PM
 */


Class Task extends Entity {

    //id,task,priority,size,group,deadline,status,flag

    public $id, $task, $priority, $size, $group, $deadline, $status, $flag;
    public function setId($value) {
        $this->id = $value;
    }
    public function setTask($value) {
        $this->task = $value;
    }
    public function setPriority ($value) {
        $this->priority = $value;
    }
    public function setSize($value) {
        $this->size = $value;
    }
    public function setGroup($value) {
        $this->group = $value;

    }
    public function setDeadline($value) {
        $this->deadline = $value;
    }
    public function setStatus($value) {
        $this->status = $value;
    }
    public function setFlag($value) {
        $this->flag = $value;
    }
}