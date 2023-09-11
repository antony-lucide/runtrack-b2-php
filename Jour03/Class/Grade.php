<?php
    class Grade{
        private ?int $id;
        private ?int $grade_id;
        private ?string $fullname;
        private ?datetime $birthday;

        public function getid(){
            return $this->id;
        }
        public function getgrade_id(){
            return $this->grade_id;
        }
        public function getfullname(){
            return $this->fullname;
        }
        
        public function getdatetime(){
            return $this->birthday;
        }
        public function accessid(){
            $this->id = $id;
        }
        public function accessgrade_id(){
            $this->grade_id = $grade_id;
        }
        public function accessfullname(){
            $this->fullname = $fullname;
        }
        public function acessbirthday(){
            $this->birthday = $birthday;
        }
    }
?>