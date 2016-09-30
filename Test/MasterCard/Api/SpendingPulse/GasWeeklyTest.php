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



class GasWeeklyTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
    
    
    
    
    
                

        public function test_example_gasweekly()
        {
            

            

            $map = new RequestMap();
            $map->set("CurrentRow", "1");
            $map->set("Offset", "25");
            
            
            $response = GasWeekly::query($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.Count", "4");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].PADDCode", "NE");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].PADDMillionsofBarrelsSold", "5");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].PADDPercentChangeInBarrelsFromPriorWeek", "0.001");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].PADDPercentChangeinBarrelsfrom52WeeksAgo", "0.002");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].Period", "Week");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].ProductLine", "US Gasoline Weekly");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].PublicationCoveragePeriod", "Week");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].ReportType", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].Sector", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].Segment", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].SubSector", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalBarrelsChangeFromPriorWeek", "5");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalMillionsOfBarrels4WeekAverage", "40");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalMillionsOfBarrelsDailyAverage", "15");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalMillionsOfBarrelsSold", "40");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalPercentChangeInBarrelsFrom52WeeksAgo", "0.005");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalPercentChangeInBarrelsFromPriorWeek", "0.004");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].TotalPercentChangeInThe4WeekAverageFrom52WeeksAgo", "0.006");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[0].WeekEndDate", "6/12/2015");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].PADDCode", "CA");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].PADDMillionsofBarrelsSold", "5");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].PADDPercentChangeInBarrelsFromPriorWeek", "0.015");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].PADDPercentChangeinBarrelsfrom52WeeksAgo", "0.025");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].Period", "Week");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].ProductLine", "US Gasoline Weekly");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].PublicationCoveragePeriod", "Week");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].ReportType", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].Sector", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].Segment", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].SubSector", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalBarrelsChangeFromPriorWeek", "5");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalMillionsOfBarrels4WeekAverage", "40");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalMillionsOfBarrelsDailyAverage", "15");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalMillionsOfBarrelsSold", "40");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalPercentChangeInBarrelsFrom52WeeksAgo", "0.005");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalPercentChangeInBarrelsFromPriorWeek", "0.004");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].TotalPercentChangeInThe4WeekAverageFrom52WeeksAgo", "0.006");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[1].WeekEndDate", "6/12/2015");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].PADDCode", "NE");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].PADDMillionsofBarrelsSold", "6");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].PADDPercentChangeInBarrelsFromPriorWeek", "0.002");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].PADDPercentChangeinBarrelsfrom52WeeksAgo", "0.003");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].Period", "Week");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].ProductLine", "US Gasoline Weekly");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].PublicationCoveragePeriod", "Week");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].ReportType", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].Sector", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].Segment", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].SubSector", "Gas");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalBarrelsChangeFromPriorWeek", "6");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalMillionsOfBarrels4WeekAverage", "50");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalMillionsOfBarrelsDailyAverage", "16");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalMillionsOfBarrelsSold", "50");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalPercentChangeInBarrelsFrom52WeeksAgo", "0.006");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalPercentChangeInBarrelsFromPriorWeek", "0.005");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].TotalPercentChangeInThe4WeekAverageFrom52WeeksAgo", "0.007");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.GasWeeklyArray.GasWeeklyRecord[2].WeekEndDate", "6/5/2015");
            $this->customAssertEqual($ignoreAssert, $response, "GasWeeklyList.Message", "Success");
            

            self::putResponse("example_gasweekly", $response);
            
        }
        
    
    
}



