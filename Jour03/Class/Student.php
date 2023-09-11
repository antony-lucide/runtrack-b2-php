<?php 
    class student{
        public ?int $id;
        public ?int $grade_id;
        public ?string $email;
        public ?string $fullname;
        public ?datetime $birthdate;
        public ?string $gender;

        public  function __construct(?int $id = null, ?int $grade_id = null,?string $email = null,?string $fullname = null, 
        ?datetime $birthdate = null,?string $gender = null) {
            $this->id = $id;
            $this->grade_id = $grade_id;
            $this->email = $email;
            $this->fullname = $fullname;
            $this->birthdate = $birthdate;
            $this->gender = $gender;
        }
    }
$student = new student(1,1, "email@email.com","Terry cristinelli", new Datetime("1990-01-18"),"male");
$student2 = new student();
var_dump($student);
?>