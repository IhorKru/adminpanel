<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SubscriberDetails extends \AppBundle\Entity\SubscriberDetails implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'optindetails', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'optoutdetails', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'addressdetail', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'firstname', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'lastname', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'emailaddress', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'phone', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'age', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'gender', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'educationlevelid', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'hash', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'sourceid', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'datecreated'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'optindetails', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'optoutdetails', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'addressdetail', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'firstname', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'lastname', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'emailaddress', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'phone', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'age', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'gender', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'educationlevelid', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'hash', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'sourceid', '' . "\0" . 'AppBundle\\Entity\\SubscriberDetails' . "\0" . 'datecreated'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SubscriberDetails $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', [$firstname]);

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', []);

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', [$lastname]);

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', []);

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailaddress($emailaddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailaddress', [$emailaddress]);

        return parent::setEmailaddress($emailaddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailaddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailaddress', []);

        return parent::getEmailaddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setAge($age)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAge', [$age]);

        return parent::setAge($age);
    }

    /**
     * {@inheritDoc}
     */
    public function getAge()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAge', []);

        return parent::getAge();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setEducationlevelid($educationlevelid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEducationlevelid', [$educationlevelid]);

        return parent::setEducationlevelid($educationlevelid);
    }

    /**
     * {@inheritDoc}
     */
    public function getEducationlevelid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEducationlevelid', []);

        return parent::getEducationlevelid();
    }

    /**
     * {@inheritDoc}
     */
    public function setHash($hash)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHash', [$hash]);

        return parent::setHash($hash);
    }

    /**
     * {@inheritDoc}
     */
    public function getHash()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHash', []);

        return parent::getHash();
    }

    /**
     * {@inheritDoc}
     */
    public function getOptindetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptindetails', []);

        return parent::getOptindetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setOptindetails(\Doctrine\Common\Collections\ArrayCollection $optindetails)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptindetails', [$optindetails]);

        return parent::setOptindetails($optindetails);
    }

    /**
     * {@inheritDoc}
     */
    public function addOptindetail(\AppBundle\Entity\SubscriberOptInDetails $optindetail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOptindetail', [$optindetail]);

        return parent::addOptindetail($optindetail);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOptindetail(\AppBundle\Entity\SubscriberOptInDetails $optindetail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOptindetail', [$optindetail]);

        return parent::removeOptindetail($optindetail);
    }

    /**
     * {@inheritDoc}
     */
    public function setSourceid($sourceid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSourceid', [$sourceid]);

        return parent::setSourceid($sourceid);
    }

    /**
     * {@inheritDoc}
     */
    public function getSourceid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSourceid', []);

        return parent::getSourceid();
    }

    /**
     * {@inheritDoc}
     */
    public function addAddressdetail(\AppBundle\Entity\SubscriberAddress $addressdetail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAddressdetail', [$addressdetail]);

        return parent::addAddressdetail($addressdetail);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAddressdetail(\AppBundle\Entity\SubscriberAddress $addressdetail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAddressdetail', [$addressdetail]);

        return parent::removeAddressdetail($addressdetail);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressdetail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressdetail', []);

        return parent::getAddressdetail();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatecreated(\DateTime $datecreated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatecreated', [$datecreated]);

        return parent::setDatecreated($datecreated);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatecreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatecreated', []);

        return parent::getDatecreated();
    }

    /**
     * {@inheritDoc}
     */
    public function addOptoutdetail(\AppBundle\Entity\SubscriberOptOutDetails $optoutdetail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOptoutdetail', [$optoutdetail]);

        return parent::addOptoutdetail($optoutdetail);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOptoutdetail(\AppBundle\Entity\SubscriberOptOutDetails $optoutdetail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOptoutdetail', [$optoutdetail]);

        return parent::removeOptoutdetail($optoutdetail);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptoutdetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptoutdetails', []);

        return parent::getOptoutdetails();
    }

}
