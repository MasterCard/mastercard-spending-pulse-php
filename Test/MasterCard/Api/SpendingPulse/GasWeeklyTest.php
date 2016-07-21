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



class GasWeeklyTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        $privateKey = file_get_contents(getcwd()."/mcapi_sandbox_key.p12");
        ApiConfig::setAuthentication(new OAuthAuthentication("L5BsiPgaF-O3qA36znUATgQXwJB6MRoMSdhjd7wt50c97279!50596e52466e3966546d434b7354584c4975693238513d3d", $privateKey, "alias", "password"));
    }

    
    
    
    
    
    
    
                

        public function test_example_gasweekly()
        {

            $map = new RequestMap();
            
            $map->set("CurrentRow", "1");
            $map->set("Offset", "25");
            
            

            $response = GasWeekly::query($map);

            $this->customAssertValue("4", $response->get("GasWeeklyList.Count"));
            $this->customAssertValue("US", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].Country"));
            $this->customAssertValue("NE", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].PADDCode"));
            $this->customAssertValue("5", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].PADDMillionsofBarrelsSold"));
            $this->customAssertValue("0.001", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].PADDPercentChangeInBarrelsFromPriorWeek"));
            $this->customAssertValue("0.002", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].PADDPercentChangeinBarrelsfrom52WeeksAgo"));
            $this->customAssertValue("Week", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].Period"));
            $this->customAssertValue("US Gasoline Weekly", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].ProductLine"));
            $this->customAssertValue("Week", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].PublicationCoveragePeriod"));
            $this->customAssertValue("Gas", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].ReportType"));
            $this->customAssertValue("Gas", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].Sector"));
            $this->customAssertValue("Gas", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].Segment"));
            $this->customAssertValue("Gas", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].SubSector"));
            $this->customAssertValue("5", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalBarrelsChangeFromPriorWeek"));
            $this->customAssertValue("40", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalMillionsOfBarrels4WeekAverage"));
            $this->customAssertValue("15", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalMillionsOfBarrelsDailyAverage"));
            $this->customAssertValue("40", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalMillionsOfBarrelsSold"));
            $this->customAssertValue("0.005", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalPercentChangeInBarrelsFrom52WeeksAgo"));
            $this->customAssertValue("0.004", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalPercentChangeInBarrelsFromPriorWeek"));
            $this->customAssertValue("0.006", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalPercentChangeInThe4WeekAverageFrom52WeeksAgo"));
            $this->customAssertValue("6/12/2015", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].WeekEndDate"));
            $this->customAssertValue("US", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].Country"));
            $this->customAssertValue("CA", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].PADDCode"));
            $this->customAssertValue("5", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].PADDMillionsofBarrelsSold"));
            $this->customAssertValue("0.015", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].PADDPercentChangeInBarrelsFromPriorWeek"));
            $this->customAssertValue("0.025", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].PADDPercentChangeinBarrelsfrom52WeeksAgo"));
            $this->customAssertValue("Week", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].Period"));
            $this->customAssertValue("US Gasoline Weekly", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].ProductLine"));
            $this->customAssertValue("Week", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].PublicationCoveragePeriod"));
            $this->customAssertValue("Gas", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].ReportType"));
            $this->customAssertValue("Gas", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].Sector"));
            $this->customAssertValue("Gas", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].Segment"));
            $this->customAssertValue("Gas", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].SubSector"));
            $this->customAssertValue("5", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalBarrelsChangeFromPriorWeek"));
            $this->customAssertValue("40", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalMillionsOfBarrels4WeekAverage"));
            $this->customAssertValue("15", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalMillionsOfBarrelsDailyAverage"));
            $this->customAssertValue("40", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalMillionsOfBarrelsSold"));
            $this->customAssertValue("0.005", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalPercentChangeInBarrelsFrom52WeeksAgo"));
            $this->customAssertValue("0.004", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalPercentChangeInBarrelsFromPriorWeek"));
            $this->customAssertValue("0.006", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalPercentChangeInThe4WeekAverageFrom52WeeksAgo"));
            $this->customAssertValue("6/12/2015", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].WeekEndDate"));
            $this->customAssertValue("US", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].Country"));
            $this->customAssertValue("NE", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].PADDCode"));
            $this->customAssertValue("6", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].PADDMillionsofBarrelsSold"));
            $this->customAssertValue("0.002", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].PADDPercentChangeInBarrelsFromPriorWeek"));
            $this->customAssertValue("0.003", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].PADDPercentChangeinBarrelsfrom52WeeksAgo"));
            $this->customAssertValue("Week", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].Period"));
            $this->customAssertValue("US Gasoline Weekly", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].ProductLine"));
            $this->customAssertValue("Week", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].PublicationCoveragePeriod"));
            $this->customAssertValue("Gas", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].ReportType"));
            $this->customAssertValue("Gas", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].Sector"));
            $this->customAssertValue("Gas", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].Segment"));
            $this->customAssertValue("Gas", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].SubSector"));
            $this->customAssertValue("6", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalBarrelsChangeFromPriorWeek"));
            $this->customAssertValue("50", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalMillionsOfBarrels4WeekAverage"));
            $this->customAssertValue("16", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalMillionsOfBarrelsDailyAverage"));
            $this->customAssertValue("50", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalMillionsOfBarrelsSold"));
            $this->customAssertValue("0.006", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalPercentChangeInBarrelsFrom52WeeksAgo"));
            $this->customAssertValue("0.005", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalPercentChangeInBarrelsFromPriorWeek"));
            $this->customAssertValue("0.007", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalPercentChangeInThe4WeekAverageFrom52WeeksAgo"));
            $this->customAssertValue("6/5/2015", $response->get("GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].WeekEndDate"));
            $this->customAssertValue("Success", $response->get("GasWeeklyList.Message"));
            

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



