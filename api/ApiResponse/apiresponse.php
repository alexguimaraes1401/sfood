<?php 

    class ApiResponse {

        public $data; 
        public $messages; 
        public $success; 
        public $failure; 

        public function __construct($data, $messages, $failure, $success) {
            $this->data = $data; 
            $this->messages = $messages; 
            $this->success = $success;
            $this->failure = $failure;
        }
    }