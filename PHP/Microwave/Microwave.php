<?php
    namespace App\Microwave;

    class Microwave {
        private int $time;
        private string $program;
        private int $temp;
        private bool $status = false;
        
        public function __construct(int $time, string $program, int $temp) {
            $this->time = $time;
            $this->program = $program;
            $this->temp = $temp;
    }

    public function deFreeze()
    {
        $this->turnOn();
        $this->checkFoodTemp();
        $this->startSpin();
        $this->startHeatingSystem();
        $this->turnOff();
        if($this->checkFoodTemp()){
            return "<h1>i am de-freezing in : {$this->time} mint, with program : {$this->program} and : {$this->temp} temperature.</h1>";
        }
    }

    private function turnOn()
    {
        $this->status = true;
    }

    private function checkFoodTemp()
    {
        $stander_temp = 50;
        if ($stander_temp < $this->temp) {
            //The food is already warm.\n
            return true;
        } else {
            //The food is frozen!
            return false;
        }
        return true;
    }

    private function startHeatingSystem()
    {
        return true;
    }

    private function startSpin()
    {
        return true;
    }

    private function turnOff()
    {
        $this->status = false;
    }
}