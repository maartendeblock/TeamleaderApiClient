<?php

namespace Nascom\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Email
 *
 * @package Nascom\TeamleaderApiClient\Model\Aggregate
 */
class Email
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $email;

    /**
     * Email constructor.
     *
     * @param null $email
     * @param null $type
     */
    public function __construct($email = null, $type = null)
    {
        $this->email = $email;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}