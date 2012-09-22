<?php
namespace ZendServerAPI;

class Codetracing extends BaseAPI
{

    /**
     * Constructor for Codetracing Zend Server API section
     *
     * @param string Name for connection
     * @param \ZendServerAPI\Request $request
     */
    public function __construct($name = null, Request $request = null)
    {
        parent::__construct($name);

        if($request !== null)
            $this->request = $request;
    }

    /**
     * Implementation of codetracingEnable method
     * 
     * @param boolean $restartNow Restart after method call
     * @return \ZendServerAPI\DataTypes\CodeTracingStatus
     */
    public function codetracingEnable($restartNow = true)
    {
        $this->request->setAction(new \ZendServerAPI\Method\CodetracingEnable($restartNow));
        return $this->request->send();
    }
    
    /**
     * Implementation of codetracingDisable method
     *
     * @param boolean $restartNow Restart after method call
     * @return \ZendServerAPI\DataTypes\CodeTracingStatus
     */
    public function codetracingDisable($restartNow = true)
    {
        $this->request->setAction(new \ZendServerAPI\Method\CodetracingDisable($restartNow));
        return $this->request->send();
    }
    
    /**
     * Implementation of codetracingIsEnabled method
     *
     * @return \ZendServerAPI\DataTypes\CodeTracingStatus
     */
    public function codetracingIsEnabled()
    {
        $this->request->setAction(new \ZendServerAPI\Method\CodetracingIsEnabled());
        return $this->request->send();
    }
}