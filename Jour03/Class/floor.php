<?php
    class floor{
        private ?int $grade_id;
        private ?string $fullname;

        public function getgrade_id(){
            return $this->grade_id;
        }
        public function getfullname(){
            return $this->fullname;
        }

        public function accessgrade_id(){
            $this->grade_id = $grade_id;
        }
        public function accessfullname(){
            $this->fullname = $fullname;
        }
    }
?>