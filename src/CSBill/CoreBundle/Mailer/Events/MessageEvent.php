<?php

namespace CSBill\CoreBundle\Mailer\Events;

use Symfony\Component\EventDispatcher\Event;
use CSBill\CoreBundle\Mailer\MailerEvents;
use Swift_Message;

abstract class MessageEvent extends Event implements MessageEventInterface
{
    /**
     * @var Swift_Message
     */
    protected $message;

    /**
     * @var string
     */
    protected $htmlTemplate;

    /**
     * @var string
     */
    protected $txtTemplate;

    /**
     * @return mixed
     */
    abstract public function getEvent();

    /**
     * @param Swift_Message $message
     */
    public function setMessage(Swift_Message $message)
    {
        $this->message = $message;
    }

    /**
     * @return Swift_Message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $template
     */
    public function setHtmlTemplate($template)
    {
        $this->htmlTemplate = $template;
    }

    /**
     * @return string
     */
    public function getHtmlTemplate()
    {
        return $this->htmlTemplate;
    }

    /**
     * @param string $template
     */
    public function setTextTemplate($template)
    {
        $this->txtTemplate = $template;
    }

    /**
     * @return string
     */
    public function getTextTemplate()
    {
        return $this->txtTemplate;
    }
}