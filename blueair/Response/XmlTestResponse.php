<?php
namespace Blueair\Response;



class XmlTestResponse
{
	private $string = '<?xml version="1.0" encoding="utf-8"?>
<s:Envelope xmlns:s = "http://schemas.xmlsoap.org/soap/envelope/">
        
                
                    <ArrayOfJourneyDateMarket>
                        <JourneyDateMarket>
                            <DepartureDate>2009-07-23T00:00:00</DepartureDate>
                            <DepartureStation>SLC</DepartureStation>
                            <ArrivalStation>DEN</ArrivalStation>
                            <Journeys>
                                <Journey>
                                    <State 
                     xmlns="http://schemas.navitaire.com/WebServices/DataContracts/Common">New</State>
                                    <NotForGeneralUse>false</NotForGeneralUse>
                                    <Segments>
                                        <Segment>
                                            <State 
                    xmlns="http://schemas.navitaire.com/WebServices/DataContracts/Common">Clean</State>
                                            <ActionStatusCode>HK</ActionStatusCode>
                                            <ArrivalStation>DEN</ArrivalStation>
                                            <CabinOfService></CabinOfService>
                                            <ChangeReasonCode />
                                            <DepartureStation>SLC</DepartureStation>
                                            <SegmentType />
                                            <STA>2009-07-23T03:00:00</STA>
                                            <STD>2009-07-23T00:00:00</STD>
                                            <International>false</International>
                                            <FlightDesignator 
                    xmlns:a="http://schemas.navitaire.com/WebServices/DataContracts/Common">
                                                <a:CarrierCode>1L</a:CarrierCode>
                                                <a:FlightNumber>427</a:FlightNumber>
                                                <a:OpSuffix></a:OpSuffix>
                                            </FlightDesignator>
                                            <XrefFlightDesignator i:nil="true" 
                    xmlns:a="http://schemas.navitaire.com/WebServices/DataContracts/Common" />
                                            <Fares>
                                                <Fare i:type="AvailableFare">
                                                    <State 
                    xmlns="http://schemas.navitaire.com/WebServices/DataContracts/Common">New</State>
                                                    <ClassOfService>Y</ClassOfService>
                                                    <ClassType />
                                                   <RuleTariff />
                                                    <PaxFares>
                                                        <PaxFare>
                                                            <State 
                    xmlns="http://schemas.navitaire.com/WebServices/DataContracts/Common">New
                                                              </State>
                                                            <PaxType>ADT</PaxType>
                                                            <PaxDiscountCode />
                                                            <FareDiscountCode />
                                                            <ServiceCharges>
                                                                <BookingServiceCharge>
                                                                   <State 
                    xmlns="http://schemas.navitaire.com/WebServices/DataContracts/Common">
                                                                    New</State>
                                                                    <ChargeType>FarePrice</ChargeType>
                                                                    <CollectType>SellerChargeable
                                                                    </CollectType>
                                                                   <ChargeCode />
                                                                    <TicketCode />
                                                                    <CurrencyCode>USD</CurrencyCode>
                                                                    <Amount>5.0000</Amount>
                                                                    <ChargeDetail />
                                                                    <ForeignCurrencyCode>USD
                                                                     </ForeignCurrencyCode>
                                                                    <ForeignAmount>5.0000</ForeignAmount>
                                                                </BookingServiceCharge>
                                                                <BookingServiceCharge>
                                                                    <State 
                    xmlns="http://schemas.navitaire.com/WebServices/DataContracts/Common">Clean</State>
                                                                    <ChargeType>Tax</ChargeType>
                                                                    <CollectType>SellerChargeable
                                                                    </CollectType>
                                                                    <ChargeCode />
                                                                    <TicketCode />
                                                                    <CurrencyCode>USD</CurrencyCode>
                                                                    <Amount>20.000000</Amount>
                                                                    <ChargeDetail>TaxFeeSum
                                                                     </ChargeDetail>
                                                                    <ForeignCurrencyCode>USD
                                                                     </ForeignCurrencyCode>
                                                                    <ForeignAmount>20.000000
                                                                     </ForeignAmount>
                                                                </BookingServiceCharge>
                                                            </ServiceCharges>
                                                        </PaxFare>
                                                        <PaxFare>
                                                           <State 
                    xmlns="http://schemas.navitaire.com/WebServices/DataContracts/Common">New</State>
                                                            <PaxType>CHD</PaxType>
                                                            <PaxDiscountCode />
                                                            <FareDiscountCode />                                                            
                                                               <ServiceCharges>
                                                                <BookingServiceCharge>
                                                                   <State 
                    xmlns="http://schemas.navitaire.com/ WebServices/DataContracts/Common">
                                                                     New</State>
                                                                    <ChargeType>FarePrice</ChargeType>
                                                                    <CollectType>SellerChargeable
                                                                     </CollectType>
                                                                    <ChargeCode />
                                                                    <TicketCode />
                                                                    <CurrencyCode>USD</CurrencyCode>
                                                                    <Amount>35.0000</Amount>
                                                                    <ChargeDetail />
                                                                    <ForeignCurrencyCode>USD
                                                                      </ForeignCurrencyCode>
                                                                   <ForeignAmount>35.0000</ForeignAmount>
                                                                </BookingServiceCharge>
                                                                <BookingServiceCharge>
                                                                  <State 
                    xmlns="http://schemas.navitaire.com/WebServices/DataContracts/Common">
                                                                   Clean</State>
                                                                    <ChargeType>Tax</ChargeType>
                                                                    <CollectType>SellerChargeable
                                                                     </CollectType>
                                                                    <ChargeCode />
                                                                    <TicketCode />
                                                                    <CurrencyCode>USD</CurrencyCode>
                                                                    <Amount>20.000000</Amount>
                                                                    <ChargeDetail>TaxFeeSum
                                                                    </ChargeDetail>
                                                                    <ForeignCurrencyCode>USD
                                                                     </ForeignCurrencyCode>
                                                                    <ForeignAmount>20.000000
                                                                     </ForeignAmount>
                                                                </BookingServiceCharge>
                                                            </ServiceCharges>
                                                        </PaxFare>
                                                    </PaxFares>
                                                    <ProductClass />
                                                    <IsAllotmentMarketFare>false
                                                     </IsAllotmentMarketFare>
                                                    <TravelClassCode></TravelClassCode>
                                                    <FareSellKey>0~Y~YGROUP~1000~~~X</FareSellKey>
                                                    <AvailableCount>60</AvailableCount>
                                                    <Status>Active</Status>
                                                </Fare>
                                            </Fares>
                                           
                                            <PaxBags />
                                            <PaxSeats />
											
                                            <PaxSegments />
                                            <PaxTickets />
                                            <PaxSeatPreferences i:nil="true" />
                                            <SalesDate>9999-12-31T00:00:00Z</SalesDate>
                                            <PaxScores />
            <SegmentSellKey>1L~ 427~ ~~SLC~07/23/2009 00:00~DEN~07/23/2009 03:00</SegmentSellKey>
                                        </Segment>
                                    </Segments>
     <JourneySellKey>1L~ 427~ ~~SLC~07/23/2009 00:00~DEN~07/23/2009 03:00</JourneySellKey>
                                </Journey>
                                <Journey>
                                    <State 
                xmlns="http://schemas.navitaire.com/WebServices/DataContracts/Common">New</State>
                                    <NotForGeneralUse>false</NotForGeneralUse>
                                    <Segments>
                                        <Segment>
                                            <State 
                xmlns="http://schemas.navitaire.com/WebServices/DataContracts/Common">Clean</State>
                                            <ActionStatusCode>HK</ActionStatusCode>
                                            <ArrivalStation>DEN</ArrivalStation>
                                            <CabinOfService></CabinOfService>
                                            <ChangeReasonCode />
                                            <DepartureStation>SLC</DepartureStation>
                                            <SegmentType />
                                            <STA>2009-07-24T00:00:00</STA>
                                            <STD>2009-07-23T00:00:00</STD>
                                            <International>false</International>
                                            <FlightDesignator 
                xmlns:a="http://schemas.navitaire.com/WebServices/DataContracts/Common">
                                                <a:CarrierCode>1L</a:CarrierCode>
                                                <a:FlightNumber> 428</a:FlightNumber>
                                                <a:OpSuffix></a:OpSuffix>
                                            </FlightDesignator>
                                            <XrefFlightDesignator i:nil="true" 
                xmlns:a="http://schemas.navitaire.com/WebServices/DataContracts/Common" />
                                            <Fares />
                                            
                                            <PaxBags />
                                            <PaxSeats />
                                            <PaxSSRs />
                                            <PaxSegments />
                                            <PaxTickets />
                                            <PaxSeatPreferences i:nil="true" />
                                            <SalesDate>9999-12-31T00:00:00Z</SalesDate>
                                            <PaxScores />
              <SegmentSellKey>1L~ 428~ ~~SLC~07/23/2009 00:00~DEN~07/24/2009 00:00</SegmentSellKey>
                                        </Segment>
                                    </Segments>
             <JourneySellKey>1L~ 428~ ~~SLC~07/23/2009 00:00~DEN~07/24/2009 00:00</JourneySellKey>
                                </Journey>
                            </Journeys>
                        </JourneyDateMarket>
                    </ArrayOfJourneyDateMarket>
                
</s:Envelope>';

	public function getXmlResponse()
	{
		return $this->string;
	}
}