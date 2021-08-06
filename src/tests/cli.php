interface Rule
{
    public function replace(int $value): string;
}

class ModRule implements Rule
{
    protected $number;
    protected $message;
    protected $nextRule;
    public function __construct(int $number, string $message, Rule $nextRule = null)
    {
        $this->number 	= $number;
        $this->message 	= $message;
        $this->nextRule = $nextRule;
    }
    
    public function replace(int $value) : string
    {
        $message = (string) $value;
        if (isset($this->nextRule)){
            $message = $this->nextRule->replace($value);
        }

        if ($message === (string) $value AND $value !== 0 AND $value % $this->number === 0) {
            $message = $this->message;
        }

        return (string) $message;
    }
}

class Counter
{
    private $ruleChain;
    private $position;

    public function __construct(Rule $ruleChain)
    {
        $this->position  = 0;
        $this->ruleChain = $ruleChain;

    }

    public function count()
    {
        $message = $this->ruleChain->replace($this->position);
        ++$this->position;

        return $message;
    }

    public function reset()
    {
        $this->position = 0;
    }
}

$ruleChain = new ModRule(3, "Fizz", 
        new ModRule(5, "Buzz", 
    new ModRule(15, "FizzBuzz", null)
));

$counter = new Counter($ruleChain);

for ($j=0; $j < 100; $j++) { 
    echo $counter->count() . PHP_EOL;
}