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



class SpendingPulseReportTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
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

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.Count", "2");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.Message", "Success");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].CurrencyOfForSalesValue", "US Dollars");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].Ecomm", "Y");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].ImpliedDeflatorMonthOverMonthChange", "0.0012");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].ImpliedDeflatorYearOverYearChange", "0.0011");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].NonGregorianReportingPeriod", "2015-05");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].Period", "Weekly");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PeriodEndDate", "5/14/2015");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PeriodStartDate", "5/8/2015");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PriceAdjustmentFlag", "Y");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PriceIndex3MonthMovingAverageChange", "0.012");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PriceIndexMonthOverMonthChange", "0.005");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PriceIndexValue", "0.00115");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PriceIndexYearOverYearChange", "0.00115");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].ProductLine", "Weekly Sales");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].PublicationCoveragePeriod", "Week");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].ReportType", "reportA");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].ReportingCalender", "G");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].Sales3MonthMovingAverageChange", "150");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SalesMonthOverMonthChange", "50");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SalesValueIndex", "5");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SalesYearOverYearChange", "500");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SalesYearToDateChange", "20");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SameStoreSalesIndex3MonthMovingAverageChange", "0.68");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SameStoreSalesIndexYearOverYearChange", "0.6");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SeasonalAdjustmentFlag", "Y");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].Sector", "sectorA");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].Segment", "seg1");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SubGeographyValue", "region");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].SubSector", "subA");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].TransactionIndex3MonthMovingAverageChange", "0.58");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].TransactionIndexMonthOverMonthChange", "0.57");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].TransactionIndexValue", "0.5");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[0].TransactionIndexYearOverYearChange", "0.56");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].Country", "US");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].CurrencyOfForSalesValue", "US Dollars");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].Ecomm", "Y");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].ImpliedDeflatorMonthOverMonthChange", "0.0012");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].ImpliedDeflatorYearOverYearChange", "0.0011");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].NonGregorianReportingPeriod", "2015-05");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].Period", "Weekly");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PeriodEndDate", "5/7/2015");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PeriodStartDate", "5/1/2015");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PriceAdjustmentFlag", "Y");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PriceIndex3MonthMovingAverageChange", "0.013");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PriceIndexMonthOverMonthChange", "0.006");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PriceIndexValue", "0.000116");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PriceIndexYearOverYearChange", "0.00116");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].ProductLine", "Weekly Sales");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].PublicationCoveragePeriod", "Week");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].ReportType", "reportA");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].ReportingCalender", "G");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].Sales3MonthMovingAverageChange", "160");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SalesMonthOverMonthChange", "60");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SalesValueIndex", "6");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SalesYearOverYearChange", "600");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SalesYearToDateChange", "30");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SameStoreSalesIndex3MonthMovingAverageChange", "0.88");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SameStoreSalesIndexYearOverYearChange", "0.8");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SeasonalAdjustmentFlag", "Y");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].Sector", "sectorA");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].Segment", "seg1");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SubGeographyValue", "region");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].SubSector", "subA");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].TransactionIndex3MonthMovingAverageChange", "0.48");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].TransactionIndexMonthOverMonthChange", "0.47");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].TransactionIndexValue", "0.4");
            $this->customAssertEqual($ignoreAssert, $response, "SpendingPulseList.SpendingPulseArray.SpendingPulseRecord[1].TransactionIndexYearOverYearChange", "0.46");
            

            self::putResponse("example_spendingpulse", $response);
            
        }
        
    
    
}



