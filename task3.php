<?php
class Figure
    {
        protected $type = '';
        public function getArea() {}
        public function getType()
        {
            if ($this->type == '') return 'Неопределен';
            else return $this->type;
        }
    }
    
    class Square extends Figure
    {
        private $side;
        function __construct($a = 0)
        {
            $this->type = '';
            $a = floatval($a);
            if ($a > 0)
            {
                $this->type = 'Square';
                $this->side = $a;
            }
        }
        public function getArea()
        {
            if (!$this->type) return '';
            return $this->side * $this->side;
        }
        
    }
    
    class Circle extends Figure
    {
        private $radius;
        function __construct($r = 0)
        {
            $this->type = '';
            $r = floatval($r);
            if ($r > 0)
            {
                $this->type = 'Circle';
                $this->radius = $r;   
            }    
                
        } 
        public function getArea()
        {
            if (!$this->type) return '';
            return M_PI * $this->radius * $this->radius;
        }
        
        
    }    
    
    class Triangle extends Figure
    {
        private $a, $b, $c;
        function __construct($a = 0, $b = 0, $c = 0)
        {
            $this->type = '';
            $a = floatval($a); $b = floatval($b); $c = floatval($c);
            if (($a > 0 ) && ($b > 0) && ($c > 0)) 
            {
                $p = ($a + $b + $c) / 2; // полупериметр
                if (($p > $a ) && ($p > $b) && ($p > $c)) 
                {
                    $this->type = 'Triangle';
                    $this->a = $a;                    
                    $this->b = $b;  
                    $this->c = $c;  
                }
            }    
        }
        public function getArea()
        {
            if (!$this->type) return '';
            $p = ($this->a + $this->b + $this->c) / 2; 
            return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c)); 
        }
	}
?>
