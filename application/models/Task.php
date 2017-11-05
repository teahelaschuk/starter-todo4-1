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
        if(sizeof($value) < 65){
            $this->task = $value;
        } else{
            trigger_error("Max length needs to be 65", E_USER_ERROR);
        }
    }
    public function setPriority ($value) {
        if(is_int($value)) {
            if($value < 4) {
                $this->priority = $value;
            }else{
                trigger_error("needs to be less then 4", E_USER_ERROR);
            }
        } else{
            trigger_error("needs to be an int", E_USER_ERROR);
        }
    }
    public function setSize($value) {
        if(is_int($value)) {
            if($value < 4) {
                $this->size = $value;
            }else{
                trigger_error("needs to be less then 4", E_USER_ERROR);
            }
        } else{
            trigger_error("needs to be an int", E_USER_ERROR);
        }

    }
    public function setGroup($value) {
        if(is_int($value)) {
            if($value < 5) {
                $this->group = $value;
            }else{
                trigger_error("needs to be less then 5", E_USER_ERROR);
            }
        } else{
            trigger_error("needs to be an int", E_USER_ERROR);
        }


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