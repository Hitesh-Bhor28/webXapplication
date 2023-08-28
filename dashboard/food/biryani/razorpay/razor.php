<?php

    $apikey = "rzp_test_rGijuZptM4bTSD";


?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<form action="" method="post">
<script 
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apikey; ?>"
    data-amount="29935"
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay"
    data-name="Arme corp"
    data-description="A discrip of this page"
    data-image="https://emample.com"
    data-prefill.name="hitesh"
    data-prefill.email="abc@gmail.com"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

