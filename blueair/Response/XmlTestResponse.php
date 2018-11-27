<?php
namespace Blueair\Response;



class XmlTestResponse
{
	private $string = '<?xml version="1.0" encoding="utf-8"?>
<s:Envelope xmlns:s = "http://schemas.xmlsoap.org/soap/envelope/">
    <s:Body>
        <GetAvailabilityByTripResponse 
            xmlns = "http://schemas.navitaire.com/WebServices/ServiceContracts/BookingService">
            <GetTripAvailabilityResponse 
            xmlns = "http://schemas.navitaire.com/WebServices/DataContracts/Booking" 
            xmlns:i = "http://www.w3.org/2001/XMLSchema-instance">
                <OtherServiceInfoList 
                xmlns:a = "http://schemas.navitaire.com/WebServices/DataContracts/Common"/>
                <Schedules>
                    <ArrayOfJourneyDateMarket>
                        <JourneyDateMarket>
                            <DepartureDate>2010-02-21T00:00:00</DepartureDate>
                            <DepartureStation>SLC</DepartureStation>
                            <ArrivalStation>DEN</ArrivalStation>
                            <Journeys>
                                <Journey>
                                    <State 
                                   xmlns = "http://schemas.navitaire.com/WebServices/DataContracts/Common">New</State>
                                    <NotForGeneralUse>false</NotForGeneralUse>
                                    <Segments>
                                        <Segment>
                                            <State 
                                            xmlns = "http://schemas.navitaire.com/DataContracts/Common">Clean</State>
                                            <ActionStatusCode>HK</ActionStatusCode>
                                            <ArrivalStation>DEN</ArrivalStation>
                                            <CabinOfService></CabinOfService>
                                            <ChangeReasonCode/>
                                            <DepartureStation>SLC</DepartureStation>
                                            <PriorityCode/>
                                            <SegmentType/>
                                            <STA>2010-02-21T03:00:00</STA>
                                            <STD>2010-02-21T01:00:00</STD>
                                            <International>false</International>
                                            <FlightDesignator 
                            xmlns:a = "http://schemas.navitaire.com/WebServices/DataContracts/Common">
                                                <a:CarrierCode>NV</a:CarrierCode>
                                                <a:FlightNumber>1111</a:FlightNumber>
                                                <a:OpSuffix></a:OpSuffix>
                                            </FlightDesignator>
                                            <XrefFlightDesignator i:nil = "true" 
                            xmlns:a = "http://schemas.navitaire.com/WebServices/DataContracts/Common"/>
                                            <Fares/>
                                            <Legs>
                                                <Leg>
                                                    <State 
                            xmlns = "http://schemas.navitaire.com/WebServices/DataContracts/Common">Clean</State>
                                                    <ArrivalStation>DEN</ArrivalStation>
                                                    <DepartureStation>SLC</DepartureStation>
                                                    <STA>2010-02-21T03:00:00</STA>
                                                    <STD>2010-02-21T01:00:00</STD>
                                                    <FlightDesignator 
                            xmlns:a = "http://schemas.navitaire.com/WebServices/DataContracts/Common">
                                                        <a:CarrierCode>NV</a:CarrierCode>
                                                        <a:FlightNumber>1111</a:FlightNumber>
                                                        <a:OpSuffix></a:OpSuffix>
                                                    </FlightDesignator>
                                                    <LegInfo>
                                                        <State 
                            xmlns = "http://schemas.navitaire.com/WebServices/DataContracts/Common">Clean
                                                          </State>
                                                        <AdjustedCapacity>136</AdjustedCapacity>
                                                        <EquipmentType>737</EquipmentType>
                                                        <EquipmentTypeSuffix/>
                                                        <ArrivalTerminal/>
                                                        <ArrvLTV>360</ArrvLTV>
                                                        <Capacity>126</Capacity>
                                                        <CodeShareIndicator></CodeShareIndicator>
                                                        <DepartureTerminal/>
                                                        <DeptLTV>360</DeptLTV>
                                                        <ETicket>true</ETicket>
                                                        <FlifoUpdated>false</FlifoUpdated>
                                                        <IROP>false</IROP>
                                                        <Status>Normal</Status>
                                                        <Lid>136</Lid>
                                                        <OnTime></OnTime>
                                                        <PaxSTA>2010-02-21T03:00:00</PaxSTA>
                                                        <PaxSTD>2010-02-21T01:00:00</PaxSTD>
                                                        <PRBCCode>737</PRBCCode>
                                                        <ScheduleServiceType>J</ScheduleServiceType>
                                                        <Sold>0</Sold>
                                                        <OutMoveDays>0</OutMoveDays>
                                                        <BackMoveDays>0</BackMoveDays>
                                                        <LegNests/>
                                                        <LegSSRs/>
                                                        <OperatingFlightNumber></OperatingFlightNumber>
                                                        <OperatedByText/>
                                                        <OperatingCarrier/>
                                                        <OperatingOpSuffix></OperatingOpSuffix>
                                                        <SubjectToGovtApproval>false
                                                         </SubjectToGovtApproval>
                                                        <MarketingCode/>
                                                        <ChangeOfDirection>false</ChangeOfDirection>
                                                        <MarketingOverride>false</MarketingOverride>
                                                    </LegInfo>
                                                    <OperationsInfo i:nil = "true"/>
                                                </Leg>
                                            </Legs>
                                            <PaxBags/>
                                            <PaxSeats/>
                                            <PaxSSRs/>
                                            <PaxSegments/>
                                            <PaxTickets/>
                                            <PaxSeatPreferences i:nil = "true"/>
                                            <SalesDate>9999-12-31T00:00:00Z</SalesDate>
                                            <SegmentSellKey>NV~1111~ ~~SLC~02/21/2010 01:00~DEN~
                                             02/21/2010 03:00</SegmentSellKey>
                                            <PaxScores/>
                                            <ChannelType>Default</ChannelType>
                                        </Segment>
                                    </Segments>
                                    <JourneySellKey>NV~1111~ ~~SLC~02/21/2010 01:00~DEN~
                                      02/21/2010 03:00</JourneySellKey>
                                </Journey>
                                <Journey>
                                    <State 
                     xmlns = "http://schemas.navitaire.com/WebServices/DataContracts/Common">New</State>
                                    <NotForGeneralUse>false</NotForGeneralUse>
                                    <Segments>
                                        <Segment>
                                            <State 
                    xmlns = "http://schemas.navitaire.com/WebServices/DataContracts/Common">Clean</State>
                                            <ActionStatusCode>HK</ActionStatusCode>
                                            <ArrivalStation>DEN</ArrivalStation>
                                            <CabinOfService></CabinOfService>
                                            <ChangeReasonCode/>
                                            <DepartureStation>SLC</DepartureStation>
                                            <PriorityCode/>
                                            <SegmentType/>
                                            <STA>2010-02-22T00:00:00</STA>
                                            <STD>2010-02-21T00:00:00</STD>
                                            <International>false</International>
                                            <FlightDesignator 
                             xmlns:a = "http://schemas.navitaire.com/WebServices/DataContracts/Common">
                                                <a:CarrierCode>NV</a:CarrierCode>
                                                <a:FlightNumber>4646</a:FlightNumber>
                                                <a:OpSuffix></a:OpSuffix>
                                            </FlightDesignator>
                                            <XrefFlightDesignator i:nil = "true" 
                            xmlns:a = "http://schemas.navitaire.com/WebServices/DataContracts/Common"/>
                                            <Fares/>
                                            <Legs>
                                                <Leg>
                                                    <State 
                             mlns = "http://schemas.navitaire.com/WebServices/DataContracts/Common">Clean</State>
                                                    <ArrivalStation>DEN</ArrivalStation>
                                                    <DepartureStation>SLC</DepartureStation>
                                                    <STA>2010-02-22T00:00:00</STA>
                                                    <STD>2010-02-21T00:00:00</STD>
                                                    <FlightDesignator 
                            xmlns:a = "http://schemas.navitaire.com/WebServices/DataContracts/Common">
                                                        <a:CarrierCode>NV</a:CarrierCode>
                                                        <a:FlightNumber>4646</a:FlightNumber>
                                                        <a:OpSuffix></a:OpSuffix>
                                                    </FlightDesignator>
                                                    <LegInfo>
                                                        <State 
                            xmlns = "http://schemas.navitaire.com/WebServices/DataContracts/Common">Clean</State>
                                                        <AdjustedCapacity>170</AdjustedCapacity>
                                                        <EquipmentType>CHO</EquipmentType>
                                                        <EquipmentTypeSuffix>CHO</EquipmentTypeSuffix>
                                                        <ArrivalTerminal/>
                                                        <ArrvLTV>60</ArrvLTV>
                                                        <Capacity>12</Capacity>
                                                        <CodeShareIndicator></CodeShareIndicator>
                                                        <DepartureTerminal/>
                                                        <DeptLTV>60</DeptLTV>
                                                        <ETicket>true</ETicket>
                                                        <FlifoUpdated>false</FlifoUpdated>
                                                        <IROP>false</IROP>
                                                        <Status>Normal</Status>
                                                        <Lid>170</Lid>
                                                        <OnTime></OnTime>
                                                        <PaxSTA>2010-02-22T00:00:00</PaxSTA>
                                                        <PaxSTD>2010-02-21T00:00:00</PaxSTD>
                                                        <PRBCCode>757</PRBCCode>
                                                        <ScheduleServiceType>J</ScheduleServiceType>
                                                        <Sold>0</Sold>
                                                        <OutMoveDays>0</OutMoveDays>
                                                        <BackMoveDays>0</BackMoveDays>
                                                        <LegNests/>
                                                        <LegSSRs/>
                                                        <OperatingFlightNumber></OperatingFlightNumber>
                                                        <OperatedByText/>
                                                        <OperatingCarrier/>
                                                        <OperatingOpSuffix></OperatingOpSuffix>
                                                        <SubjectToGovtApproval>false
                                                         </SubjectToGovtApproval>
                                                        <MarketingCode/>
                                                        <ChangeOfDirection>false</ChangeOfDirection>
                                                        <MarketingOverride>false</MarketingOverride>
                                                    </LegInfo>
                                                    <OperationsInfo i:nil = "true"/>
                                                </Leg>
                                            </Legs>
                                            <PaxBags/>
                                            <PaxSeats/>
                                            <PaxSSRs/>
                                            <PaxSegments/>
                                            <PaxTickets/>
                                            <PaxSeatPreferences i:nil = "true"/>
                                            <SalesDate>9999-12-31T00:00:00Z</SalesDate>
                                            <SegmentSellKey>NV~4646~ ~~SLC~02/21/2010 
                                              00:00~DEN~02/22/2010 00:00</SegmentSellKey>
                                            <PaxScores/>
                                            <ChannelType>Default</ChannelType>
                                        </Segment>
                                    </Segments>
                                    <JourneySellKey>NV~4646~ ~~SLC~02/21/2010 00:00~DEN~02/22/2010 00:00</JourneySellKey>
                                </Journey>
                                <Journey>
                                    <State
                    xmlns = "http://schemas.navitaire.com/WebServices/DataContracts/Common">New</State>
                                    <NotForGeneralUse>false</NotForGeneralUse>
                                    <Segments>
                                        <Segment>
                                            <State 
                     xmlns = "http://schemas.navitaire.com/WebServices/DataContracts/Common">Clean</State>
                                            <ActionStatusCode>HK</ActionStatusCode>
                                            <ArrivalStation>DEN</ArrivalStation>
                                            <CabinOfService></CabinOfService>
                                            <ChangeReasonCode/>
                                            <DepartureStation>SLC</DepartureStation>
                                            <PriorityCode/>
                                            <SegmentType/>
                                            <STA>2010-02-21T05:00:00</STA>
                                            <STD>2010-02-21T00:00:00</STD>
                                            <International>false</International>
                                            <FlightDesignator 
                     xmlns:a = "http://schemas.navitaire.com/WebServices/DataContracts/Common">
                                                <a:CarrierCode>NV</a:CarrierCode>
                                                <a:FlightNumber>4400</a:FlightNumber>
                                                <a:OpSuffix></a:OpSuffix>
                                            </FlightDesignator>
                                            <XrefFlightDesignator i:nil = "true" 
                     xmlns:a = "http://schemas.navitaire.com/WebServices/DataContracts/Common"/>
                                            <Fares/>
                                            <Legs>
                                                <Leg>
                                                    <State 
                   xmlns = "http://schemas.navitaire.com/WebServices/DataContracts/Common">Clean</State>
                                                    <ArrivalStation>DEN</ArrivalStation>
                                                    <DepartureStation>SLC</DepartureStation>
                                                    <STA>2010-02-21T05:00:00</STA>
                                                    <STD>2010-02-21T00:00:00</STD>
                                                    <FlightDesignator 
                    xmlns:a = "http://schemas.navitaire.com/WebServices/DataContracts/Common">
                                                        <a:CarrierCode>NV</a:CarrierCode>
                                                        <a:FlightNumber>4400</a:FlightNumber>
                                                        <a:OpSuffix></a:OpSuffix>
                                                    </FlightDesignator>
                                                    <LegInfo>
                                                        <State 
                    xmlns = "http://schemas.navitaire.com/WebServices/DataContracts/Common">Clean</State>
                                                        <AdjustedCapacity>165</AdjustedCapacity>
                                                        <EquipmentType>AIR</EquipmentType>
                                                        <EquipmentTypeSuffix/>
                                                        <ArrivalTerminal/>
                                                        <ArrvLTV>0</ArrvLTV>
                                                        <Capacity>30</Capacity>
                                                        <CodeShareIndicator></CodeShareIndicator>
                                                        <DepartureTerminal/>
                                                        <DeptLTV>0</DeptLTV>
                                                        <ETicket>true</ETicket>
                                                        <FlifoUpdated>false</FlifoUpdated>
                                                        <IROP>false</IROP>
                                                        <Status>Normal</Status>
                                                        <Lid>165</Lid>
                                                        <OnTime></OnTime>
                                                        <PaxSTA>2010-02-21T05:00:00</PaxSTA>
                                                        <PaxSTD>2010-02-21T00:00:00</PaxSTD>
                                                        <PRBCCode>NEST1</PRBCCode>
                                                        <ScheduleServiceType>J</ScheduleServiceType>
                                                        <Sold>0</Sold>
                                                        <OutMoveDays>0</OutMoveDays>
                                                        <BackMoveDays>0</BackMoveDays>
                                                        <LegNests/>
                                                        <LegSSRs/>
                                                        <OperatingFlightNumber></OperatingFlightNumber>
                                                        <OperatedByText/>
                                                        <OperatingCarrier/>
                                                        <OperatingOpSuffix></OperatingOpSuffix>
                                                        <SubjectToGovtApproval>false
                                                          </SubjectToGovtApproval>
                                                        <MarketingCode/>
                                                        <ChangeOfDirection>false</ChangeOfDirection>
                                                        <MarketingOverride>false</MarketingOverride>
                                                    </LegInfo>
                                                    <OperationsInfo i:nil = "true"/>
                                                </Leg>
                                            </Legs>
                                            <PaxBags/>
                                            <PaxSeats/>
                                            <PaxSSRs/>
                                            <PaxSegments/>
                                            <PaxTickets/>
                                            <PaxSeatPreferences i:nil = "true"/>
                                            <SalesDate>9999-12-31T00:00:00Z</SalesDate>
                                            <SegmentSellKey>NV~4400~ ~~SLC~02/21/2010 00:00~DEN~
                                             02/21/2010 05:00</SegmentSellKey>
                                            <PaxScores/>
                                            <ChannelType>Default</ChannelType>
                                        </Segment>
                                    </Segments>
                                    <JourneySellKey>NV~4400~ ~~SLC~02/21/2010 00:00~DEN~02/21/2010 
                                      05:00</JourneySellKey>
                                </Journey>
                            </Journeys>
                        </JourneyDateMarket>
                    </ArrayOfJourneyDateMarket>
                </Schedules>
            </GetTripAvailabilityResponse>
        </GetAvailabilityByTripResponse>
    </s:Body>
</s:Envelope>';

	public function getXmlResponse()
	{
		return $this->string;
	}
}