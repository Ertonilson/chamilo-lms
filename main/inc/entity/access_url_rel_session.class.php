<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class AccessUrlRelSession extends \Entity
{
    /**
     * @return \Entity\Repository\AccessUrlRelSessionRepository
     */
     public static function repository(){
        return \Entity\Repository\AccessUrlRelSessionRepository::instance();
    }

    /**
     * @return \Entity\AccessUrlRelSession
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $access_url_id
     */
    protected $access_url_id;

    /**
     * @var integer $session_id
     */
    protected $session_id;


    /**
     * Set access_url_id
     *
     * @param integer $value
     * @return AccessUrlRelSession
     */
    public function set_access_url_id($value)
    {
        $this->access_url_id = $value;
        return $this;
    }

    /**
     * Get access_url_id
     *
     * @return integer 
     */
    public function get_access_url_id()
    {
        return $this->access_url_id;
    }

    /**
     * Set session_id
     *
     * @param integer $value
     * @return AccessUrlRelSession
     */
    public function set_session_id($value)
    {
        $this->session_id = $value;
        return $this;
    }

    /**
     * Get session_id
     *
     * @return integer 
     */
    public function get_session_id()
    {
        return $this->session_id;
    }
}