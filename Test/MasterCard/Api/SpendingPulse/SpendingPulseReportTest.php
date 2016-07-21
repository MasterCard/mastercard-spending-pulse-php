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



class SpendingPulseReportTest extends \PHPUnit_Framework_TestCase {

    protected function setUp() {
        ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        $privateKey = file_get_contents(getcwd()."/mcapi_sandbox_key.p12");
        ApiConfig::setAuthentication(new OAuthAuthentication("L5BsiPgaF-O3qA36znUATgQXwJB6MRoMSdhjd7wt50c97279!50596e52466e3966546d434b7354584c4975693238513d3d", $privateKey, "alias", "password"));
    }

    
    
    
    
    
    
    
                

        public function test_example_spendingpulse()
        {

            $map = new RequestMap();
            
            $map->set("CurrentRow", "1");
            $map->set("Offset", "25");
            $map->set("ProductLine", "Weekly Sales");
            $map->set("PublicationCoveragePeriod", "Week");
            $map->set("Country", "US");
            $map->set("ReportType", "reportA");
            $map->set("Period", "Weekly");
            $map->set("Sector", "sectorA");
            $map->set("Ecomm", "Y");
            
            

            $response = SpendingPulseReport::query($map);

            $this->customAssertValue("2", $response->get("SpendingPulseList.Count"));
            $this->customAssertValue("Success", $response->get("SpendingPulseList.Message"));
            $this->customAssertValue("US", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].Country"));
            $this->customAssertValue("US Dollars", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].CurrencyOfForSalesValue"));
            $this->customAssertValue("Y", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].Ecomm"));
            $this->customAssertValue("0.0012", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].ImpliedDeflatorMonthOverMonthChange"));
            $this->customAssertValue("0.0011", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].ImpliedDeflatorYearOverYearChange"));
            $this->customAssertValue("2015-05", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].NonGregorianReportingPeriod"));
            $this->customAssertValue("Weekly", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].Period"));
            $this->customAssertValue("5/14/2015", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PeriodEndDate"));
            $this->customAssertValue("5/8/2015", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PeriodStartDate"));
            $this->customAssertValue("Y", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PriceAdjustmentFlag"));
            $this->customAssertValue("0.012", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PriceIndex3MonthMovingAverageChange"));
            $this->customAssertValue("0.005", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PriceIndexMonthOverMonthChange"));
            $this->customAssertValue("0.00115", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PriceIndexValue"));
            $this->customAssertValue("0.00115", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PriceIndexYearOverYearChange"));
            $this->customAssertValue("Weekly Sales", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].ProductLine"));
            $this->customAssertValue("Week", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PublicationCoveragePeriod"));
            $this->customAssertValue("reportA", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].ReportType"));
            $this->customAssertValue("G", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].ReportingCalender"));
            $this->customAssertValue("150", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].Sales3MonthMovingAverageChange"));
            $this->customAssertValue("50", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SalesMonthOverMonthChange"));
            $this->customAssertValue("5", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SalesValueIndex"));
            $this->customAssertValue("500", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SalesYearOverYearChange"));
            $this->customAssertValue("20", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SalesYearToDateChange"));
            $this->customAssertValue("0.68", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SameStoreSalesIndex3MonthMovingAverageChange"));
            $this->customAssertValue("0.6", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SameStoreSalesIndexYearOverYearChange"));
            $this->customAssertValue("Y", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SeasonalAdjustmentFlag"));
            $this->customAssertValue("sectorA", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].Sector"));
            $this->customAssertValue("seg1", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].Segment"));
            $this->customAssertValue("region", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SubGeographyValue"));
            $this->customAssertValue("subA", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SubSector"));
            $this->customAssertValue("0.58", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].TransactionIndex3MonthMovingAverageChange"));
            $this->customAssertValue("0.57", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].TransactionIndexMonthOverMonthChange"));
            $this->customAssertValue("0.5", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].TransactionIndexValue"));
            $this->customAssertValue("0.56", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].TransactionIndexYearOverYearChange"));
            $this->customAssertValue("US", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].Country"));
            $this->customAssertValue("US Dollars", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].CurrencyOfForSalesValue"));
            $this->customAssertValue("Y", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].Ecomm"));
            $this->customAssertValue("0.0012", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].ImpliedDeflatorMonthOverMonthChange"));
            $this->customAssertValue("0.0011", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].ImpliedDeflatorYearOverYearChange"));
            $this->customAssertValue("2015-05", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].NonGregorianReportingPeriod"));
            $this->customAssertValue("Weekly", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].Period"));
            $this->customAssertValue("5/7/2015", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PeriodEndDate"));
            $this->customAssertValue("5/1/2015", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PeriodStartDate"));
            $this->customAssertValue("Y", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PriceAdjustmentFlag"));
            $this->customAssertValue("0.013", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PriceIndex3MonthMovingAverageChange"));
            $this->customAssertValue("0.006", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PriceIndexMonthOverMonthChange"));
            $this->customAssertValue("0.000116", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PriceIndexValue"));
            $this->customAssertValue("0.00116", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PriceIndexYearOverYearChange"));
            $this->customAssertValue("Weekly Sales", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].ProductLine"));
            $this->customAssertValue("Week", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PublicationCoveragePeriod"));
            $this->customAssertValue("reportA", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].ReportType"));
            $this->customAssertValue("G", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].ReportingCalender"));
            $this->customAssertValue("160", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].Sales3MonthMovingAverageChange"));
            $this->customAssertValue("60", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SalesMonthOverMonthChange"));
            $this->customAssertValue("6", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SalesValueIndex"));
            $this->customAssertValue("600", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SalesYearOverYearChange"));
            $this->customAssertValue("30", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SalesYearToDateChange"));
            $this->customAssertValue("0.88", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SameStoreSalesIndex3MonthMovingAverageChange"));
            $this->customAssertValue("0.8", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SameStoreSalesIndexYearOverYearChange"));
            $this->customAssertValue("Y", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SeasonalAdjustmentFlag"));
            $this->customAssertValue("sectorA", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].Sector"));
            $this->customAssertValue("seg1", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].Segment"));
            $this->customAssertValue("region", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SubGeographyValue"));
            $this->customAssertValue("subA", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SubSector"));
            $this->customAssertValue("0.48", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].TransactionIndex3MonthMovingAverageChange"));
            $this->customAssertValue("0.47", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].TransactionIndexMonthOverMonthChange"));
            $this->customAssertValue("0.4", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].TransactionIndexValue"));
            $this->customAssertValue("0.46", $response->get("SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].TransactionIndexYearOverYearChange"));
            

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



