<?php
/**
 * Analyze PHP Framework
 *
 * @link https://github.com/AnalyzePHP/framework
 * @copyright Copyright (C) 2018 Matt Sparks
 * @license MIT <https://github.com/AnalyzePHP/framework/blob/master/LICENSE>
 */
namespace Analyze\Container\Definitions;

class SetterDefinition extends AbstractDefinition
{
    /**
     * Concrete
     * @var string
     */
    private $concrete;

    /**
     * Methods
     * @var array
     */
    private $methods;

    /**
     * Constructor
     *
     * @param string $concrete
     */
    public function __construct(string $concrete, array $methods)
    {
        $this->concrete = $concrete;
        $this->methods = $methods;
    }

    /**
     * Build
     *
     * @return object
     */
    public function build()
    {
        $concrete = new $this->concrete;

        foreach ($this->methods as $method => $parameter) {
            call_user_func([$concrete, $method], $parameter);
        }

        return $concrete;
    }
}
