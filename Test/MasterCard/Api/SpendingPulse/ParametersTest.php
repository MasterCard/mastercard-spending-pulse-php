<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are 
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of 
 * conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its 
 * contributors may be used to endorse or promote products derived from this software 
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES 
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT 
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; 
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER 
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING 
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF 
 * SUCH DAMAGE.
 *
 */

namespace MasterCard\Api\SpendingPulse;

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;
use Test\BaseTest;



class ParametersTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
    
    
    
    
    
                

        public function test_example_parameters()
        {
            

            

            $map = new RequestMap();
            $map->set("CurrentRow", "1");
            $map->set("Offset", "25");
            
            
            $response = Parameters::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.Count", "4");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.Message", "Success");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[0].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[0].Ecomm", "Y");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[0].Period", "Weekly");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[0].ProductLine", "US Gasoline Weekly");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[0].PublicationCoveragePeriod", "Week");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[0].ReportType", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[0].Sector", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[1].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[1].Ecomm", "Y");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[1].Period", "Monthly");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[1].ProductLine", "US Gasoline Monthly");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[1].PublicationCoveragePeriod", "Month");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[1].ReportType", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[1].Sector", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[2].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[2].Ecomm", "Y");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[2].Period", "Weekly");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[2].ProductLine", "Weekly Sales");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[2].PublicationCoveragePeriod", "Week");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[2].ReportType", "reportA");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[2].Sector", "sectorA");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[3].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[3].Ecomm", "Y");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[3].Period", "Weekly");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[3].ProductLine", "Weekly Sales");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[3].PublicationCoveragePeriod", "Week");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[3].ReportType", "reportB");
            $this->customAssertEqual($ignoreAssert, $response, "ParameterList.ParameterArray.Parameter[3].Sector", "sectorB");
            

            self::putResponse("example_parameters", $response);
            
        }
        
    
    
}



