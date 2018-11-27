<?php
namespace Blueair\Response;

class LogonResponse
{
	private $string = '<?xml version="1.0" encoding="utf-8"?>
	<Envelope xmlns="http://schemas.xmlsoap.org/soap/envelope/">
	<Header></Header>
	<Body>
	<LogonResponse xmlns="http://schemas.navitaire.com/WebServices">
	<Signature>PT993DQUtD8=|R6PCdQ47cdg15TtdBlPFCLeVP4nbhp6aVDNdQ4ioMjrjxkzSZrt/1Lw6cipBFzP9IqJEcjrtyWBQnPtQje/6/Nf4pTdFXoMWFbdJHTFnKr7EBrlgXxzRONsItS5NkLthHkLba9p/Abs=
	</Signature>
	</LogonResponse>
	</Body></Envelope>';

	public function getString()
	{
		return $this->string;
	}
}