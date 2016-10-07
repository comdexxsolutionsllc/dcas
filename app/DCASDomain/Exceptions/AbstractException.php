<?php

namespace DCASDomain\Exceptions;

abstract class AbstractException extends \Exception {

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $details;


    /**
     * AbstractException constructor.
     *
     * @param string $message
     */
    public function __construct($message)
    {
        parent::__construct($message);
    }


    /**
     * @param array $args
     *
     * @return string
     */
    protected function create(array $args)
    {
        $this->id = array_shift($args);
        $error = $this->errors($this->id);
        $this->details = vsprintf($error['context'], $args);

        return $this->details;
    }


    /**
     * @param $id
     *
     * @return mixed
     */
    private function errors($id)
    {
        $data = [
            'not_found'     => [
                'context' => 'The requested resource could not be found but may be available again in the future. Subsequent requests by the client are permissible.',
            ],
            'unknown_error' => [
                'context' => 'An unknown error was caught by the application.  No further information was given.',
            ]
            //   ...
        ];

        return $data[$id];
    }

}
