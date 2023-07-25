<?php

require_once('./utils/loadClass.php');

class   CoffeeMachine
{

        private string $brand;
        private string $coffee;
        private bool $makingCoffee;
        private bool $coffeeMachine;
        private bool $isOff;

        public function __construct($brand)
        {
                $this->brand = $brand;
        }




        /**
         * Get the value of brand
         */
        public function getBrand()
        {
                return $this->brand;
        }

        /**
         * Set the value of brand
         *
         * @return  self
         */
        public function setBrand($brand)
        {
                $this->brand = $brand;

                return $this;
        }

        /**
         * Get the value of coffee
         */
        public function getCoffee()
        {
                return $this->coffee;
        }

        /**
         * Set the value of coffee
         *
         * @return  self
         */
        public function setCoffee($coffee)
        {
                $this->coffee = $coffee;

                return $this;
        }

        /**
         * Get the value of makingCoffee
         */
        public function getMakingCoffee()
        {
                return $this->makingCoffee;
        }

        /**
         * Set the value of makingCoffee
         *
         * @return  self
         */
        public function setMakingCoffee($makingCoffee)
        {
                $this->makingCoffee = $makingCoffee;

                return $this;
        }

        /**
         * Get the value of coffeeMachine
         */
        public function getCoffeeMachine()
        {
                return $this->coffeeMachine;
        }

        /**
         * Set the value of coffeeMachine
         *
         * @return  self
         */
        public function setCoffeeMachine($coffeeMachine)
        {
                $this->coffeeMachine = $coffeeMachine;

                return $this;
        }

        public function getIsOff()
        {
                return $this->isOff;
        }

        /**
         * Set the value of isOff
         *
         * @return  self
         */ 



        public function turningOn(): string
        {

                $this->setCoffeeMachine(true);

                return $this->getBrand() . " is turned on" . "<br>";
        }



        public function putDose(): string
        {

                $this->setMakingCoffee(true);

                return  "I'm putting a dose". "<br>";
        }


        public function makingCoffee(): string
        {
                $this->getMakingCoffee();
                return "Coffee is ready" . "<br>";
        }


        public function setIsOff($isOff)
        {
                $this->isOff = $isOff;

                return $this;
        }

        public function turnOff(): string {

                return $this->getBrand() . " is off";
                }
        }

