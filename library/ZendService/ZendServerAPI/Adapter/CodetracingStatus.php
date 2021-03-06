<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link           http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright      Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license        http://framework.zend.com/license/new-bsd New BSD License
 * @package        Zend_Service
 */

namespace ZendService\ZendServerAPI\Adapter;

/**
 * CodetracingStatus datatype adapter implementation
 *
 * @license        http://framework.zend.com/license/new-bsd New BSD License
 * @link           http://github.com/zendframework/zf2 for the canonical source repository
 * @author         Ingo Walz <ingo.walz@googlemail.com>
 * @category       Zend
 * @package        Zend_Service
 * @subpackage     ZendServerAPI
 */
class CodetracingStatus extends Adapter
{
    /**
     * Parse the xml response in object mappings
     *
     * @param  string                                                 $xml
     * @return \ZendService\ZendServerAPI\DataTypes\CodeTracingStatus
     */
    public function parse ($xml = null)
    {
        if($xml === null)
            $xml = $this->getResponse()->getBody();

        $xml = simplexml_load_string($xml);
        $this->setContent($xml);

        $xmlTraceStatus = $this->getElement("//codeTracingStatus");

        $codetracingStatus = new  \ZendService\ZendServerAPI\DataTypes\CodeTracingStatus();
        $codetracingStatus->setComponentStatus((string) $xmlTraceStatus->componentStatus);
        $codetracingStatus->setTraceEnabled(((string) $xmlTraceStatus->traceEnabled) == '0' ? false : true);
        $codetracingStatus->setAwaitsRestart(((string) $xmlTraceStatus->awaitsRestart) == '0' ? false : true);
        $codetracingStatus->setDeveloperMode(((string) $xmlTraceStatus->developerMode) == '0' ? false : true);

        return $codetracingStatus;
    }
}
