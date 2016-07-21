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



class ParametersTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        $privateKey = file_get_contents(getcwd()."/mcapi_sandbox_key.p12");
        ApiConfig::setAuthentication(new OAuthAuthentication("L5BsiPgaF-O3qA36znUATgQXwJB6MRoMSdhjd7wt50c97279!50596e52466e3966546d434b7354584c4975693238513d3d", $privateKey, "alias", "password"));
    }

    
    
    
    
    
    
    
                

        public function test_example_parameters()
        {

            $map = new RequestMap();
            
            $map->set("CurrentRow", "1");
            $map->set("Offset", "25");
            
            

            $response = Parameters::query($map);

            $this->customAssertValue("4", $response->get("ParameterList.Count"));
            $this->customAssertValue("Success", $response->get("ParameterList.Message"));
            $this->customAssertValue("US", $response->get("ParameterList.ParameterArray.Parameter[0].Country"));
            $this->customAssertValue("Y", $response->get("ParameterList.ParameterArray.Parameter[0].Ecomm"));
            $this->customAssertValue("Weekly", $response->get("ParameterList.ParameterArray.Parameter[0].Period"));
            $this->customAssertValue("US Gasoline Weekly", $response->get("ParameterList.ParameterArray.Parameter[0].ProductLine"));
            $this->customAssertValue("Week", $response->get("ParameterList.ParameterArray.Parameter[0].PublicationCoveragePeriod"));
            $this->customAssertValue("Gas", $response->get("ParameterList.ParameterArray.Parameter[0].ReportType"));
            $this->customAssertValue("Gas", $response->get("ParameterList.ParameterArray.Parameter[0].Sector"));
            $this->customAssertValue("US", $response->get("ParameterList.ParameterArray.Parameter[1].Country"));
            $this->customAssertValue("Y", $response->get("ParameterList.ParameterArray.Parameter[1].Ecomm"));
            $this->customAssertValue("Monthly", $response->get("ParameterList.ParameterArray.Parameter[1].Period"));
            $this->customAssertValue("US Gasoline Monthly", $response->get("ParameterList.ParameterArray.Parameter[1].ProductLine"));
            $this->customAssertValue("Month", $response->get("ParameterList.ParameterArray.Parameter[1].PublicationCoveragePeriod"));
            $this->customAssertValue("Gas", $response->get("ParameterList.ParameterArray.Parameter[1].ReportType"));
            $this->customAssertValue("Gas", $response->get("ParameterList.ParameterArray.Parameter[1].Sector"));
            $this->customAssertValue("US", $response->get("ParameterList.ParameterArray.Parameter[2].Country"));
            $this->customAssertValue("Y", $response->get("ParameterList.ParameterArray.Parameter[2].Ecomm"));
            $this->customAssertValue("Weekly", $response->get("ParameterList.ParameterArray.Parameter[2].Period"));
            $this->customAssertValue("Weekly Sales", $response->get("ParameterList.ParameterArray.Parameter[2].ProductLine"));
            $this->customAssertValue("Week", $response->get("ParameterList.ParameterArray.Parameter[2].PublicationCoveragePeriod"));
            $this->customAssertValue("reportA", $response->get("ParameterList.ParameterArray.Parameter[2].ReportType"));
            $this->customAssertValue("sectorA", $response->get("ParameterList.ParameterArray.Parameter[2].Sector"));
            $this->customAssertValue("US", $response->get("ParameterList.ParameterArray.Parameter[3].Country"));
            $this->customAssertValue("Y", $response->get("ParameterList.ParameterArray.Parameter[3].Ecomm"));
            $this->customAssertValue("Weekly", $response->get("ParameterList.ParameterArray.Parameter[3].Period"));
            $this->customAssertValue("Weekly Sales", $response->get("ParameterList.ParameterArray.Parameter[3].ProductLine"));
            $this->customAssertValue("Week", $response->get("ParameterList.ParameterArray.Parameter[3].PublicationCoveragePeriod"));
            $this->customAssertValue("reportB", $response->get("ParameterList.ParameterArray.Parameter[3].ReportType"));
            $this->customAssertValue("sectorB", $response->get("ParameterList.ParameterArray.Parameter[3].Sector"));
            

        }
        
    
    

    protected function customAssertValue($expected, $actual) {
        if (is_bool($actual)) {
            $this->assertEquals(boolval($expected), $actual);
        } else if (is_float($actual)) {
            $this->assertEquals(floatval($expected), $actual);
        } else {
            $this->assertEquals(strtolower($expected), strtolower($actual));
        }
    }
}



