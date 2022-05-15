<?php 

// to Hide All Errors:
        error_reporting(0);
        ini_set('display_errors', 0);

// to Show All Errors:
        // error_reporting(E_ALL);
        // ini_set('display_errors', 1);

/////////////////////////////////////////////

$soldDate = @($_POST['soldDate']);
$leadid = @($_POST['leadid']);
$reference_number = @($_POST['reference_number']);
$repName = @($_POST['repName']);
$repContact = @($_POST['repContact']);
$firstName = @($_POST['firstName']);
$lastName = @($_POST['lastName']);
$name = $firstName . ' ' . $lastName;
$address = @($_POST['address']);
$postCode = @($_POST['postCode']);
$phoneNumber = @($_POST['phoneNumber']);
$mobileNumber = @($_POST['mobileNumber']);
$email = @($_POST['email']);

$availableToSurvey = @($_POST['availableToSurvey']);
$purchaseType = @($_POST['purchaseType']);
$financeAgreementNumber = @($_POST['financeAgreementNumber']);
$installationNotes = htmlspecialchars(@($_POST['installationNotes']));
$subjectToFullSurvey = @($_POST['subjectToFullSurvey']);
$productType = @($_POST['productType']);
$spcification_image = @($_POST['spcification_image']);
$paymentType = @($_POST['paymentType']);
$amountOf = @($_POST['amountOf']);
$contractPrice = @($_POST['contractPrice']);
$adminFee = @($_POST['adminFee']);
$depositPaid = @($_POST['depositPaid']);
$bankTransfer = @($_POST['bankTransfer']);
$subtotal = $contractPrice + $adminFee;
$balancedue = $subtotal - $depositPaid;
// ADDONS
// SORTED
$squareMeterage = @($_POST['gardenHomeSize']);
$directionOfCladding = @($_POST['directionOfCladding']);
    if ($directionOfCladding === 'vertical') {
        # code...
        $soffit = 1;
        $fascia = 1;
    } else {
        # code...
        $gutters = 1;
        $dpipe = 1;
    }
    
$typeOfCladding = @($_POST['typeOfCladding']);
if ($typeOfCladding === 'westernRedCedarCladding') {
    # code...
    $chimneyRemoval = 1;

} else {
    # code...
    $lead = 1;

}
$typeOfDoors = @($_POST['typeOfDoors']);
if ($typeOfDoors === 'patio') {
    # code...
    $tile = 1;
    $slate = 1;
}
else {
    # code...
    $skylight = 1;
    $velux = 1;
}
$typeOfWindows = @($_POST['typeOfWindows']);
if ($typeOfWindows === 'slimline') {
    # code...
    $smoothCoatBases = 1;
}
elseif ($typeOfWindows === 'fullLength') {
    # code...
    $smoothCoatWindows = 1;
}
else {
    $paintCastIronPipes = 1;
    # code...
}
$oversills = @($_POST['compositeDecking']);
$roughcastChimney = @($_POST['waterAndWasteConnection']);
$solatube = @($_POST['artificialGrass']);
$skipOnRoad = @($_POST['skylight']);
$skipOffRoad = @($_POST['skylight']);
$overheadCables = @($_POST['glassOrPlasterboardInternalWall']);
$aerial = @($_POST['hardLandscaping']);
$satDish = @($_POST['hardLandscaping']);
$scaffoldFront = @($_POST['catSixConnection']);
$scaffoldBack = @($_POST['additionalOverHangs']);

$numberOfWindows = @($_['numberOfWindows']);

// $lead = @($_POST['lead']);
// $tile = @($_POST['tile']);
// $slate = @($_POST['slate']);
// $skylight = @($_POST['skylight']);
// $velux = @($_POST['velux']);

// // NOT SORTED
// $scopeOfWork = @($_POST['scopeOfWork']);
// $gardenHomeSize = @($_['gardenHomeSize']);
// $skipOffRoad = @($_POST['skipOffRoad']);
// $skipOnRoad = @($_POST['skipOnRoad']);
// $typeOfWindows = @($_['typeOfWindows']);
// $overheadCables = @($_POST['overheadCables']);
// $typeOfDoors = @($_['typeOfDoors']);
// $aerial = @($_POST['aerial']);
// $typeOfCladding = @($_['typeOfCladding']);
// $satDish = @($_POST['satDish']);
// $directionOfCladding = @($_['directionOfCladding']);
// $scaffoldFront = @($_POST['scaffoldFront']);
// $compositeDecking = @($_['compositeDecking']);
// $scaffoldBack = @($_POST['scaffoldBack']);
// $skylight = @($_['skylight']);
// $scaffoldGable = @($_POST['scaffoldGable']);
// $waterAndWasteConnection = @($_['waterAndWasteConnection']);
// $glassOrPlasterboardInternalWall = @($_['glassOrPlasterboardInternalWall']);
// $fascia = @($_POST['fascia']);
// $hardLandscaping = @($_['hardLandscaping']);

// $catSixConnection = @($_['catSixConnection']);
// $dpipe = @($_POST['dpipe']);
// $additionalOverhangs = @($_['additionalOverhangs']);

// $artificialGrass = @($_['artificialGrass']);





// $smoothCoatBases = @($_POST['smoothCoatBases']);
// $smoothCoatWindows = @($_POST['smoothCoatWindows']);
// $paintCastIronPipes = @($_POST['paintCastIronPipes']);
// $oversills = @($_POST['oversills']);
// $roughcastChimney = @($_POST['roughcastChimney']);
// $solatube = @($_POST['solatube']);
$iAgreeToContact = @($_POST['iAgreeToContact']);
$signature = @($_POST['signature']);
$specimage = @($_POST['spcification_image']);

$date = $soldDate; 
$rep = $repName . ' ' . $repContact;
// $solddate = Date('d/m/Y'); 

?>

<html><meta name="apple-mobile-web-app-capable" content="yes">
    <head>
    <!-- // <script src="https://cdn.lr-ingest.io/LogRocket.min.js" crossorigin="anonymous"></script> -->
    <!-- // <script>window.LogRocket && window.LogRocket.init(`g3wh35/lomond`);</script> -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <style>
    body {
        /*width: 550px;*/
        font-family: Arial;
        /*-webkit-touch-callout: default;*/
        /*-webkit-user-select: default;*/
    }
    #submit {
        padding: 10px 40px;
        background: #586e75;
        border: #485c61 1px solid;
        color: #FFF;
        border-radius: 2px;
        /* cursor:pointer; */
    }
    #form {
        background-color: lightblue;
    }
    .form-row {
        padding: 20px;
        border-top: #8aacb7 1px solid;
    }
    .input-field {
        background: #FFF;
        padding: 10px;
        margin-left: 15px;
        width: 250px;
        border-radius: 2px;
        border: #8aacb7 1px solid;
    }
    .button-row {
        padding: 10px 20px;
        border-top: #8aacb7 1px solid;
    }
    #validation-response {
        display:none;
        background: #fdc0c0;
        padding: 10px 20px;
    }
    #output{
        /*padding-top: 80px;*/
    /*width: 100vw;*/
    
    }
    .nodrag {
       -webkit-user-drag: none;
      -moz-user-drag: none;
      -o-user-drag: none;
       user-drag: none;
    }
    #header-bar{
        background-color: blue;
        margin: 0;
        padding: 0;
        top: 0;
        left: 60px;
        margin-bottom: 60px;
        height: 80px;
        min-width: 100vw;
        width: 100vw;
        /*justify-content: center;*/
        /*align-content: center;*/
    }
    
    /*.button_link{*/
    /*     padding-top: 12px; */
    /*     padding-bottom: 12px; */
    /*     padding-left: 24px; */
    /*     padding-right: 24px; */
    /*     background-color: */
    /*     black; color: white;   */
    /*     vertical-align: middle;*/
    /*}*/

    .btnStyles{
        padding: 12px; 
        background-color: black; 
        color: white;
        margin-left: 12px;
                 padding-top: 12px; 
         padding-bottom: 12px; 
         padding-left: 24px; 
         padding-right: 24px; 
         font-wight: 900;
         font-family: Arial;
         font-size: 1.4em;
    }
#cen_text{
    width: 100vw;
    /*height: 80px;*/
    display: inline-flex;
    align-content: center;
    justify-content: center;
    /*hotizontal-align: center;*/
    vertical-align: middle;
    padding-top: 12px;
    margin-top: 6px;
    /*width: 620px;*/
    /*margin-left: 30%;*/
    /*margin-top: 25px;*/
}
</style>
<?php echo('<script>
function sendEmail() {
var contracto = document.getElementsByClassName("imageClass");
newContracto = contracto[0].value;
localStorage.setItem("newContracto", newContracto);
console.log(newContracto);
  Email.send({
    SecureToken : "f59f3116-a243-4f79-9c3e-072e105b6faf",
    To : [`' . $email . '`,`hello@bricklane-media.uk`,`declan@lomondimprovements.co.uk`],
    From : "no-reply@lomondcrm.co.uk",
    Subject : "Lomond Improvements | ' . $name . '",
    Body : `<h3>Lomond Improvements</h3>
    <h4>Your contract reference number is: ' . $reference_number . '</h4>
    <h4>Attached below is your signed contract with Lomond Improvements</h4>


<p>
TERMS AND CONDITIONS PLEASE READ THESE TERMS AND CONDITIONS CAREFULLY BEFORE PLACING YOUR ORDER AND RETAIN A COPY OF THESE TERMS AND YOUR ORDER FOR FUTURE REFERENCE.
</p><p>
1. All orders based on this Purchase Contract are subject to acceptance in writing and no works will commence without a written order accepted by ourselves. Unless stated to the contrary this purchase contract estimate has been based on material, labour, plant and equipment prices at the date of purchase contract estimate, If the cost to the Company of carrying out the work is subsequently increased by reason of increases in the cost materials and/or labour and/or any other factor outside the control of the Company, then the Company shall notify the Customer before undertaking any work to which the increase will apply and the Customer may require the Company to discontinue the work and shall pay the Company only for the work already carried out.
</p><p>
2. The prices and rates stated in this purchase contract are inclusive of Value Added Tax.
</p><p>
3. Requests for payment in the form of interim applications will be made during the course of the Contract to the value of the work completed at that time together with the value of materials delivered to site or properly held in stock for the Contract at the merchanting division of the Company. The first interim payment amounting to 30% of the value of the Contract is due for payment upon signature of the purchase contract. On completion of the Contract and installation the remaining & final balance is due before removal of scaffolding. In all cases payment becomes due on completion including the VAT. In the unfortunate event of payment not being made by the due date, the Company reserve the right to suspend work on site until payment is received. Thereafter the Customer will be liable for additional costs and interest. If final balance is not paid in full all guarantees are no longer valid
</p><p>
4. Interest will be charged at 10% per week on overdue accounts and outstanding balances.
</p><p>
5. ‘Payment is due on completion of the installation. The Purchaser shall not be entitled by reason of any alleged minor defect to withhold more than a proportionate amount of the sum due on the due date and the right of title to all materials supplied remain the property of the Company or their successors until paid for in full. Materials and goods delivered to the job or site will remain our property until they are either fixed or paid for by the customer who will be responsible for their safe custody and for all loss or damage until the contract is completed. All surplus materials are the Company’s property and will be removed from site on completion.
</p><p>
6. The Customer shall not assign the contractual rights and obligations without written consent of the Company, who also reserved the right to subcontract sections of the Works as may be necessary.
</p><p>
7. Copyright in all specification descriptions, quantities, prices, rates, drawings, designs, catalogue and other literary works described in this estimate vest in and remain the property of the Company and the Customer is not entitled himself or to authorise any person or firm to reproduce all or any part.
</p><p>
8. The Company are fully insured against accidental damage to property and injury to persons. Irrespective of those insurances the existing structures together with the contents thereof owned or controlled by the Customer or for which the Customer is responsible, and the Works together with all unfixed materials, goods and items delivered thereto, placed on or adjacent to the Works and intended therefore (except plant, tools and equipment) shall be at the sole risk of the Customer as regards loss or damage by theft, fire, lightning, explosion, storm, tempest, flood, bursting or overflowing tanks, apparatus or pipes, earthquake, aircraft and any other aerial devices or articles dropped therefrom, riot and civil commotion. The Customer shall maintain adequate insurance against such risks and shall send a copy of this estimate, together with the conditions thereon to his insurers as advice that building works are being carried out on his property and shall make available such evidence of insurance to the insurance brokers of the Company.
</p><p>
9. The Company cannot be held responsible for any damage caused by the movement or vibration to ceilings or soffits and to areas where internal finishes are fixed to structural members or timbers supporting our work where reasonable care and attention has been taken. The Company do not accept responsibility for any deterioration or damage to rainwater gutters and pipes which are already defective. Furthermore during the removal of roof claddings inevitably dust and debris will fall into the loft space beneath. The Customer is responsible for removing or protecting stored articles and possessions prior to commencement of the Works as we cannot be held responsible for the soiling which occasionally can occur under such circumstances. During the course of roofing works the Company will use its best endeavours to ensure that the building will be kept watertight, however, from the very nature of the work involved it is not possible under severe or sudden adverse weather conditions to guarantee the exclusion of water through a roof which is temporarily open or an over night seal. Customers are, therefore, advised to make provision for protecting decorations and furniture and to remove any sensitive equipment which is likely to be exposed to possible water penetration in such an area to minimise any possible damage. The Company cannot accept liability for any consequential loss arising from failure to take these precautions.
</p><p>
10. Whilst reasonable precautions will be taken the Company cannot be held responsible for any damage caused to lower roofs, and additions over which we are required to work, nor for any damage to garden plants, shrubs, ornaments and the like. The Company reserve the right to request the Customer to remove or have removed at their own expense areas of sheeting or glazing, and to remove or otherwise protect anything as may be necessary to facilitate the erection of scaffolding or the safe progress of the work.
</p><p>
11. Scaffolding and mechanical hoisting facility to be erected including the obtaining of all necessary statutory and bye-law consents under the regulations in accordance with the Health and Safety Regulations and Public Highway Regulations. The Company cannot be held responsible for accidents or injury to any persons through the unauthorised use of or alterations to the scaffolding and hoisting facility.
</p><p>
12. Power and fresh water supply to be made available if necessary free of charge for the use of power tools etc and for the mixing of building materials or for any other purposes to execute and complete the Works.
</p><p>
13. The dates agreed for commencement and completion are subject to alteration in the event of delays occurring through inclement weather, strikes or lockouts affecting the Building Industry, additions or variations to the Works described in this estimate or any causes beyond the control of the Company and such extension of time as may be reasonably allowed shall be without penalty. All estimates are subject to materials and labour being available when required. We will make every effort to complete the work on time (or, if no date has been agreed, within a reasonable time from the date of your order) but we cannot be held responsible for delays due to weather or other circumstances beyond our control. In this case we will complete the work as soon as reasonably possible.
</p><p>
14. Unless stated otherwise, this purchase contract does not include the cost of provision by the Customer of adequate shelter and protection, sanitary convenience or mess room facilities required under the Health and Safety at Works Acts. Where these facilities cannot be made available by the Customer he shall notify the Company accordingly, and the Company may amend their prices stated in this contract to take account of providing these facilities themselves. Under the same Acts the Customer is required to provide a safe place of working and that necessary and proper insurances are in place, and should this be found not to be the case the Company reserve the right to suspend work and be granted an extension of time and additional costs whilst the place of work is made safe.
</p><p>
15. The Customer is responsible for providing adequate and safe storage for materials adjacent to the working areas and for safe custody of materials until fixed. Once our materials have been fully and finally fixed the Customer is responsible for protection and the cost of any damage or replacement caused by circumstances beyond the control of the Company. Where a driveway or other hardstanding area exists this is to be made available by the Customer for the parking of a skip waste container. Materials and goods will be delivered by us on public or private roads which we assume to be adequate to receive the load unless informed by the Customer in writing to the contrary.
</p><p>
16. All guarantees on materials as issued by the manufacturers will be passed on to our Customers.
</p><p>
17. In the event of dispute between the Customer and the Company then each party shall give the other notice in writing of such dispute which shall be referred to Arbitration with a request to concur in the appointment of an Arbitrator nominated by the President of the Royal Institution of Chartered Surveyors.
</p><p>
18. Relevant United Kingdom law will apply to the Agreement and the relevant courts of the United Kingdom will have exclusive jurisdiction in relation to the Agreement.
</p><p>
GUARANTEE
</p><p>


1.  A warranty of 10 years for faulty/defective Roofing and Roughcasting products will be offered. In conjunction with this, Lomond Improvements will supply a 1year workmanship warranty. This warranty does not cover normal wear and tear including but not limited to, ice damage, storms/strong winds, foreign object strikes or hurricane-force wind and rain. Lomond Improvements will not be liable for any damage as a result of the above issues. In addition - discolouration due to fungus/bacteria, UV degradation, rust or corrosion will not be covered. In the event of a claim, Lomond Improvements must be notified within 48 hours of the issues being discovered.
</p><p>
2. All materials used will be in accordance with current British Standard Specifications where applicable and the benefit of any special manufacturer’s guarantees will be made available to the Customer.
</p><p>
3. The above guarantee expressly excludes defects caused by building movement, inherent faulty design, extreme weather, subsequent alteration or modification to the new roof and supporting structure, aerials and satellites, traffic across the roof, or other conditions beyond the control of the Company.
</p><p>
4. The guarantee does not take effect until full and final payment has been received including the VAT thereon, and commences from the date of the presentation of the final account.
</p><p>
5. If the final balance is not settled the guarantees will not be applicable.
</p><p>
6. Lomond Improvements withholds the right to void any guarantees in the case of and not limited to unfounded remarks, electronic posts, statements, or verbal accusations of any nature in which it can cause potential loss of earnings.
</p><p>
DATA PROTECTION
</p><p>
1. The Supplier will comply with the Data Protection Act 2018 and take all reasonable precautions to keep the details of your order and payment secure, but unless the Supplier is negligent, the Supplier will not be liable for any unauthorised access to information supplied by you. Our privacy policy is available at www.lomondimprovements.co.uk
</p><p>
2. The Supplier will only use the information provided by you about you for the purpose of fulfilling your order and processing your payment, unless you agree otherwise. You can correct any information or ask for information to be deleted, by giving written notice to the Supplier at the Supplier’s address, fax number or e-mail address.
</p><p>
THE SUPPLIERS RIGHT TO CANCEL
</p><p>
The supplier reserves the right to cancel this agreement where after a technical survey has been carried out and the results of the survey show that (a) the goods cannot be installed for safety or other technical issues. (b) if the original measurements taken at the time of sale are more than 6% below the follow up technical survey, the company reserve the right to terminate this agreement and offer in its place a new contract at an adjusted price to cover actual scope of works to be carried out. Where this agreement is terminated by the company for any of the above reasons, the company will refund you the customer all monies paid.
</p><p>
EVENTS OUTSIDE OUR CONTROL
</p><p>


1. The Supplier will not be liable or responsible for any failure to perform, or delay in performance of, any of its obligations under this Agreement that is caused by an Event Outside Our Control
</p><p>
2. An Event Outside Our Control means any act or event beyond the Supplier’s reasonable control, including strikes, lock-outs or other industrial action by third parties, civil commotion, riot, invasion, terrorist attack or threat of terrorist attack, war (whether declared or not) or threat or preparation for war, fire, explosion, storm, flood, earthquake, subsidence, epidemic or other natural disaster, or failure of public or private telecommunications networks [or impossibility of the use of railways, shipping, aircraft, motor transport or other means of public or private transport.
</p><p>
3. If an Event Outside Our Control takes place that affects the performance of any of the Supplier’s obligations under this Agreement: (a) the Supplier will contact you as soon as reasonably possible to notify you; and (b) the Supplier’s obligations under this Agreement will be suspended and the time for performance of the Supplier’s obligations will be extended for the duration of the Event Outside Our Control. Where the Event Outside Our Control affects the delivery of goods and supply of services (where applicable) to you, we will arrange a new delivery date or date for performance of the services with you after the Event Outside Our Control is over.
</p><p>
SEVERABILITY
</p><p>
If any provision of this Agreement shall be held to be illegal or unenforceable, in whole or part, the validity and enforceability of the rest of this Agreement shall be unaffected.
</p><p>
THIRD PARTY RIGHTS
</p><p>
A person who is not a party to this Agreement has no rights under the Contracts (Rights of Third Parties) Act 1999 to rely upon or enforce any term of this Agreement
</p><p>
WAIVER
</p><p>
No failure or delay by the Supplier to exercise any right, power or remedy provided under this Agreement or by law shall constitute a waiver of it nor will any partial exercise preclude any further exercise of the same, or of some other right, power or remedy.
</p><p>
16. PROPER LAW OF CONTRACT
</p><p>
This Agreement will be subject to Scottish law and the Scottish courts will have exclusive jurisdiction in respect of any dispute arising from the contract.
</p><p>
17. PERMITS / BUILDING WARRANTS
</p><p>
The customer will be liable to apply for any required permits/building warrants and any applicable fees. Lomond cannot be held accountable for any delay or complications due to permits or warrants not being issued in time.
</p><p>
NOTICE of right to CANCEL/COMMENCE manufacturing within the 14 day cancellation period. You the customer have the right to cancel this contract/agreement. This right can be exercised within 14 days from the date of this contract. Cancellations MUST BE IN WRITING and delivered personally or sent (which may be by post, e-mail or this form to the Supplier named below. To cancel this Agreement you may use this form if you want to but you do not have to provided you have communicated your cancellation of this Agreement in writing to the Supplier. if work on the contract has begun within your cancellation period at your request, you may be required to pay for any goods or service supplied.
</p><p>
If you wish to cancel complete (Appendix A)
</p><p>
If you wish work to commence during your cancellation period complete Appendix (B)
</p><p>
APPENDIX (B) To; LOMOND IMPROVEMENTS LIMITED, 10 Newton Place, Glasgow G3 7PR. Company No. SC556211 I/we (delete as appropriate) request manufacturing and installation to commence within my 14 day cancellation period. I/we understand I/we have the right to cancel but i/we will incur reasonable charges for any service/materials/products/surveys carried out up to the point of cancellation. Customers ordering personalised/bespoke/made to measure items WILL NOT benefit from the 14 day cooling off period.</p><p>
</p>`,
    Attachments : [
	{
		name : "lomond-contract.png", 
        data : newContracto
	}]
}).then(
  message => alert(message)
);
}
</script>'); ?>
</head>
<body>
<?php
// $circle = imagecreatefrompng('circle.png');
$contractname = @($_POST['contractname']);
$background = imagecreatefrompng('download.png');    
// $background2 = imagecreatefrompng($specimage);   
$signature2 = imagecreatefrompng($signature);
// $width = (strlen($input_text)*9)+20;
$width = 1280;
$height = 1810;

// Create a Canvas
// Create a colour.
// Draw a cirlce in the middle of the image.

    $textImage = imagecreate($width, $height);
    $color = imagecolorallocate($textImage, 0, 0, 0);
    imagecolortransparent($textImage, $color);
    $font = imageloadfont('./fonts/arial.gdf');
    $font2 = imageloadfont('./fonts/arial-reg-14.gdf');
    // $font2 = imageloadfont('./arial.gdf');
    $font3 = imageloadfont('./HomBoldB_16x24_LE.gdf');
    // echo 'Font width: ' . imagefontwidth($font);

// Generate an image.
$im = imagecreate(1280, 1810);
$color = imagecolorallocate($im, 0, 0, 0);
    imagecolortransparent($im, $color);
    
 
// Create a colour.
$blue = imagecolorallocate($im, 0, 0, 255);
 
// draw the head

// imagearc($im, 127, 1370, 50, 28,  0, 360, $blue);
// imagearc(
    // php_image, 
    // center_coordenate-x, - horizontal  
    // center_coordenate-y, - vertical
    // width,  
    // height, 
    // radius_start, 
    // radius_end, 
    // color);





        imagestring($textImage, $font3, 360, 42, $soldDate, 0xFFFFFF);
        imagestring($textImage, $font, 998, 40, $reference_number, 0xFFFFFF);

        imagestring($textImage, $font, 170, 109, $name, 0xFFFFFF);
        imagestring($textImage, $font, 865, 109, $rep, 0xFFFFFF);
        imagestring($textImage, $font, 115, 140, $address, 0xFFFFFF);
        imagestring($textImage, $font, 670, 167, $postCode, 0xFFFFFF);
        imagestring($textImage, $font, 88, 196, $phoneNumber, 0xFFFFFF);
        imagestring($textImage, $font, 652, 196, $mobileNumber, 0xFFFFFF);
        imagestring($textImage, $font, 178, 225, $availableToSurvey, 0xFFFFFF);
        if ($purchaseType == 'cash') {
        imagestring($textImage, $font2, 394, 223, 'x', 0xFFFFFF); /*CASH ACCOUNT CHECK*/}
        if ($purchaseType == 'lomondAccount') {
        imagestring($textImage, $font2, 458, 223, 'x', 0xFFFFFF); /*LOMOND ACCOUNT*/
        }
       
            // imagestring($textImage, $font2, 394, 223, 'x', 0xFFFFFF); /*CASH ACCOUNT CHECK*/
       
        imagestring($textImage, $font, 650, 225, $email, 0xFFFFFF);
        imagestring($textImage, $font, 240, 255, $financeAgreementNumber, 0xFFFFFF);
        // imagestring($textImage, $font, 166, 282, $installationNotes, 0xFFFFFF);
        // $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident laudantium dolore officia earum repellat neque delectus dicta, quo libero unde illo ipsum ea? Voluptas eveniet illum voluptate cumque velit necessitatibus.";
        $word = explode("\n", wordwrap ( $installationNotes, 90)) ?? null;;
        
        if (isset($word[0])) {
        imagestring($textImage, $font, 166, 282, $word[0], 0xFFFFFF);
        }
        if (isset($word[1])) {
        imagestring($textImage, $font, 166, 312, $word[1], 0xFFFFFF);
        }
        if (isset($word[2])) {
        imagestring($textImage, $font, 166, 342, $word[2], 0xFFFFFF);
        // imagestring($textImage, $font, 370, 85, $date, 0xFFFFFF);
        }
        


        imagestring($textImage, $font, 125, 482, $squareMeterage, 0xFFFFFF);
        imagestring($textImage, $font, 345, 481, $subjectToFullSurvey, 0xFFFFFF);
        
        // if ($productType == 'roof') {
        // imagestring($textImage, $font2, 558, 481, 'x', 0xFFFFFF); /*ROOOOOOFFFF CASH ACCOUNT CHECK*/
        // }
        // if ($productType == 'roughcast') {
        //   imagestring($textImage, $font2, 685, 481, 'x', 0xFFFFFF); /*CASH ACCOUNT CHECK*/
        // }
          imagestring($textImage, $font2, 685, 481, $numberOfWindows, 0xFFFFFF); /*CASH ACCOUNT CHECK*/
        // // imagestring($textImage, $font, 360, 117, $email, 0xFFFFFF);

        imagestring($textImage, $font, 192, 1082, $contractPrice, 0xFFFFFF);
        imagestring($textImage, $font, 486, 1082, $adminFee, 0xFFFFFF);    
        imagestring($textImage, $font, 182, 1125, $depositPaid, 0xFFFFFF);
        imagestring($textImage, $font, 160, 1168, $subtotal, 0xFFFFFF);
        imagestring($textImage, $font, 480, 1168, $balancedue, 0xFFFFFF);
        imagestring($textImage, $font, 480, 1210, $amountOf, 0xFFFFFF);
        imagestring($textImage, $font, 480, 1255, $bankTransfer, 0xFFFFFF);
        
        if ($paymentType == 'cash') {
        // imagestring($textImage, $font, 265, 1210, 'xxxxx', 0xFFFFFF);
        imagearc($im, 255, 1236, 46, 28,  0, 360, $blue);
        }
        if ($paymentType == 'card') {
        // imagestring($textImage, $font, 220, 1210, 'xxxxxx', 0xFFFFFF);
        // imagestring($textImage, $font, 265, 1210, 'xxx', 0xFFFFFF);
        imagearc($im, 326, 1236, 42, 28,  0, 360, $blue);
        
    }
    if ($paymentType == 'cheque') {
        // imagestring($textImage, $font, 220, 1210, 'xxx', 0xFFFFFF);
        // imagestring($textImage, $font, 300, 1210, 'xxx', 0xFFFFFF);
        imagearc($im, 292, 1236, 36, 28,  0, 360, $blue);

        }




        if ($soffit == 1) {
        imagestring($textImage, $font2, 65, 1343, 'x', 0xFFFFFF); /*SOFFIT FASCIA*/
        // imagearc($im, 127, 1370, 50, 28,  0, 360, $blue);
                        // imagestring($textImage, $font, 65, 1345, '      XXXXX', 0xFFFFFF); /*SOFFIT FASCIA*/
 

        # code...
    }

    if ($fascia == 1) {
        imagestring($textImage, $font2, 65, 1343, 'x', 0xFFFFFF); /*SOFFIT FASCIA*/
                // imagestring($textImage, $font, 65, 1345, '  XXXX', 0xFFFFFF); /*SOFFIT FASCIA*/
                // imagearc($im, 187, 1370, 50, 28,  0, 360, $blue);

        # code...
    }
    if ($gutters == 1) {
        imagestring($textImage, $font2, 65, 1383, 'x', 0xFFFFFF); /*GUTTERS DPIPE*/
        
        // imagearc($im, 132, 1410, 60, 28,  0, 360, $blue);
                                    // imagestring($textImage, $font, 65, 1385, '       XXXX', 0xFFFFFF); /*SOFFIT FASCIA*/


        }
        if ($dpipe == 1) {
            imagestring($textImage, $font2, 65, 1383, 'x', 0xFFFFFF); /*GUTTERS DPIPE*/
            // imagearc($im, 192, 1410, 60, 28,  0, 360, $blue);
                                // imagestring($textImage, $font, 65, 1385, '  XXXXX', 0xFFFFFF); /*SOFFIT FASCIA*/

        }

        if ($chimneyRemoval == 1) {
            
        imagestring($textImage, $font2, 65, 1423, 'x', 0xFFFFFF); /*CHIMNEY REMOVAL*/
        }
        if ($lead == 1) {
        imagestring($textImage, $font2, 65, 1460, 'x', 0xFFFFFF); /*LEAD*/
        }
        if ($tile == 1) {
        imagestring($textImage, $font2, 65, 1500, 'x', 0xFFFFFF); /*TILE SLATE*/
// imagestring($textImage, $font, 65, 1502, '     XXXX', 0xFFFFFF); /*SOFFIT FASCIA*/
    // imagearc($im, 120, 1526, 36, 28,  0, 360, $blue);

        }
        if ($slate == 1) {
        imagestring($textImage, $font2, 65, 1500, 'x', 0xFFFFFF); /*TILE SLATE*/
                                        // imagestring($textImage, $font, 65, 1502, '  XXX', 0xFFFFFF); /*SOFFIT FASCIA*/
                                        // imagearc($im, 156, 1526, 46, 28,  0, 360, $blue);
        }

        if ($skylight == 1) {
        imagestring($textImage, $font2, 65, 1540, 'x', 0xFFFFFF); /*SKYLIGHT VEULX*/
        // imagestring($textImage, $font, 65, 1542, '        XXXX', 0xFFFFFF); /*SOFFIT FASCIA*/
        // imagearc($im, 136, 1566, 70, 28,  0, 360, $blue);

        }

        if ($velux == 1) {
        imagestring($textImage, $font2, 65, 1540, 'x', 0xFFFFFF); /*SKYLIGHT VEULX*/
                                                        // imagestring($textImage, $font, 65, 1542, '  XXXXX', 0xFFFFFF); /*SOFFIT FASCIA*/
        // imagearc($im, 192, 1566, 60, 28,  0, 360, $blue);
        }


        if ($smoothCoatBases == 1) {
        imagestring($textImage, $font2, 238, 1343, 'x', 0xFFFFFF); /*SOFFIT FASCIA*/
        }
        if ($smoothCoatWindows == 1) {
        imagestring($textImage, $font2, 238, 1383, 'x', 0xFFFFFF); /*GUTTERS DPIPE*/
        }
        if ($paintCastIronPipes == 1) {
        imagestring($textImage, $font2, 238, 1423, 'x', 0xFFFFFF); /*CHIMNEY REMOVAL*/
        }
        if ($oversills === 'true') {
        imagestring($textImage, $font2, 238, 1460, 'x', 0xFFFFFF); /*LEAD*/
        }
        if ($roughcastChimney === 'true') {
        imagestring($textImage, $font2, 238, 1500, 'x', 0xFFFFFF); /*TILE SLATE*/
        }
        if ($solatube === 'true') {
        imagestring($textImage, $font2, 238, 1540, 'x', 0xFFFFFF); /*SKYLIGHT VEULX*/
        }

        if ($skipOffRoad === 'true') {
        imagestring($textImage, $font2, 432, 1343, 'x', 0xFFFFFF); /*SKIP OFF ON*/
        // imagestring($textImage, $font, 452, 1343, '        XXXX', 0xFFFFFF); /*SOFFIT FASCIA*/
        // imagearc($im, 520, 1370, 60, 28,  0, 360, $blue);


        }
        // if ($skipOnRoad == 1) {
        // imagestring($textImage, $font2, 452, 1343, 'x', 0xFFFFFF); /*SKIP OFF ON*/
        // imagestring($textImage, $font, 452, 1343, '  XXXXX', 0xFFFFFF); /*SOFFIT FASCIA*/
        // imagearc($im, 586, 1370, 66, 28,  0, 360, $blue);

        // }

        if ($overheadCables === 'true') {
        imagestring($textImage, $font2, 432, 1383, 'x', 0xFFFFFF); /*OVERHEAD CABLES*/
        }
        if ($aerial === 'true') {
        imagestring($textImage, $font2, 432, 1423, 'x', 0xFFFFFF); /*AERIAL SAT DISH*/
        // imagestring($textImage, $font, 452, 1425, '       XXXX', 0xFFFFFF); /*SOFFIT FASCIA*/
        // imagearc($im, 512, 1448, 50, 28,  0, 360, $blue);

        }
        // if ($satDish == 1) {
        // imagestring($textImage, $font2, 452, 1423, 'x', 0xFFFFFF); /*AERIAL SAT DISH*/
        // imagestring($textImage, $font, 452, 1425, '  XXXX', 0xFFFFFF); /*SOFFIT FASCIA*/
        // imagearc($im, 572, 1448, 70, 28,  0, 360, $blue);

        // }
        if ($scaffoldFront === 'true') {
        imagestring($textImage, $font2, 432, 1460, 'x', 0xFFFFFF); /*SCAFFOLD FRONT*/
        }
        if ($scaffoldBack === 'true') {
        imagestring($textImage, $font2, 432, 1500, 'x', 0xFFFFFF); /*SCAFFOLD BACK*/
        }
        if ($scaffoldGable === 'true') {
        imagestring($textImage, $font2, 452, 1540, 'x', 0xFFFFFF); /*SCAFFOLD GABLE*/
        }

        imagestring($textImage, 5, 193, 1629, $name, 0xFFFFFF);


        
                // imagestring($textImage,   $font, 573, 1629, $signature, 0xFFFFFF);
        imagestring($textImage, $font, 800, 1629, $date, 0xFFFFFF);

        // imagestring($textImage, $font, 640, 1119, $scopeOfWork, 0xFFFFFF);
        // $scopeOfWork = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed explicabo, voluptatum soluta, aspernatur, aperiam fuga doloribus dolore non doloremque totam illum. Magni accusamus rerum sapiente mollitia unde, totam facilis tempora?';
        $word2 = explode("\n", wordwrap ( $scopeOfWork, 48));
         if (isset($word2[0])) {
        imagestring($textImage, $font, 640, 1119, $word2[0], 0xFFFFFF);
        } if (isset($word2[1])) {
        imagestring($textImage, $font, 640, 1149, $word2[1], 0xFFFFFF);
        } if (isset($word2[2])) {
        imagestring($textImage, $font, 640, 1179, $word2[2], 0xFFFFFF);
        } if (isset($word2[3])) {
        imagestring($textImage, $font, 640, 1209, $word2[3], 0xFFFFFF);
        } if (isset($word2[4])) {
        imagestring($textImage, $font, 640, 1239, $word2[4], 0xFFFFFF);
        } if (isset($word2[5])) {
        imagestring($textImage, $font, 640, 1269, $word2[5], 0xFFFFFF);
        } if (isset($word2[6])) {
        imagestring($textImage, $font, 640, 1299, $word2[6], 0xFFFFFF);
        } if (isset($word2[7])) {
        imagestring($textImage, $font, 640, 1329, $word2[7], 0xFFFFFF);
        } if (isset($word2[8])) {
        imagestring($textImage, $font, 640, 1359, $word2[8], 0xFFFFFF);
        } if (isset($word2[9])) {
        imagestring($textImage, $font, 640, 1389, $word2[9], 0xFFFFFF);
        } if (isset($word2[10])) {
        imagestring($textImage, $font, 640, 1419, $word2[10], 0xFFFFFF);
        } if (isset($word2[11])) {
        imagestring($textImage, $font, 640, 1449, $word2[11], 0xFFFFFF);
        } if (isset($word2[12])) {
        imagestring($textImage, $font, 640, 1479, $word2[12], 0xFFFFFF);
        } if (isset($word2[13])) {
        imagestring($textImage, $font, 640, 1509, $word2[13], 0xFFFFFF);
        } if (isset($word2[14])) {
        imagestring($textImage, $font, 640, 1539, $word2[14], 0xFFFFFF);
        }


        if ( $iAgreeToContact == True){
        imagestring($textImage, $font2, 628, 1664, 'x', 0xFFFFFF); /*CONSENT FORM*/
                // imagestring($textImage, $font, 713, 1664, $signature, 0xFFFFFF);
            }

    $background2 = imagecreatefrompng($specimage);
    imagealphablending($background2, true);
    imagesavealpha($background2, true);
    // create background image layer
        imagecopymerge($background, $background2, 75, 540, 0, 0, 1100, 450, 100);
        imagecopymerge($background, $im, 0, 0, 0, 0, 1280, 1810, 100);
        $imgResized = imagescale($signature2 , 100, 30); 
        // width=500 and height = 400
//  $imgResized is our final product
//SIGNATURE 1 AND 2 PLACEMENT
imagecopymerge($background, $imgResized , 583, 1638, 0, 0, 100, 30, 100);
imagecopymerge($background, $imgResized , 726, 1678, 0, 0, 100, 28, 100);

    // Merge background image and text image layers
    imagecopymerge($background, $textImage, 15, 15, 0, 0, $width, $height, 100);
    // Merge background image and Circle image layers
    // imagecopymerge($background, $circle, 75, 540, 0, 0, $width, $height, 100);

    $output = imagecreatetruecolor($width, $height);
    imagecopy($output, $background, 0, 0, 0, 0, $width, $height);
    // echo $output;
    
    
    ob_start();
    imagepng($output);
    printf('<input type="hidden" id="output" class="imageClass" value="data:image/png;base64,%s" />', base64_encode(ob_get_clean()));
    
    ob_start();
    imagepng($output);
    
printf('
    <form id="myForm" name="myForm" action="./crm/index.php" method="POST"><input type="hidden" value="' . $reference_number . '" name="reference_number">
<input type="hidden" value="' . $repName . '" name="repName">
<input type="hidden" value="' . $repContact . '" name="repContact">
<input type="hidden" value="' . $firstName . '" name="firstName">
<input type="hidden" value="' . $lastName . '" name="lastName">
<input type="hidden" value="' . $name . '" name="name">
<input type="hidden" value="' . $address . '" name="address">
<input type="hidden" value="' . $postCode . '" name="postCode">
<input type="hidden" value="' . $phoneNumber . '" name="phoneNumber">
<input type="hidden" value="' . $mobileNumber . '" name="mobileNumber">
<input type="hidden" value="' . $email . '" name="email">

<input type="hidden" value="' . $availableToSurvey . '" name="availableToSurvey">
<input type="hidden" value="' . $purchaseType . '" name="purchaseType">
<input type="hidden" value="' . $financeAgreementNumber . '" name="financeAgreementNumber">
<input type="hidden" value="' . $installationNotes . '" name="installationNotes">
<input type="hidden" value="' . $squareMeterage . '" name="squareMeterage">
<input type="hidden" value="' . $subjectToFullSurvey . '" name="subjectToFullSurvey">
<input type="hidden" value="' . $productType . '" name="productType">
<input type="hidden" value="' . $paymentType . '" name="paymentType">
<input type="hidden" value="' . $amountOf . '" name="amountOf">
<input type="hidden" value="' . $contractPrice . '" name="contractPrice">
<input type="hidden" value="' . $adminFee . '" name="adminFee">
<input type="hidden" value="' . $depositPaid . '" name="depositPaid">
<input type="hidden" value="' . $bankTransfer . '" name="bankTransfer">
<input type="hidden" value="' . $subtotal . '" name="subtotal">
<input type="hidden" value="' . $balancedue . '" name="balancedue">
<input type="hidden" value="' . $scopeOfWork . '" name="scopeOfWork">

<input type="hidden" value="' . $leadid . '" name="leadid">
<input type="hidden" value="' . $soldDate . '" name="soldDate">

<input type="hidden" value="' . $iAgreeToContact . '" name="iAgreeToContact">
<input type="hidden" value="' . $date . '" name="date">
<input type="hidden" value="' . $rep . '" name="rep">
<input type="hidden" value="" name="dealid" id="dealid">
<div id="header-bar"><div align="center" id="cen_text"><button class="btnStyles" onclick="event.preventDefault(); window.location.href=`../index.html`;">GO BACK</button><a id="output" href="data:image/png;base64,%s" download="contract_'.date("h:i:s").'.png" class="btnStyles"> DOWNLOAD CONTRACT</a><button class="btnStyles" onclick="clickedMe()"> Send Contract to E-mail</button><button class="btnStyles" onclick="nextBtn()"> Proceed to Upload</button></div></div>', base64_encode(ob_get_clean()));
    printf('</form>');

    // printf('<input id="output" class="someClass" value="data:image/png;base64,%s" type="hidden" />', base64_encode(ob_get_clean()));
    ob_start();
    $emailimage = imagepng($output);
    printf('<div class="imageContainer"><img id="output" class="someclassname" src="data:image/png;base64,%s" /></div>', base64_encode(ob_get_clean()));


    
    //  ob_start();
?>

<script>
var input = document.getElementById("dealid");
const recentImageDataUrl = localStorage.getItem("contractimage");
const dealid = localStorage.getItem("dealid");
input.setAttribute("value", dealid);

function clickedMe(){
    event.preventDefault();
    sendEmail();
}

function nextBtn() {
    event.preventDefault();
    document.getElementById("myForm").submit();
}
</script>

</body></html>