<?php
require_once('class/SagePay.php');
    $fullname = 'Full Name';
	$billing=[
			'firstName'=>'',
			'lastName'=>'',
			'address1'=>'',
			'city'=>'',
			'postcode'=>'',
			'country'=>'GB',
		];
    $sagePay->setAmount($amount);
    $sagePay->setCurrency('GBP');
    $sagePay->setDescription('Sage Payment Integration Test');
    $sagePay->setCustomerName($fullname);

    $sagePay->setBillingSurname($billing['firstName']);
    $sagePay->setBillingFirstnames($billing['lastName']);
    $sagePay->setBillingAddress1($billing['address1']);
    $sagePay->setBillingCity($billing['city']);
    $sagePay->setBillingPostCode($billing['postcode']);
    $sagePay->setBillingCountry($billing['country']);

    $sagePay->setDeliverySurname($billing['firstName']);
    $sagePay->setDeliveryFirstnames($billing['lastName']);
    $sagePay->setDeliveryAddress1($billing['address1']);
    $sagePay->setDeliveryCity($billing['city']);
    $sagePay->setDeliveryPostCode($billing['postcode']);
    $sagePay->setDeliveryCountry('GB');



$sagePay->setSuccessURL('http://example.com/success');
$sagePay->setFailureURL('http://example.com/fail');
?>
<form id="frmContact" method="POST" action="https://test.sagepay.com/gateway/service/vspform-register.vsp"  >
		<input type="hidden" name="VPSProtocol" value= "3.00">
		<input type="hidden" name="TxType" value= "PAYMENT">
		<input type="hidden" name="Vendor" value= "miragedistribut">
		<input type="hidden" name="Crypt" value= "<?php echo $sagePay->getCrypt(); ?>">
            <input type="submit" value="here" style="visibility: hidden;" class="sagePay">
    </form>