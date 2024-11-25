<?php
    class SV{
        private $msv,$pass,$ho,$ten,$city,$email,$course1;
        function getMSV() {
            return $this->msv;
        }
        function setMSV($msv){
            $this->msv = $msv;
        }
        function getPass() {
            return $this->pass;
        }
        function setPass($pass){
            $this->pass = $pass;
        }
        function getHo() {
            return $this->ho;
        }
        function setHo($ho){
            $this->ho = $ho;
        }
        function getTen() {
            return $this->ten;
        }
        function setTen($ten){
            $this->ten = $ten;
        }
        function getCity() {
            return $this->city;
        }
        function setCity($city){
            $this->city = $city;
        }
        function getEmail() {
            return $this->email;
        }
        function setEmail($email){
            $this->email = $email;
        }
        function getCourse() {
            return $this->course1;
        }
        function setCourse($course){
            $this->course1 = $course;
        }

    }
    function getdata(){

        $csv = fopen('KTPM2.csv','r');
        $students = [];
        $header = fgetcsv($csv);
        while(($rs = fgetcsv($csv)) !==false ){
           
            $student = new SV();
            $student->setMSV($rs[0]);
            $student->setPass($rs[1]);
            $student->setHo($rs[2]);
            $student->setTen($rs[3]);
            $student->setCity($rs[4]);
            $student->setEmail($rs[5]);
            $student->setCourse($rs[6]);
            array_push($students,$student);
    
        }
        fclose($csv);
        return $students;
    }
    //foreach($students as $student){
        //echo($student->getTen());
        //print_r($student);
    //}
?>
