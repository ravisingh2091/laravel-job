<?php

use Illuminate\Database\Seeder;

class LegalTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('legal_templates')->delete();
        
        \DB::table('legal_templates')->insert(array (
            0 => 
            array (
                'id' => 3,
                'state_id' => 2,
                'template_type' => 'Terms of Service',
                'commodity_id' => 3,
                'locale_code' => 'en',
                'source_file_name' => 'IL T&Cs - V.E.16-12.21.docx',
                'version' => '12.21.16',
                'is_active' => false,
                'template_html' => '<p align="center"><strong><u>ILLINOIS UNIFORM DISCLOSURE STATEMENT AND TERMS AND CONDITIONS</u></strong></p>

<p>&nbsp;</p>

<p><strong><u>INTRODUCTION:</u></strong> This is an agreement, together with your Confirmation Letter, any applicable Letter of Agency and any and all Renewal Notices (if applicable) (collectively, the &ldquo;Agreement&rdquo;), between PALMco Power IL, LLC (&ldquo;PALMco Power or &ldquo;PALMco&rdquo;) and you for electric supply service at each of the account service addresses listed in your Confirmation Letter (or in an addendum). You agree to authorize a switch of your electric supply service to PALMco and to purchase all the electricity required to service each of the accounts listed in your Confirmation Letter (or listed in an addendum) as described in this Agreement.</p>

<p><strong><u>ACKNOWLEDGEMENT:</u></strong> You acknowledge and understand the following: (A) You are the named customer on each of the account(s) listed in your Confirmation Letter &nbsp;(or in any addendum), or you are the spouse of the named customer on the account(s), or you are over 18 years old and authorized to make decisions concerning such account(s). (B) PALMco is an independent seller of electric power service, certified by the Illinois Commerce Commission (&ldquo;Commission&rdquo;). (C) Neither PALMco nor its agents are representing or acting on behalf of your electric utility, or any governmental bodies or consumer groups. (D) PALMco will not charge you any fees to switch to PALMco as your electric power supplier, or to enroll in PALMco&rsquo;s Power Choice Program. (E) Your electric utility will remain responsible for the delivery of electricity to your premises and will continue to respond to any service calls and emergencies. (F) Switching to PALMco will not impact your electric service reliability. (G) Your electric utility will send you a single bill covering your electric delivery service, and your electric supply service. (H) Your selection of PALMco to provide electric power service may involve a charge to you for switching from another service provider. (I) Savings are not guaranteed under this Agreement.</p>

<p><strong><u>TERM AND RESCISSION PERIOD: </u></strong>This Agreement will begin with your first available meter read date after PALMco and your utility process your enrollment request and will continue for the term set forth in your Confirmation Letter. You may rescind this Agreement by contacting PALMco before PALMco submits your enrollment request to your utility. If you do not rescind this Agreement before PALMco submits your enrollment request, you will receive written notification from your utility confirming your switch to PALMco for your electric supply. You may rescind this Agreement and the pending enrollment without any penalty within ten (10) calendar days after the utility processes the enrollment request by contacting either PALMco at 877-726-5862 or your utility: &nbsp;AMEREN at 800-755-5000 and COMED at 800-334-7661.</p>

<p><strong><u>PRICING.</u></strong> <strong><u>Variable Price:</u></strong> You will pay a price for electric supply service that may vary from month to month as determined by PALMco in its sole discretion based on a zonal locational marginal price (&ldquo;LMP&rdquo;) determined on a day ahead or real time basis, any supply and agency functions that PALMco performs for you, line loss, compliance costs, certain transmission, capacity, ancillary, and administrative costs incurred by PALMco, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses and margins. There is no early termination fee. There is no limit on how much the price of your electric supply service may change from one billing cycle to the next and your variable price may be higher or lower than your utility&rsquo;s standard offer service rate in any given month. PALMco does not guarantee savings in any month or for the entire length of this Agreement. PALMco&rsquo;s current and historical prices are not an indicator of future prices.</p>

<p><strong><u>Fixed Price:</u></strong> You will pay a Fixed Price as set forth in your Confirmation Letter for the term indicated in your Confirmation Letter. If you terminate this Agreement for Fixed Price electric supply service prior to the expiration of the term you will not be subject to any early termination fees. PALMco does not guarantee savings in any month or for the entire length of this Agreement. PALMco&rsquo;s current and historical prices are not an indicator of future prices.</p>

<p><strong><u>Other Charges:</u></strong>&nbsp; You are also responsible for paying and reimbursing PALMco for all applicable taxes, and other government fees, assessments, and charges, however designated, relating to the electric supply service provided under this Agreement. If you are tax exempt, you must furnish PALMco an exemption certificate before service commences. This Agreement does not include utility transportation, delivery, or other charges that your electric utility may impose.</p>

<p><strong><u>AUTOMATIC RENEWAL AND TERMINATION BY CUSTOMER:</u></strong></p>

<p><strong>For Fixed Price Customers:</strong> YOUR AGREEMENT WILL AUTOMATICALLY RENEW AS DESCRIBED IN THIS SECTION. IN ORDER TO CANCEL BEFORE AN AUTOMATIC RENEWAL OF THIS AGREEMENT, PLEASE NOTIFY US IN WRITING OR BY PHONE AS DESCRIBED IN THIS AGREEMENT. Unless terminated earlier, not fewer than 30 days nor more than 60 days prior to the expiration date of the current term of this Agreement, PALMco will provide written notice to you of this Agreement&rsquo;s renewal. The renewal notice will set forth the proposed renewal option(s), including any applicable statutory information required by the Commission, and any other changes to the existing Agreement. UNLESS YOU NOTIFY PALMCO IN WRITING OR BY CALLING USING THE CONTACT INFORMATION PROVIDED IN THE CONTACT INFORMATION SECTION OF THIS AGREEMENT THAT YOU DO NOT DESIRE TO RENEW THIS AGREEMENT, YOU WILL BE DEEMED TO HAVE IRREVOCABLY AND UNCONDITIONALLY AGREED TO RENEW THIS AGREEMENT ON THE TERMS AND CONDITIONS SET FORTH IN THE RENEWAL NOTICE. There is no early termination fee if you terminate this Agreement prior to the expiration of the term.</p>

<p><strong>For Variable Price Customers:</strong> YOUR ELECTRIC SUPPLY SERVICE FROM PALMCO IS FOR ONE MONTH AND WILL CONTINUE AUTOMATICALLY ON A MONTH-TO-MONTH BASIS UNDER THE SAME VARIABLE RATE PRICING FORMULA, TERMS, AND CONDITIONS UNLESS TERMINATED BY EITHER YOU OR PALMCO. WHILE RECEIVING SERVICE ON A MONTH-TO-MONTH BASIS THERE WILL BE NO CHARGE TO YOU FOR TERMINATING YOUR ELECTRIC SERVICE and you may terminate at any time for any or no reason by (a) calling PALMco at (877) 726-5862; (b) sending a letter to PALMco at 8751 18th Avenue, Brooklyn, NY 11214; or (c) emailing PALMco at CustomerService@PalmcoEnergy.com. In any case in which your electric supply service with PALMco is terminated as provided in this Agreement, you will remain obligated to pay for the electric supply service provided by PALMco prior to the effective date of the termination. The effective date of termination will be determined by your utility.</p>

<p><strong><u>RESOURCE MIX AND ENVIRONMENTAL CHARACTERISTICS.</u></strong> The applicable generation resource mix and environmental characteristics of the electric supply sold by PALMco are available at www.palmcoenergy.com. This information is updated periodically following the requirements of the Illinois Commerce Commission.</p>

<p><strong><u>CUSTOMER INFORMATION RELEASE.</u></strong> You authorize PALMco to begin your enrollment, initiate service to the accounts listed in your Confirmation Letter (or in any addendum) and to obtain historical billing data and other information about you (&ldquo;Customer Information&rdquo;) from your electric utility, so that PALMco can start and continue its service to you. PALMco reserves the right to refuse to provide service to you under this Agreement if it is unable to obtain the necessary Customer Information or it obtains Customer Information that it considers to be unsatisfactory.</p>

<p>&nbsp;</p>

<p><strong><u>BILL PAYMENT/TERMINATION BY PALMCO</u></strong>. You will receive a single bill from your utility each month which will include the charges for PALMco&rsquo;s electric supply service and for the services provided by your utility. You will make payment for all of these services directly to your utility. If your payment for electric service is not received when it is due or you fail to satisfy any agreed upon payment arrangement you may have, PALMco may terminate your electric supply service agreement with PALMco by providing you at least 14 calendar days advance notice; provided that you will still remain obligated to pay for all electric supply service received by you prior to such termination. You also shall be required to pay a late payment charge on any unpaid amounts (including arrears and unpaid late payment charges) not received by PALMco within 15 days of the date of your bill at the rate of 1.5% per month (18% per annum) or the maximum amount permitted by law, whichever is lower. You also shall pay PALMco&rsquo;s reasonable attorneys&rsquo; fees and expenses incurred by it in attempting to collect any payment owing by you.</p>

<p>&nbsp;</p>

<p><strong><u>CONTACT INFORMATION &amp; DISPUTE PROCEDURES AND QUESTIONS CONCERNING YOUR SERVICE</u></strong><strong>. You may contact PALMco at 877-726-5862 (toll free), by e-mail at CustomerService@PalmcoEnergy.com, via PALMco&rsquo;s website at www.PalmcoEnergy.com, or by mail at 8751 18th Avenue Brooklyn, NY 11214 if you have any questions or complaints about your service under this Agreement. If your complaint is not resolved after you have contacted PALMco, you may file a complaint with the Commission&rsquo;s Consumer Services Division (CSD) at 800-524-0795 (toll free) or TTY at 800-858-9277 (toll free), via the CSD website at http://www.icc.illinois.gov/consumer/complaint/, or by mail to Illinois Commerce Commission, 527 East Capitol Ave., Springfield, IL 62701. If you need general information about your service, or wish to obtain educational materials, you may contact the Commission at 800-524-0795 (toll free) or TTY at 800-858-9277 (toll free) or at http://www.icc.illinois.gov/.&nbsp; </strong></p>

<p><strong><u>FORCE MAJEURE.</u></strong> Neither PALMco nor you will be liable for a breach of this Agreement if such breach is due to a force majeure event. A &ldquo;force majeure event&rdquo; means a material, unavoidable occurrence beyond a party&rsquo;s control, such as a fire, act of god or public enemy, labor strike, lockout or other industrial disturbance, act of terrorism, government action, utility action, storm, hurricane, flood, explosion, shortage or unavailability of transmission facilities, a change in the law or rules affecting this Agreement, and other events that cannot be prevented or overcome by ordinary due diligence. A force majeure event does not include an inability to pay any amount owing under this Agreement.</p>

<p><strong><u>LIMITATION OF LIABILITY.</u></strong> TO THE FULLEST EXTENT PERMITTED BY APPLICABLE ILLINOIS LAW, NEITHER YOU NOR PALMCO WILL BE LIABLE TO THE OTHER FOR ANY CONSEQUENTIAL, EXEMPLARY, PUNITIVE, INCIDENTAL, OR INDIRECT DAMAGES ARISING FROM A BREACH OF THIS AGREEMENT, INCLUDING, WITHOUT LIMITATION, LOST PROFITS OR LOST REVENUES.</p>

<p><strong><u>ARBITRATION AND WAIVER OF JURY TRIAL</u></strong><strong>. TO THE FULLEST EXTENT PERMITTED BY APPLICABLE ILLINOIS LAW, IF THERE IS AN ISSUE, CLAIM OR DISPUTE RELATING TO THIS AGREEMENT FOR ELECTRIC SUPPLY SERVICE THAT NEEDS TO BE RESOLVED AND WE ARE UNABLE TO RESOLVE IT INFORMALLY, IT MUST BE RESOLVED THROUGH FINAL, BINDING ARBITRATION AND WE MUTUALLY FOREGO THE RIGHT TO RESOLVE IT IN A COURT OF LAW. THIS APPLIES REGARDLESS OF WHETHER THE ISSUE, CLAIM OR DISPUTE INVOLVES A TORT, FRAUD, BREACH OF CONTRACT, MISREPRESENTATION, PRODUCT LIABILITY, NEGLIGENCE, AND VIOLATION OF A STATUTE OR ANY OTHER LEGAL THEORY. INCLUDED ARE ALL ISSUES, CLAIMS AND DISPUTES ARISING OUT OF OR RELATING TO ANY ASPECT OF YOUR PARTICIPATION IN THIS AGREEMENT FOR ELECTRIC SUPPLY SERVICE WHETHER ARISING DURING OR AFTER YOUR PARTICIPATION IN THIS AGREEMENT FOR ELECTRIC SUPPLY SERVICE. ALL ARBITRATIONS SHALL BE CONDUCTED ON AN INDIVIDUAL (AND NOT A CLASS-WIDE) BASIS AND AN ARBITRATOR SHALL HAVE NO AUTHORITY TO AWARD CLASS-WIDE RELIEF. YOU ACKNOWLEDGE AND AGREE THAT THIS SPECIFICALLY PROHIBITS YOU FROM COMMENCING ARBITRATION PROCEEDINGS AS A REPRESENTATIVE OF OTHERS OR JOINING IN ANY ARBITRATION PROCEEDINGS BROUGHT BY ANY OTHER PERSON. NOTWITHSTANDING THE FOREGOING, THIS PARAGRAPH DOES NOT PREVENT YOU FROM FILING A COMPLAINT RELATING TO YOUR ELECTRIC SUPPLY SERVICE WITH PALMCO PURSUANT TO THE LAWS GOVERNING RETAIL ELECTRIC SUPPLIERS IN YOUR STATE AND THE REGULATIONS OF ANY AGENCY IN YOUR STATE WITH JURISDICTION OVER RETAIL ELECTRIC SUPPLIERS.</strong></p>

<p><strong><u>NO WARRANTIES.</u></strong> PALMCO MAKES NO WARRANTIES, AFFIRMATIONS OF FACT, OR PROMISES, EXPRESS OR IMPLIED, THAT EXTND BEYOND THE FACE OF THIS AGREEMENT, INCLUDING, WITHOUT LIMITATION, WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE.</p>

<p><strong><u>APPLICABLE LAWS, REGULATORY CHANGES.</u></strong> This Agreement is subject to all applicable Federal, state, and local laws, and the orders, rules, and regulations of governmental agencies having jurisdiction over the subject matter of this Agreement, including, without limitation, the Illinois Commerce Commission. THIS AGREEMENT WILL BE GOVERNED AND CONSTRUED IN ACCORDANCE WITH ILLINOIS LAW, WITHOUT REGARD TO PRINCIPLES RELATING TO CONFLICTS OF LAW. If at some future date there is a change in any law, rule, regulation, tariff or regulatory structure (&ldquo;Regulatory Change&rdquo; which impacts any term, condition, or provision of this Agreement, including, but not limited to, price, PALMco shall have the right to cancel or modify this Agreement to reflect such change by providing advance written notice to you.</p>

<p><strong><u>ELECTRONIC COMMUNICATION.</u></strong> Unless otherwise required by law, if you provide PALMco with your email address, you agree that PALMco may transmit to you all notices and other communications, including those required in this Agreement, electronically to the email address provided by you. You shall be responsible for notifying PALMco of any change in email address and/or any withdrawal of your consent to electronic communications. Notices transmitted to you via email will be deemed to have been received if transmitted to you at the email address provided to PALMco by you.</p>

<p><strong><u>MISCELLANEOUS</u></strong>. This Agreement is the entire understanding between you and PALMco with respect to the subject matter hereof and there are no promises, covenants or undertakings other than those expressly set forth in this Agreement. This Agreement can only be amended by a writing signed by you and PALMco. You may not assign this Agreement without PALMco&rsquo;s prior written consent. PALMco may sell, transfer, pledge, or assign the accounts, revenues, or proceeds hereof, in connection with any financial agreement and may assign this Agreement to another entity in accordance with the rules and procedures of the Commission, if any, governing such transactions. This Agreement will inure to and be binding upon the successors and assignees of the parties.</p>

<p><strong><u>EMERGENCY TELEPHONE NUMBERS. IN THE EVENT OF AN ELECTRICITY-RELATED EMERGENCY, SUCH AS AN ELECTRIC OUTAGE YOU SHOULD IMMEDIATELY CONTACT YOUR LOCAL UTILITY.</u></strong></p>

<p>&nbsp;</p>

<p><strong>12.21.16</strong></p>',
                    'created_at' => '2017-02-28 02:21:41',
                    'updated_at' => '2017-02-28 02:26:36',
                    'deleted_at' => NULL,
                ),
                1 => 
                array (
                    'id' => 2,
                    'state_id' => 9,
                    'template_type' => 'Terms of Service',
                    'commodity_id' => 3,
                    'locale_code' => 'en',
                    'source_file_name' => 'DC T&Cs 2-6-17.docx',
                    'version' => 'v.17-02.06',
                    'is_active' => false,
                    'template_html' => '<p><strong><u>TERMS AND CONDITIONS</u></strong></p>

<p><strong><u>WASHINGTON D.C.</u></strong></p>

<p>&nbsp;</p>

<p><strong><u>INTRODUCTION: </u></strong>This is an agreement, together with your Confirmation Letter and any and all Renewal Notices (if applicable) (collectively, the &ldquo;Agreement&rdquo;), between PALMco Energy DC, LLC (&ldquo;PALMco Energy&rdquo; or &ldquo;PALMco&rdquo;) and you for natural gas supply service and/or PALMco Power DC, LLC (&ldquo;PALMco Power&rdquo; or &ldquo;PALMco&rdquo;) and you for electric supply service at each of the account addresses listed in your Confirmation Letter (or listed in an addendum). You agree to authorize a switch of your natural gas and/or electric supply service to PALMco and to purchase all the natural gas and/or electric supply from PALMco required to service each of the accounts listed in your Confirmation Letter (or listed in any addendum) at a price as described in this Agreement. PALMco Energy is licensed by the Public Service Commission of the District of Columbia to provide natural gas supply service<strong> (GA 2016-05). </strong>PALMco Power is licensed by the Public Service Commission of the District of Columbia to provide electric supply service<strong> (EA 2016-16).</strong></p>

<p><strong><u>PRICING:</u></strong></p>

<p><strong><u>Introductory.</u></strong> If you receive natural gas and/or electric supply service from PALMco, you will pay an introductory price as set forth in your Confirmation Letter for the period of time set forth in your Confirmation Letter.</p>

<p><strong><u>Variable.</u></strong> <u>Natural Gas:</u> You will pay a price for natural gas supply service that may vary from month to month as determined by PALMco in its sole discretion based on the applicable monthly NYMEX closing price for natural gas, applicable interstate transportation costs, any supply and agency functions that PALMco performs for you, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins.&nbsp; <u>Electric:</u> You will pay a price for electric supply service that may vary from month to month as determined by PALMco in its sole discretion based on a monthly zonal locational marginal price (&quot;LMP&quot;) determined on a day ahead or real time basis, any supply and agency functions that PALMco performs for you, certain transmission, line loss, compliance costs, capacity, ancillary, and administrative costs incurred by PALMco, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins.</p>

<p><strong><u>Fixed.</u></strong> You will pay a fixed price for natural gas and/or electric supply service as set forth in your Confirmation Letter for the period of time set forth in your Confirmation Letter. Your fixed price does not include &ldquo;Other Charges&rdquo; as set forth herein.</p>

<p><strong><u>Natural Gas &amp; Electric Supply Price Disclosure.</u></strong> There is no limit on how much the price of your natural gas and/or electric supply service may change from one billing cycle to the next and your price may be higher or lower than your utility&rsquo;s standard offer service rate in any given month. PALMco does not guarantee savings in any month or for the entire length of this Agreement. PALMco&rsquo;s current and historical prices are not an indicator of future prices.</p>

<p><strong><u>Other Charges:</u></strong>&nbsp; You are also responsible for paying and reimbursing PALMco for all applicable taxes, and other government fees, assessments, and charges, however designated, relating to the natural gas and/or electric supply service provided under this Agreement. This may include, but shall not be limited to, utility taxes, gross receipts taxes, and sales or use taxes imposed on PALMco and/or you by federal, state, and/or local authorities, that you are required to pay or that PALMco passes through to you. If you are tax exempt, you must furnish PALMco an exemption certificate before service commences. Your natural gas and/or electric supply service price is only for your natural gas and/or electric supply and it does not include utility transportation, delivery, distribution or other charges that your gas or electric utility may impose for which you are responsible.</p>

<p><strong><u>AGREEMENT TERM</u></strong>:</p>

<p><strong><u>Variable</u></strong><strong>. </strong>This Agreement will begin with your first meter read by your utility following your enrollment with PALMco and will continue automatically on a month-to-month basis.</p>

<p><strong><u>Fixed.</u></strong> This Agreement will begin with your first meter read by your utility following your enrollment with PALMco and will continue for the period of time set forth in your Confirmation Letter.</p>

<p><strong><u>RESCISSION</u></strong><strong>.</strong> You have a right to rescind this Agreement within a 3-Day rescission period. The 3-Day rescission period begins on one of the following: 1) if in-person, when the contract was signed, 2) if online, when the customer transmits electronic acceptance via the Internet, or 3) if mailed, when the mail was postmarked.</p>

<p><strong><u>TERMINATION.</u></strong> PALMco may terminate this Agreement by giving you 35 days&rsquo; advance written notice before the effective date of such termination if, you fail to meet your obligations under this Agreement, your utility terminates your service, or if PALMco is no longer able to serve you. You may terminate this Agreement at any time by: (a) calling PALMco at (877) 726-5862; (b) sending a letter to PALMco at 8751 18<sup>th</sup> Avenue Brooklyn, NY 11214; or (c) e-mailing PALMco at customerservice@palmcoenergy.com. Upon termination, you will be returned to your utility&rsquo;s standard service or you may choose another supplier. You will remain obligated to pay for the natural gas and/or electric supply service provided by PALMco prior to the effective date of the termination. The effective date of any such termination will be determined by your utility. The amount of your early termination fee (if any) is set forth in your Confirmation Letter.</p>

<p><strong><u>FIXED TERM AUTOMATIC RENEWAL.</u></strong> At least forty-five (45) days before the expiration of your Fixed Term, PALMco will provide written notice to you of the Agreement&rsquo;s renewal (&ldquo;Renewal Notice&rdquo;). The Renewal Notice will set forth the proposed renewal option(s), including any applicable information required by the Commission, and any other changes to the existing Agreement. If you do not respond to the Renewal Notice or otherwise terminate this Agreement by notifying PALMco in accordance with the Termination section herein, then your Agreement will automatically renew in accordance with the terms set forth in the Renewal Notice.</p>

<p><strong><u>BILL PAYMENT</u></strong><strong>. </strong>You will receive a single bill from your utility each month which will include the charges for PALMco&rsquo;s natural gas and/or electric supply service and for the services provided by your utility. You will make payment for all of these services directly to your utility. You will be billed for gas and/or electricity based on your consumption information that PALMco receives from your utility(ies) (&ldquo;Billing Quantity&rdquo;). Payment for gas and electricity supply service is due on your receipt of the bill. If payment is not received from you on a timely basis, PALMco may, after 20 days written notice to you, suspend performance and terminate this Agreement pursuant to procedures approved by the &nbsp;District of Columbia Public Service Commission (&ldquo;Commission&rdquo;), provided, however, that you shall remain obligated to pay for all gas and electricity sold to you prior to such cancellation. You shall pay a late payment charge on all unpaid amounts (including arrears and late payment charges) owing and not received by PALMco within 20 days of the date of the bill at a rate of 1.5% per month or the maximum amount permitted by law, whichever is lower. You also shall pay PALMco&rsquo;s reasonable attorneys&rsquo; fees and expenses incurred by it in collecting any payment from you.</p>

<p><strong><u>CUSTOMER INFORMATION RELEASE.</u></strong> You authorize PALMco to obtain from your utility certain information needed to commence or continue to provide natural gas and/or electric supply service to you. This may include, but is not limited to, information such as, your utility account name, billing address, service address, utility account number, billing cycle, utility rate class or code, historical and future usage or consumption data, billing and payment history, credit information and public assistance status (collectively referred to as &ldquo;Customer Information&rdquo;). PALMco reserves the right to refuse to provide gas or electricity supply service to you under this Agreement if PALMco is unable to obtain Customer Information or it obtains Customer Information that it considers to be unsatisfactory.&nbsp; You authorize PALMco to release Customer Information to third parties that need to know such information in connection with your natural gas and/or electric supply service. This authorization will remain in effect throughout the term of this Agreement. You may rescind such authorization at any time by calling or providing written notice to PALMco. In the case of consolidated billing, you acknowledge that customer billing and payment information may be provided to PALMco.</p>

<p><strong><u>FUEL MIX REPORT &amp; CONSUMER PAMPHLET.</u></strong> A copy of PALMco&rsquo;s Fuel Mix Report and Consumer Pamphlet are available at www.palmcoenergy.com. This information is updated periodically following the requirements of the Commission.</p>

<p><strong><u>APPLICABLE LAWS, REGULATORY CHANGES.</u></strong> This Agreement is subject to all applicable Federal, state, and local laws, and the orders, rules, and regulations of governmental agencies having jurisdiction over the subject matter of this Agreement, including, without limitation, the Public Service Commission. THIS AGREEMENT WILL BE GOVERNED AND CONSTRUED IN ACCORDANCE WITH D.C. LAW, WITHOUT REGARD TO PRINCIPLES RELATING TO CONFLICTS OF LAW. If at some future date there is a change in any law, rule, regulation, tariff or regulatory structure (&ldquo;Regulatory Change&rdquo;) which impacts any term, condition, or provision of this Agreement, including, but not limited to, price, PALMco shall have the right to cancel or modify this Agreement to reflect such change by providing advance written notice to you.</p>

<p><strong><u>CONTACT INFORMATION, DISPUTE RESOLUTION &amp; QUESTIONS REGARDING YOUR SERVICE</u></strong><strong>. </strong>You may contact PALMco at (877) 726-5862 (toll-free), by e-mail at CustomerService@PalmcoEnergy.com, via PALMco&rsquo;s website at www.palmcoenergy.com, or by mail at 8751 18<sup>th</sup> Avenue Brooklyn, NY 11214 if you have any questions or complaints about your service under this Agreement. Customer and PALMco agree to use best efforts to resolve the dispute.&nbsp; If you are not satisfied with the response from PALMco&rsquo;s customer service representative, then you may ask that your questions be referred to a supervisor, who will respond promptly. If you remain unsatisfied with PALMco&rsquo;s attempts to resolve the issue, you may seek assistance or information regarding your consumer protection rights from the District of Columbia&rsquo;s Public Service Commission and/or Office of People&rsquo;s Counsel. The Public Service Commission of the District of Columbia can be contacted by calling (202) 626-5100 or www.dcpsc.org. The Office of the People&rsquo;s Counsel can be reached at (202) 727-3071 or www.opc-dc.gov.</p>

<p><strong><u>ARBITRATION.</u></strong><strong> TO THE FULLEST EXTENT PERMITTED BY APPLICABLE D.C. LAW, IF THERE IS AN ISSUE, CLAIM OR DISPUTE RELATING TO THIS AGREEMENT FOR NATURAL GAS AND/OR ELECTRIC SUPPLY SERVICE THAT NEEDS TO BE RESOLVED AND WE ARE UNABLE TO RESOLVE IT INFORMALLY, IT MUST BE RESOLVED THROUGH FINAL, BINDING ARBITRATION AND WE MUTUALLY FOREGO THE RIGHT TO RESOLVE IT IN A COURT OF LAW. THIS APPLIES REGARDLESS OF WHETHER THE ISSUE, CLAIM OR DISPUTE INVOLVES A TORT, FRAUD, BREACH OF CONTRACT, MISREPRESENTATION, PRODUCT LIABILITY, NEGLIGENCE, AND VIOLATION OF A STATUTE OR ANY OTHER LEGAL THEORY. INCLUDED ARE ALL ISSUES, CLAIMS AND DISPUTES ARISING OUT OF OR RELATING TO ANY ASPECT OF YOUR PARTICIPATION IN THIS AGREEMENT FOR NATURAL GAS AND/OR ELECTRIC SUPPLY SERVICE WHETHER ARISING DURING OR AFTER YOUR PARTICIPATION IN THIS AGREEMENT FOR NATURAL GAS AND/OR ELECTRIC SUPPLY SERVICE. ALL ARBITRATIONS SHALL BE CONDUCTED ON AN INDIVIDUAL (AND NOT A CLASS-WIDE) BASIS AND AN ARBITRATOR SHALL HAVE NO AUTHORITY TO AWARD CLASS-WIDE RELIEF. YOU ACKNOWLEDGE AND AGREE THAT THIS SPECIFICALLY PROHIBITS YOU FROM COMMENCING ARBITRATION PROCEEDINGS AS A REPRESENTATIVE OF OTHERS OR JOINING IN ANY ARBITRATION PROCEEDINGS BROUGHT BY ANY OTHER PERSON. NOTWITHSTANDING THE FOREGOING, THIS PARAGRAPH DOES NOT PREVENT YOU FROM FILING A COMPLAINT RELATING TO YOUR ELECTRICITY OR GAS SUPPLY SERVICE WITH PALMCO PURSUANT TO THE LAWS GOVERNING RETAIL ELECTRIC GENERATION OR NATURAL GAS SUPPLIERS IN YOUR STATE AND THE REGULATIONS OF ANY AGENCY IN YOUR STATE WITH JURISDICTION OVER RETAIL ELECTRIC OR NATURAL GAS SUPPLIERS.</strong></p>

<p><strong><u>FORCE MAJEURE</u></strong><strong>. </strong>Neither you nor PALMco will be liable for breaching this Agreement if the breach is due to a force majeure event. A &ldquo;force majeure event&rdquo; shall include a fire, act of god or public enemy, labor strike, lockout or other industrial disturbance, act of terrorism, government action, utility action, storm, hurricane, ﬂood, explosion, shortage or unavailability of transmission facilities, changes in laws, rules, or regulations of any governmental authority, and other events that cannot be prevented or overcome by due diligence. This does not include an inability to pay any amount owing pursuant to this Agreement.</p>

<p><strong><u>LIMITATION OF LIABILITY.</u></strong><strong> TO THE FULLEST EXTENT PERMITTED BY APPLICABLE D.C. LAW, NEITHER YOU NOR PALMCO WILL BE LIABLE TO THE OTHER FOR ANY CONSEQUENTIAL, EXEMPLARY, PUNITIVE, INCIDENTAL, OR INDIRECT DAMAGES ARISING FROM A BREACH OF THIS AGREEMENT.</strong></p>

<p><strong><u>MISCELLANEOUS</u></strong><strong>. </strong>You may not assign this Agreement without PALMco&rsquo;s prior written consent. This Agreement will inure to and be binding upon the successors and assignees of the parties. This Agreement can only be amended by a writing signed by all the parties hereto. This Agreement is the entire understanding between you and PALMco with respect to the subject matter hereof and there are no promises, covenants or undertakings other than those expressly set forth in this Agreement. PALMco may sell, transfer, pledge, or assign the accounts, revenues, or proceeds hereof, in connection with any financial agreement and may assign this Agreement to another energy supplier, energy services company or other entity, subject to the Public Service Commission rules and procedures governing such transactions.</p>

<p><strong><u>ELECTRONIC COMMUNICATION.</u></strong> Unless otherwise required by law, if you provide PALMco with your email address, you agree that PALMco may transmit to you all notices and other communications, including those required in this Agreement, electronically to the email address provided by you. You shall be responsible for notifying PALMco of any change in email address and/or any withdrawal of your consent to electronic communications. Notices transmitted to you via email will be deemed to have been received if transmitted to you at the email address provided to PALMco by you.</p>

<p><strong><u>EMERGENCIES</u></strong><strong>. IN THE EVENT OF AN EMERGENCY OR SERVICE INTERRUPTION, YOU SHOULD IMMEDIATELY CONTACT YOUR LOCAL UTILITY.</strong></p>

<p><strong>v.17-02.06</strong></p>',
                'created_at' => '2017-02-28 01:58:14',
                'updated_at' => '2017-02-28 02:27:15',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'state_id' => 5,
                'template_type' => 'Contract Summary',
                'commodity_id' => 1,
                'locale_code' => 'en',
                'source_file_name' => 'NJ TPS Elec Contract Summary - Res & Comm - V.E.17-01.12.docx',
                'version' => 'v. 17-01.12',
                'is_active' => false,
                'template_html' => '<p><strong>PALMCO POWER NJ, LLC CONTRACT SUMMARY</strong></p>

<table border="1" cellpadding="0" cellspacing="0" style="width:762px;" width="762">
<tbody>
<tr>
<td style="width:212px;">
<p>Third Party Supplier Information:<strong> By entering into this contract, you are agreeing to purchase your electric supply from this supplier.</strong></p>
</td>
<td style="width:550px;">
<p style="margin-left:-.7pt;">PALMco Power NJ, LLC. Phone: (877) 726-5862, Website: <a href="http://www.PalmcoEnergy.com">www.PalmcoEnergy.com</a>,</p>

<p style="margin-left:-.7pt;">Email: <a href="mailto:CustomerService@PALMcoEnergy.com">CustomerService@PALMcoEnergy.com</a>,</p>

<p style="margin-left:-.7pt;">Mailing Address: 10,000 Lincoln Drive East &ndash; Suite 201, Marlton, NJ 08053.</p>

<p style="margin-left:-.7pt;">Main Office Address: 8751 18<sup>th</sup> Avenue, Brooklyn, NY 11214; BPU License # ESL0049.</p>

<p style="margin-left:-.7pt;">PALMco is responsible for your electric supply.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Price Structure</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;"><strong>Variable</strong>. For your first two billing cycles, you will pay an introductory price of $&nbsp; <u>[PRODUCT.RATE]</u>&nbsp; per kWh. Beginning in the third billing cycle, you will pay a price that may vary from month to month as determined by PALMco in its sole discretion based on a monthly zonal locational marginal price (&ldquo;LMP&rdquo;) determined on a day ahead or real time basis, any supply and agency functions that PALMco performs for you, line loss, compliance costs, certain transmission, capacity, ancillary, and administrative costs incurred by PALMco, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins. &nbsp;There is no limit on how much the price of your electric generation supply service may change from one billing cycle to the next. You are responsible for paying and reimbursing PALMco for all applicable taxes, and other government fees, assessments, and charges, however designated, relating to the electric supply service.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Generation/Supply Price</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">$&nbsp; <u>[PRODUCT.RATE]</u>&nbsp; per kWh. This is an introductory rate only for the first two billing cycles.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Statement Regarding Savings</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">PALMco&rsquo;s electric supply price may not always provide you savings.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Amount of time required to change from TPS back to default service or to another TPS</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">If you cancel service with PALMco, the time required to change from PALMco to default utility service or another electric supplier will be determined by your electric utility. PALMco estimates that it will take about 1-2 billing cycles from the date of your cancellation request.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Incentives</p>
</td>
<td style="width:550px;">
<p>At the time of enrollment, customers are eligible to enroll in PALMco&rsquo;s Restaurant.com Gift Card and PALMco Cares.&nbsp; Senior Citizen Discounts are available.&nbsp; After enrolling with PALMco, all customers are eligible to sign up for PALMco&rsquo;s Referral Incentive and Loyalty Credit programs. Please visit <a href="http://www.PalmcoEnergy.com/Rewards">www.PalmcoEnergy.com/Rewards</a> for more information about PALMco&rsquo;s incentive programs.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Right to Cancel/Rescind</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">You have 7 calendar days from the date of the confirmation notice from your utility to contact your utility and cancel this contract and your selection of PALMco as your electric supplier.&nbsp;</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Contract Start Date</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">The start date of your electric supply service from PALMco will be a date set by your electric utility, which should be about 1-2 billing cycles after your enrollment.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Contract Term/Length</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">Month-to-month.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Cancellation/Early Termination Fees</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">No.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Renewal Terms</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">Your contract will renew automatically each month under the same terms and conditions (with the price for PALMco electric service staying the same, decreasing, or increasing), unless you or PALMco terminates the contract by giving 30 days&rsquo; notice to the other.</p>
</td>
</tr>
<tr>
<td style="width:212px;height:67px;">
<p>Distribution Company Information</p>
</td>
<td style="width:550px;height:67px;">
<p style="margin-left:-.9pt;">Please note your correct electric utility contact information from the list below.</p>

<ol>
<li><strong>Jersey Central Power &amp; Light</strong>: Emergency Phone: (888) 544-4877, Customer Service Phone: (800) 662-3115, Website: <a href="https://www.firstenergycorp.com/content/customer/jersey_central_power_light.html">https://www.firstenergycorp.com/content/customer/jersey_central_power_light.html</a></li>
<li><strong>Public Service Electric &amp; Gas</strong>: Emergency and Customer Service Phone: (800) 436-7734, Website: <a href="https://www.pseg.com/">https://www.pseg.com/</a></li>
<li><strong>Rockland Electric</strong>/<strong>Orange &amp; Rockland</strong>: Emergency and Customer Service Phone: (877) 434-4100, Website: <a href="http://www.oru.com/index.html">http://www.oru.com/index.html</a></li>
<li><strong>Atlantic City Electric</strong>: Emergency Phone: (800) 833-7476, Customer Service Phone: (800) 642-3780, Website: <a href="https://www.atlanticcityelectric.com/">https://www.atlanticcityelectric.com/</a></li>
</ol>

<p style="margin-left:-.9pt;">Your electric utility will continue to deliver your electricity and you will continue to pay your utility for such delivery service. You should call your electric utility in the event of any emergency, electric outage, or service interruption.</p>
</td>
</tr>
<tr>
<td style="width:212px;height:91px;">
<p>&nbsp;</p>
</td>
<td style="width:550px;height:91px;">
<p align="right"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; v. 17-01.12</strong></p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>',
                'created_at' => '2017-02-28 02:37:31',
                'updated_at' => '2017-02-28 21:22:28',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'state_id' => 3,
                'template_type' => 'Terms of Service',
                'commodity_id' => 1,
                'locale_code' => 'en',
                'source_file_name' => 'MA T&Cs V.E.16-11.08.docx',
                'version' => 'V.E.16-11.08',
                'is_active' => false,
                'template_html' => '<p><strong><u>MASSACHUSETTS </u></strong><strong><u>TERMS OF SERVICE &amp; LETTER OF AUTHORIZATION</u></strong></p>

<p><strong><u>INTRODUCTION: </u></strong>This is an agreement, together with your Disclosure Label, Confirmation Letter and any and all Renewal Notices (if applicable) (collectively, the &ldquo;Agreement&rdquo;), between PALMco Power MA, LLC (&ldquo;PALMco Power&rdquo; or &ldquo;PALMco&rdquo;) and you for electric generation supply service at each of the account addresses listed in your Confirmation Letter (or listed in an addendum). You agree to authorize a switch of your electric supply service to PALMco and to purchase all the electricity from PALMco Power required to service each of the accounts listed in your Confirmation Letter (or listed in any addendum) (&ldquo;Purchase Quantities&rdquo;) at a price as described in this Agreement. PALMco Power is licensed by the Massachusetts Department of Public Utilities to provide electric supply service (CS-092).</p>

<p>You understand and acknowledge as follows: (a) you are the named customer on each of the account(s) listed in your Confirmation Letter (or in any addendum), or you are the spouse of the named customer for such account(s), and you are over 18 years old and authorized to make decisions concerning such account(s); (b) any PALMco sales representative with whom you have spoken represents PALMco and is not from your utility and is not affiliated with your utility; (c) there is no cost to switch to PALMco as your electric supplier, or to enroll in PALMco&rsquo;s Power Choice Program; (d) your utility will continue to deliver your electricity and send you a single bill for your electric service; (e) savings are not guaranteed under this Agreement; (f) only one generation company, aggregator, or supplier may be designated as your competitive electric supplier; (g) your current utility/primary generation company, current aggregator, or current supplier may impose a charge to switch you to PALMco; and (h) PALMco imposes no cancellation fees for switching back to Utility Standard Offer Service or to another supplier.</p>

<p><strong><u>PRICING.</u></strong></p>

<p><strong><u>Introductory Electric Price.</u></strong> If you receive electric supply service (&ldquo;Electric Service&rdquo;) from PALMco, you will pay an introductory price as set forth in your Confirmation Letter and/or Disclosure Label for the time period set forth in your Confirmation Letter and/or Disclosure Label, and thereafter, your price for electric supply service will continue automatically on a month-to-month basis at a variable price as described below unless you or PALMco terminates this Agreement.</p>

<p><strong><u>Variable Electric Price.</u></strong> The price you pay may vary from month to month as determined by PALMco in its sole discretion based on a monthly zonal locational marginal price determined on a day ahead or real time basis, any supply and agency functions that PALMco performs for you, line loss, compliance costs, certain transmission, capacity, ancillary, and administrative costs incurred by PALMco, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses and margins. After your Introductory Electric Price, there is no limit on how much the price of your Electric Service may change from one billing cycle to the next and your variable price may be higher or lower than your utility&rsquo;s standard offer service rate in any given month. PALMco does not guarantee savings in any month or for the entire length of this Agreement. PALMco&rsquo;s current and historical prices are not an indicator of future prices.</p>

<p><strong><u>Electric Service</u></strong>: You are responsible for paying and reimbursing PALMco for all applicable taxes, and other government fees, assessments, and charges, however designated, relating to the service provided under this Agreement. This may include, but shall not be limited to, utility taxes, gross receipts taxes, and sales or use taxes imposed on PALMco and/or you by federal, state, and/or local authorities that PALMco passes through to you. If you are tax exempt, you must furnish PALMco an exemption certificate before your service commences.</p>

<p><strong><u>RIGHT TO RESCIND.</u></strong> You may cancel your Electric Service under this Agreement, without charge or penalty, at any time prior to midnight of the third business day after your receipt of a copy these Terms of Service, Disclosure Label, and PALMco&rsquo;s Confirmation Letter confirming your agreement to take Electric Service from PALMco, by contacting PALMco at 877-726-5862, or via e-mail at customerservice@palmcoenergy.com.</p>

<p><strong><u>HISTORICAL USAGE INFORMATION.</u></strong>&nbsp; As a condition to providing you service under this Agreement, you authorize PALMco to obtain historical usage and other information about you (&ldquo;Customer Information&rdquo;) from your utility so that PALMco can start and continue its service to you. PALMco reserves the right to refuse to provide service to you if it determines that such Customer Information is unsatisfactory.</p>

<p><strong><u>LENGTH OF AGREEMENT, RENEWAL AND AMENDMENT.</u></strong> You agree to buy Electric Service from PALMco Power for the street address(es) listed in your Confirmation Letter (or in an addendum) beginning on a date set by your Utility (&ldquo;Starting Date&rdquo;), for an initial period of one month from the Starting Date. Thereafter, your purchase of Electric Service from PALMco will continue automatically on a month-to-month basis until terminated by either you or PALMco. PALMco will impose no cancellation charge if you choose to cancel this Agreement; provided, however, that you will still remain obligated to pay PALMco for all Electric Service sold to you prior to such cancellation. PALMco will also provide you at least 30 days&rsquo; advance written notice of any material change to this Agreement that is not to your benefit.</p>

<p><strong><u>BILLING/TERMINATION OF SERVICE.</u></strong> You will be billed by your utility and will pay PALMco for Electric Service based on meter readings and consumption information that PALMco receives from your utility (in each case, the &ldquo;Billing Quantity&rdquo;).&nbsp; You will receive a single monthly bill from your utility which contains both PALMco&rsquo;s charges and your utility&rsquo;s charges. Your bill is payable upon receipt. Your utility may (a) estimate your Electric Service usage; (b) offer deferred payment arrangements covering past due billing balances; and (c) offer a third party notification program. For additional information concerning these programs, you should contact your utility. If you are a residential customer and your payment to PALMco is not received within 48 days of your receipt of your bill, PALMco may terminate this Agreement and your Electric Service, as the case may be; provided that you will still remain obligated to pay PALMco for all Electric Service sold to you prior to such termination. PALMco will send you one or more notices before terminating your service for failure to pay your bill, including a final notice of termination indicating when your Electric Service will be terminated. If you are a nonresidential customer and your payment to PALMco is not received within 15 days of receipt of your bill, PALMco may terminate this Agreement and your Electric supply Service, as the case may be; provided that you will still remain obligated to pay PALMco for all Electric Service sold to you prior to such termination.</p>

<p><strong><u>LATE PAYMENT CHARGES.</u></strong> If you are a nonresidential customer, you shall be required to pay a late payment charge on any unpaid bill amounts (including arrears and unpaid late payment charges) not received by PALMco within 15 days of the date you receive your bill. Such late payment charge shall be calculated at an annual rate of interest which is the equivalent of the rate on two-year United States Treasury notes for the preceding 12 months ending December 31 of any year, plus 10%. You also shall pay PALMco&rsquo;s reasonable attorneys&rsquo; fees, and related costs and expenses incurred by PALMco in attempting to collect any payment from you.</p>

<p><strong><u>CUSTOMER SERVICE AND COMPLAINTS.</u></strong> You may contact PALMco Power at 1-877-726-5862 (toll free) between the hours of 8 a.m. and 5 p.m. EST or EDT, or by e-mail at CustomerService@palmcoEnergy.com, if you have any questions or complaints about your service under this Agreement. If your complaint is not resolved after you have contacted PALMco, you may contact the Massachusetts Department of Public Utilities (&ldquo;DPU&rdquo;) for assistance at 1-877-886-5066 or www.mass.gov/dpu.</p>

<p><strong><u>STANDARD OFFER SERVICE AND LOW INCOME RATE ELIGIBILITY.</u></strong>&nbsp; If you are currently receiving your electric supply service from your utility, you are receiving Standard Offer Service. If, after purchasing Electric Service from PALMco, you should ever wish to switch back to Standard Offer Service, you may do so by contacting your utility. PALMco will charge no cancellation fee if you wish to switch back to Standard Offer Service. Default/basic generation service is also available to you.&nbsp; If you need information about default/basic generation service, you should contact your utility. Certain residential customers may qualify for discounted electric rates based on income. You can contact your utility for a list of low income rate eligibility requirements and a program application.</p>

<p><strong><u>APPLICABLE LAWS, ETC.</u></strong> This Agreement is subject to all applicable local, state and federal laws, and the orders, rules and regulations of governmental agencies having jurisdiction over the subject matter of this Agreement, including the DPU. Services provided by your utility are subject to all applicable state and federal laws, orders, rules, and regulations. <strong>THIS AGREEMENT WILL BE GOVERNED AND CONSTRUED IN ACCORDANCE WITH MASSACHUSETTS LAW, WITHOUT REGARD TO PRINCIPLES RELATING TO CONFLICTS OF LAW.</strong></p>

<p><strong><u>FORCE MAJEURE.</u></strong> Neither PALMco nor you will be liable for a breach of this Agreement if such breach is due to a force majeure event. A &ldquo;force majeure event&rdquo; means a material, unavoidable occurrence beyond a party&rsquo;s control, such as a fire, act of god or public enemy, labor strike, lockout or other industrial disturbance, act of terrorism, government action, utility action, storm, hurricane, flood, explosion, shortage or unavailability of transmission facilities, and other events that cannot be prevented or overcome by ordinary due diligence. A force majeure event does not include an inability to pay any amount owing pursuant to this Agreement.</p>

<p><strong><u>LIMITATION OF LIABILITY.</u></strong><strong> TO THE FULLEST EXTENT PERMITTED BY APPLICABLE MSSACHUSETTS LAW, NEITHER YOU NOR PALMCO SHALL BE LIABLE TO EACH OTHER FOR ANY CONSEQUENTIAL, EXEMPLARY, PUNITIVE, INCIDENTAL OR INDIRECT DAMAGES ARISING FROM A BREACH OF THIS AGREEMENT, INCLUDING, WITHOUT LIMITATION, LOST PROFITS OR LOST REVENUES.</strong></p>

<p><strong><u>NO WARRANTIES.</u></strong><strong> PALMCO POWER MAKES NO WARRANTIES, AFFIRMATIONS OF FACT OR PROMISES, EXPRESS OR IMPLIED, THAT EXTEND BEYOND THE FACE OF THIS AGREEMENT, INCLUDING, WITHOUT LIMITATION, WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE.</strong></p>

<p><strong><u>ARBITRATION AND WAIVER OF JURY TRIAL.</u></strong><strong> TO THE FULLEST EXTENT PERMITTED BY APPLICABLE MASSACHUSETTS LAW, IF THERE IS AN ISSUE, CLAIM OR DISPUTE RELATING TO THIS AGREEMENT FOR ELECTRIC SUPPLY SERVICE THAT NEEDS TO BE RESOLVED AND WE ARE UNABLE TO RESOLVE IT INFORMALLY, IT MUST BE RESOLVED THROUGH FINAL, BINDING ARBITRATION AND WE MUTUALLY FOREGO THE RIGHT TO RESOLVE IT IN A COURT OF LAW. THIS APPLIES REGARDLESS OF WHETHER THE ISSUE, CLAIM OR DISPUTE INVOLVES A TORT, FRAUD, BREACH OF CONTRACT, MISREPRESENTATION, PRODUCT LIABILITY, NEGLIGENCE, AND VIOLATION OF A STATUTE OR ANY OTHER LEGAL THEORY. INCLUDED ARE ALL ISSUES, CLAIMS AND DISPUTES ARISING OUT OF OR RELATING TO ANY ASPECT OF YOUR PARTICIPATION IN THIS AGREEMENT FOR ELECTRIC SUPPLY SERVICE WHETHER ARISING DURING OR AFTER YOUR PARTICIPATION IN THIS AGREEMENT FOR ELECTRIC SUPPLY SERVICE. ALL ARBITRATIONS SHALL BE CONDUCTED ON AN INDIVIDUAL (AND NOT A CLASS-WIDE) BASIS AND AN ARBITRATOR SHALL HAVE NO AUTHORITY TO AWARD CLASS-WIDE RELIEF. YOU ACKNOWLEDGE AND AGREE THAT THIS SPECIFICALLY PROHIBITS YOU FROM COMMENCING ARBITRATION PROCEEDINGS AS A REPRESENTATIVE OF OTHERS OR JOINING IN ANY ARBITRATION PROCEEDINGS BROUGHT BY ANY OTHER PERSON. NOTWITHSTANDING THE FOREGOING, THIS PARAGRAPH DOES NOT PREVENT YOU FROM FILING A COMPLAINT RELATING TO YOUR ELECTRICITY SUPPLY SERVICE WITH PALMCO PURSUANT TO THE LAWS GOVERNING RETAIL ELECTRIC GENERATION SUPPLIERS IN YOUR STATE AND THE REGULATIONS OF ANY AGENCY IN YOUR STATE WITH JURISDICTION OVER RETAIL ELECTRIC GENERATION SUPPLIERS.</strong></p>

<p><strong><u>MISCELLANEOUS.</u></strong> This Agreement is the entire understanding between you and PALMco with respect to the subject matter hereof and there are no promises, covenants or undertakings other than those expressly set forth in this Agreement. Except as provided herein, this Agreement can only be amended by a writing signed by you and PALMco. You may not assign this Agreement without the prior written consent of PALMco.&nbsp; PALMco Power may sell, transfer, pledge, or assign the accounts, revenues, or proceeds hereof, in connection with any financial agreement and may assign this Agreement to another energy supplier, energy services company or other entity in accordance with the DPU rules and procedures, if any, governing such transactions. This Agreement will inure to and be binding upon the successors and assignees of the parties.</p>

<p><strong>IN THE EVENT OF AN EMERGENCY, ELECTRIC OUTAGE, OR SERVICE INTERRUPTION, YOU SHOULD IMMEDIATELY CONTACT YOUR UTILITY.</strong></p>

<p align="right"><strong>V.E.16-11.08</strong></p>

<p>&nbsp;</p>',
                'created_at' => '2017-02-28 02:32:00',
                'updated_at' => '2017-02-28 02:32:21',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'state_id' => 4,
                'template_type' => 'Terms of Service',
                'commodity_id' => 3,
                'locale_code' => 'en',
                'source_file_name' => 'MD T&C V.E.16-09.23.docx',
                'version' => 'V.16-09.23',
                'is_active' => false,
                'template_html' => '<p><strong><u>TERMS AND CONDITIONS MARYLAND</u></strong></p>

<p><strong><u>INTRODUCTION: </u></strong>This is an agreement, together with your Contract Summary, Confirmation Letter and any and all Renewal Notices (if applicable) (collectively, the &ldquo;Agreement&rdquo;), between PALMco Energy MD, LLC (&ldquo;PALMco Energy&rdquo; or &ldquo;PALMco&rdquo;) and you for natural gas supply service and/or PALMco Power MD, LLC (&ldquo;PALMco Power&rdquo; or &ldquo;PALMco&rdquo;) and you for electric generation supply service at each of the account addresses listed in your Confirmation Letter (or listed in an addendum). You agree to authorize a switch of your natural gas and/or electric supply service to PALMco and to purchase all the natural gas from PALMco Energy and/or electricity from PALMco Power required to service each of the accounts listed in your Confirmation Letter (or listed in any addendum) (&ldquo;Purchase Quantities&rdquo;) at a price as described in this Agreement. PALMco Energy is licensed by the Maryland Public Service Commission to provide natural gas supply service (IR-1803). PALMco Power is licensed by the Maryland Public Service Commission to provide electric supply service (IR-1804).</p>

<p><strong><u>PRICING.</u></strong></p>

<p><strong>Natural Gas Price:</strong> If you receive natural gas supply service from PALMco Energy, for the first two billing cycles of this Agreement, you will pay an introductory price per therm as set forth in your Contract Summary and/or Confirmation Letter. Beginning in the third billing cycle and thereafter, you will pay a price for natural gas supply service that may vary from month to month as determined by PALMco in its sole discretion based on the applicable monthly NYMEX closing price for natural gas, applicable interstate transportation costs, any supply and agency functions that PALMco performs for you, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins.&nbsp;</p>

<p><strong>Electric Price:</strong> If you receive electric supply service from PALMco Power, for the first two billing cycles of this Agreement, you will pay an introductory price per kWh as set forth in your Contract Summary and/or Confirmation Letter. Beginning in the third billing cycle and thereafter, you will pay a price that may vary from month to month as determined by PALMco in its sole discretion based on a monthly zonal locational marginal price (&quot;LMP&quot;) determined on a day ahead or real time basis, any supply and agency functions that PALMco performs for you, certain transmission, line loss, compliance costs, capacity, ancillary, and administrative costs incurred by PALMco, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins.</p>

<p>&nbsp;</p>

<p>Natural Gas &amp; Electric Supply Price: Your natural gas and/or electric supply service price does not include, and you will be required to pay, applicable taxes and fees. Your natural gas and/or electric supply service price does not include your utility charges, for which you are responsible. Your natural gas and/or electric supply service price may fluctuate from month-to-month and may be higher or lower than your utility&rsquo;s rate in any given month, and there are no guarantee savings over your utility&rsquo;s rates for any given month or for the entire term of this Agreement.&nbsp; You may access your estimated rate for your next billing period at least 12 days prior to the close of your current billing period by visiting the PALMco website at https://www.palmcoenergy.com/maryland-rates/ <strong>There is not a limit on how much your natural gas and/or electric supply service price may change from one billing cycle to the next.</strong></p>

<p><strong><u>AGREEMENT TERM</u></strong><strong>. </strong>This Agreement will be in full force and effect for an initial period of one month commencing on the date PALMco&rsquo;s service to you starts.&nbsp; This Agreement will continue in full force and effect on a month-to-month basis thereafter until terminated by either you or PALMco.</p>

<p><strong><u>TERMINATION.</u></strong> PALMco may terminate this Agreement for any or no reason by giving you 30 days&rsquo; advance written notice before the effective date of such termination. You may terminate this Agreement at any time by contacting PALMco by phone or in writing. Upon termination, you will be returned to your utility&rsquo;s standard service or you may choose another supplier. You will remain obligated to pay for the natural gas and/or electric supply service provided by PALMco prior to the effective date of the termination.</p>

<p><strong><u>BILL PAYMENT</u></strong><strong>. </strong>You will receive a single bill from your utility each month which will include the charges for PALMco&rsquo;s natural gas and/or electric supply service and for the services provided by your utility. You will make payment for all of these services directly to your utility. You will be billed for gas and/or electricity based on your consumption information that PALMco receives from your utility(ies) (&ldquo;Billing Quantity&rdquo;). Payment for gas and electricity supply service is due on your receipt of the bill. If payment is not received from you on a timely basis, PALMco may, after 20 days written notice to you, suspend performance and terminate this Agreement pursuant to procedures approved by the Maryland Public Service Commission (&ldquo;Commission&rdquo;), provided, however, that you shall remain obligated to pay for all gas and electricity sold to you prior to such cancellation. You shall pay a late payment charge on all unpaid amounts (including arrears and late payment charges) owing and not received by PALMco within 20 days of the date of the bill at a rate of 1.5% per month or the maximum amount permitted by law, whichever is lower. You also shall pay PALMco&rsquo;s reasonable attorneys&rsquo; fees and expenses incurred by it in collecting any payment from you.</p>

<p><strong><u>CUSTOMER INFORMATION PRIVACY POLICY &amp; RELEASE.</u></strong> You authorize PALMco to obtain from your utility certain information needed to commence or continue to provide natural gas and/or electric supply service to you. This may include, but is not limited to, information such as, your utility account name, billing address, service address, utility account number, billing cycle, utility rate class or code, historical and future usage or consumption data, billing and payment history, credit information and public assistance status (collectively referred to as &ldquo;Customer Information&rdquo;). PALMco reserves the right to refuse to provide gas or electricity supply service to you under this Agreement if PALMco is unable to obtain Customer Information or it obtains Customer Information that it considers to be unsatisfactory.&nbsp; You authorize PALMco to release Customer Information to third parties that need to know such information in connection with your natural gas and/or electric supply service. This authorization will remain in effect throughout the term of this Agreement. You may rescind such authorization at any time by calling or providing written notice to PALMco. In the case of consolidated billing, you acknowledge that customer billing and payment information may be provided to PALMco.</p>

<p><strong><u>TAXES.</u></strong> You are responsible for paying and reimbursing PALMco for all applicable taxes, and other government fees, assessments, and charges, however designated, relating to the supply service provided under this Agreement. If you are tax exempt, you must furnish PALMco an exemption certificate before service commences.</p>

<p><strong><u>ENVIRONMENTAL DISCLOSURE.</u></strong> A copy of PALMco&rsquo;s environmental disclosure label information is available at www.palmcoenergy.com.</p>

<p><strong><u>CHOICE OF LAW. </u></strong><strong>THIS AGREEMENT WILL BE GOVERNED AND CONSTRUED IN ACCORDANCE WITH MARYLAND LAW, WITHOUT REGARD TO PRINCIPLES RELATING TO CONFLICTS OF LAW.</strong></p>

<p><strong><u>DISPUTE RESOLUTION</u></strong><strong>. </strong>If you have any questions or concerns about your service under this Agreement, you should contact PALMco at (877) 726-5862 or by e-mail at CustomerService@PalmcoEnergy.com. Customer and PALMco agree to use best efforts to resolve the dispute.&nbsp; The Maryland Public Service Commission can be contacted by calling 1-800-492-0474 or online at http://www.psc.state.md.us.</p>

<p><strong><u>ARBITRATION. </u></strong><strong>TO THE FULLEST EXTENT PERMITTED BY APPLICABLE MARYLAND LAW, IF THERE IS AN ISSUE, CLAIM OR DISPUTE RELATING TO THIS AGREEMENT FOR NATURAL GAS AND/OR ELECTRIC SUPPLY SERVICE THAT NEEDS TO BE RESOLVED AND WE ARE UNABLE TO RESOLVE IT INFORMALLY, IT MUST BE RESOLVED THROUGH FINAL, BINDING ARBITRATION AND WE MUTUALLY FOREGO THE RIGHT TO RESOLVE IT IN A COURT OF LAW. THIS APPLIES REGARDLESS OF WHETHER THE ISSUE, CLAIM OR DISPUTE INVOLVES A TORT, FRAUD, BREACH OF CONTRACT, MISREPRESENTATION, PRODUCT LIABILITY, NEGLIGENCE, AND VIOLATION OF A STATUTE OR ANY OTHER LEGAL THEORY. INCLUDED ARE ALL ISSUES, CLAIMS AND DISPUTES ARISING OUT OF OR RELATING TO ANY ASPECT OF YOUR PARTICIPATION IN THIS AGREEMENT FOR NATURAL GAS AND/OR ELECTRIC SUPPLY SERVICE WHETHER ARISING DURING OR AFTER YOUR PARTICIPATION IN THIS AGREEMENT FOR NATURAL GAS AND/OR ELECTRIC SUPPLY SERVICE. ALL ARBITRATIONS SHALL BE CONDUCTED ON AN INDIVIDUAL (AND NOT A CLASS-WIDE) BASIS AND AN ARBITRATOR SHALL HAVE NO AUTHORITY TO AWARD CLASS-WIDE RELIEF. YOU ACKNOWLEDGE AND AGREE THAT THIS SPECIFICALLY PROHIBITS YOU FROM COMMENCING ARBITRATION PROCEEDINGS AS A REPRESENTATIVE OF OTHERS OR JOINING IN ANY ARBITRATION PROCEEDINGS BROUGHT BY ANY OTHER PERSON. NOTWITHSTANDING THE FOREGOING, THIS PARAGRAPH DOES NOT PREVENT YOU FROM FILING A COMPLAINT RELATING TO YOUR ELECTRICITY OR GAS SUPPLY SERVICE WITH PALMCO PURSUANT TO THE LAWS GOVERNING RETAIL ELECTRIC GENERATION OR NATURAL GAS SUPPLIERS IN YOUR STATE AND THE REGULATIONS OF ANY AGENCY IN YOUR STATE WITH JURISDICTION OVER RETAIL ELECTRIC GENERATION OR NATURAL GAS SUPPLIERS.</strong></p>

<p><strong><u>FORCE MAJEURE</u></strong><strong>. </strong>Neither you nor PALMco will be liable for breaching this Agreement if the breach is due to a force majeure event. A &ldquo;force majeure event&rdquo; shall include a fire, act of god or public enemy, labor strike, lockout or other industrial disturbance, act of terrorism, government action, utility action, storm, hurricane, ﬂood, explosion, shortage or unavailability of transmission facilities, changes in laws, rules, or regulations of any governmental authority, and other events that cannot be prevented or overcome by due diligence. This does not include an inability to pay any amount owing pursuant to this Agreement.</p>

<p><strong><u>LIMITATION ON WARRANTIES AND DAMAGES</u></strong>. <strong>PALMCO MAKES NO WARRANTY, AFFIRMATIONS OF FACT OR PROMISES, EXPRESS OR IMPLIED, UNLESS OTHERWISE EXPRESSLY PROVIDED FOR HEREIN, INCLUDING, WITHOUT LIMITATION, WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. TO THE FULLEST EXTENT PERMITTED BY APPLICABLE MARYLAND LAW, NEITHER YOU NOR PALMCO WILL BE LIABLE TO THE OTHER FOR ANY CONSEQUENTIAL, EXEMPLARY, PUNITIVE, INCIDENTAL, OR INDIRECT DAMAGES ARISING FROM A BREACH OF THIS AGREEMENT.</strong></p>

<p><strong><u>MISCELLANEOUS</u></strong><strong>. </strong>You may not assign this Agreement without PALMco&rsquo;s prior written consent. This Agreement will inure to and be binding upon the successors and assignees of the parties. This Agreement can only be amended by a writing signed by all the parties hereto. This Agreement is the entire understanding between you and PALMco with respect to the subject matter hereof and there are no promises, covenants or undertakings other than those expressly set forth in this Agreement. PALMco may sell, transfer, pledge, or assign the accounts, revenues, or proceeds hereof, in connection with any financial agreement and may assign this Agreement to another energy supplier, energy services company or other entity, subject to the Public Service Commission rules and procedures governing such transactions.</p>

<p><strong><u>PUBLIC SERVICE COMMISSION CONTACT INFORMATION</u></strong><strong>. </strong>You may contact the Commission by calling 1-800-492-0474 or via its website at http://www.psc.state.md.us.</p>

<p><strong><u>EMERGENCIES</u></strong><strong>. IN THE EVENT OF AN EMERGENCY OR SERVICE INTERRUPTION, YOU SHOULD IMMEDIATELY CONTACT YOUR LOCAL UTILITY.</strong></p>

<p>&nbsp;</p>

<p align="right">V.16-09.23</p>

<p>&nbsp;</p>',
                'created_at' => '2017-02-28 02:33:37',
                'updated_at' => '2017-02-28 02:34:43',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'state_id' => 5,
                'template_type' => 'Terms of Service',
                'commodity_id' => 3,
                'locale_code' => 'en',
                'source_file_name' => 'NJ T&C V.E.17-01.30.docx',
                'version' => 'v.17-01.30',
                'is_active' => false,
                'template_html' => '<p>&nbsp;</p>

<p align="center"><strong><u>TERMS AND CONDITIONS NEW JERSEY</u></strong></p>

<p align="center"><strong>THE PURPOSE OF THIS DOCUMENT IS TO AUTHORIZE A SWITCH OF YOUR GAS SUPPLY SERVICE AND/OR ELECTRIC GENERATION SUPPLY SERVICE TO PALMCO.</strong></p>

<p><strong><u>INTRODUCTION</u></strong>: This is an agreement, together with your Contract Summary, Confirmation Letter and any and all Renewal Notices (if applicable) (collectively, the &ldquo;Agreement&rdquo;), between PALMco Energy NJ, LLC (&ldquo;PALMco Energy&rdquo; or &ldquo;PALMco&rdquo;) and you for natural gas supply service and/or PALMco Power NJ, LLC (&ldquo;PALMco Power&rdquo; or &ldquo;PALMco&rdquo;) and you for electric generation supply service at each of the account addresses listed in your Confirmation Letter (or listed in an addendum). You agree to authorize a switch of your natural gas and/or electric supply service to PALMco and to purchase all the natural gas from PALMco Energy and/or electricity from PALMco Power required to service each of the accounts listed in your Confirmation Letter (or listed in any addendum) (&ldquo;Purchase Quantities&rdquo;) at a price as described in this Agreement. PALMco Energy is licensed by the New Jersey Board of Public Utilities to provide natural gas supply service in New Jersey. PALMco Energy&rsquo;s license number is GSL-0033. PALMco Power is licensed by the New Jersey Board of Public Utilities to provide electric generation supply service in New Jersey. PALMco Power&rsquo;s license number is ESL-0049.</p>

<p><strong><u>PRICING.</u></strong></p>

<p><strong>Variable Rate Natural Gas Price</strong>: If you receive natural gas supply service from PALMco Energy for your first two billing cycles, you will pay an introductory price per therm as set forth in your Contract Summary and/or Confirmation Letter. Beginning in the third billing cycle, you will pay a price that may vary from month to month as determined by PALMco in its sole discretion based on the applicable monthly NYMEX closing price for natural gas, applicable interstate transportation costs, any supply and agency functions that PALMco performs for you, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins. There is no cap or maximum rate per therm that PALMco can charge and no limit on how much the price of your natural gas supply service may change from one billing cycle to the next.</p>

<p><strong>Variable Rate Electric Price: </strong>If you receive electric generation supply service from PALMco Power, for your first two billing cycles, you will pay an introductory price per kWh as set forth in your Contract Summary and/or Confirmation Letter. Beginning in the third billing cycle, you will pay a price that may vary from month to month as determined by PALMco in its sole discretion based on a monthly zonal locational marginal price (&quot;LMP&quot;) determined on a day ahead or real time basis, any supply and agency functions that PALMco performs for you, line loss, compliance costs, certain transmission, capacity, ancillary, and administrative costs incurred by PALMco, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins. There is no cap or maximum rate per kWh that PALMco can charge and no limit on how much the price of your electric generation supply service may change from one billing cycle to the next.</p>

<p><strong>Natural Gas &amp; Electric Service: </strong>You are responsible for paying and reimbursing PALMco for all applicable taxes, and other government fees, assessments, and charges, however designated, relating to the service provided under this Agreement. This may include, but shall not be limited to, utility taxes, gross receipts taxes, and sales or use taxes imposed on PALMco and/or you by federal, state, and/or local authorities that PALMco passes through to you. If you are tax exempt, you must furnish PALMco an exemption certificate before your service commences.</p>

<p><strong><u>Residential Customer Rights.</u></strong> You will receive a confirmation notice of your choice of PALMco Energy as your natural gas supplier and/or PALMco Power as your electric generation supplier. You will have seven (7) calendar days from the date of the confirmation notice to contact your utility and rescind your selection of PALMco. This agreement for gas supply and/or electric generation service will not be legally binding on you until the seven-day confirmation period has expired and you have not, directly or indirectly, rescinded your selection within such seven-day period.</p>

<p><strong><u>Information Release Authorization.</u></strong> You authorize PALMco to initiate service to the accounts listed in your Confirmation Letter (or in any addendum), to begin your enrollment, and to obtain historical billing data, credit and other information about you (&ldquo;Customer Information&rdquo;) from your utility and credit agencies, so that PALMco can start and continue its service to you. PALMco reserves the right to refuse to provide service to you under this Agreement if it is unable to obtain the necessary Customer Information or PALMco obtains Customer Information that it considers unsatisfactory.</p>

<p style="margin-left:.05in;"><strong><u>Understanding Variable Rates and Fixed Rates</u></strong>: Fixed rates for natural gas and electricity are rates that do not change over the term of the contract. Variable rates for natural gas and electricity are rates that may fluctuate from one billing period to the next during the term of the contract, based on the factors described herein under the headings: &ldquo;<strong>Variable Rate Natural Gas Price</strong>&rdquo; and &ldquo;<strong>Variable Rate Electric Price</strong>.&rdquo; Changes in the weather also may affect variable rate pricing for natural gas and electricity. Cold weather increases demand for heating, which tends to increase the demand for natural gas and increase the variable rate for natural gas. Hot weather increases demand for cooling, which tends to increase the demand for electricity and increase the variable rate for electricity.</p>

<p style="margin-left:.05in;"><strong><u>RESIDENTIAL CUSTOMERS CONFIRMATION NOTICE, AND RIGHT OF CANCELLATION. </u></strong><strong>If you are a residential customer, </strong>you may cancel this Agreement without penalty if (a) you move from the street addresses listed in your Confirmation Letter (or in any addendum); (b) a disability renders you (the customer of record) unable to pay for PALMco&rsquo;s service; or (c) you (the customer of record) die, by giving PALMco at least 48 hours prior notice; provided that you will still remain obligated to pay for all natural gas and/or electric generation supply service sold to you prior to such cancellation. In the case of a move, the cancellation shall apply only to the street address you move from, and not any other service addresses that may be listed in this Agreement. Switching to a competitive third-party supplier is not mandatory, and you have the option of remaining with the LDC for basic generation service or basic gas supply service.</p>

<p style="margin-left:.05in;"><strong><u>LENGTH OF AGREEMENT AND RENEWAL PROVISION. </u></strong>You will buy your natural gas and/or your electricity generation supply service for the street address(es) listed in your Confirmation Letter (or in any addendum) from PALMco beginning on a date set by your utility (&ldquo;Starting Date&rdquo;) and will continue to purchase your natural gas and/or your electric generation supply service from PALMco for an initial period of one month from the Starting Date. After the initial one month period, your purchase of natural gas and/or electric generation supply service from PALMco will continue automatically on a month-to-month basis under the same terms and conditions unless either you or PALMco terminates this Agreement by giving at least 30 days advance written notice to the other before the end of any one month term. There will be no charge to you for stopping your natural gas and/or your electric generation supply service if you do so in compliance with the terms of this Agreement.</p>

<p style="margin-left:.05in;"><strong><u>AGENCY.</u></strong> <strong>Natural Gas Supply Service. </strong>If you are purchasing natural gas supply service from PALMco Energy, you hereby designate PALMco Energy as your agent to: (a) arrange and administer contracts and service arrangements between you and your utility, and between you and the interstate pipeline transporters of your gas; (b) nominate and schedule with the interstate pipeline(s) the transportation of your gas from the Sales Point(s) to the Delivery Point(s), and with your utility for the transportation of your gas from the Delivery Point(s) to the your premises; and (c) aggregate your gas with the gas supplies of PALMco&rsquo;s other customers in order for you to qualify for transportation service and to address and resolve imbalances (if any) during the term of this Agreement. As your agent, PALMco will schedule the delivery of a quantity of gas at the Sales Point(s) necessary to meet your city gate requirements based on the consumption and other information that PALMco receives from your utility. The Sales Point(s) for the gas will be a point or points located outside of New Jersey selected from time to time by PALMco to assure service reliability. The Delivery Point(s) for gas transported by interstate pipelines will be the city gate station(s) of your utility. PALMco, as your agent, will arrange for the transportation of the gas from the Sales Point(s) to the Delivery Point(s), and from the Delivery Point(s) to your premises.</p>

<p style="margin-left:.05in;"><strong>Electric Generation Supply Service: </strong>If you are purchasing electric generation supply service from PALMco Power, you hereby designate PALMco Power as your agent for the purpose of arranging, contracting for, and administering transmission services (including those provided by your utility) for the delivery of electricity. The Sales Point(s) for the electricity will be at one or more points on the PJM administered transmission system (as the case may be) located outside the municipal and county limits of your service address location, selected from time to time by PALMco Power to assure service reliability. &nbsp;The Delivery Point(s) for electricity will be one or more points at which PALMco, as your agent, has arranged for the delivery of electricity to you or to a third party (such as your utility) for your account.</p>

<p style="margin-left:.05in;"><strong><u>BILL PAYMENT/TERMINATION BY PALMCO. </u></strong>You will be billed and will pay PALMco Energy for natural gas supply service and/or PALMco Power for electric generation supply service based on meter readings and consumption information that PALMco receives from your utility (&ldquo;Billing Quantity&rdquo;). PALMco will have the option to adjust the Billing Quantity for fuel and distribution/line loss retained by your utility or any interstate transporters from the Purchased Quantities. You will receive a single bill from your utility that contains both PALMco&rsquo;s charges and your utility&rsquo;s charges. Your payment is due on receipt of your bill. If your payment is not received from you when due, PALMco may, after 30 days written notice to you, terminate this Agreement; provided, however, that you will still remain obligated to pay for all natural gas and/or electric generation supply service sold to you prior to such termination. You shall pay a late payment charge on any unpaid amounts (including arrears and unpaid late payment charges) not received by PALMco within 15 days of the date of the bill at the rate of 1.5% per month or the maximum amount permitted by law, whichever is lower. You also shall pay PALMco&rsquo;s reasonable attorneys&rsquo; fees and expenses incurred by it in attempting to collect any payment from you.</p>

<p style="margin-left:.05in;"><strong><u>TITLE, RISK OF LOSS, ETC. </u></strong>You and PALMco agree that title to, control of, and risk of loss of the Purchase Quantities supplied under this Agreement will transfer from PALMco to you at the Sales Point(s). PALMco and you agree that transactions under this Agreement are originated and consummated outside the jurisdictional limits of the municipality, county or other taxing authority where your service address is located.</p>

<p style="margin-left:.05in;"><strong>ELECTRIC ENVIRONMENTAL DISCLOSURE.</strong> If you are purchasing electric generation supply service from PALMco Power, please visit <a href="http://www.palmcoenergy.com">www.palmcoenergy.com</a> for a description of the environmental characteristics of your electricity. This information is updated periodically following the requirements of the New Jersey Board of Public Utilities.</p>

<p style="margin-left:.05in;"><strong><u>DISPUTE PROCEDURES AND QUESTIONS CONCERNING YOUR SERVICE</u></strong>. Contact PALMco at 877-726-5862 or by e-mail at CustomerService@PalmcoEnergy.com if you have any questions or complaints about your service under this Agreement. If you are not satisﬁed with PALMco&rsquo;s response, you may call the New Jersey Board of Public Utilities (&ldquo;BPU&rdquo;) at 800-624-0241 to request an alternate dispute resolution procedure or to file a formal complaint.</p>

<p style="margin-left:.05in;"><strong><u>ARBITRATION AND WAIVER OF JURY TRIAL</u></strong><strong>. </strong><strong>To the fullest extent permitted by applicable NEW JERSEY law, If there is an issue, claim or dispute relating to this natural gas &amp; electric power supply agreement that needs to be resolved and we are unable to resolve it informally, it must be resolved through final, binding arbitration and we mutually forego the right to resolve it in a court of law. This applies regardless of whether the issue, claim or dispute involves a tort, fraud, breach of contract, misrepresentation, product liability, negligence, violation of a statute or any other legal theory. Included are all issues, claims and disputes arising out of or relating any aspect of your participation in this natural gas &amp; electric power supply agreement AND AUTHORIZATION TO SWITCH gas supply service and/or electric generation service to palmco whether arising during or after your participation in this natural gas &amp; electric power supply agreement AND AUTHORIZATION TO SWITCH gas supply service and/or electric generation service to palmco. All arbitrations shall be conducted on an individual (and not a class-wide) basis and an arbitrator shall have no authority to award class-wide relief. You acknowledge and agree that this specifically prohibits you from commencing arbitration proceedings as a representative of others or joining in any arbitration proceedings brought by any other person. Notwithstanding the foregoing, this paragraph does not prevent you from filing a complaint relating to your electricity or gas supply service with PALMco pursuant to the laws governing retail electric generation or natural gas suppliers in your State and the regulations of any agency in your State with jurisdiction over retail electric generation or natural gas suppliers.</strong></p>

<p style="margin-left:.05in;"><strong><u>APPLICABLE LAWS, ETC. </u></strong>This Agreement is subject to all applicable Federal, state, and local laws, and the orders, rules and regulations of governmental agencies having jurisdiction over the subject matter of this Agreement, including the BPU.<strong> THIS AGREEMENT WILL BE GOVERNED AND CONSTRUED IN ACCORDANCE WITH NEW JERSEY LAW, WITHOUT REGARD TO PRINCIPLES RELATING TO CONFLICTS OF LAW.</strong></p>

<p style="margin-left:.05in;"><strong><u>FORCE MAJEURE. </u></strong>Neither PALMco nor you will be liable for a breach of this Agreement if such breach is due to a force majeure event. A &ldquo;force majeure event&rdquo; means a material, unavoidable occurrence beyond a party&rsquo;s control, such as a fire, act of god or public enemy, labor strike, lockout or other industrial disturbance, act of terrorism, government action, utility action, storm, hurricane, flood, explosion, shortage or unavailability of transmission facilities, and other events that cannot be prevented or overcome by ordinary due diligence. A force majeure event does not include an inability to pay any amount owing pursuant to this Agreement.</p>

<p style="margin-left:.05in;"><strong><u>NO WARRANTIES. </u></strong><strong>P</strong><strong>ALMCO MAKES NO WARRANTIES, AFFIRMATIONS OF FACT OR PROMISES, EXPRESS OR IMPLIED, THAT EXTEND BEYOND THE FACE OF THIS AGREEMENT, INCLUDING, WITHOUT LIMITATION, WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE.</strong></p>

<p style="margin-left:.05in;"><strong><u>MISCELLANEOUS. </u></strong>This Agreement is the entire understanding between you and PALMco with respect to the subject matter hereof and there are no promises, covenants or undertakings other than those expressly set forth in this Agreement. This Agreement can only be amended by a writing signed by you and PALMco. You may not assign this Agreement without PALMco&rsquo;s prior written consent. PALMco may sell, transfer, pledge, or assign the accounts, revenues, or proceeds hereof, in connection with any ﬁnancial agreement and may assign this Agreement to another energy supplier, energy services company or other entity in accordance with the applicable BPU rules and procedures governing such transactions. This Agreement will inure to and be binding upon the successors and assignees of the parties.</p>

<p style="margin-left:.05in;"><strong><u>CUSTOMER ASSISTANCE TELEPHONE NUMBERS. </u></strong>For customer assistance, you can contact PALMco at 877-726-5862; the BPU&rsquo;s Division of Consumer Relations at 800-624-0241; Elizabethtown Gas at 800-242-5830; Jersey Central Power &amp; Light (JCP&amp;L) at 800-662-3115; New Jersey Natural Gas at 800-221-0051; Public Service Electric &amp; Gas (PSE&amp;G) at 800-553-PSEG (7734); Rockland Electric aka Orange &amp; Rockland at 877-434-4100; South Jersey Gas at 888-766-9900; and Atlantic City Electric at 800-642-3780.</p>

<p><strong><u>EMERGENCIES TELEPHONE NUMBERS. </u></strong><strong>IN THE EVENT OF A GAS OR ELECTRICITY-RELATED EMERGENCY, SUCH AS A GAS OR ELECTRIC OUTAGE, OR GAS LEAK, YOU SHOULD IMMEDIATELY CONTACT YOUR LOCAL UTILITY. YOU CAN CONTACT ELIZABETHTOWN GAS AT 800-492-4009; JERSEY CENTRAL POWER &amp; LIGHT AT 888-LIGHTSS (888-544-4877); NEW JERSEY NATURAL GAS AT 800-GAS-LEAK (800-427-5325); PUBLIC SERVICE ELECTRIC &amp; GAS AT 800-436-PSEG (7734); ROCKLAND ELECTRIC AKA ORANGE &amp; ROCKLAND AT 800-533-5325; SOUTH JERSEY GAS AT 800-582-7060; AND ATLANTIC CITY ELECTRIC AT 800-833-7476.</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p>&nbsp;</p>

<p><strong>v.17-01.30 </strong></p>',
                'created_at' => '2017-02-28 02:35:39',
                'updated_at' => '2017-02-28 02:36:23',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 13,
                'state_id' => 4,
                'template_type' => 'Contract Summary',
                'commodity_id' => 1,
                'locale_code' => 'en',
                'source_file_name' => 'PALMco Maryland Contract Summary - V.E.17-01.12.docx',
                'version' => 'v. 17-01.12',
                'is_active' => false,
                'template_html' => '<p align="center"><strong>Maryland Contract Summary</strong></p>

<p>&nbsp;</p>

<table align="center" border="1" cellpadding="0" cellspacing="0" style="width:654px;" width="654">
<tbody>
<tr>
<td style="width:168px;">
<p>Electricity Supplier Information</p>

<p>Gas Supplier Information</p>
</td>
<td style="width:486px;">
<p>PALMco Power MD, LLC &ndash; License No. IR-1804</p>

<p>PALMco Energy MD, LLC &ndash; License No. IR-1803</p>

<p>customerservice@palmcoenergy.com</p>

<p>www.palmcoenergy.com</p>

<p>(877) 726-5862</p>
</td>
</tr>
<tr>
<td style="width:168px;">
<p>Price Structure</p>
</td>
<td style="width:486px;">
<p>Electric variable price may vary from month-to-month as determined by PALMco in its sole discretion based on a monthly zonal locational marginal price (&quot;LMP&quot;) determined on a day ahead or real time basis, any supply and agency functions that PALMco performs for you, certain transmission, line loss, compliance costs, capacity, ancillary, and administrative costs incurred by PALMco, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins.</p>

<p>&nbsp;</p>

<p>Natural gas variable price may vary from month to month as determined by PALMco in its sole discretion based on the applicable monthly NYMEX closing price for natural gas, applicable interstate transportation costs, any supply and agency functions that PALMco performs for you, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins.</p>

<p>&nbsp;</p>

<p>Your electric and/or natural gas supply service price does not include, and you will be required to pay, applicable taxes and fees. There is not a limit on how much your electric and/or natural gas supply service price may change from one billing cycle to the next.</p>
</td>
</tr>
<tr>
<td style="width:168px;">
<p>Supply Price</p>
</td>
<td style="width:486px;">
<p>&nbsp;</p>

<p>Electric Introductory Rate: <u>[PRODUCT.RATE]</u> per kWh for the first [PRODUCT.TERM_MONTHS] billing cycles. Beginning in the third billing cycle, and thereafter, your price may vary from month to month based on the electric variable price factors described above.</p>

<p>&nbsp;</p>

<p>Natural Gas Introductory Rate: <u>_____</u>per therm for the first two billing cycles. Beginning in the third billing cycle, and thereafter, your price may vary from month to month based on the natural gas variable price factors described above.</p>

<p>&nbsp;</p>

<p>You may access your estimated rate for your next billing period at least 12 days prior to the close of your current billing period by visiting the PALMco website at https://www.palmcoenergy.com/maryland-rates/</p>
</td>
</tr>
<tr>
<td style="width:168px;">
<p>Statement Regarding Savings</p>
</td>
<td style="width:486px;">
<p>PALMco does not guarantee or promise rates lower than your utility.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:98px;">
<p>Incentives</p>
</td>
<td style="width:486px;height:98px;">
<p>At the time of enrollment, customers are eligible to enroll in PALMco&rsquo;s Restaurant.com Gift Card and PALMco Cares. Senior Citizen Discounts are available. After enrolling with PALMco, all customers are eligible to sign up for PALMco&rsquo;s Referral Incentive and Loyalty Credit programs. Please visit www.PalmcoEnergy.com/Rewards for more information about PALMco&rsquo;s incentive programs.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:41px;">
<p>Contract Start Date</p>
</td>
<td style="width:486px;height:41px;">
<p>The start date will begin with your first meter read by your utility following your enrollment with PALMco, typically 1-2 billing cycles.</p>
</td>
</tr>
<tr>
<td style="width:168px;">
<p>Contract Term/Length</p>
</td>
<td style="width:486px;">
<p>Month-to-month.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:35px;">
<p>Cancellation/Early Termination Fees</p>
</td>
<td style="width:486px;height:35px;">
<p>None.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:29px;">
<p>Renewal Terms</p>
</td>
<td style="width:486px;height:29px;">
<p>Agreement will continue on a month-to-month basis until terminated by customer or PALMco.</p>
</td>
</tr>
</tbody>
</table>

<div style="clear:both;">&nbsp;</div>

<p>&nbsp;</p>

<p style="margin-left:22.5pt;"><strong>For additional information, please refer to your Terms and Conditions.&nbsp; Please retain this document for your records.&nbsp; If you have any questions regarding this agreement, contact your competitive supplier using the information above.</strong></p>

<p align="right"><strong>v. 17-01.12</strong></p>',
                'created_at' => '2017-02-28 03:01:21',
                'updated_at' => '2017-03-01 02:08:09',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'state_id' => 5,
                'template_type' => 'Contract Summary',
                'commodity_id' => 2,
                'locale_code' => 'en',
                'source_file_name' => 'NJ TPS Gas Contract Summary - Res & Comm - V.E.17-01.12.docx',
                'version' => 'v. 17-01.12',
                'is_active' => false,
                'template_html' => '<p><strong>PALMCO ENERGY NJ, LLC CONTRACT SUMMARY</strong></p>

<table border="1" cellpadding="0" cellspacing="0" style="width:768px;" width="768">
<tbody>
<tr>
<td style="width:212px;">
<p>Third Party Supplier Information:</p>

<p><strong>By entering into this contract, you are agreeing to purchase your gas supply from this supplier.</strong></p>
</td>
<td style="width:556px;">
<p style="margin-left:-.7pt;">PALMco Energy NJ, LLC. Phone: (877) 726-5862, Website: <a href="http://www.PalmcoEnergy.com">www.PalmcoEnergy.com</a>,</p>

<p style="margin-left:-.7pt;">Email: <a href="mailto:CustomerService@PALMcoEnergy.com">CustomerService@PALMcoEnergy.com</a>,</p>

<p style="margin-left:-.7pt;">Mailing Address: 10,000 Lincoln Drive East &ndash; Suite 201, Marlton, NJ 08053.</p>

<p style="margin-left:-.7pt;">Main Office Address<strong>:</strong> 8751 18<sup>th</sup> Avenue, Brooklyn, NY 11214; BPU License # GSL0033.</p>

<p style="margin-left:-.7pt;">PALMco is responsible for your natural gas supply.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Price Structure</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;"><strong>Variable</strong>. For your first two billing cycles, you will pay an introductory price of $________ per therm. Beginning in the third billing cycle, you will pay a price that may vary from month to month as determined by PALMco in its sole discretion based on the applicable monthly NYMEX closing price for natural gas, applicable interstate transportation costs, any supply and agency functions that PALMco performs for you, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins. There is no cap or maximum rate per therm that PALMco can charge and no limit on how much the price of your natural gas supply service may change from one billing cycle to the next. You are responsible for paying and reimbursing PALMco for all applicable taxes, and other government fees, assessments, and charges, however designated, relating to the natural gas supply service.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Generation/Supply Price</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.7pt;">$_______ per therm. This is an introductory rate only for the first two billing cycles.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Statement Regarding Savings</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.7pt;">PALMco&rsquo;s natural gas supply price may not always provide you savings.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Amount of time required to change from TPS back to default service or to another TPS</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;">If you cancel service with PALMco, the time required to change from PALMco to default utility service or another natural gas supplier will be determined by your natural gas utility. PALMco estimates that it will take about 1-2 billing cycles from the date of your cancellation request.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Incentives</p>
</td>
<td style="width:556px;">
<p>At the time of enrollment, customers are eligible to enroll in PALMco&rsquo;s Restaurant.com Gift Card and PALMco Cares.&nbsp; Senior Citizen Discounts are available.&nbsp; After enrolling with PALMco, all customers are eligible to sign up for PALMco&rsquo;s Referral Incentive and Loyalty Credit programs.&nbsp; Please visit <a href="http://www.PalmcoEnergy.com/Rewards">www.PalmcoEnergy.com/Rewards</a> for more information about PALMco&rsquo;s incentive programs.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Right to Cancel/Rescind</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;">You have 7 calendar days from the date of the confirmation notice from your utility to contact your utility and cancel this contract and your selection of PALMco as your natural gas supplier.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Contract Start Date</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;">The start date of your natural gas supply service from PALMco will be a date set by your natural gas utility, which should be about 1-2 billing cycles after your enrollment.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Contract Term/Length</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;">Month-to-month.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Cancellation/Early Termination Fees</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;">No.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Renewal Terms</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;">Your contract will renew automatically each month under the same terms and conditions (with the price for PALMco natural gas service staying the same, decreasing, or increasing), unless you or PALMco terminates the contract by giving 30 days&rsquo; notice to the other.</p>
</td>
</tr>
<tr>
<td style="width:212px;height:67px;">
<p>Distribution Company Information</p>
</td>
<td style="width:556px;height:67px;">
<p style="margin-left:-.9pt;">Please note your correct natural gas utility contact information from the list below.</p>

<ol>
<li><strong>Elizabethtown Gas</strong>: Emergency Phone: (800) 492-4009, Customer Service Phone: (800) 242-5830, Website: <a href="http://www.elizabethtowngas.com/">http://www.elizabethtowngas.com/</a></li>
<li><strong>New Jersey Natural Gas</strong>: Emergency Phone: (800) 427-5325, Customer Service Phone: (800) 221-0051, Website: <a href="http://www.njng.com/">http://www.njng.com/</a></li>
<li><strong>Public Service Electric &amp; Gas</strong>: Emergency and Customer Service Phone: (800) 436-7734, Website: <a href="https://www.pseg.com/">https://www.pseg.com/</a></li>
<li><strong>South Jersey Gas</strong>: Emergency Phone: (800) 582-7060, Customer Service Phone: (888) 766-9900, Website: <a href="http://www.southjerseygas.com/">http://www.southjerseygas.com/</a></li>
</ol>

<p style="margin-left:-.9pt;">Your natural gas utility will continue to deliver your natural gas and you will continue to pay your utility for such delivery service. You should call your natural gas utility in the event of any emergency, natural gas outage, or service interruption.</p>
</td>
</tr>
<tr>
<td style="width:212px;height:79px;">
<p>&nbsp;</p>
</td>
<td style="width:556px;height:79px;">
<p align="right"><strong>v. 17-01.12</strong></p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>',
                'created_at' => '2017-02-28 02:52:52',
                'updated_at' => '2017-02-28 02:53:44',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'state_id' => 7,
                'template_type' => 'Terms of Service',
                'commodity_id' => 3,
                'locale_code' => 'en',
                'source_file_name' => 'OH T&Cs V.E.16-11.21.docx',
                'version' => 'V.E.16-11.21',
                'is_active' => false,
                'template_html' => '<p align="center">&nbsp;</p>

<p><strong><u>OHIO </u></strong><strong><u>TERMS AND CONDITIONS</u></strong></p>

<p>&nbsp;</p>

<p><strong><u>INTRODUCTION:</u></strong> This is an agreement, together with your Confirmation Letter, and any and all Renewal Notices (if applicable) (collectively, the &ldquo;Agreement&rdquo;), between PALMco Energy OH, LLC (&ldquo;PALMco Energy&rdquo; or &ldquo;PALMco&rdquo;) and you for natural gas supply service and/or PALMco Power OH, LLC (&ldquo;PALMco Power or &ldquo;PALMco&rdquo;) and you for electric supply service at each of the account service addresses listed in your Confirmation Letter (or in an addendum). You agree to authorize a switch of your natural gas and/or electric supply service to PALMco and to purchase all the natural gas and/or electricity required to service each of the accounts listed in your Confirmation Letter (or listed in an addendum) at a price as described in this Agreement.</p>

<p>&nbsp;</p>

<p><strong><u>ACKNOWLEDGEMENT.</u></strong> You acknowledge as follows: <strong>(A)</strong> Any PALMco sales representative with whom you have spoken represents PALMco and is not from your utility or affiliated with your utility. <strong>(B)</strong> You are the named customer on each of the account(s) listed above (or in any addendum), or you are the spouse of the named customer on such account(s), or you are over 18 years old and authorized to make decisions concerning such account(s). <strong>(C)</strong> PALMco will not charge you a fee to switch to PALMco as your natural gas and/or electric supplier. <strong>(D)</strong> Your utility(ies) will continue to deliver your gas and/or electricity and send you your natural gas and/or electricity bills, which will contain both your utility&rsquo;s charges and PALMco&rsquo;s charges. <strong>(E) </strong>PALMco does not guarantee savings or promise rates lower than your utility. <strong>(F)</strong> Your incumbent gas and/or electric utility may charge you switching fees. <strong>(G) </strong>There are no cancellation fees under this Agreement.</p>

<p><strong><u>CONFIRMATION NOTICE, YOUR RIGHT OF RESCISSION.</u></strong> YOU WILL RECEIVE A WRITTEN CONFIRMATION NOTICE FROM YOUR GAS AND/OR ELECTRIC UTILITY(IES) OF THE TRANSFER OF YOUR GAS AND/OR ELECTRIC SUPPLY SERVICE TO PALMCO AND ADVISING YOU OF YOUR RIGHT TO RESCIND YOUR ENROLLMENT WITH PALMCO. YOU HAVE 7 BUSINESS DAYS FROM THE DATE OF THE POSTMARK OF THAT NOTICE DURING WHICH YOU MAY RESCIND THIS AGREEMENT AND YOUR NATURAL GAS AND/OR ELECTRIC ENROLLMENT WITH PALMCO WITHOUT PENALTY BY CONTACTING YOUR GAS UTILITY (ORALLY OR IN WRITING) OR BY CONTACTING YOUR ELECTRIC UTILITY (ORALLY, ELECTRONICALLY, OR IN WRITING).</p>

<p><strong><u>LENGTH OF AGREEMENT AND TERMINATION.</u></strong> This Agreement will begin when your local utility switches your account to PALMco and will continue on a month-to-month basis until terminated by either you or PALMco.&nbsp; If PALMco decides to terminate as provided in this Agreement, it shall provide advance notice to you in writing to your Service Address(es). You may terminate this Agreement at any time by (a) calling PALMco at (877) 726-5862; (b) sending a letter to PALMco at 8751 18th Avenue, Brooklyn, NY 11214; or (c) emailing PALMco at CustomerService@PalmcoEnergy.com. Upon termination, you will be returned to your utility&rsquo;s standard service or you may choose another supplier. In any case in which your natural gas and/or electric supply service with PALMco is terminated as provided in this Agreement, you will remain obligated to pay for the natural gas and/or electric supply service provided by PALMco prior to the effective date of the termination. The effective date of termination will be determined by your utility. Your natural gas and/or electric supply service from PALMco will terminate automatically without penalty to you if any of the following occurs: (a) your Service Address(es) is no longer served by your utility; (b) you move outside your utility&rsquo;s service area or to an area not served by PALMco; or (c) PALMco returns you to your utility&rsquo;s applicable tariff service pursuant to the terms of this Agreement. You may also cancel your natural gas supply service with PALMco Energy without penalty if you relocate your Service Address(es) (a) outside of the service territory of your gas utility or (b) within the service territory of your gas utility if your gas utility does not permit you to transfer your PALMco Energy contract to your new Service Address(es). You also may cancel this Agreement with PALMco Power without penalty if you relocate your Service Address(es) to an area that PALMco Power does not serve or to an area where PALMco Power charges a different price for electric supply service. In the case of a Service Address relocation, the cancellation shall apply only to the Service Address(es) you move from, and not any other Service Address(es) covered by this Agreement. If you voluntarily return or switch back to your natural gas and/or electric utility after choosing PALMco, you may not be served under the same rates, terms, and conditions as those available to other customers served by your natural gas and/or electric utility.</p>

<p><strong><u>PRICING.</u></strong></p>

<p><strong><u>Natural Gas and/or Electric Introductory Price:</u></strong> If you receive natural gas and/or electric supply service from PALMco, you will pay an introductory price as set forth in your Confirmation Letter for the time period set forth in your Confirmation Letter, and thereafter, your price for natural gas and/or electric supply service will continue automatically on a month-to-month basis at a variable price described below.</p>

<p><strong><u>Natural Gas Variable Price:</u></strong> You will pay a price for natural gas supply service that may vary from month to month as determined by PALMco in its sole discretion, based on the applicable monthly NYMEX closing price for natural gas, applicable interstate transportation costs, any supply and agency functions that PALMco performs for you, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses and margins. <strong><u>Electric Variable Price:</u></strong> You will pay a price for electric supply service that may vary from month to month as determined by PALMco in its sole discretion based on a zonal locational marginal price (&ldquo;LMP&rdquo;) determined on a day ahead or real time basis, any supply and agency functions that PALMco performs for you, line loss, compliance costs, certain transmission, capacity, ancillary, and administrative costs incurred by PALMco, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses and margins. There is no limit on how much the price of your natural gas and/or electric supply service may change from one billing cycle to the next and your variable price may be higher or lower than your utility&rsquo;s standard offer service rate in any given month. PALMco does not guarantee savings in any month or for the entire length of this Agreement. PALMco&rsquo;s current and historical prices are not an indicator of future prices.</p>

<p><strong><u>Other Charges:</u></strong>&nbsp; You are also responsible for paying and reimbursing PALMco for all applicable taxes, and other government fees, assessments, and charges, however designated, relating to the natural gas and/or electric supply service provided under this Agreement. This may include, but shall not be limited to, utility taxes, gross receipts taxes, and sales or use taxes imposed on PALMco and/or you by federal, state, and/or local authorities, that you are required to pay or that PALMco passes through to you. If you are tax exempt, you must furnish PALMco an exemption certificate before service commences. This Agreement does not include utility transportation, delivery, or other charges that your gas or electric utility may impose.</p>

<p><strong><u>RESOURCE MIX AND ENVIRONMENTAL CHARACTERISTICS.</u></strong> The applicable generation resource mix and environmental characteristics of the electric supply sold by PALMco Power are available at www.palmcoenergy.com. This information is updated periodically following the requirements of the Public Utilities Commission of Ohio.&nbsp;</p>

<p><strong><u>BILL PAYMENT/LATE PAYMENT CHARGES/BUDGET BILLING.</u></strong> <strong>Natural Gas and/or Electric:</strong> You will be billed by your utility at intervals established by your utility. You will pay PALMco for natural gas and/or electric supply service based on meter readings and consumption information that PALMco receives from your utility (&ldquo;Billing Quantity&rdquo;). You will receive a single monthly bill from your utility that contains both PALMco&rsquo;s charges and your utility&rsquo;s charges. Your payment for natural gas and/or electric supply service is due on your receipt of the bill. You shall pay a late payment charge on all unpaid amounts (including arrears and late payment charges) owing and not received by PALMco within 14 calendar days of the date of the bill, at a rate of 1.5% per month or the maximum amount permitted by law, whichever is lower. You shall also be responsible for paying PALMco&rsquo;s reasonable attorneys&rsquo; fees, costs, and expenses incurred by it in collecting any such payment from you. If you fail to pay your bill for natural gas and/or electric supply service or you fail to satisfy any agreed upon payment arrangement you may have, your utility may disconnect your service in accordance with the provisions of its tariff. If your utility disconnects your service, this Agreement may be automatically terminated. In addition, if your payment for natural gas and/or electric supply service is not received from you on a timely basis, PALMco may, after 14 calendar days&rsquo; written notice to you, terminate this Agreement and its natural gas and/or electric supply service to you. You have the right to request from PALMco, without charge, up to 24 months of your payment history covering services rendered by PALMco, without charge, twice within any 12-month period. Budget Billing is available for both the delivery and natural gas and/or electric supply service portions of your bill. If you are interested in Budget Billing, you should contact your utility and request to be placed on a Budget Billing plan. If your electric utility is Duke Energy, to request Budget Billing for the electric supply service portion of your electric bill, you should contact PALMco and request to be placed on a Budget Billing plan.</p>

<p><strong><u>CUSTOMER INFORMATION RELEASE.</u></strong> You authorize PALMco to begin your enrollment, initiate service to the accounts listed in your Confirmation Letter (or in any addendum) and to obtain historical billing data and other information about you (&ldquo;Customer Information&rdquo;) from your gas and/or electric utility, so that PALMco can start and continue its service to you. PALMco reserves the right to refuse to provide service to you under this Agreement if it is unable to obtain the necessary Customer Information or it obtains Customer Information that it considers to be unsatisfactory. <strong>PALMco Energy</strong> will not release your social security number, account number(s), or any other Customer Information without your express written or electronic consent, except in accordance with rules 4901:1-28-04 and 4901:1-29-09 of the Ohio Administrative Code, or if it sells or assigns this Agreement to another third party supplier. <strong>PALMco Power</strong> will not release your social security number and/or account number(s) without your written or electronic consent, except for PALMco Power&rsquo;s own collections and/or credit reporting, participation in programs funded by the universal service fund, pursuant to section 4928.52 of the Revised Code, or if it sells or assigns this Agreement to another third party supplier.</p>

<p><strong><u>DISPUTE PROCEDURES AND QUESTIONS CONCERNING YOUR SERVICE.</u></strong> Contact PALMco at 1-877-726-5862 (toll free) between the hours of 8 a.m. and 5 p.m. EST or EDT, by U.S. mail at 8751 18th Avenue , Brooklyn, NY 11214, or by e-mail at CustomerService@PalmcoEnergy.com, if you have any questions or complaints about your service under this Agreement. If your complaint is not resolved after you have contacted PALMco, or for general utility information, you may contact the PUCO for assistance at 1-800-686-7826 (toll free) from 8 a.m. to 5 p.m. weekdays, or at http://www.puco.ohio.gov. Hearing or speech impaired customers may contact the PUCO via 7-1-1 (Ohio relay service).&nbsp; The Ohio Consumers&rsquo; Counsel (OCC) represents residential utility customers in matters before the PUCO. The OCC can be contacted at 1-877-742-5622 (toll free) from 8 a.m. to 5 p.m. weekdays, or at www.pickocc.org.</p>

<p><strong><u>FORCE MAJEURE.</u></strong> Neither PALMco nor you will be liable for a breach of this Agreement if such breach is due to a force majeure event. A &ldquo;force majeure event&rdquo; means a material, unavoidable occurrence beyond a party&rsquo;s control, such as a fire, act of god or public enemy, labor strike, lockout or other industrial disturbance, act of terrorism, government action, utility action, storm, hurricane, flood, explosion, shortage or unavailability of transmission facilities, a change in the law or rules affecting this Agreement, and other events that cannot be prevented or overcome by ordinary due diligence. A force majeure event does not include an inability to pay any amount owing under this Agreement.</p>

<p><strong><u>LIMITATION OF LIABILITY.</u></strong> TO THE FULLEST EXTENT PERMITTED BY APPLICABLE OHIO LAW, NEITHER YOU NOR PALMCO WILL BE LIABLE TO THE OTHER FOR ANY CONSEQUENTIAL, EXEMPLARY, PUNITIVE, INCIDENTAL, OR INDIRECT DAMAGES ARISING FROM A BREACH OF THIS AGREEMENT, INCLUDING, WITHOUT LIMITATION, LOST PROFITS OR LOST REVENUES.</p>

<p><strong><u>ARBITRATION AND WAIVER OF JURY TRIAL</u></strong><strong>. TO THE FULLEST EXTENT PERMITTED BY APPLICABLE OHIO LAW, IF THERE IS AN ISSUE, CLAIM OR DISPUTE RELATING TO THIS AGREEMENT FOR ELECTRIC AND/OR NATURAL GAS SUPPLY SERVICE THAT NEEDS TO BE RESOLVED AND WE ARE UNABLE TO RESOLVE IT INFORMALLY, IT MUST BE RESOLVED THROUGH FINAL, BINDING ARBITRATION AND WE MUTUALLY FOREGO THE RIGHT TO RESOLVE IT IN A COURT OF LAW. THIS APPLIES REGARDLESS OF WHETHER THE ISSUE, CLAIM OR DISPUTE INVOLVES A TORT, FRAUD, BREACH OF CONTRACT, MISREPRESENTATION, PRODUCT LIABILITY, NEGLIGENCE, AND VIOLATION OF A STATUTE OR ANY OTHER LEGAL THEORY. INCLUDED ARE ALL ISSUES, CLAIMS AND DISPUTES ARISING OUT OF OR RELATING TO ANY ASPECT OF YOUR PARTICIPATION IN THIS AGREEMENT FOR ELECTRIC AND/OR NATURAL GAS SUPPLY SERVICE WHETHER ARISING DURING OR AFTER YOUR PARTICIPATION IN THIS AGREEMENT FOR ELECTRIC AND/OR NATURAL GAS SUPPLY SERVICE. ALL ARBITRATIONS SHALL BE CONDUCTED ON AN INDIVIDUAL (AND NOT A CLASS-WIDE) BASIS AND AN ARBITRATOR SHALL HAVE NO AUTHORITY TO AWARD CLASS-WIDE RELIEF. YOU ACKNOWLEDGE AND AGREE THAT THIS SPECIFICALLY PROHIBITS YOU FROM COMMENCING ARBITRATION PROCEEDINGS AS A REPRESENTATIVE OF OTHERS OR JOINING IN ANY ARBITRATION PROCEEDINGS BROUGHT BY ANY OTHER PERSON. NOTWITHSTANDING THE FOREGOING, THIS PARAGRAPH DOES NOT PREVENT YOU FROM FILING A COMPLAINT RELATING TO YOUR ELECTRIC AND/OR NATURAL GAS SUPPLY SERVICE WITH PALMCO PURSUANT TO THE LAWS GOVERNING RETAIL ELECTRIC AND/OR NATURAL GAS SUPPLIERS IN YOUR STATE AND THE REGULATIONS OF ANY AGENCY IN YOUR STATE WITH JURISDICTION OVER RETAIL ELECTRIC AND/OR NATURAL GAS SUPPLIERS.</strong></p>

<p><strong><u>NO WARRANTIES.</u></strong> NEITHER PALMCO ENERGY NOR PALMCO POWER MAKES ANY WARRANTIES, AFFIRMATIONS OF FACT, OR PROMISES, EXPRESS OR IMPLIED, THAT EXTEND BEYOND THE FACE OF THIS AGREEMENT, INCLUDING, WITHOUT LIMITATION, WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE.</p>

<p><strong><u>APPLICABLE LAWS, ETC.</u></strong> This Agreement is subject to all applicable Federal, state, and local laws, and the orders, rules, and regulations of governmental agencies having jurisdiction over the subject matter of this Agreement, including, without limitation, the Public Utilities Commission of Ohio. THIS AGREEMENT WILL BE GOVERNED AND CONSTRUED IN ACCORDANCE WITH OHIO LAW, WITHOUT REGARD TO PRINCIPLES RELATING TO CONFLICTS OF LAW.</p>

<p><strong><u>MISCELLANEOUS.</u></strong> This Agreement is the entire understanding between you and PALMco with respect to the subject matter hereof and there are no promises, covenants, or undertakings other than those expressly set forth in this Agreement. PALMco will not make a material change to the terms of this Agreement without first obtaining your consent in writing or through third party verification (TPV). You may not assign this Agreement without PALMco&rsquo;s prior written consent. PALMco may sell, transfer, pledge, or assign the accounts, revenues, or proceeds hereof, in connection with any financial agreement and may assign this Agreement to another energy supplier, energy services company or other entity in accordance with the rules and procedures of the PUCO, if any, governing such transactions. This Agreement will inure to and be binding upon the successors and assignees of the parties hereto. No delay or failure by either you or PALMco to exercise any right or remedy to which either party may be entitled to herein will constitute a waiver of that right or remedy.</p>

<p><strong><u>EMERGENCY TELEPHONE NUMBERS. IN THE EVENT OF A GAS OR ELECTRICITY-RELATED EMERGENCY, SUCH AS A GAS OR ELECTRIC OUTAGE OR GAS LEAK, YOU SHOULD IMMEDIATELY CONTACT YOUR LOCAL UTILITY.</u></strong></p>

<p>&nbsp;</p>

<p><strong>V.E.16-11.21</strong></p>',
                'created_at' => '2017-02-28 02:55:14',
                'updated_at' => '2017-02-28 02:55:39',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'state_id' => 8,
                'template_type' => 'Contract Summary',
                'commodity_id' => 2,
                'locale_code' => 'en',
                'source_file_name' => 'PA Gas Contract Summary V.E.17-1.12.docx',
                'version' => 'v. 17-01.12',
                'is_active' => false,
                'template_html' => '<p><strong>PALMCO ENERGY CONTRACT SUMMARY &ndash; FOR NATURAL GAS CUSTOMERS ONLY </strong></p>

<p align="center">&nbsp;</p>

<table border="1" cellpadding="0" cellspacing="0" style="width:722px;" width="722">
<tbody>
<tr>
<td style="width:196px;height:94px;">
<p>Natural Gas Supplier Information</p>
</td>
<td style="width:526px;height:94px;">
<p style="margin-left:-.9pt;">PALMco Energy PA, LLC, 8751 18<sup>th</sup> Avenue Brooklyn, NY 11214</p>

<p style="margin-left:-.9pt;">Phone: (877) 726-5862, Website: www.PalmcoEnergy.com</p>

<p style="margin-left:-.9pt;">PALMco Energy (&ldquo;PALMco&rdquo;) is responsible for your natural gas supply charges.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:191px;">
<p>Price Structure</p>
</td>
<td style="width:526px;height:191px;">
<p style="margin-left:-.9pt;">Variable. For the first [PRODUCT.TERM_MONTHS] billing cycles of the Agreement, you will pay an introductory price of $ [PRODUCT.RATE] per [PRODUCT.UNIT_OF_MEASURE]. Beginning in the fourth billing cycle, you will pay a price of $ [NEXT_PRODUCT.RATE] per [NEXT_PRODUCT.UNIT_OF_MEASURE], and thereafter, you will pay a price for natural gas supply service that may vary from month to month as determined by PALMco in its sole discretion based on the applicable monthly NYMEX closing price for natural gas, applicable interstate transportation costs, any supply and agency functions that PALMco performs for you, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins. You will receive notification of any rate change when you receive your bill reflecting the new rate after completion of a billing cycle. There is no limit on how much the price of your natural gas supply service will change from one billing cycle to the next. You are also responsible for paying and reimbursing PALMco for all applicable taxes, and other government fees, assessments, and charges, however designated, relating to the natural gas supply service provided under your Agreement. This may include, but shall not be limited to, utility taxes, gross receipts taxes, and sales or use taxes, imposed on PALMco and/or you by federal, state, and/or local authorities or that PALMco passes through to you. This Agreement does not include utility transportation, delivery, or other charges that your natural gas utility may impose.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:63px;">
<p>Natural Gas Supply Price</p>
</td>
<td style="width:526px;height:63px;">
<p style="margin-left:-.9pt;">$ [PRODUCT.RATE] per [PRODUCT.UNIT_OF_MEASURE]. This is an introductory rate for the first [PRODUCT.TERM_MONTHS] billing cycles only. Beginning in the fourth billing cycle, you will pay a price of $ [NEXT_PRODUCT.RATE] per [NEXT_PRODUCT.UNIT_OF_MEASURE], and thereafter, your rate will vary month to month based on the factors described above.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:31px;">
<p>Statement Regarding Savings</p>
</td>
<td style="width:526px;height:31px;">
<p style="margin-left:-.9pt;">Savings are not guaranteed.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:29px;">
<p>Deposit Requirements</p>
</td>
<td style="width:526px;height:29px;">
<p style="margin-left:-.9pt;">None.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:75px;">
<p>Incentives</p>
</td>
<td style="width:526px;height:75px;">
<p>At the time of enrollment, customers are eligible to enroll in PALMco&rsquo;s Restaurant.com Gift Card and PALMco Cares. Senior Citizen Discounts are available. After enrolling with PALMco, all customers are eligible to sign up for PALMco&rsquo;s Referral Incentive and Loyalty Credit programs. Please visit www.PalmcoEnergy.com/Rewards for more information about PALMco&rsquo;s incentive programs.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:63px;">
<p>Contract Start Date</p>
</td>
<td style="width:526px;height:63px;">
<p style="margin-left:-.9pt;">The start date will begin with your first meter read by your local utility following your enrollment with PALMco, typically 1-2 billing cycles.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:29px;">
<p>Contract Duration/Length</p>
</td>
<td style="width:526px;height:29px;">
<p style="margin-left:-.9pt;">Month-to-month.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:31px;">
<p>Cancellation/Early Termination Fees</p>
</td>
<td style="width:526px;height:31px;">
<p style="margin-left:-.9pt;">None.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:91px;">
<p>End of Contract</p>
</td>
<td style="width:526px;height:91px;">
<p style="margin-left:-.9pt;">The Agreement will renew automatically on a month-to-month basis under the same terms, or with changes to your benefit (with the price for gas service staying the same, decreasing, or increasing), unless you or PALMco terminates the Agreement.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:47px;">
<p>&nbsp;</p>
</td>
<td style="width:526px;height:47px;">
<p align="right"><strong>v. 17-01.12</strong></p>
</td>
</tr>
</tbody>
</table>',
                'created_at' => '2017-02-28 02:56:29',
                'updated_at' => '2017-03-01 02:16:14',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'state_id' => 8,
                'template_type' => 'Terms of Service',
                'commodity_id' => 3,
                'locale_code' => 'en',
                'source_file_name' => 'PA T&C V.E.17-1-12.docx',
                'version' => 'v.17-01.12',
                'is_active' => false,
                'template_html' => '<p align="center"><strong><u>TERMS AND CONDITIONS PENNSYLVANIA</u></strong></p>

<p align="center"><strong><u>TERMS OF SERVICE AND DISCLOSURE STATEMENT</u></strong></p>

<p><strong><u>INTRODUCTION</u></strong><strong>:</strong> This is an agreement, together with your Contract Summary, Confirmation Letter, and any and all Renewal Notices (if applicable) (collectively, the &ldquo;Agreement&rdquo;), between PALMco Energy PA, LLC (&ldquo;PALMco Energy&rdquo; or &ldquo;PALMco&rdquo;) and you for natural gas supply service and/or PALMco Power PA, LLC (&ldquo;PALMco Power&rdquo; or &ldquo;PALMco&rdquo;) and you for electric generation supply service at each of the account addresses listed in your Confirmation Letter (or listed in any addendum). You agree to authorize a switch of your natural gas and/or electric supply service to PALMco and to purchase all the natural gas from PALMco Energy and/or electricity from PALMco Power required to service each of the accounts listed in your Confirmation Letter (or listed in any addendum) (&ldquo;Purchase Quantities&rdquo;) at a price as described in this Agreement.</p>

<p><strong><u>DISCLOSURES</u></strong>. PALMco Energy is licensed by the Pennsylvania Public Utility Commission (&ldquo;PUC&rdquo;) to offer and provide gas supply service in Pennsylvania. PALMco Energy&rsquo;s PUC license number is A-2009-2100320. PALMco Energy sets the gas commodity prices and charges that you pay. The PUC regulates distribution prices and services. PALMco Power is licensed by the PUC to offer and provide electric supply service in Pennsylvania. PALMco Power&rsquo;s PUC license number is A-2009-2108338. PALMco Power sets the Electric Service prices and charges that you pay. The Federal Regulatory Commission regulates transmission prices and services.</p>

<p><strong><u>Right of Rescission</u></strong><strong>: You may cancel this Agreement at any time before midnight of the third business day after you receive a copy of this Agreement by calling PALMco at (877) 726-5862, by sending an e-mail to PALMco at: customerservice@palmcoenergy.com, or by writing PALMco at 8751 18<sup>th</sup> Avenue Brooklyn, NY 11214</strong></p>

<p><strong><u>DEFINITIONS</u></strong><strong>:&nbsp; </strong>&ldquo;Generation Charge&rdquo; means the charge for the production of electricity. &ldquo;Transmission Charge&rdquo; means the charge for moving high voltage electricity from a generation facility to the distribution lines of the electric utility. &ldquo;Commodity Charge&rdquo; means the charge for the natural gas that is sold, measured either by volume (Ccf, Mcf) or heating value (dekatherms).</p>

<p><strong><u>PRICING</u></strong><strong>:</strong></p>

<p><strong>Introductory Electric and/or Natural Gas Price.</strong> If you receive electric and/or natural gas supply service from PALMco, you will pay an introductory price as set forth in your Contract Summary and/or Confirmation Letter for the time period indicated in your Contract Summary and/or Confirmation Letter, and thereafter, your price for natural gas and/or electric supply service will continue automatically on a month-to-month basis at a variable price as described below unless you or PALMco terminates this Agreement.</p>

<p><strong>Variable Natural Gas Price. </strong>You will pay a price for natural gas supply service that may vary from month to month as determined by PALMco in its sole discretion based on the applicable monthly NYMEX closing price for natural gas, applicable interstate transportation costs, any supply and agency functions that PALMco performs for you, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins. You will receive notification of any rate change when you receive your bill reflecting the new rate after completion of a billing cycle. Your price may be higher or lower than your utility&rsquo;s rate in any given month, and there is no guarantee of savings. <strong>There is no limit on how much the price of your gas supply service will change from one billing cycle to the next. </strong></p>

<p><strong>Variable Electric Price. </strong>You will pay a price for electric supply service that may vary from month to month as determined by PALMco in its sole discretion based on a zonal locational marginal price (&ldquo;LMP&rdquo;) determined on a day ahead or real time basis in the PJM market, any supply and agency functions that PALMco performs for you, line loss, compliance costs, certain transmission, capacity, ancillary, and administrative costs incurred by PALMco, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins. You will receive notification of any rate change when you receive your bill reflecting the new rate after completion of a billing cycle. Your price may be higher or lower than your utility&rsquo;s rate in any given month, and there is no guarantee of savings. &nbsp;<strong>There is no limit on how much the price of your electric supply service will change from one billing cycle to the next. </strong></p>

<p><strong>Fixed Electric and/or Natural Gas Price. </strong>If you receive fixed electric and/or natural gas supply service from PALMco, you will pay a fixed price as set forth in your Contract Summary and/or Confirmation Letter for the time period indicated in your Contract Summary and/or Confirmation Letter. Thereafter, unless otherwise agreed upon, your electric and/or natural gas supply price will automatically renew on a month-to-month basis at a variable price as described above and in accordance with the Renewal Provision/Change in Agreement Terms section herein.</p>

<p><strong><u>TAXES.</u></strong> You are responsible for paying and reimbursing PALMco for all applicable taxes, and other government fees, assessments, and charges, however designated, relating to the supply service provided under this Agreement. If you are tax exempt, you must furnish PALMco an exemption certificate before service commences.</p>

<p><strong>LENGTH OF AGREEMENT. </strong>This Agreement will begin with your first meter read by your utility following your enrollment with PALMco and will continue for the Contract Term/Length set forth in your Contract Summary.</p>

<p><strong><u>RENEWAL PROVISION/CHANGE IN TERMS.</u></strong> &nbsp;</p>

<p><strong>Electric Supply Service. </strong>If you have a fixed term electric contract approaching the expiration date, or whenever PALMco Power proposes to change the terms of service in any type of contract, you will receive two separate written notifications that precede either the expiration date or the effective date of the proposed changes. These notifications will explain your options going forward. An Initial Notice will be provided to you 45 to 60 days prior to the expiration date of the fixed term or the effective date of the proposed change in terms, and an Options Notice at least 30 days prior to the expiration of the fixed term or the effective date of the proposed change in terms. If you do not respond to the Options Notice or otherwise terminate this Agreement by notifying PALMco in accordance with the Termination section herein, then you will automatically renew on a month-to-month agreement at the rate then in effect and in accordance with the terms and conditions set forth in the notice. You may terminate the agreement during the renewal period without incurring a termination fee.</p>

<p><strong>Natural Gas Supply Service. </strong>If you have a fixed duration natural gas contract approaching the expiration date, or whenever PALMco Energy proposes to change the terms of service, you will receive two separate written notifications, the first approximately 60 to 75 days in advance and the second 45 days in advance of either the expiration date or the effective date of the proposed changes. These notifications will explain your options going forward.</p>

<p><strong><u>TERMINATION. </u></strong>You may terminate this Agreement by by: (a) calling PALMco at (877) 726-5862; (b) sending a letter to PALMco at 8751 18<sup>th</sup> Avenue Brooklyn, NY 11214; or (c) e-mailing PALMco at customerservice@palmcoenergy.com. You shall remain obligated to pay PALMco for all natural gas and/or electric supply service provided to you prior to the effective date of such termination. You also shall be obligated to pay any reasonable attorneys&#39; fees, and any related costs and expenses incurred by PALMco in connection with its attempt to collect and recover same. PALMco may terminate this Agreement upon 15 days written notice to you&nbsp; if you fail to meet your obligations under this Agreement, your utility terminates your service, or if PALMco is no longer able to serve you. The effective date of any such termination will be determined by your utility.</p>

<p><strong><u>EARLY TERMINATION FEE.</u></strong> After this Agreement goes into effect, if you terminate you will be responsible for paying PALMco any applicable early termination fees as set forth in your Contract Summary.</p>

<p><strong><u>CUSTOMER INFORMATION RELEASE</u></strong><strong>.</strong> You authorize PALMco to initiate service to the accounts listed in your confirmation letter (or in any addendum), to begin your enrollment, and to obtain historical billing data and other information about you (&ldquo;Customer Information&rdquo;) from your gas and/or electric utility, so that PALMco can start and continue its service to you. PALMco reserves the right to refuse to provide service to you under this Agreement if it is unable to obtain the necessary Customer Information.</p>

<p><strong><u>HISTORICAL PRICE INFORMATION</u></strong><strong>.</strong> You may obtain PALMco&rsquo;s&nbsp; previous 24 months&rsquo; average monthly billed electric and/or natural gas supply prices for your rate class and electric and/or natural gas utility service territory by calling PALMco at (877) 726-5862 <u>or</u> by visiting www.palmcoenergy.com/contact, where you can email PALMco&rsquo;s Customer Service Department. Please be aware that historical pricing is not indicative of present or future pricing.&nbsp;</p>

<p><strong><u>ENERGY INFORMATION AVAILABLE</u></strong><strong>. </strong>If you are a PALMco Energy customer, energy efficiency information and historical billing data is available from your gas utility or PALMco Energy on request. If you are a PALMco Power customer, information on generation energy sources, energy efficiency, environmental impacts, and historical billing data is available from your electric utility or PALMco Power on request.</p>

<p><strong><u>BILLING &amp; PAYMENT. </u></strong>This Agreement does <u>not</u> include utility transportation, delivery, or other charges that your gas or electric utility may impose. You will receive a single bill from your utility each month which will include the charges for PALMco&rsquo;s natural gas and/or electric supply service and for the services provided by your utility. You will make payment for all of these services directly to your utility.</p>

<p><strong><u>MOVING. </u></strong>You may cancel this Agreement if you move from the Service Address(es) by providing PALMco at least 30 days&rsquo; advance written notice; but the cancellation shall apply only to the Service Address(es) you move from, and not any other Service Address(es) that may be listed for you in this Agreement.</p>

<p><strong><u>INCENTIVES</u></strong>: At the time of enrollment, customers are eligible to enroll in PALMco&rsquo;s Restaurant.com Gift Card and PALMco Cares. Senior Citizen Discounts are available. After enrolling with PALMco, all customers are eligible to sign up for PALMco&rsquo;s Referral Incentive and Loyalty Credit programs. Please visit www.PalmcoEnergy.com/Rewards for more information about PALMco&rsquo;s incentive programs.</p>

<p><strong><u>DISPUTE PROCEDURES AND QUESTIONS CONCERNING YOUR SERVICE</u></strong><strong>. </strong>If you are receiving natural gas supply service from PALMco Energy, you should contact PALMco Energy if you have any questions or complaints concerning your service. If you have a question or complaint concerning your gas distribution service, billing, metering, or other services provided by your gas utility, you should contact your gas utility directly. If you are receiving electric supply service from PALMco Power, you should contact PALMco Power if you have any questions or complaints concerning your service. If you have a question or complaint concerning your electric distribution service, billing, metering, or other services provided by your electric utility, you should contact your electric utility directly. You can call the Public Utility Commission if you are not satisfied after discussing such matters with PALMco Energy or PALMco Power. Complaints that pertain to Chapter 56 (relating to standards and billing practices for residential utility service) shall be handled and resolved in accordance with the applicable standards in Chapter 56. PALMco shall give the Public Utility Commission access to disclosure statements, billing and other customer information resources for compliance reviews as deemed necessary by the Commission. When complaints arise and are brought before the Public Utility Commission for resolution, the obligation of PALMco shall be extended to the provision of pricing information.</p>

<p><strong><u>ARBITRATION AND WAIVER OF JURY TRIAL</u></strong><strong>. TO THE FULLEST EXTENT PERMITTED BY APPLICABLE PENNSYLVANIA LAW, IF THERE IS AN ISSUE, CLAIM OR DISPUTE RELATING TO THIS NATURAL GAS &amp; ELECTRIC POWER SUPPLY AGREEMENT THAT NEEDS TO BE RESOLVED AND WE ARE UNABLE TO RESOLVE IT INFORMALLY, IT MUST BE RESOLVED THROUGH FINAL, BINDING ARBITRATION AND WE MUTUALLY FOREGO THE RIGHT TO RESOLVE IT IN A COURT OF LAW. THIS APPLIES REGARDLESS OF WHETHER THE ISSUE, CLAIM OR DISPUTE INVOLVES A TORT, FRAUD, BREACH OF CONTRACT, MISREPRESENTATION, PRODUCT LIABILITY, NEGLIGENCE, AND VIOLATION OF A STATUTE OR ANY OTHER LEGAL THEORY. INCLUDED ARE ALL ISSUES, CLAIMS AND DISPUTES ARISING OUT OF OR RELATING ANY ASPECT OF YOUR PARTICIPATION IN THIS NATURAL GAS &amp; ELECTRIC POWER SUPPLY AGREEMENT AND AUTHORIZATION TO SWITCH GAS SUPPLY SERVICE AND/OR ELECTRIC GENERATION SERVICE TO PALMCO WHETHER ARISING DURING OR AFTER YOUR PARTICIPATION IN THIS NATURAL GAS &amp; ELECTRIC POWER SUPPLY AGREEMENT AND AUTHORIZATION TO SWITCH GAS SUPPLY SERVICE AND/OR ELECTRIC GENERATION SERVICE TO PALMCO. ALL ARBITRATIONS SHALL BE CONDUCTED ON AN INDIVIDUAL (AND NOT A CLASS-WIDE) BASIS AND AN ARBITRATOR SHALL HAVE NO AUTHORITY TO AWARD CLASS-WIDE RELIEF. YOU ACKNOWLEDGE AND AGREE THAT THIS SPECIFICALLY PROHIBITS YOU FROM COMMENCING ARBITRATION PROCEEDINGS AS A REPRESENTATIVE OF OTHERS OR JOINING IN ANY ARBITRATION PROCEEDINGS BROUGHT BY ANY OTHER PERSON. NOTWITHSTANDING THE FOREGOING, THIS PARAGRAPH DOES NOT PREVENT YOU FROM FILING A COMPLAINT RELATING TO YOUR ELECTRICITY OR GAS SUPPLY SERVICE WITH PALMCO PURSUANT TO THE LAWS GOVERNING RETAIL ELECTRIC GENERATION OR NATURAL GAS SUPPLIERS IN YOUR STATE AND THE REGULATIONS OF ANY AGENCY IN YOUR STATE WITH JURISDICTION OVER RETAIL ELECTRIC GENERATION OR NATURAL GAS SUPPLIERS.</strong></p>

<p><strong><u>CONTACT INFORMATION</u></strong>. <strong>Gas Service: </strong>Gas Supplier Name: PALMco Energy PA, LLC; Gas Supplier Street Address: 8751 18<sup>th</sup> Avenue Brooklyn, NY 11214; Gas Supplier Phone Number: (877) 726-5862; Gas Supplier Internet Address: http://www.PalmcoEnergy.com/.&nbsp; Information about shopping for a gas supplier is available at www.PaGasSwitch.com and by calling the Commission&rsquo;s telephone number at 1-800-692-7830, and at <a href="http://www.oca.state.pa.us">www.oca.state.pa.us</a>.</p>

<p><strong>Electric Service:</strong> Electric Generation Supplier Name: PALMco Power PA, LLC; Electric Generation Supplier Street Address: 8751 18th Avenue Brooklyn, NY 11214; Electric Generation Supplier Phone Number: (877)726-5862; Electric Generation Supplier Internet Address: http://www.PalmcoEnergy.com/. Public Utility Commission (PUC) address: P.O. Box 3265, Harrisburg, PA. 17105-3228; Electric Competition Hotline Number: 1-888-782-3228.</p>

<p><strong><u>APPLICABLE LAWS, ETC.</u></strong> This Agreement is subject to all applicable local, state, and federal laws, and the orders, rules and regulations of governmental agencies having jurisdiction over the subject matter of this Agreement, including the PUC. Services provided by your electric and gas utility are subject to all applicable state and federal laws, orders, rules, and regulations.</p>

<p><strong><u>FORCE MAJEURE</u></strong><strong>. </strong>Neither PALMco nor you will be liable for a breach of this Agreement if such breach is due to a force majeure event. A &ldquo;force majeure event&rdquo; means a material, unavoidable occurrence beyond a party&rsquo;s control, such as a fire, act of god or public enemy, labor strike, lockout or other industrial disturbance, act of terrorism, government action, gas or electric utility action, storm, hurricane, flood, explosion, shortage or unavailability of transmission facilities, and other events that cannot be prevented or overcome by ordinary due diligence. A force majeure event does not include an inability to pay any amount owing pursuant to this Agreement.</p>

<p><strong><u>REGULATORY CHANGES. </u></strong>This Agreement is subject to present and future legislation, orders, rules, regulations, or decisions of a duly constituted governmental authority having jurisdiction over this Agreement or the services to be provided hereunder. If at some future date there is a change in any law, rule, regulation, tariff or regulatory structure (&ldquo;Regulatory Change&rdquo;) which impacts any term, condition, or provision of this Agreement including, but not limited to price, PALMco shall have the right to cancel or modify this Agreement to reflect such Regulatory Change by providing written notice to you.</p>

<p><strong><u>ELECTRONIC COMMUNICATION</u></strong><strong>. </strong>Unless otherwise required by law, if you provide PALMco with your email address, you agree that PALMco may transmit to you all notices and other communications, including those required in this Agreement, electronically to the email address provided by you. You shall be responsible for notifying PALMco of any change in email address and/or any withdrawal of your consent to electronic communications. Notices transmitted to you via email will be deemed to have been received if transmitted to you at the email address provided to PALMco by you.</p>

<p><strong><u>LIMITATION OF LIABILITY</u></strong><strong>. TO THE FULLEST EXTENT PERMITTED BY APPLICABLE PENNSYLVANIA LAW,</strong> <strong>NEITHER PALMCO ENERGY NOR PALMCO POWER WILL BE LIABLE TO YOU, AND YOU WILL NOT BE LIABLE TO EITHER PALMCO ENERGY OR PALMCO POWER, FOR ANY CONSEQUENTIAL, EXEMPLARY, PUNITIVE, INCIDENTAL, OR INDIRECT DAMAGES ARISING FROM A BREACH OF THIS AGREEMENT, INCLUDING, WITHOUT LIMITATION, LOST PROFITS OR LOST REVENUES. </strong></p>

<p><strong><u>NO WARRANTIES</u></strong><strong>. NEITHER PALMCO ENERGY NOR PALMCO POWER MAKES ANY WARRANTIES, AFFIRMATIONS OF FACT OR PROMISES, EXPRESS OR IMPLIED, THAT EXTEND BEYOND THE FACE OF THIS AGREEMENT, INCLUDING, WITHOUT LIMITATION, WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE.</strong></p>

<p><strong><u>MISCELLANEOUS</u></strong><strong>. </strong>This Agreement is the entire understanding between you and PALMco with respect to the subject matter hereof and there are no promises, covenants or undertakings other than those expressly set forth in this Agreement. Except as otherwise provided herein, this Agreement can only be amended by a writing signed by you and PALMco. You may not assign this Agreement without the prior written consent of PALMco. PALMco may sell, transfer, pledge, or assign the accounts, revenues, or proceeds hereof, in connection with any financial agreement and may assign this Agreement to another energy supplier, energy services company or other entity in accordance with the PUC rules and procedures, if any, governing such transactions. This Agreement will inure to and be binding upon the successors and assignees of the parties. <strong>THIS AGREEMENT WILL BE GOVERNED AND CONSTRUED IN ACCORDANCE WITH PENNSYLVANIA LAW, WITHOUT REGARD TO PRINCIPLES RELATING TO CONFLICTS OF LAW.</strong></p>

<p><strong><u>EMERGENCIES</u></strong><strong>. IF YOU ARE RECEIVING GAS SERVICE FROM PALMCO ENERGY UNDER THIS AGREEMENT, IN THE EVENT OF AN EMERGENCY, GAS OUTAGE, OR SERVICE INTERRUPTION, YOU SHOULD IMMEDIATELY CONTACT YOUR GAS UTILITY. IF YOU ARE RECEIVING ELECTRIC SERVICE FROM PALMCO POWER UNDER THIS AGREEMENT, IN THE EVENT OF AN EMERGENCY, ELECTRIC OUTAGE, OR SERVICE INTERRUPTION, YOU SHOULD</strong> <strong>IMMEDIATELY CONTACT YOUR ELECTRIC UTILITY.</strong></p>

<table border="1" cellpadding="0" cellspacing="0" height="392" width="798">
<tbody>
<tr>
<td style="width:90px;">
<p align="center"><strong>Utility</strong></p>
</td>
<td style="width:96px;">
<p align="center"><strong>Address</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>Phone Number for Outages &amp; Emergencies</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>Universal Service Program</strong></p>
</td>
</tr>
<tr>
<td style="width:90px;">
<p><strong>PPL Electric Utilities</strong></p>
</td>
<td style="width:96px;">
<p><strong>827 Hausman Rd</strong></p>

<p><strong>Allentown, PA 18104-9392</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>1-800-342-5775</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>OnTrack</strong></p>

<p align="center"><strong>1-800-358-6623</strong></p>
</td>
</tr>
<tr>
<td style="width:90px;">
<p><strong>PECO</strong></p>
</td>
<td style="width:96px;">
<p><strong>2301 Market St</strong></p>

<p><strong>Philadelphia, PA 19103</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>1-800-841-4141</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>CAP Rate</strong></p>

<p align="center"><strong>1-800-774-7040</strong></p>
</td>
</tr>
<tr>
<td style="width:90px;">
<p><strong>Duquesne </strong></p>

<p><strong>Light</strong></p>
</td>
<td style="width:96px;">
<p><strong>411 Seventh Avenue (6-1)</strong></p>

<p><strong>Pittsburgh, PA 15219</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>1-888-393-7000</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>CAP</strong></p>

<p align="center"><strong>1-888-393-7600</strong></p>
</td>
</tr>
<tr>
<td style="width:90px;">
<p><strong>Metropolitan Edison</strong></p>
</td>
<td style="width:96px;">
<p><strong>P.O. Box 3687</strong></p>

<p><strong>Akron, OH 44309</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>1-888-544-4877</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>PCAP</strong></p>

<p align="center"><strong>1-800-962-4848</strong></p>
</td>
</tr>
<tr>
<td style="width:90px;">
<p><strong>Penelec</strong></p>
</td>
<td style="width:96px;">
<p><strong>P.O. Box 3687</strong></p>

<p><strong>Akron, OH 44309</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>1-888-544-4877</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>PCAP</strong></p>

<p align="center"><strong>1-800-962-4848</strong></p>
</td>
</tr>
<tr>
<td style="width:90px;">
<p><strong>West Penn</strong></p>
</td>
<td style="width:96px;">
<p><strong>P.O. Box 3687</strong></p>

<p><strong>Akron, OH 44309</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>1-888-544-4877</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>LIPURP</strong></p>

<p align="center"><strong>1-800-207-1250</strong></p>
</td>
</tr>
</tbody>
</table>

<p align="right"><strong>v.17-01.12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>

<p>&nbsp;</p>',
                'created_at' => '2017-02-28 02:58:12',
                'updated_at' => '2017-02-28 03:00:13',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1,
                'state_id' => 8,
                'template_type' => 'Contract Summary',
                'commodity_id' => 1,
                'locale_code' => 'en',
                'source_file_name' => 'PA Electric Contract Summary V.E.17-01.12.docx',
                'version' => 'v. 17-01.12',
                'is_active' => false,
                'template_html' => '<p align="center"><strong>PALMCO POWER CONTRACT SUMMARY &ndash; FOR ELECTRIC CUSTOMERS ONLY </strong></p>

<p align="center">&nbsp;</p>

<table align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="width:205px;">
<p>Electric Generation Supplier Information</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">PALMco Power PA, LLC, 8751 18<sup>th</sup> Avenue Brooklyn, NY 11214</p>

<p style="margin-left:-.9pt;">Phone: (877) 726-5862, Website: www.PalmcoEnergy.com</p>

<p style="margin-left:-.9pt;">PALMco Power (&ldquo;PALMco&rdquo;) is responsible for your electric generation charges.</p>

<p style="margin-left:-.9pt;">&nbsp;</p>
</td>
</tr>
<tr>
<td style="width:205px;">
<p>Price Structure</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">Variable. For the first [PRODUCT.TERM_MONTHS] billing cycles of the Agreement, you will pay an introductory price of $ [PRODUCT.RATE] per kWh. Beginning in the fourth billing cycle, you will pay a price of $ [NEXT_PRODUCT.RATE] per kWh, and thereafter, you will pay a price for electric supply service that may vary from month to month as determined by PALMco in its sole discretion based on a zonal locational marginal price (&ldquo;LMP&rdquo;) determined on a day ahead or real time basis in the PJM market, any supply and agency functions that PALMco performs for you, line loss, compliance costs, certain transmission, capacity, ancillary, and administrative costs incurred by PALMco, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins. You will receive notification of any rate change when you receive your bill reflecting the new rate after completion of a billing cycle. There is no limit on how much the price of your electric supply service may change from one billing cycle to the next. You are also responsible for paying and reimbursing PALMco for all applicable taxes, and other government fees, assessments, and charges, however designated, relating to the electric supply service provided under your Agreement. This Agreement does not include utility transportation, delivery, or other charges that your electric utility may impose.</p>
</td>
</tr>
<tr>
<td style="width:205px;">
<p>Generation/Supply Price</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">$ [PRODUCT.RATE] per kWh. This is an introductory rate for the first [PRODUCT.TERM_MONTHS] billing cycles only. Beginning in the fourth billing cycle, you will pay a price of $ [NEXT_PRODUCT.RATE] per kWh, and thereafter, your rate will vary month to month based on the factors described above.</p>
</td>
</tr>
<tr>
<td style="width:205px;">
<p>Statement Regarding Savings</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">Savings are not guaranteed.</p>
</td>
</tr>
<tr>
<td style="width:205px;">
<p>Deposit Requirements</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">None.</p>
</td>
</tr>
<tr>
<td style="width:205px;">
<p>Incentives</p>
</td>
<td style="width:550px;">
<p>At the time of enrollment, customers are eligible to enroll in PALMco&rsquo;s Restaurant.com Gift Card and PALMco Cares.&nbsp; Senior Citizen Discounts are available.&nbsp; After enrolling with PALMco, all customers are eligible to sign up for PALMco&rsquo;s Referral Incentive and Loyalty Credit programs. Please visit www.PalmcoEnergy.com/Rewards for more information about PALMco&rsquo;s incentive programs.</p>
</td>
</tr>
<tr>
<td style="width:205px;">
<p>Contract Start Date</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">The start date will be a date set by your electric utility.</p>
</td>
</tr>
<tr>
<td style="width:205px;">
<p>Contract Term/Length</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">Month-to-month.</p>
</td>
</tr>
<tr>
<td style="width:205px;">
<p>Cancellation/Early Termination Fees</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">None.</p>
</td>
</tr>
<tr>
<td style="width:205px;">
<p>Renewal Terms</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">The Agreement will renew automatically on a month-to-month basis under the same terms, or with changes to your benefit (with the price for electric service staying the same, decreasing, or increasing), unless you or PALMco Power terminates the Agreement.</p>

<p style="margin-left:-.9pt;">&nbsp;</p>
</td>
</tr>
<tr>
<td style="width:205px;height:74px;">
<p>Change in Contract Terms</p>
</td>
<td style="width:550px;height:74px;">
<p style="margin-left:-.9pt;">Except in the case of a change to your benefit, whenever PALMco Power proposes to change the terms of service (except the price for electric supply service), you will receive two separate written notifications -- an Initial Notice and an Options Notice. You will receive an Initial Notice 45 to 60 days prior to the effective date of the proposed change, and an Options Notice at least 30 days prior to the effective date of the proposed change. These notifications will explain your options going forward.</p>
</td>
</tr>
<tr>
<td style="width:205px;height:67px;">
<p>Electric Distribution Company (Utility) Information</p>
</td>
<td style="width:550px;height:67px;">
<ol>
<li>Duquesne Light Customer Service Center, Phone: 1 (412) 393-7100, Website: https://www.duquesnelight.com/</li>
<li>Met-Ed Customer Service Center, Phone: 1 (800) 545-7741, Website: https://www.firstenergycorp.com/content/customer/met_edison.html</li>
<li>PECO Customer Service Center, Phone: 1 (800) 494-4000, Website: https://www.peco.com/</li>
<li>Penelec Customer Service Center, Phone: 1 (800) 545-7411, Website: https://www.firstenergycorp.com/content/customer/penelec.html</li>
<li>PPL Electric Customer Service Center, Phone 1 (800) 342-5775, Website: https://www.pplelectric.com/</li>
<li>West Penn Power Customer Service Center, Phone: 1 (800) 686-0021, Website: https://www.firstenergycorp.com/content/customer/west_penn_power.html</li>
</ol>

<p style="margin-left:-.9pt;">Your utility is responsible for your distribution charges, reading your meter, emergencies, electric outages, and service interruptions.</p>
</td>
</tr>
<tr>
<td style="width:205px;height:35px;">
<p>&nbsp;</p>
</td>
<td style="width:550px;height:35px;">
<p align="right"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; v. 17-01.12</strong></p>
</td>
</tr>
</tbody>
</table>',
                'created_at' => '2017-02-28 01:47:47',
                'updated_at' => '2017-03-01 02:19:28',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'state_id' => 5,
                'template_type' => 'Utility Supplement',
                'commodity_id' => 3,
                'locale_code' => 'en',
                'source_file_name' => 'Palmco Enrollment Confirmation V2.docx',
                'version' => 'v. 16-08.01',
                'is_active' => false,
                'template_html' => '<p style="text-align: center;"><strong>Information about PALMco&rsquo;s Natural Gas Supply Service for Residential Customers</strong></p>

<p align="right">v. 16-08.01</p>

<p><strong>Introductory Natural Gas Supply Service Rate:</strong> PALMco&rsquo;s introductory rate stated below is valid only for newly enrolled PALMco residential customers for the first two billing periods after enrollment.&nbsp; At the conclusion of the first two billing periods, the natural gas supply rate you are charged will vary each billing cycle based on the factors stated below. There is no limit on how much the price of your natural gas supply service may change from one billing cycle to the next.</p>

<p><strong>Contract Term (Duration): </strong>The initial term of all PALMco contracts will be for one month.&nbsp; After the initial one month period, your contract will continue automatically on a month-to-month basis unless either you or PALMco terminates the contract by giving at least 30 days&rsquo; advance written notice to the other before the end of any one month term.&nbsp;</p>

<p><strong>Pricing Mechanism:</strong> If you receive natural gas supply service from PALMco Energy, you will pay a price that may vary from month to month as determined by PALMco in its sole discretion based on the applicable monthly NYMEX closing price for natural gas, applicable interstate transportation costs, any supply and agency functions that PALMco performs for you, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins. Your introductory price for gas supply service, listed below, includes New Jersey sales and use taxes. <em>There is no limit on how much the price of your natural gas supply service may change from one billing cycle to the next.</em></p>

<p><strong>RESIDENTIAL Natural Gas Supply Price Comparison Information</strong></p>

<p><strong>PALMco Energy NJ License#:</strong> GSL-0033</p>

<p><strong>These rates are valid for sales made during:</strong>&nbsp; March, 2017</p>

<p>The prices stated in the table below include all monthly fixed and variable charges related to natural gas generation supply service</p>

<p>[NJ_G_UTILITY_COMPARISON]</p>

<div><strong>Information about PALMco&rsquo;s Electric Generation Supply Service for Residential Customers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

<p><strong>Introductory Electric Generation Supply Service Rate: PALMco&rsquo;s introductory rate stated below </strong>is valid only for newly enrolled PALMco residential customers for the first two billing periods after enrollment.&nbsp; At the conclusion of the first two billing periods, the electric generation supply rate you are charged will vary each billing cycle based on the factors stated&nbsp;&nbsp; below.&nbsp; There is no limit on how much the price of your electric generation service may change from one billing cycle to the next.</p>

<p>&nbsp;</p>

<p><strong>Contract Term (Duration): </strong>The initial term of all PALMco contracts will be for one month.&nbsp; After the <strong>initial</strong> one month period, your contract will continue automatically on a month-to-month basis unless either you or PALMco terminates the contract by giving at least 30 days&rsquo; advance written notice to the other before the end of any <strong>one month term</strong>.</p>

<p><strong>Pricing Mechanism:</strong> If you receive electric generation supply service from PALMco Power, you will pay a price that may vary from month to month as determined by PALMco in its sole discretion based on a monthly zonal locational marginal price (&quot;LMP&quot;) determined on a day ahead or real time basis, any supply and agency functions that PALMco performs for you, line loss, compliance costs, certain transmission, capacity, ancillary, and administrative costs incurred by PALMco, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins. Your introductory price for electric generation supply service, listed below, includes New Jersey sales and use taxes. There is no limit on how much the price of your electric generation supply service may change from one billing cycle to the next.</p>

<p><strong>RESIDENTIAL Electric Generation Supply Price Comparison Information&nbsp; &nbsp;</strong></p>

<p><strong>PALMco Power NJ License#:</strong> ESL-0049</p>

<p><strong>These rates are valid for sales made during:</strong>&nbsp; March 2017</p>

<p>The prices stated in the table below include all monthly fixed and variable charges related to electric generation supply service.</p>

<p>[NJ_E_UTILITY_COMPARISON]</p>',
                'created_at' => '2017-02-28 17:36:41',
                'updated_at' => '2017-02-28 17:37:45',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'state_id' => 4,
                'template_type' => 'Contract Summary',
                'commodity_id' => 2,
                'locale_code' => 'en',
                'source_file_name' => 'PALMco Maryland Contract Summary - V.E.17-01.12.docx',
                'version' => 'v. 17-01.12',
                'is_active' => false,
                'template_html' => '<p align="center"><strong>Maryland Contract Summary</strong></p>

<p>&nbsp;</p>

<table align="center" border="1" cellpadding="0" cellspacing="0" style="width:654px;" width="654">
<tbody>
<tr>
<td style="width:168px;">
<p>Electricity Supplier Information</p>

<p>Gas Supplier Information</p>
</td>
<td style="width:486px;">
<p>PALMco Power MD, LLC &ndash; License No. IR-1804</p>

<p>PALMco Energy MD, LLC &ndash; License No. IR-1803</p>

<p>customerservice@palmcoenergy.com</p>

<p>www.palmcoenergy.com</p>

<p>(877) 726-5862</p>
</td>
</tr>
<tr>
<td style="width:168px;">
<p>Price Structure</p>
</td>
<td style="width:486px;">
<p>Electric variable price may vary from month-to-month as determined by PALMco in its sole discretion based on a monthly zonal locational marginal price (&quot;LMP&quot;) determined on a day ahead or real time basis, any supply and agency functions that PALMco performs for you, certain transmission, line loss, compliance costs, capacity, ancillary, and administrative costs incurred by PALMco, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins.</p>

<p>&nbsp;</p>

<p>Natural gas variable price may vary from month to month as determined by PALMco in its sole discretion based on the applicable monthly NYMEX closing price for natural gas, applicable interstate transportation costs, any supply and agency functions that PALMco performs for you, and other prevailing market conditions, plus PALMco&rsquo;s costs, expenses, and margins.</p>

<p>&nbsp;</p>

<p>Your electric and/or natural gas supply service price does not include, and you will be required to pay, applicable taxes and fees. There is not a limit on how much your electric and/or natural gas supply service price may change from one billing cycle to the next.</p>
</td>
</tr>
<tr>
<td style="width:168px;">
<p>Supply Price</p>
</td>
<td style="width:486px;">
<p>&nbsp;</p>

<p>Electric Introductory Rate: <u>______</u> per kWh for the first two billing cycles. Beginning in the third billing cycle, and thereafter, your price may vary from month to month based on the electric variable price factors described above.</p>

<p>&nbsp;</p>

<p>Natural Gas Introductory Rate: <u>[PRODUCT.RATE] </u>per therm for the first [PRODUCT.TERM_MONTHS] billing cycles. Beginning in the third billing cycle, and thereafter, your price may vary from month to month based on the natural gas variable price factors described above.</p>

<p>&nbsp;</p>

<p>You may access your estimated rate for your next billing period at least 12 days prior to the close of your current billing period by visiting the PALMco website at https://www.palmcoenergy.com/maryland-rates/</p>
</td>
</tr>
<tr>
<td style="width:168px;">
<p>Statement Regarding Savings</p>
</td>
<td style="width:486px;">
<p>PALMco does not guarantee or promise rates lower than your utility.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:98px;">
<p>Incentives</p>
</td>
<td style="width:486px;height:98px;">
<p>At the time of enrollment, customers are eligible to enroll in PALMco&rsquo;s Restaurant.com Gift Card and PALMco Cares. Senior Citizen Discounts are available. After enrolling with PALMco, all customers are eligible to sign up for PALMco&rsquo;s Referral Incentive and Loyalty Credit programs. Please visit www.PalmcoEnergy.com/Rewards for more information about PALMco&rsquo;s incentive programs.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:41px;">
<p>Contract Start Date</p>
</td>
<td style="width:486px;height:41px;">
<p>The start date will begin with your first meter read by your utility following your enrollment with PALMco, typically 1-2 billing cycles.</p>
</td>
</tr>
<tr>
<td style="width:168px;">
<p>Contract Term/Length</p>
</td>
<td style="width:486px;">
<p>Month-to-month.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:35px;">
<p>Cancellation/Early Termination Fees</p>
</td>
<td style="width:486px;height:35px;">
<p>None.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:29px;">
<p>Renewal Terms</p>
</td>
<td style="width:486px;height:29px;">
<p>Agreement will continue on a month-to-month basis until terminated by customer or PALMco.</p>
</td>
</tr>
</tbody>
</table>

<div style="clear:both;">&nbsp;</div>

<p>&nbsp;</p>

<p style="margin-left:22.5pt;"><strong>For additional information, please refer to your Terms and Conditions.&nbsp; Please retain this document for your records.&nbsp; If you have any questions regarding this agreement, contact your competitive supplier using the information above.</strong></p>

<p align="right"><strong>v. 17-01.12</strong></p>',
                'created_at' => '2017-03-01 02:09:26',
                'updated_at' => '2017-03-01 02:10:26',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'state_id' => 2,
                'template_type' => 'Terms of Service',
                'commodity_id' => 3,
                'locale_code' => 'es',
                'source_file_name' => 'IL T&Cs - V.S.16-12.21.docx',
                'version' => '21.12.16',
                'is_active' => false,
                'template_html' => '<p style="text-align: center;"><strong><u>DECLARACI&Oacute;N UNIFORME DE DIVULGACI&Oacute;N DE ILLINOIS Y</u></strong></p>

<p align="center"><strong><u>T&Eacute;RMINOS Y CONDICIONES</u></strong></p>

<p>&nbsp;</p>

<p><strong><u>INTRODUCCI&Oacute;N:</u></strong> Este es un convenio, junto con su Carta de Confirmaci&oacute;n, todas las Cartas de Autorizaci&oacute;n correspondientes y cualquiera y todos los Avisos de Renovaci&oacute;n (si corresponde) (colectivamente, el &quot;Convenio&quot;), entre PALMco Power IL, LLC (&ldquo;PALMco Power o &ldquo;PALMco&rdquo;) y usted para el servicio de suministro de electricidad en cada direcci&oacute;n del servicio de la cuenta indicada en su Carta de Confirmaci&oacute;n (o en un ap&eacute;ndice). Usted acepta autorizar un cambio de su servicio de suministro de electricidad a PALMco y comprar toda la electricidad necesaria para que le suministren el servicio a cada cuenta indicada en su Carta de Confirmaci&oacute;n (o enumerada en un anexo), seg&uacute;n se describe en este Convenio.</p>

<p><strong><u>ACEPTACI&Oacute;N:</u></strong> Usted comprende y acepta lo siguiente: (A) Usted es el cliente nombrado en cada una de las cuentas indicadas en su Carta de Confirmaci&oacute;n (o en cualquier anexo), o usted es c&oacute;nyuge del cliente nombrado en las cuentas, o usted es mayor de 18 a&ntilde;os y tiene autorizaci&oacute;n para tomar decisiones referentes a dichas cuentas. (B) PALMco es un vendedor independiente de servicio de energ&iacute;a el&eacute;ctrica, certificado por la Comisi&oacute;n de Comercio de Illinois (la &quot;Comisi&oacute;n&quot;). (C) Ni PALMco ni sus representantes act&uacute;an en nombre o representaci&oacute;n de su servicio de utilidades de electricidad, ni de ning&uacute;n organismo gubernamental ni de grupos de consumidores. (D) PALMco no cobrar&aacute; ning&uacute;n cargo por cambiarse a PALMco como su proveedor de energ&iacute;a el&eacute;ctrica ni por inscribirse en el Programa &ldquo;Power Choice&rdquo; de PALMco. (E) Su servicio de utilidades de electricidad continuar&aacute; entregando la energ&iacute;a a sus instalaciones y respondiendo a cualquier llamada de servicio y emergencias. (F) Cambiarse a PALMco no afectar&aacute; la fiabilidad de su servicio de electricidad. (G) Su empresa de servicio de utilidades de electricidad le enviar&aacute; una sola factura que cubre su servicio de entrega de electricidad, y su servicio de suministro de electricidad. (H) Su selecci&oacute;n de PALMco para brindarle el servicio de energ&iacute;a el&eacute;ctrica puede implicar que se le imponga un cargo por cambiar de otro proveedor de servicio. (I) No se garantizan ahorros bajo este Convenio.</p>

<p><strong><u>PER&Iacute;ODO DE DURACI&Oacute;N Y RESCISI&Oacute;N: </u></strong>Este Convenio comenzar&aacute; con la primera fecha disponible de la lectura de su medidor, despu&eacute;s de que PALMco y su servicio de utilidades&nbsp; procesen su solicitud de inscripci&oacute;n y continuar&aacute; por la duraci&oacute;n establecida en su Carta de Confirmaci&oacute;n. Usted puede rescindir este Convenio comunic&aacute;ndose con PALMco antes de que PALMco env&iacute;e su solicitud de inscripci&oacute;n a su servicio de utilidades. Si no rescinde este Convenio antes de que PALMco env&iacute;e su solicitud de inscripci&oacute;n, recibir&aacute; una notificaci&oacute;n por escrito de su servicio de utilidades confirmando su cambio a PALMco para su suministro de electricidad. Usted puede rescindir este Convenio y la inscripci&oacute;n pendiente sin ninguna penalidad en un plazo de diez (10) d&iacute;as calendario despu&eacute;s de que el servicio de utilidades procese su solicitud de inscripci&oacute;n comunic&aacute;ndose con PALMco al 877-726-5862 o con su servicio de utilidades:&nbsp; AMEREN al 800-755-5000 y COMED al 800-334-7661.</p>

<p><strong><u>PRECIOS.</u></strong> <strong><u>Precio Variable:</u></strong> Usted pagar&aacute; un precio por el servicio de suministro el&eacute;ctrico que podr&iacute;a variar de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, basado sobre el precio marginal local de la zona (&ldquo;LMP&rdquo;, por las siglas en ingl&eacute;s) determinado en tiempo real o con un d&iacute;a de antelaci&oacute;n, las funciones de suministro y representaci&oacute;n que PALMco desempe&ntilde;e para usted, los costos de p&eacute;rdida de capacidad de l&iacute;nea, los costos de cumplimiento, ciertos costos de trasmisi&oacute;n, de capacidad, auxiliares y administrativos incurridos por PALMco y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco. No hay un cargo por terminaci&oacute;n anticipada. No hay l&iacute;mite en la variaci&oacute;n de precios de su servicio de suministro de electricidad de un ciclo de facturaci&oacute;n al siguiente, y su precio variable puede ser mayor o menor que el de la tarifa de oferta est&aacute;ndar de su servicio de utilidades en cualquier mes. PALMco no garantiza ahorros en ning&uacute;n mes ni por la duraci&oacute;n de este Convenio. Los precios actuales e hist&oacute;ricos de PALMco no son indicativos de los precios en el futuro.</p>

<p><strong><u>Precio Fijo:</u></strong> Usted pagar&aacute; un Precio Fijo establecido en su Carta de Confirmaci&oacute;n, por el periodo indicado en su Carta de Confirmaci&oacute;n. Si usted cancela este Convenio de servicio de suministro de electricidad de Precio Fijo antes del vencimiento de su duraci&oacute;n, no estar&aacute; sujeto a ning&uacute;n cargo por cancelaci&oacute;n temprana. PALMco no garantiza ahorros en ning&uacute;n mes ni por la duraci&oacute;n de este Convenio. Los precios actuales e hist&oacute;ricos de PALMco no son indicativos de los precios en el futuro.</p>

<p><strong><u>Otros cargos:</u></strong>&nbsp; Usted tambi&eacute;n tiene la responsabilidad de pagar y reembolsar a PALMco todos los impuestos que correspondan y los dem&aacute;s aranceles, grav&aacute;menes y cargos del gobierno, cualquiera sea su denominaci&oacute;n, que est&eacute;n relacionados con el servicio de suministro de electricidad prestado en virtud de este Convenio. Si usted est&aacute; exento de impuestos, debe presentar el certificado de exenci&oacute;n a PALMco antes del comienzo del servicio. Este Convenio no incluye cargos de transporte, entrega u otros cargos que su servicio de utilidades de electricidad pudiera imponer.</p>

<p><strong><u>RENOVACI&Oacute;N AUTOM&Aacute;TICA Y TERMINACI&Oacute;N POR PARTE DEL CLIENTE:</u></strong></p>

<p><strong>Para los Clientes con Precio Fijo:</strong> SU CONVENIO SE RENOVAR&Aacute; AUTOM&Aacute;TICAMENTE SEG&Uacute;N SE DESCRIBE EN ESTA SECCI&Oacute;N. A FIN DE EFECTUAR LA CANCELACI&Oacute;N ANTES DE UNA RENOVACI&Oacute;N AUTOM&Aacute;TICA DE ESTE CONVENIO, S&Iacute;RVASE NOTIFICARNOS POR ESCRITO O POR TEL&Eacute;FONO SEG&Uacute;N SE DESCRIBE EN EL PRESENTE CONVENIO. A menos que se cancele antes, en no menos de 30 d&iacute;as ni m&aacute;s de 60 d&iacute;as antes de la fecha de vencimiento de la duraci&oacute;n actual de este Convenio, PALMco le proporcionar&aacute; un aviso por escrito de la renovaci&oacute;n de este Convenio. En el aviso de renovaci&oacute;n se describir&aacute;n las opciones de renovaci&oacute;n propuestas, incluyendo la informaci&oacute;n reglamentaria correspondiente, requerida por la Comisi&oacute;n, y los cambios al Convenio existente. A MENOS QUE USTED NOTIFIQUE A PALMCO POR ESCRITO O POR MEDIO DE UNA LLAMADA TELEF&Oacute;NICA USANDO LA INFORMACI&Oacute;N DE CONTACTO PROPORCIONADA EN LA SECCI&Oacute;N INFORMACI&Oacute;N DE CONTACTO DE ESTE CONVENIO QUE NO DESEA RENOVAR, SE CONSIDERAR&Aacute; QUE USTED ACEPT&Oacute; RENOVAR IRREVOCABLE E INCONDICIONALMENTE ESTE CONVENIO BAJO LOS T&Eacute;RMINOS Y CONDICIONES DESCRITOS EN EL AVISO DE RENOVACI&Oacute;N. Si usted cancela este Convenio antes del vencimiento de su duraci&oacute;n, no hay un cargo por cancelaci&oacute;n temprana.</p>

<p><strong>Para los Clientes con Precio Fijo:</strong> SU SERVICIO DE SUMINISTRO DE ELECTRICIDAD DE PALMCO ES POR UN MES Y CONTINUAR&Aacute; VIGENTE DE FORMA AUTOM&Aacute;TICA MENSUALMENTE BAJO LA MISMA F&Oacute;RMULA DE TASA VARIABLE, T&Eacute;RMINOS Y CONDICIONES A MENOS QUE USTED O PALMCO LO CANCELEN. MIENTRAS RECIBE EL SERVICIO MENSUALMENTE, NO SE LE IMPONDR&Aacute; UN CARGO POR CANCELAR SU SERVICIO DE ELECTRICIDAD y usted lo puede cancelar en cualquier momento por cualquier motivo o sin motivo, por medio de (a) una llamada telef&oacute;nica a PALMco al (877) 726-5862; (b) el env&iacute;o de una carta a PALMco a 8751 18<sup>th</sup> Avenue, Brooklyn, NY 11214; o (c) el env&iacute;o de un correo electr&oacute;nico a PALMco a CustomerService@PalmcoEnergy.com. En cualquier caso de que su servicio de suministro de electricidad con PALMco se cancele, seg&uacute;n las disposiciones de este Convenio, usted permanecer&aacute; obligado a pagar a PALMco por todo el servicio de suministro de electricidad prestado antes de la fecha de entrada en vigor de dicha terminaci&oacute;n. La fecha efectiva de la terminaci&oacute;n ser&aacute; determinada por su servicio de utilidades.</p>

<p><strong><u>COMBINACI&Oacute;N DE RECURSOS Y CARACTER&Iacute;STICAS AMBIENTALES.</u></strong> La procedente combinaci&oacute;n de recursos de generaci&oacute;n de energ&iacute;a y las caracter&iacute;sticas ambientales del suministro el&eacute;ctrico vendido por PALMco est&aacute;n disponibles en www.palmcoenergy.com. Esta informaci&oacute;n se actualiza en forma peri&oacute;dica, conforme a los requisitos de la Comisi&oacute;n de Comercio de Illinois.</p>

<p><strong><u>DIVULGACI&Oacute;N DE INFORMACI&Oacute;N DEL CLIENTE.</u></strong> Usted autoriza a PALMco a comenzar su inscripci&oacute;n, iniciar el servicio para las cuentas indicadas en su Carta de Confirmaci&oacute;n (o en cualquier anexo) y a obtener datos hist&oacute;ricos sobre facturaci&oacute;n y otra informaci&oacute;n acerca de usted (&ldquo;Informaci&oacute;n del cliente&rdquo;) de su servicio de utilidades de electricidad, a fin de que PALMco pueda iniciar y continuar brind&aacute;ndole su servicio. PALMco se reserva el derecho de negarse a brindarle servicio a usted conforme a este Convenio si no puede obtener la Informaci&oacute;n de cliente necesaria o si obtiene Informaci&oacute;n de cliente que considera insatisfactoria.</p>

<p>&nbsp;</p>

<p><strong><u>PAGO DE FACTURAS/TERMINACI&Oacute;N POR PARTE DE PALMCO</u></strong>. Recibir&aacute; una factura &uacute;nica de su servicio de utilidades cada mes en la que se incluir&aacute;n los cargos por servicio de suministro de electricidad de PALMco y por los servicios provistos por su servicio de utilidades. Usted har&aacute; un pago por todos estos servicios directamente a su servicio de utilidades. Si no se recibe su pago por el servicio de electricidad al momento de su vencimiento o no cumple con lo acordado en el convenio de pago que pueda tener, PALMco podr&iacute;a dar por terminado su convenio de servicio de suministro de electricidad con PALMco, proporcion&aacute;ndole un aviso con al menos 14 d&iacute;as calendario de anticipaci&oacute;n, siempre y cuando usted siga teniendo la obligaci&oacute;n de pagar por todo el servicio de suministro de electricidad recibido por usted antes de dicha terminaci&oacute;n. Deber&aacute; tambi&eacute;n pagar una multa por mora sobre cualquier monto impago (incluyendo los montos adeudados y las multas por mora de los mismos) que PALMco no reciba en un plazo de 15 d&iacute;as de la fecha de la factura a una tasa de 1,5% por mes (18% por a&ntilde;o) o el monto m&aacute;ximo permitido por ley, el que sea m&aacute;s bajo. Tambi&eacute;n deber&aacute; pagar a PALMco los honorarios de abogados y dem&aacute;s gastos en que incurra para procurar el cobro de los pagos que usted adeuda.</p>

<p>&nbsp;</p>

<p><strong><u>INFORMACI&Oacute;N DE CONTACTO, PROCEDIMIENTOS DE DISPUTA Y PREGUNTAS ACERCA DE SU SERVICIO.</u></strong><strong> www.PalmcoEnergy.comSi tiene </strong><strong>preguntas o quejas sobre su servicio establecido en este Convenio, comun&iacute;quese con PALMco al 877-726-5862 (l&iacute;nea gratuita), por correo electr&oacute;nico a CustomerService@PalmcoEnergy.com en www.PalmcoEnergy.com, o por correo postal a 8751 18th Avenue, Brooklyn, NY 11214. Si su queja no se soluciona despu&eacute;s de haberse comunicado con PALMco, puede presentar una queja a la Divisi&oacute;n de Servicios al Consumidor de la Comisi&oacute;n (CSD) al 800-524-0795 (l&iacute;nea gratuita) o a TTY al 800-858-9277 (l&iacute;nea gratuita) a trav&eacute;s del sitio web de CSD a http://www.icc.illinois.gov/consumer/complaint, o por correo postal a la Comisi&oacute;n de Comercio de Illinois, 527 East Capitol Ave., Springfield, IL 62701. Si necesita informaci&oacute;n general sobre su servicio, o desea obtener materiales educativos, puede comunicarse con la Comisi&oacute;n al 800-524-0795 (l&iacute;nea gratuita) o con TTY al 800-858-9277 (l&iacute;nea gratuita) o en http://www.icc.illinois.gov.</strong>&nbsp;</p>

<p><strong><u>FUERZA MAYOR.</u></strong> Ni PALMco ni usted ser&aacute;n responsables por el incumplimiento de este Convenio si dicho incumplimiento se debe a un evento de fuerza mayor. Un &ldquo;caso de fuerza mayor&rdquo; significa un incidente material inevitable fuera del control de una parte, como incendios, actos fortuitos o de un enemigo p&uacute;blico, huelgas de trabajadores, cierres patronales u otros conflictos industriales, actos de terrorismo, acciones gubernamentales, acciones de servicio de utilidades, tormentas, huracanes, inundaciones, explosiones, escasez o indisponibilidad de establecimientos de transmisi&oacute;n y otros eventos que no pueden ser prevenidos ni superados por la normal debida diligencia. Un caso de fuerza mayor no incluye la incapacidad de pagar cualquier monto debido en virtud de este Convenio.</p>

<p><strong><u>LIMITACI&Oacute;N DE RESPONSABILIDAD.</u></strong> EN LA MEDIDA EN QUE LO PERMITAN LAS LEYES APLICABLES DE ILLINOIS, NI USTED NI PALMCO TENDR&Aacute;N LA RESPONSABILIDAD ANTE EL OTRO POR DA&Ntilde;OS Y PERJUICIOS PUNITIVOS, EJEMPLARES, EMERGENTES, INDIRECTOS O ACCESORIOS QUE SURJAN DEL INCUMPLIMIENTO DE ESTE CONVENIO, INCLUYENDO, ENTRE OTROS, LUCRO CESANTE O P&Eacute;RDIDA DE INGRESOS.</p>

<p><strong><u>ARBITRAJE Y RENUNCIA A JUICIO CON JURADO</u></strong><strong>. EN LA MEDIDA EN QUE LO PERMITAN LAS LEYES APLICABLES DE ILLINOIS, EN CASO DE QUE HAYA UN PROBLEMA, RECLAMACI&Oacute;N O DISPUTA RELACIONADOS CON ESTE CONTRATO POR EL SERVICIO DE SUMINISTRO DE ENERG&Iacute;A EL&Eacute;CTRICA QUE DEBA RESOLVERSE Y NO PODEMOS HACERLO DE MANERA INFORMAL, DEBE RESOLVERSE A TRAV&Eacute;S DE UN ARBITRAJE VINCULANTE Y FINAL Y MUTUAMENTE RENUNCIAMOS AL DERECHO A RESOLVERLO EN UNA CORTE JUDICIAL. ESTO SE APLICA INDEPENDIENTEMENTE DE SI EL PROBLEMA, RECLAMACI&Oacute;N O DISPUTA INVOLUCRA ACTO IL&Iacute;CITO CIVIL, FRAUDE, VIOLACI&Oacute;N DE CONTRATO, DECLARACI&Oacute;N FALSA, RESPONSABILIDAD POR PRODUCTOS, NEGLIGENCIA Y VIOLACI&Oacute;N DE ALG&Uacute;N ESTATUTO O CUALQUIER OTRA TEOR&Iacute;A LEGAL. SE INCLUYEN TODOS LOS PROBLEMAS, RECLAMACIONES Y DISPUTAS QUE SURJAN O SE RELACIONEN CON CUALQUIER ASPECTO DE SU PARTICIPACI&Oacute;N EN ESTE CONTRATO POR SERVICIO DE SUMINISTRO DE ELECTRICIDAD, YA SEA QUE SURJAN DURANTE SU PARTICIPACI&Oacute;N EN ESTE CONTRATO POR SERVICIO DE SUMINISTRO DE ELECTRICIDAD O DESPU&Eacute;S. TODOS LOS ARBITRAJES DEBEN SER CONDUCIDOS DE MANERA INDIVIDUAL (NO COLECTIVA) Y EL &Aacute;RBITRO NO TENDR&Aacute; AUTORIDAD PARA BUSCAR COMPENSACI&Oacute;N PARA UNA COMUNIDAD MAYOR. USTED RECONOCE Y ACEPTA QUE ESTO LE PROH&Iacute;BE ESPEC&Iacute;FICAMENTE COMENZAR PROCEDIMIENTOS DE ARBITRAJE COMO REPRESENTANTE DE OTROS O UNIRSE A CUALQUIER PROCEDIMIENTO DE ARBITRAJE QUE OTRA PERSONA LE PRESENTE. INDEPENDIENTEMENTE DE LO ANTERIOR, ESTE P&Aacute;RRAFO NO PROH&Iacute;BE QUE USTED PRESENTE UNA QUEJA RELATIVA A SU SERVICIO DE SUMINISTRO DE ELECTRICIDAD ANTE PALMCO, EN CUMPLIMIENTO CON LAS LEYES DE SU ESTADO QUE RIGEN LA GENERACI&Oacute;N DEL SUMINISTRO DE ELECTRICIDAD AL POR MENOR, CON JURISDICCI&Oacute;N SOBRE LOS PROVEEDORES DE GENERACI&Oacute;N DE ELECTRICIDAD AL POR MENOR.</strong></p>

<p><strong><u>EXCLUSI&Oacute;N DE GARANT&Iacute;A.</u></strong> PALMCO NO EXPRESA GARANT&Iacute;AS, AFIRMACIONES DE HECHO O PROMESAS, IMPL&Iacute;CITAS O EXPL&Iacute;CITAS, QUE SE EXTIENDAN M&Aacute;S ALL&Aacute; DE LAS CONVENIDAS EN ESTE CONTRATO, INCLUYENDO, ENTRE OTRAS, GARANT&Iacute;AS DE COMERCIABILIDAD O IDONEIDAD PARA UN FIN PARTICULAR.</p>

<p><strong><u>LEGISLACI&Oacute;N APLICABLE, CAMBIOS REGULATORIOS.</u></strong> Este Convenio queda sujeto a todas las leyes federales, estatales y legales vigentes y a todas las normas, reglas y reglamentos de los organismos gubernamentales que tengan jurisdicci&oacute;n sobre el asunto de este Convenio, incluyendo, sin limitarse, a la Comisi&oacute;n de Comercio de Illinois. ESTE CONVENIO SE REGIR&Aacute; E INTERPRETAR&Aacute; DE CONFORMIDAD CON LAS LEYES DEL ESTADO DE ILLINOIS, SIN CONSIDERAR LOS PRINCIPIOS RELACIONADOS CON EL CONFLICTO DE LEYES. Si en alguna fecha futura hay alg&uacute;n cambio en alguna ley, regla, regulaci&oacute;n, impuesto o estructura regulatoria (&ldquo;Cambio Regulatorio&rdquo;) que influya en cualquier t&eacute;rmino, condici&oacute;n o previsi&oacute;n de este acuerdo, incluyendo, sin limitarse, al precio, PALMco tendr&aacute; el derecho de cancelar o modificar este Convenio para reflejar dicho cambio proporcion&aacute;ndole a usted un aviso por escrito con anticipaci&oacute;n.</p>

<p><strong><u>COMUNICACI&Oacute;N ELECTR&Oacute;NICA.</u></strong> A menos que la ley exija lo contrario, si le proporciona a PALMco su direcci&oacute;n de correo electr&oacute;nico, acepta que PALMco pueda transmitirle todos los avisos y otros comunicados, incluyendo aquellos requeridos en este Acuerdo, de manera electr&oacute;nica a la direcci&oacute;n de correo electr&oacute;nica que haya proporcionado. Usted ser&aacute; responsable de notificar a PALMco de cualquier cambio en direcci&oacute;n de correo electr&oacute;nico y/o cualquier retiro de su aceptaci&oacute;n de comunicaciones electr&oacute;nicas. Los avisos transmitidos a usted mediante correo electr&oacute;nico se considerar&aacute;n recibidos si le son transmitidos a la direcci&oacute;n de correo electr&oacute;nico que usted le proporcion&oacute; a PALMco.</p>

<p><strong><u>DISPOSICIONES VARIAS.</u></strong> Este Contrato contiene la totalidad del acuerdo entre usted y PALMco con respecto al asunto contractual y no existen otros convenios, promesas o compromisos que los dispuestos expl&iacute;citamente en este Contrato. Este Contrato solo puede ser modificado mediante un escrito firmado por usted y por PALMco. Usted no puede ceder este Convenio sin el previo consentimiento por escrito de PALMco. PALMco puede vender, transferir, prometer o ceder las cuentas, ingresos o ganancias del presente, en relaci&oacute;n con cualquier acuerdo financiero y puede ceder este Convenio a otra entidad de conformidad con los reglamentos y procedimientos de la Comisi&oacute;n, si los hubiera, que rigen dichas transacciones. Este Contrato tendr&aacute; efecto y ser&aacute; vinculante para los sucesores y cesionarios de las partes.</p>

<p><strong><u>N&Uacute;MEROS DE TEL&Eacute;FONO DE EMERGENCIA. EN CASO DE UNA EMERGENCIA RELACIONADA CON LA ELECTRICIDAD, COMO UN APAG&Oacute;N, DEBER&Aacute; COMUNICARSE INMEDIATAMENTE CON SU SERVICIO DE UTILIDADES LOCAL.</u></strong></p>

<p>&nbsp;</p>

<p><strong>21.12.16</strong></p>',
                'created_at' => '2017-03-05 00:04:10',
                'updated_at' => '2017-03-05 00:04:36',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'state_id' => 3,
                'template_type' => 'Terms of Service',
                'commodity_id' => 3,
                'locale_code' => 'es',
                'source_file_name' => 'MA T&Cs V.S.16-11.08.docx',
                'version' => 'V.S.16-11.08',
                'is_active' => false,
                'template_html' => '<p align="center"><br clear="ALL" />
<strong><u>CARTA DE AUTORIZACI&Oacute;N Y </u></strong></p>

<p align="center"><strong><u>T&Eacute;RMINOS DE SERVICIO PARA MASSACHUSETTS</u></strong></p>

<p>&nbsp;</p>

<p><strong><u>INTRODUCCI&Oacute;N: </u></strong>Este es un contrato, junto con su Etiqueta de Divulgaci&oacute;n, Carta de Confirmaci&oacute;n y cualquiera y todos los Avisos de Renovaci&oacute;n (si corresponde) (colectivamente, el &quot;Contrato&quot;), entre PALMco Power MA, LLC (&ldquo;PALMco Power&rdquo; o &ldquo;PALMco&rdquo;) y usted para el servicio de suministro de generaci&oacute;n de electricidad en cada direcci&oacute;n de cuenta indicada en su Carta de Confirmaci&oacute;n (o detallada en un ap&eacute;ndice). Usted acepta autorizar un cambio de su servicio de suministro de electricidad a PALMco y comprar toda la electricidad a PALMco Power, para que le suministren el servicio a cada cuenta indicada en su Carta de Confirmaci&oacute;n (o enumerada en alg&uacute;n ap&eacute;ndice) (&quot;Cantidad de la Compra&quot;) a un precio seg&uacute;n se describe en este Contrato. PALMco Power posee una licencia otorgada por el Departamento de Utilidades P&uacute;blicas de Massachusetts para proporcionar el servicio de suministro de generaci&oacute;n de electricidad (CS-092).</p>

<p>Usted entiende y acepta lo siguiente: (a) usted es el cliente nombrado en cada una de las cuentas indicadas en su carta de confirmaci&oacute;n (o en cualquier anexo) o usted es el c&oacute;nyuge del cliente nombrado en dichas cuentas y usted es mayor 18 a&ntilde;os de edad y est&aacute; autorizado a tomar decisiones concernientes a dichas cuentas; (b) todos los representantes de ventas de PALMco con quienes usted ha hablado representan a PALMco y no pertenecen a su empresa de servicio de utilidad ni est&aacute;n afiliados a ella; (c) no tiene que pagar nada por cambiarse a PALMco como su proveedor de electricidad ni por inscribirse en el Programa &ldquo;Power Choice&rdquo; de PALMco; (d) su servicio de utilidad seguir&aacute; suministr&aacute;ndole electricidad y le enviar&aacute; a usted una &uacute;nica factura por su servicio de electricidad; (e) no se garantizan ahorros en virtud de este Contrato; (f) solo se puede designar una empresa de generaci&oacute;n, distribuidor o proveedor como su proveedor de electricidad competitivo; (g) su actual empresa principal de servicio de utilidad/de generaci&oacute;n, distribuidor o proveedor puede cobrarle un recargo por cambiar a PALMco y (h) PALMco no impone cargos de cancelaci&oacute;n por volver a cambiar al Servicio regular u otro proveedor.</p>

<p><strong><u>PRECIOS.</u></strong></p>

<p><strong><u>Precio introductorio de la electricidad.</u></strong> Si recibe servicio de suministro el&eacute;ctrico (&ldquo;servicio de electricidad&rdquo;) de PALMco, pagar&aacute; un precio introductorio determinado en su Carta de Confirmaci&oacute;n y/o Etiqueta de Divulgaci&oacute;n, por el periodo indicado en su Carta de confirmaci&oacute;n y/o Etiqueta de Divulgaci&oacute;n, y en adelante, su precio por el servicio de suministro de gas natural y/o electricidad continuar&aacute; autom&aacute;ticamente de un mes a otro con un precio variable tal y como se describe abajo, a menos que usted o PALMco de por terminado este Acuerdo.</p>

<p><strong><u>Precio variable de la electricidad.</u></strong> El precio que usted paga puede variar de un mes a otro tal y como lo determine PALMco a su sola discreci&oacute;n sobre la base del precio mensual marginal local para la zona, determinado en tiempo real o en el mercado diario, as&iacute; como de las funciones de suministro y representaci&oacute;n que PALMco desempe&ntilde;e para usted, p&eacute;rdidas de capacidad de l&iacute;nea, costos de cumplimiento y ciertos costos de trasmisi&oacute;n, m&aacute;s los costos de capacidad, auxiliares y administrativos en que PALMco incurra, y tambi&eacute;n sobre la base de las dem&aacute;s condiciones prevalecientes en el mercado, adem&aacute;s de los costos, gastos y ganancias de PALMco. Despu&eacute;s de su precio introductorio por electricidad, no hay l&iacute;mite en la variaci&oacute;n de precios de su Servicio de Electricidad de un ciclo de facturaci&oacute;n al siguiente, y su precio variable puede ser mayor o menor que el de la tarifa de oferta est&aacute;ndar de su empresa de utilidad en cualquier mes. PALMco no garantiza ahorros en cualquier mes ni por la duraci&oacute;n de este Acuerdo. Los precios actuales e hist&oacute;ricos de PALMco no son indicativos de los precios en el futuro.</p>

<p><strong><u>Servicio de electricidad</u></strong><strong>:</strong> Usted tiene la responsabilidad de pagar y reembolsar a PALMco todos los impuestos que correspondan y los dem&aacute;s aranceles, grav&aacute;menes y cargos del gobierno, cualquiera sea su denominaci&oacute;n, que est&eacute;n relacionados con el servicio prestado en virtud de este Contrato. Esto podr&iacute;a incluir, a t&iacute;tulo enunciativo pero no limitativo, los impuestos de servicios de utilidad, sobre ingresos brutos y sobre la venta y uso que se cobran a PALMco y/o a usted por las autoridades federales, estatales y/o locales que PALMco traspasa a usted. Si usted est&aacute; exento de impuestos, debe presentar el certificado de exenci&oacute;n a PALMco antes del comienzo del servicio.</p>

<p><strong><u>DERECHO A RESCINDIR.</u></strong> Usted puede cancelar su Servicio de Electricidad establecido en este Contrato, sin cargo ni sanci&oacute;n, en cualquier momento antes de la medianoche del tercer d&iacute;a h&aacute;bil despu&eacute;s de recibir una copia de estos T&eacute;rminos de Servicio, una etiqueta de divulgaci&oacute;n y una Carta de Confirmaci&oacute;n de PALMco confirmando su contrato para recibir el Servicio de Electricidad de PALMco, llamando a PALMco al 877-726-5862, o por correo electr&oacute;nico a customerservice@palmcoenergy.com.</p>

<p><strong><u>INFORMACI&Oacute;N DEL HISTORIAL DE CONSUMO.</u></strong>&nbsp; Como una condici&oacute;n para brindarle su servicio conforme a este Contrato, usted autoriza a PALMco a obtener el historial de su consumo y otra informaci&oacute;n sobre usted (&ldquo;Informaci&oacute;n del cliente&rdquo;) de su empresa de servicio de utilidad, a fin de que PALMco pueda comenzar y continuar brind&aacute;ndole el servicio. PALMco se reserva el derecho de negarse a brindarle servicio si determina que dicha Informaci&oacute;n del cliente no es satisfactoria.</p>

<p><strong><u>DURACI&Oacute;N DEL CONTRATO, RENOVACI&Oacute;N Y ENMIENDA.</u></strong> Usted acepta pagar el Servicio de Electricidad a PALMco Power para la(s) direcci&oacute;n(es) indicada(s) en su Carta de Confirmaci&oacute;n (o en cualquier anexo) a partir de la fecha establecida por su empresa de servicio de utilidad (&ldquo;Fecha de Inicio&rdquo;), por un per&iacute;odo inicial de un mes a partir de la Fecha de Inicio. Este acuerdo seguir&aacute; en plena vigencia y efecto en forma mensual a partir de entonces a menos que alguna de las partes decida no renovarlo. PALMco no impondr&aacute; recargo por cancelaci&oacute;n si usted decide cancelar este Contrato; siempre y cuando, no obstante, usted siga teniendo la obligaci&oacute;n de pagar a PALMco todo el Servicio de Electricidad que se le vendi&oacute; a usted antes de dicha cancelaci&oacute;n. PALMco tambi&eacute;n le notificar&aacute; por escrito, con al menos 30 d&iacute;as de antelaci&oacute;n, sobre cualquier cambio importante a este Contrato que no sea beneficioso para usted.</p>

<p><strong><u>FACTURACI&Oacute;N/TERMINACI&Oacute;N DEL SERVICIO.</u></strong> Usted recibir&aacute; una factura de su empresa de servicio de utilidad y pagar&aacute; a PALMco por el Servicio de Electricidad sobre la base de las lecturas del contador y de la informaci&oacute;n de consumo que PALMco reciba de su empresa de servicio de utilidad (en cada caso, &ldquo;Cantidad a facturar&rdquo;).&nbsp; Usted recibir&aacute; una &uacute;nica factura mensual de su empresa de servicio de utilidad que contiene los cargos tanto de PALMco como de su empresa de servicio de utilidad. Su factura se debe pagar al momento de su recepci&oacute;n. Su empresa de servicio de utilidad podr&iacute;a (a) calcular su uso del Servicio de Electricidad; (b) ofrecerle convenios de pago diferidos para cubrir saldos pendientes y (c) ofrecer un programa de notificaci&oacute;n de terceros. Para obtener informaci&oacute;n adicional sobre estos programas, deber&aacute; comunicarse con su empresa de servicio de utilidad. Si usted es un cliente residencial y PALMco no recibe el pago de su factura en un plazo de 48 d&iacute;as a partir del recibo de la misma, PALMco podr&iacute;a dar por terminado este Contrato y su Servicio de Electricidad, seg&uacute;n sea el caso; en el entendido de que usted seguir&aacute; teniendo la obligaci&oacute;n de pagar todo el Servicio de Electricidad que se le vendi&oacute; antes de dicha terminaci&oacute;n. PALMco le enviar&aacute; uno o m&aacute;s avisos antes de dar por terminado su servicio por incumplimiento de pago de su factura, incluyendo un aviso final de terminaci&oacute;n indicando la fecha en que su Servicio de Electricidad se dar&aacute; por terminado. Si usted no es un cliente residencial y PALMco no recibe el pago de su factura en un plazo de 15 d&iacute;as a partir del recibo de la misma, PALMco podr&iacute;a dar por terminado este Contrato y el suministro de su Servicio de Electricidad, seg&uacute;n sea el caso; en el entendido de que usted seguir&aacute; teniendo la obligaci&oacute;n de pagar a PALMco todo el Servicio de Electricidad que se le vendi&oacute; antes de dicha terminaci&oacute;n.</p>

<p><strong><u>RECARGOS POR MORA.</u></strong> Si usted es un cliente no residencial, estar&aacute; obligado a pagar un recargo por mora sobre cualquier monto de facturas sin pagar (incluyendo los montos adeudados y los recargos por mora correspondientes) que PALMco no reciba en un plazo de 15 d&iacute;as despu&eacute;s de recibir su factura. Dicho recargo por mora se calcular&aacute; a una tasa de inter&eacute;s anual equivalente a la tasa de los bonos de dos a&ntilde;os del Tesoro de los Estados Unidos durante los 12 meses anteriores al 31 de diciembre del a&ntilde;o en curso, m&aacute;s un 10%. Tambi&eacute;n deber&aacute; pagar los honorarios de abogados y dem&aacute;s cargos razonables incurridos por PALMco para procurar el cobro de sus pagos.</p>

<p><strong><u>SERVICIO AL CLIENTE Y QUEJAS.</u></strong> Si tiene preguntas o quejas sobre el servicio al amparo de este Contrato, puede comunicarse con PALMco Power al tel&eacute;fono 1-877-726-5862 (l&iacute;nea gratuita) entre las 8:00 a.m. y las 5:00 p.m., hora est&aacute;ndar o de verano del Este, o enviar un correo electr&oacute;nico a CustomerService@palmcoEnergy.com. Si su queja no se resuelve despu&eacute;s de comunicarse con PALMco, puede dirigirse al Departamento de Servicios de Utilidad de Massachusetts (&quot;DPU&quot;) para obtener ayuda por el tel&eacute;fono 1-877-886-5066 o visitando www.mass.gov/dpu.</p>

<p><strong><u>SERVICIO REGULAR Y ELEGIBILIDAD PARA TARIFA DE BAJOS INGRESOS.</u></strong>&nbsp; Si usted est&aacute; actualmente recibiendo el servicio de suministro de electricidad de su empresa de servicio de utilidad, usted est&aacute; recibiendo un Servicio regular. Si luego de comprar a PALMco el Servicio de Electricidad, usted desea volver a cambiarse al Servicio regular, puede hacerlo comunic&aacute;ndose con su empresa de servicio de utilidad. PALMco no aplicar&aacute; sobrecargo de cancelaci&oacute;n si usted desea cambiarse al Servicio regular. El servicio de generaci&oacute;n b&aacute;sica/por defecto est&aacute; igualmente a su disposici&oacute;n.&nbsp; Si necesita informaci&oacute;n sobre el servicio de generaci&oacute;n b&aacute;sica/por defecto, deber&aacute; comunicarse con su empresa de servicio de utilidad. Algunos clientes residenciales podr&iacute;an reunir los requisitos para tarifas con descuento para la electricidad seg&uacute;n sus ingresos. Puede comunicarse con su empresa de servicio de utilidad para conseguir una lista de los requisitos de elegibilidad para la tarifa de bajos ingresos y una solicitud de inscripci&oacute;n al programa.</p>

<p><strong><u>LEGISLACI&Oacute;N APLICABLE, ETC.</u></strong> Este Contrato queda sujeto a todas las leyes federales, estatales y locales vigentes y a todas las normas, reglas y reglamentos de los organismos gubernamentales que tengan jurisdicci&oacute;n sobre el asunto de este Contrato, incluyendo la DPU. Los servicios prestados por su empresa de servicio de utilidad est&aacute;n sujetos a todas las leyes, normas, reglas y reglamentos federales y estatales vigentes. <strong>ESTE CONTRATO SE REGIR&Aacute; E INTERPRETAR&Aacute; DE CONFORMIDAD CON LAS LEYES DE MASSACHUSETTS, INDEPENDIENTEMENTE DE LOS PRINCIPIOS RELACIONADOS CON EL CONFLICTO DE LEYES.</strong></p>

<p><strong><u>FUERZA MAYOR.</u></strong> Ni PALMco ni usted ser&aacute;n responsables por el incumplimiento de este Contrato si dicho incumplimiento se debe a un evento de fuerza mayor. Un &ldquo;evento de fuerza mayor&rdquo; se refiere a una ocurrencia pertinente, inevitable fuera del control de la parte, como incendios, actos fortuitos o de un enemigo p&uacute;blico, huelgas de trabajadores, cierres patronales u otros conflictos industriales, actos de terrorismo, acciones gubernamentales, acciones de empresas de servicio de utilidad, tormentas, huracanes, inundaciones, explosiones, escasez o falta de disponibilidad de establecimientos de transmisi&oacute;n y otros eventos que no pueden ser prevenidos ni superados por la normal diligencia debida. Un caso de fuerza mayor no incluye la incapacidad de pagar cualquier monto adeudado conforme a este Contrato.</p>

<p><strong><u>LIMITACI&Oacute;N DE RESPONSABILIDAD.</u></strong><strong> HASTA DONDE LO PERMITAN LAS LEYES APLICABLES DE MASSACHUSETTS, NI USTED NI PALMCO SER&Aacute;N RESPONSABLES ANTE EL OTRO POR DA&Ntilde;OS Y PERJUICIOS PUNITIVOS, EJEMPLARES, EMERGENTES, INDIRECTOS O ACCESORIOS QUE SURJAN DEL INCUMPLIMIENTO DE ESTE CONTRATO, INCLUYENDO, ENTRE OTROS, LUCRO CESANTE O P&Eacute;RDIDA DE INGRESOS.</strong></p>

<p><strong><u>EXCLUSI&Oacute;N DE GARANT&Iacute;A.</u></strong><strong> PALMCO NO EXPRESA GARANT&Iacute;AS, AFIRMACIONES DE HECHO O PROMESAS, IMPL&Iacute;CITAS O EXPL&Iacute;CITAS, QUE SE EXTIENDAN M&Aacute;S ALL&Aacute; DE LAS CONVENIDAS EN ESTE CONTRATO, INCLUYENDO, ENTRE OTRAS, GARANT&Iacute;AS DE COMERCIABILIDAD O IDONEIDAD PARA UN FIN ESPEC&Iacute;FICO.</strong></p>

<p><strong><u>ARBITRAJE Y RENUNCIA A JUICIO CON JURADO.</u></strong><strong> HASTA DONDE LO PERMITAN LAS LEYES APLICABLES DE MASSACHUSETTS, EN CASO DE QUE HAYA UN PROBLEMA, RECLAMACI&Oacute;N O DISPUTA RELACIONADOS CON ESTE CONTRATO POR EL SERVICIO DE SUMINISTRO DE ENERG&Iacute;A EL&Eacute;CTRICA QUE DEBA RESOLVERSE Y NO PODEMOS HACERLO DE MANERA INFORMAL, DEBE RESOLVERSE A TRAV&Eacute;S DE UN ARBITRAJE VINCULANTE Y FINAL Y MUTUAMENTE RENUNCIAMOS AL DERECHO A RESOLVERLO EN UNA CORTE JUDICIAL. ESTO SE APLICA INDEPENDIENTEMENTE DE SI EL PROBLEMA, RECLAMACI&Oacute;N O DISPUTA INVOLUCRA ACTO IL&Iacute;CITO CIVIL, FRAUDE, VIOLACI&Oacute;N DE CONTRATO, DECLARACI&Oacute;N FALSA, RESPONSABILIDAD POR PRODUCTOS, NEGLIGENCIA Y VIOLACI&Oacute;N DE ALG&Uacute;N ESTATUTO O CUALQUIER OTRA TEOR&Iacute;A LEGAL. SE INCLUYEN TODOS LOS PROBLEMAS, RECLAMACIONES Y DISPUTAS QUE SURJAN O SE RELACIONEN CON CUALQUIER ASPECTO DE SU PARTICIPACI&Oacute;N EN ESTE CONTRATO POR SERVICIO DE SUMINISTRO DE ELECTRICIDAD, YA SEA QUE SURJAN DURANTE SU PARTICIPACI&Oacute;N EN ESTE CONTRATO POR SERVICIO DE SUMINISTRO DE ELECTRICIDAD O TRAS ELLA. TODOS LOS ARBITRAJES DEBEN SER CONDUCIDOS DE MANERA INDIVIDUAL (NO COLECTIVA) Y EL &Aacute;RBITRO NO TENDR&Aacute; AUTORIDAD PARA BUSCAR COMPENSACI&Oacute;N PARA UNA COMUNIDAD MAYOR. USTED RECONOCE Y ACEPTA QUE ESTO LE PROH&Iacute;BE ESPEC&Iacute;FICAMENTE COMENZAR PROCEDIMIENTOS DE ARBITRAJE COMO REPRESENTANTE DE OTROS O UNIRSE A CUALQUIER PROCEDIMIENTO DE ARBITRAJE QUE OTRA PERSONA LE PRESENTE. INDEPENDIENTEMENTE DE LO ANTERIOR, ESTE P&Aacute;RRAFO NO PROH&Iacute;BE QUE USTED PRESENTE UNA QUEJA RELATIVA A SU SERVICIO DE SUMINISTRO DE ELECTRICIDAD ANTE PALMCO, EN CUMPLIMIENTO CON LAS LEYES DE SU ESTADO QUE RIGEN LA GENERACI&Oacute;N DEL SUMINISTRO DE ELECTRICIDAD AL POR MENOR, CON JURISDICCI&Oacute;N SOBRE LOS PROVEEDORES DE GENERACI&Oacute;N DE ELECTRICIDAD AL POR MENOR.</strong></p>

<p><strong><u>DISPOSICIONES VARIAS.</u></strong> Este Contrato contiene la totalidad del acuerdo entre usted y PALMco con respecto al asunto contractual y no existen otros convenios, promesas o compromisos que los dispuestos expl&iacute;citamente en este Contrato. Con excepci&oacute;n de lo dispuesto en este documento, este Contrato, solo puede ser modificado mediante un escrito firmado por usted y por PALMco. Usted no puede ceder este Contrato sin el previo consentimiento por escrito de PALMco.&nbsp; PALMco Power pueden vender, transferir, prometer o ceder las cuentas, ingresos o ganancias del presente, en relaci&oacute;n con cualquier acuerdo financiero y pueden ceder este Contrato a otro proveedor de energ&iacute;a, epresa de servicios de energ&iacute;a u otra entidad de conformidad con los reglamentos y procedimientos de la DPU, si existieran, que rigen dichas transacciones. Este Contrato tendr&aacute; efecto y ser&aacute; vinculante para los sucesores y cesionarios de las partes.</p>

<p><strong>EN CASO DE UNA EMERGENCIA, UN CORTE DE ELECTRICIDAD O DE UNA INTERRUPCI&Oacute;N DEL SERVICIO, DEBER&Aacute; COMUNICARSE INMEDIATAMENTE CON SU EMPRESA DE SERVICIOS DE UTILIDAD LOCAL.</strong></p>

<p align="right"><strong>V.S.16-11.08</strong></p>

<p>&nbsp;</p>',
                'created_at' => '2017-03-06 15:08:58',
                'updated_at' => '2017-03-06 15:08:58',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'state_id' => 4,
                'template_type' => 'Terms of Service',
                'commodity_id' => 3,
                'locale_code' => 'es',
                'source_file_name' => 'MD T&C V.S.16-09.23.docx',
                'version' => 'V.16-09.23',
                'is_active' => false,
                'template_html' => '<p style="text-align: center;"><strong><u>T&Eacute;RMINOS Y CONDICIONES PARA MARYLAND</u></strong></p>

<p><strong><u>INTRODUCCI&Oacute;N: </u></strong>Este es un contrato, junto con su Resumen de Contrato, Carta de Confirmaci&oacute;n y cualquiera y todos los Avisos de Renovaci&oacute;n (si corresponde) (colectivamente, el &quot;Contrato&quot;), entre PALMco Energy MD, LLC (&ldquo;PALMco Energy&rdquo; o &ldquo;PALMco&rdquo;) y usted para el servicio de suministro de gas natural y/o entre PALMco Power MD, LLC (&ldquo;PALMco Power&rdquo; o &ldquo;PALMco&rdquo;) y usted para el servicio de suministro de generaci&oacute;n de electricidad en cada direcci&oacute;n de cuenta indicada en su Carta de Confirmaci&oacute;n (o detallada en un ap&eacute;ndice). Usted acepta autorizar un cambio de su servicio de suministro de gas natural y/o de electricidad a PALMco y comprar todo el gas natural a PALMco Energy y/o la electricidad a PALMco Power, para que le suministren el servicio a cada cuenta indicada en su Carta de Confirmaci&oacute;n (o enumerada en alg&uacute;n ap&eacute;ndice) (&quot;Cantidad de la Compra&quot;) a un precio seg&uacute;n se describe en este Contrato. PALMco Energy posee una licencia otorgada por la Comisi&oacute;n de Servicios de Utilidad de Maryland para proporcionar servicios de suministro de gas (IR-1803). PALMco Power posee una licencia otorgada por la Comisi&oacute;n de Servicios de Utilidad de Maryland para proporcionar servicios de suministro de electricidad (IR-1804).</p>

<p><strong><u>PRECIOS.</u></strong></p>

<p><strong>Precio del gas natural:</strong> Si usted recibe el servicio de suministro de gas natural de PALMco Energy para los primeros dos ciclos de facturaci&oacute;n bajo este contrato, pagar&aacute; un precio inicial por termia, seg&uacute;n se establece en su Resumen del Contrato y/o Carta de Confirmaci&oacute;n. A partir del tercer ciclo de facturaci&oacute;n en adelante, usted pagar&aacute; un precio por el servicio de suministro que variar&aacute; de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, de acuerdo al precio correspondiente de cierre mensual del NYMEX para gas natural, los costos de transporte interestatal correspondientes, las funciones de suministro y gesti&oacute;n que PALMco desempe&ntilde;e para usted y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco.&nbsp;</p>

<p><strong>Precio de la electricidad:</strong> Si usted recibe el servicio de suministro de electricidad de PALMco Power, para los primeros dos ciclos de facturaci&oacute;n bajo este contrato, pagar&aacute; un precio inicial por kWh, seg&uacute;n se establece en su Resumen del Contrato y/o Carta de Confirmaci&oacute;n. A partir del tercer ciclo de facturaci&oacute;n en adelante, usted pagar&aacute; un precio que variar&aacute; de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, basado en el precio marginal local de la zona (&quot;LMP&quot;, por las siglas en ingl&eacute;s) determinado en tiempo real o por el mercado diario, las funciones de suministro y representaci&oacute;n que PALMco desempe&ntilde;e para usted, la p&eacute;rdida de capacidad de l&iacute;nea, los costos de cumplimiento, ciertos costos de trasmisi&oacute;n, de capacidad, auxiliares y administrativos incurridos por PALMco y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco.</p>

<p>&nbsp;</p>

<p>Precio del suministro de gas natural y electricidad: Su servicio de suministro de gas natural y/o electricidad no incluye los impuestos y cargos aplicables, por los cuales usted es responsable. Su servicio de suministro de gas natural y/o electricidad no incluye los cargos por servicio de utilidad, por los cuales usted es responsable. El precio de su servicio de suministro de gas natural y/o electricidad puede variar de un mes a otro y puede ser mayor o menor al de su servicio de utilidad en cualquier mes, y no se garantizan ahorros sobre las tarifas de su servicio de utilidad para un mes ni por el t&eacute;rmino completo de este contrato.&nbsp; Puede acceder a la tarifa estimada para el siguiente periodo de factura al menos 12 d&iacute;as antes del cierre de si [periodo de facturaci&oacute;n actual visitando el sitio web de PALMco en https://www.palmcoenergy.com/maryland-rates/ <strong>No hay l&iacute;mite en la variaci&oacute;n de precios de su servicio de suministro de gas y/o electricidad de un ciclo de facturaci&oacute;n al siguiente.</strong></p>

<p><strong><u>T&Eacute;RMINOS DEL CONTRATO.</u></strong> Este acuerdo se mantendr&aacute; en plena vigencia y efecto por un periodo inicial de un mes a partir de la fecha de inicio del servicio que PALMco le proporciona a usted.&nbsp; Este acuerdo seguir&aacute; en plena vigencia y efecto en forma mensual a partir de entonces a menos que alguna de las partes decida no renovarlo.</p>

<p><strong><u>TERMINACI&Oacute;N.</u></strong> PALMco puede dar por terminado este contrato por cualquier motivo o sin &eacute;l proporcion&aacute;ndole un aviso por escrito con 30 d&iacute;as de antelaci&oacute;n a la fecha de entrada en vigor de dicha terminaci&oacute;n. Usted puede dar por terminado este Contrato en cualquier momento comunic&aacute;ndose con PALMco por tel&eacute;fono o por escrito. Tras la terminaci&oacute;n, usted ser&aacute; regresado al servicio est&aacute;ndar de su empresa de utilidad o puede elegir a otro proveedor. Usted permanecer&aacute; obligado a pagar a PALMco por todo el servicio de suministro de gas natural o electricidad prestado antes de la fecha de entrada en vigor de dicha terminaci&oacute;n.</p>

<p><strong><u>PAGO DE FACTURAS</u></strong><strong>. </strong>Recibir&aacute; una factura &uacute;nica de su servicio de utilidad cada mes en la que se incluir&aacute;n los cargos por servicio de suministro de gas natural y/o electricidad de PALMco y por los servicios provistos por su empresa de utilidad. Usted har&aacute; un pago por todos estos servicios directamente a su empresa de utilidad. Usted recibir&aacute; una factura de gas natural y/o electricidad y pagar&aacute; a PALMco en base a la informaci&oacute;n de consumo que PALMco reciba de su(s) empresa(s) de utilidad (&ldquo;Cantidad a facturar&rdquo;). El servicio de suministro de gas y el&eacute;ctrico debe pagarlo al recibir la factura. Si no se recibe el pago de forma oportuna, PALMco puede, despu&eacute;s de 20 d&iacute;as del env&iacute;o de un aviso por escrito, suspender el servicio y terminar este Contrato, de acuerdo con los procedimientos aprobados por la Comisi&oacute;n de Servicios de Utilidad de Maryland (&quot;Comisi&oacute;n&rdquo;), a condici&oacute;n de que, no obstante, usted siga teniendo la obligaci&oacute;n de pagar todo el gas y/o la electricidad que se le vendi&oacute; a usted antes de dicha cancelaci&oacute;n. Usted deber&aacute; pagar una recargo por mora sobre cualquier monto impago (incluyendo los montos adeudados y las multas por mora de los mismos) que adeude y que PALMco no reciba en un plazo de 20 d&iacute;as de la fecha de la factura a una tasa de 1.5% por mes o el m&aacute;ximo monto permitido por ley, el que sea m&aacute;s bajo. Tambi&eacute;n deber&aacute; pagar a PALMco los honorarios de abogados y dem&aacute;s gastos incurridos por ella para procurar el cobro de sus pagos.</p>

<p><strong><u>POL&Iacute;TICA DE PRIVACIDAD DE LA INFORMACI&Oacute;N DEL CLIENTE Y DIVULGACI&Oacute;N.</u></strong> Usted autoriza a PALMco a obtener de su empresa de utilidad informaci&oacute;n determinada necesaria para el iniciar o continuar proporcion&aacute;ndole servicio de suministro de gas natural o electricidad. Esto puede incluir, sin limitarse, informaci&oacute;n como el nombre de la cuenta de su servicio de utilidad, la direcci&oacute;n de facturaci&oacute;n, la direcci&oacute;n de servicio, el n&uacute;mero de cuenta del servicio de utilidad, el ciclo de facturaci&oacute;n, la clase de la tarifa del servicio de utilidad, consumo hist&oacute;rico y futuro o datos de consumo, historial de facturaci&oacute;n y pagos, informaci&oacute;n de cr&eacute;dito y estado de asistencia p&uacute;blica (denominados conjuntamente &ldquo;Informaci&oacute;n del cliente&rdquo;). PALMco se reserva el derecho de negarse a brindarle servicio de suministro de gas o electricidad bajo este contrato si PALMco es incapaz de obtener la Informaci&oacute;n de cliente o si obtiene Informaci&oacute;n de cliente que considera insatisfactoria.&nbsp; Usted autoriza a PALMco a divulgar informaci&oacute;n del cliente a terceros que necesitan conocerla en relaci&oacute;n a su servicio de suministro de gas natural y/o electricidad. Esta autorizaci&oacute;n se mantendr&aacute; en vigor a lo largo de la duraci&oacute;n de este contrato. Puede rescindir dicha autorizaci&oacute;n en cualquier momento llamando o enviando a PALMco una notificaci&oacute;n por escrito. En caso de facturas consolidadas, reconoce que la informaci&oacute;n de facturaci&oacute;n y pagos puede serle proporcionada a PALMco.</p>

<p><strong><u>IMPUESTOS.</u></strong> Usted tiene la responsabilidad de pagar y reembolsar a PALMco todos los impuestos que correspondan y los dem&aacute;s aranceles, grav&aacute;menes y cargos del gobierno, cualquiera sea su denominaci&oacute;n, que est&eacute;n relacionados con el servicio de suministro prestado en virtud de este Contrato. Si usted est&aacute; exento de impuestos, debe presentar el certificado de exenci&oacute;n a PALMco antes del comienzo del servicio.</p>

<p><strong><u>DIVULGACI&Oacute;N AMBIENTAL.</u></strong> Hay una copia de la divulgaci&oacute;n ambiental de PALMco disponible en www.palmcoenergy.com.</p>

<p><strong><u>ELECCI&Oacute;N DE LA LEGISLACI&Oacute;N. </u></strong><strong>ESTE CONTRATO SE REGIR&Aacute; E INTERPRETAR&Aacute; DE CONFORMIDAD CON LAS LEYES DEL ESTADO DE MARYLAND, SIN CONSIDERAR LOS PRINCIPIOS RELACIONADOS CON EL CONFLICTO DE LEYES.</strong></p>

<p><strong><u>RESOLUCI&Oacute;N DE DISPUTAS</u></strong><strong>. </strong>Si tiene alguna pregunta o duda sobre nuestro servicio bajo este Contrato, debe comunicarse con PALMco al (877) 726-5862 o por correo electr&oacute;nico a CustomerService@PalmcoEnergy.com. El cliente y PALMco acuerdan que har&aacute;n su mejor esfuerzo para resolver la disputa.&nbsp; Puede comunicarse con la Comisi&oacute;n de Servicios de Utilidad de Maryland llamando al 1-800-492-0474 o en l&iacute;nea en http://www.psc.state.md.us.</p>

<p><strong><u>ARBITRAJE. </u></strong><strong>HASTA DONDE LO PERMITAN LAS LEYES APLICABLES DE MARYLAND, EN CASO DE QUE HAYA UN PROBLEMA, RECLAMACI&Oacute;N O DISPUTA RELACIONADOS CON ESTE CONTRATO POR EL SERVICIO DE SUMINISTRO DE GAS NATURAL Y/O ENERG&Iacute;A EL&Eacute;CTRICA QUE DEBA RESOLVERSE Y NO PODEMOS HACERLO DE MANERA INFORMAL, DEBE RESOLVERSE A TRAV&Eacute;S DE UN ARBITRAJE VINCULANTE Y FINAL Y MUTUAMENTE RENUNCIAMOS AL DERECHO A RESOLVERLO EN UNA CORTE JUDICIAL. ESTO SE APLICA INDEPENDIENTEMENTE DE SI EL PROBLEMA, RECLAMACI&Oacute;N O DISPUTA INVOLUCRA ACTO IL&Iacute;CITO CIVIL, FRAUDE, VIOLACI&Oacute;N DE CONTRATO, DECLARACI&Oacute;N FALSA, RESPONSABILIDAD POR PRODUCTOS, NEGLIGENCIA Y VIOLACI&Oacute;N DE ALG&Uacute;N ESTATUTO O CUALQUIER OTRA TEOR&Iacute;A LEGAL. SE INCLUYEN TODOS LOS PROBLEMAS, RECLAMACIONES Y DISPUTAS QUE SURJAN O SE RELACIONEN CON CUALQUIER ASPECTO DE SU PARTICIPACI&Oacute;N EN ESTE CONTRATO POR SERVICIO DE SUMINISTRO DE GAS NATURAL Y/O ELECTRICIDAD, YA SEA QUE SURJAN DURANTE SU PARTICIPACI&Oacute;N EN ESTE CONTRATO POR SERVICIO DE SUMINISTRO DE GAS NATURAL Y/O ELECTRICIDAD O TRAS ELLA. TODOS LOS ARBITRAJES DEBEN SER CONDUCIDOS DE MANERA INDIVIDUAL (NO COLECTIVA) Y EL &Aacute;RBITRO NO TENDR&Aacute; AUTORIDAD PARA BUSCAR COMPENSACI&Oacute;N PARA UNA COMUNIDAD MAYOR. USTED RECONOCE Y ACEPTA QUE ESTO LE PROH&Iacute;BE ESPEC&Iacute;FICAMENTE COMENZAR PROCEDIMIENTOS DE ARBITRAJE COMO REPRESENTANTE DE OTROS O UNIRSE A CUALQUIER PROCEDIMIENTO DE ARBITRAJE QUE OTRA PERSONA LE PRESENTE. INDEPENDIENTEMENTE DE LO ANTERIOR, ESTE P&Aacute;RRAFO NO PROH&Iacute;BE QUE USTED PRESENTE UNA QUEJA RELATIVA A SU SERVICIO DE SUMINISTRO DE ELECTRICIDAD O GAS NATURAL ANTE PALMCO, EN CUMPLIMIENTO CON LAS LEYES DE SU ESTADO QUE RIGEN LA GENERACI&Oacute;N DE ELECTRICIDAD O EL SUMINISTRO DE GAS NATURAL AL POR MENOR, CON JURISDICCI&Oacute;N SOBRE LA GENERACI&Oacute;N DE ELECTRICIDAD O EL SUMINISTRO DE GAS NATURAL AL POR MENOR.</strong></p>

<p><strong><u>FUERZA MAYOR.</u></strong> Ni usted ni PALMco ser&aacute;n responsables por el incumplimiento de este Contrato si dicho incumplimiento se debe a un evento de fuerza mayor. Un &ldquo;caso de fuerza mayor&rdquo; incluye incendios, actos fortuitos o de un enemigo p&uacute;blico, huelgas de trabajadores, cierres patronales u otros conflictos industriales, actos de terrorismo, acciones gubernamentales, acciones de empresas de servicio de utilidad, tormentas, huracanes, inundaciones, explosiones, escasez o indisponibilidad de establecimientos de transmisi&oacute;n, cambios de legislaciones, reglas o regulaciones de cualquier gobierno o autoridad y otros eventos que no pueden ser prevenidos ni superados por la normal debida diligencia. Esto no incluye la incapacidad de pagar cualquier monto debido conforme a este Contrato.</p>

<p><strong><u>LIMITACI&Oacute;N DE GARANT&Iacute;AS Y DA&Ntilde;OS</u></strong>. <strong>PALMCO NO EXPRESA GARANT&Iacute;AS, AFIRMACIONES DE HECHO O PROMESAS, IMPL&Iacute;CITAS O EXPL&Iacute;CITAS, SALVO QUE SE ESPECIFIQUE EXPRESAMENTE LO CONTRARIO EN ESTE CONTRATO, INCLUYENDO, ENTRE OTRAS, GARANT&Iacute;AS DE COMERCIABILIDAD O IDONEIDAD PARA UN FIN PARTICULAR. HASTA DONDE LO PERMITAN LAS LEYES APLICABLES DE MARYLAND, NI USTED NI PALMCO TENDR&Aacute;N LA RESPONSABILIDAD ANTE EL OTRO POR DA&Ntilde;OS Y PERJUICIOS PUNITIVOS, EJEMPLARES, EMERGENTES, INDIRECTOS O ACCESORIOS QUE SURJAN DEL INCUMPLIMIENTO DE ESTE CONTRATO.</strong></p>

<p><strong><u>DISPOSICIONES VARIAS.</u></strong> Usted no puede ceder este Contrato sin el previo consentimiento por escrito de PALMco. Este Contrato tendr&aacute; efecto y ser&aacute; vinculante para los sucesores y cesionarios de las partes. Este Contrato solo puede ser modificado mediante un escrito firmado por todas las partes. Este Contrato contiene la totalidad del entendimiento entre usted y PALMco con respecto al asunto contractual y no existen otros convenios, promesas o compromisos que los dispuestos expl&iacute;citamente en este Contrato. PALMco puede vender, transferir, prometer o ceder las cuentas, ingresos o ganancias del presente, en relaci&oacute;n con cualquier acuerdo financiero y puede ceder este Contrato a otro proveedor de energ&iacute;a, empresa de servicios de energ&iacute;a u otra entidad, sujeto a las reglas y procedimientos de la Comisi&oacute;n de Servicios de Utilidad que rigen dichas transacciones.</p>

<p><strong><u>INFORMACI&Oacute;N DE CONTACTO DE LA COMISI&Oacute;N DE SERVICIO DE UTILIDAD.</u></strong> Puede comunicarse con la Comisi&oacute;n llamando al 1-800-492-0474 o a trav&eacute;s del sitio web http://www.psc.state.md.us.</p>

<p><strong><u>EMERGENCIAS</u></strong><strong>. EN CASO DE UNA EMERGENCIA O INTERRUPCI&Oacute;N DEL SERVICIO, DEBER&Aacute; COMUNICARSE INMEDIATAMENTE CON SU EMPRESA DE UTILIDAD LOCAL.</strong></p>

<p>&nbsp;</p>

<p align="right">V.16-09.23</p>

<p>&nbsp;</p>',
                'created_at' => '2017-03-06 15:09:54',
                'updated_at' => '2017-03-06 15:09:54',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'state_id' => 5,
                'template_type' => 'Terms of Service',
                'commodity_id' => 3,
                'locale_code' => 'es',
                'source_file_name' => 'NJ T&C V.S.17-01.30.docx',
                'version' => 'v.17-01.30',
                'is_active' => false,
                'template_html' => '<p>&nbsp;
<p align="center"><strong><u>T&Eacute;RMINOS Y CONDICIONES EN NEW JERSEY</u></strong></p>
</p>

<p align="center">&nbsp;</p>

<p><strong><u>INTRODUCCI&Oacute;N</u></strong>: Este es un convenio, junto con su Resumen de Contrato, Carta de Confirmaci&oacute;n y cualquiera y todos los Avisos de Renovaci&oacute;n (si corresponde) (colectivamente, el &quot;Convenio&quot;), entre PALMco Energy NJ, LLC (&quot;PALMco Energy&quot; o &quot;PALMco&quot;) y usted para el servicio de suministro de gas natural y/o entre PALMco Power NJ, LLC (&quot;PALMco Power&quot; o &quot;PALMco&quot;) y usted para el servicio de suministro de generaci&oacute;n de electricidad en cada direcci&oacute;n de cuenta indicada en su Carta de Confirmaci&oacute;n (o enumerada en un ap&eacute;ndice). Usted acepta autorizar un cambio de su servicio de suministro de gas natural y/o de electricidad a PALMco y comprar todo el gas natural a PALMco Energy y/o la electricidad a PALMco Power, para que le suministren el servicio a cada cuenta indicada en su Carta de Confirmaci&oacute;n (o enumerada en alg&uacute;n ap&eacute;ndice) (&quot;Cantidad de la Compra&quot;) a un precio seg&uacute;n se describe en este Convenio. PALMco Energy posee una licencia otorgada por la Junta de Utilidades P&uacute;blicas de New Jersey para proporcionar el servicio de suministro de gas natural en New Jersey. El n&uacute;mero de la licencia de PALMco Energy es GSL-0033. PALMco Power posee una licencia otorgada por la Junta de Utilidades P&uacute;blicas de New Jersey para proporcionar el servicio de suministro de generaci&oacute;n de electricidad en New Jersey. El n&uacute;mero de la licencia de PALMco Power es ESL-0049.</p>

<p><strong><u>PRECIOS.</u></strong></p>

<p><strong>Tarifa Variable Precio del Gas Natural</strong>: Si usted recibe el servicio de suministro de gas natural de PALMco Energy para sus primeros dos ciclos de facturaci&oacute;n, pagar&aacute; un precio inicial por termia, seg&uacute;n se establece en su Resumen del Contrato y/o Carta de Confirmaci&oacute;n. A partir del tercer ciclo de facturaci&oacute;n, usted pagar&aacute; un precio que variar&aacute; de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, de acuerdo al precio correspondiente de cierre mensual del NYMEX para gas natural, los costos de transporte interestatal correspondientes, las funciones de suministro y gesti&oacute;n que PALMco desempe&ntilde;e para usted y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco.&nbsp; No hay l&iacute;mite ni tarifa m&aacute;xima por termia que puede cobrar PALMco, ni l&iacute;mite en la variaci&oacute;n de precios de su servicio de suministro de gas natural de un ciclo de facturaci&oacute;n al siguiente.</p>

<p><strong>Tarifa Variable Precio de la Electricidad</strong>: Si usted recibe el servicio de suministro de generaci&oacute;n de electricidad de PALMco Power, para sus primeros dos ciclos de facturaci&oacute;n, pagar&aacute; un precio inicial por kWh, seg&uacute;n se establece en su Resumen del Contrato y/o Carta de Confirmaci&oacute;n. A partir del tercer ciclo de facturaci&oacute;n, usted pagar&aacute; un precio que variar&aacute; de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, basado sobre el precio marginal local de la zona (&ldquo;LMP&rdquo;, por las siglas en ingl&eacute;s) determinado en tiempo real o por el mercado diario, las funciones de suministro y representaci&oacute;n que PALMco desempe&ntilde;e para usted, los costos de p&eacute;rdida de capacidad de l&iacute;nea, los costos de cumplimiento, ciertos costos de trasmisi&oacute;n, de capacidad, auxiliares y administrativos incurridos por PALMco y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco. No hay l&iacute;mite ni tarifa m&aacute;xima por kWh que puede cobrar PALMco, ni l&iacute;mite en la variaci&oacute;n de precios de su servicio de suministro de generaci&oacute;n el&eacute;ctrica de un ciclo de facturaci&oacute;n al siguiente.</p>

<p><strong>Servicio de Gas Natural y Electricidad: </strong>Usted tiene la responsabilidad de pagar y reembolsar a PALMco&nbsp; todos los impuestos que correspondan y los dem&aacute;s aranceles, grav&aacute;menes y cargos del gobierno, cualquiera sea su denominaci&oacute;n, que est&eacute;n relacionados con el servicio prestado en virtud de este Contrato. Esto podr&iacute;a incluir, a t&iacute;tulo enunciativo pero no limitativo, impuestos de servicios p&uacute;blicos, impuestos sobre ingresos brutos e impuestos de venta y uso que las autoridades federales, estatales y/o locales cobren a PALMco&nbsp; y/o a usted que PALMco &nbsp;le traspase a usted.&nbsp; Si usted est&aacute; exento de impuestos, debe presentar el certificado de exenci&oacute;n a PALMco&nbsp; antes del comienzo del servicio.</p>

<p><strong><u>Derechos del Cliente Residencial.</u></strong> Usted recibir&aacute; un aviso de confirmaci&oacute;n de su elecci&oacute;n de PALMco Energy como su proveedor de gas natural y/o de PALMco Power como proveedor de generaci&oacute;n el&eacute;ctrica.&nbsp; Usted tendr&aacute; siete d&iacute;as calendario a partir de la fecha del aviso de confirmaci&oacute;n para comunicarse con su empresa de servicio p&uacute;blico y rescindir su selecci&oacute;n de PALMco.&nbsp; Este contrato de suministro de gas natural y/o de generaci&oacute;n el&eacute;ctrica no ser&aacute; legalmente vinculante hasta que haya vencido el plazo de siete d&iacute;as para la cancelaci&oacute;n y usted no haya, directa o indirectamente, rescindido su selecci&oacute;n en dicho plazo de siete d&iacute;as.</p>

<p><strong><u>Autorizaci&oacute;n de Divulgaci&oacute;n de Informaci&oacute;n.</u></strong> Usted autoriza a PALMco a comenzar el servicio para las cuentas enumeradas en su Carta de Confirmaci&oacute;n (o en cualquier ap&eacute;ndice), a comenzar su inscripci&oacute;n y a obtener datos hist&oacute;ricos sobre la facturaci&oacute;n y otra informaci&oacute;n sobre usted (&ldquo;Informaci&oacute;n del cliente&rdquo;) de su empresa de servicio p&uacute;blico y de agencias de cr&eacute;dito, a fin de que PALMco&nbsp; pueda comenzar y continuar brind&aacute;ndole servicio. PALMco&nbsp; se reserva el derecho de negarse a brindarle servicio a usted conforme a este Contrato si no puede obtener la Informaci&oacute;n del cliente necesaria o si PALMco&nbsp; obtiene Informaci&oacute;n del cliente que considera insatisfactoria.</p>

<p style="margin-left:.05in;"><strong><u>LA COMPRENSI&Oacute;N DE TARIFAS VARIABLES Y TASAS FIJAS</u></strong>: Las tarifas fijas para el gas natural y la electricidad son las tarifas que no cambian durante el plazo del contrato. Las tarifas variables para el gas natural y la electricidad son las tarifas que pueden variar de un per&iacute;odo de facturaci&oacute;n al siguiente durante la vigencia del contrato, en base a los factores descritos en el presente bajo los ep&iacute;grafes: &quot;<strong>Tarifa Variable Precio del Gas Natural</strong>&quot; y &quot;<strong>Tarifa Variable Precio de la Electricidad</strong>.&quot; Los cambios en el clima tambi&eacute;n pueden afectar a los precios de tarifa variable para el gas natural y la electricidad. El clima fr&iacute;o aumenta la demanda de calefacci&oacute;n, lo que tiende a aumentar la demanda de gas natural y aumentar la tarifa variable para el gas natural. El clima caliente aumenta la demanda de refrigeraci&oacute;n, que tiende a aumentar la demanda de electricidad y aumentar la tarifa variable de la electricidad.</p>

<p style="margin-left:.05in;"><strong><u>AVISO DE CONFIRMACI&Oacute;N, DERECHO DE RESCISI&Oacute;N Y DERECHO DE CANCELACI&Oacute;N PARA CLIENTES RESIDENCIALES.&nbsp; </u></strong><strong>Si usted es un cliente residencial, </strong>tambi&eacute;n puede cancelar este Contrato sin penalizaci&oacute;n si (a) se muda de la direcci&oacute;n en su Carta de Confirmaci&oacute;n (o en cualquier ap&eacute;ndice); (b) una discapacidad le imposibilita a usted (el cliente que figura en el registro) pagar el servicio de PALMco ; o (c) usted (el cliente que figura en el registro) muere, notificando a PALMco con al menos 48 horas de antelaci&oacute;n; quedando entendido que usted seguir&aacute; igualmente obligado a pagar la totalidad del servicio de suministro de gas natural y/o generaci&oacute;n el&eacute;ctrica vendida a usted antes de dicha cancelaci&oacute;n. En caso de mudanza, la cancelaci&oacute;n solamente valdr&aacute; para la direcci&oacute;n de la que se muda y no para ninguna otra direcci&oacute;n de servicio que pudiera estar indicada en este Contrato. No es obligatorio cambiarse a un proveedor competitivo, y usted tiene la opci&oacute;n de continuar con su LDC para el servicio de generaci&oacute;n b&aacute;sico o el servicio b&aacute;sico de suministro de gas.</p>

<p style="margin-left:.05in;"><strong><u>DURACI&Oacute;N DEL CONTRATO Y CL&Aacute;USULA DE RENOVACI&Oacute;N</u></strong><strong><u>. </u></strong>Usted comprar&aacute; el servicio de suministro de gas natural y/o generaci&oacute;n de electricidad para la(s) direcci&oacute;n(es) indicada(s) en su Carta de Confirmaci&oacute;n (o en cualquier ap&eacute;ndice) a PALMco&nbsp; a partir de la fecha establecida por su empresa de servicio p&uacute;blico (&ldquo;Fecha de inicio&rdquo;) y continuar&aacute; comprando el servicio de suministro de gas natural y/o generaci&oacute;n el&eacute;ctrica a PALMco&nbsp; por un per&iacute;odo inicial de un mes a partir de la Fecha de inicio. Despu&eacute;s del per&iacute;odo inicial de un mes, su compra del servicio de suministro de gas natural y/o generaci&oacute;n el&eacute;ctrica a PALMco&nbsp; continuar&aacute; autom&aacute;ticamente en forma mensual conforme a los mismos t&eacute;rminos y condiciones salvo que usted o PALMco&nbsp; terminen este Contrato mediante un aviso por escrito con al menos 30 d&iacute;as de antelaci&oacute;n a la otra parte antes del final de cualquier per&iacute;odo mensual. No se le cobrar&aacute; nada por detener su servicio de suministro de gas natural y/o generaci&oacute;n el&eacute;ctrica si lo hace en conformidad con los t&eacute;rminos de este Contrato.</p>

<p style="margin-left:.05in;"><strong><u>REPRESENTACI&Oacute;N</u></strong><strong><u>.</u></strong> <strong>Servicio de Suministro de Gas Natural</strong><strong>. </strong>Si usted est&aacute; comprando el servicio de suministro de gas natural a PALMco&nbsp; Energy, por este medio usted designa a PALMco&nbsp; Energy como su representante para: (a) gestionar y administrar contratos y acuerdos de servicio entre usted y su empresa de servicio p&uacute;blico y entre usted y la(s) empresa(s) de gasoductos interestatales que transportan el gas que usted usa; (b) nominar y programar con la(s) empresa(s) de gasoductos interestatales el transporte del gas que usted usa desde el (los) Punto(s) de venta al (a los) Punto(s) de Entrega, y con su empresa de servicio p&uacute;blico el transporte de su gas desde el (los) Punto(s) de entrega a su domicilio; y (c) juntar su gas con los suministros de gas de otros clientes de PALMco&nbsp; de forma que usted califique para el servicio de transporte y para tratar y resolver desequilibrios (si los hubiera) durante la vigencia de este Contrato. Como su representante, PALMco&nbsp; coordinar&aacute; la entrega al (a los) Punto(s) de venta de la cantidad de gas necesaria para cumplir los requisitos de entrada de su ciudad en base al consumo y a otra informaci&oacute;n que PALMco&nbsp; reciba de su empresa de servicio p&uacute;blico. El (Los) Punto(s) de venta para el gas ser&aacute;(n) un punto o puntos ubicados fuera de Nueva Jersey seleccionados peri&oacute;dicamente por PALMco&nbsp; para asegurar la fiabilidad del servicio. El (Los) Punto(s) de entrega para el gas transportado a trav&eacute;s de gasoductos interestatales ser&aacute;(n) la(s) estaci&oacute;n(es) de entrada de la ciudad de su empresa de servicio p&uacute;blico. PALMco, como su representante, coordinar&aacute; el transporte del gas desde el (los) Punto(s) de venta al (a los) Punto(s) de entrega y desde el (los) Punto(s) de entrega a su domicilio.</p>

<p style="margin-left:.05in;"><strong>Servicio de Suministro de Generaci&oacute;n El&eacute;ctrica: </strong>Si usted est&aacute; comprando el servicio de suministro de generaci&oacute;n el&eacute;ctrica a PALMco&nbsp; Power, por este medio usted designa a PALMco&nbsp; Power como su representante a fin de coordinar, contratar y administrar los servicios de transmisi&oacute;n (incluyendo aquellos provistos por su empresa de servicio p&uacute;blico) para la entrega de electricidad. El (Los) Punto(s) de venta para la electricidad ser&aacute;(n) uno o m&aacute;s puntos del sistema de transmisi&oacute;n administrado por PJM&nbsp; (como sea el caso) ubicados fuera de los l&iacute;mites municipales y del condado de la ubicaci&oacute;n de la direcci&oacute;n de su servicio, seleccionados peri&oacute;dicamente por PALMco&nbsp; Power para asegurar la fiabilidad del servicio.&nbsp; El (Los) Punto(s) de entrega para la electricidad ser&aacute;(n) uno o m&aacute;s puntos que PALMco, como su representante, haya establecido para la entrega de electricidad a usted o a un tercero (como por ejemplo, su empresa de servicio p&uacute;blico) para su cuenta.</p>

<p style="margin-left:.05in;"><strong><u>PAGO DE FACTURAS/TERMINACI&Oacute;N POR PARTE DE PALMCO</u></strong><strong><u>. </u></strong>Usted recibir&aacute; una factura y pagar&aacute; a PALMco&nbsp; Energy por el servicio de suministro de gas natural y/o a PALMco&nbsp; Power por el servicio de suministro de generaci&oacute;n el&eacute;ctrica en base a las lecturas del medidor o medidores y a la informaci&oacute;n de consumo que PALMco&nbsp; reciba de su empresa de servicio p&uacute;blico (&ldquo;Cantidad a facturar&rdquo;). PALMco&nbsp; tendr&aacute; la opci&oacute;n de ajustar la Cantidad a facturar por p&eacute;rdida de capacidad de l&iacute;nea/combustible y distribuci&oacute;n retenida por su empresa de servicio p&uacute;blico o por cualquier empresa de transporte interestatal para las Cantidades compradas. Usted recibir&aacute; una &uacute;nica factura de su empresa de servicio p&uacute;blico que contiene los cargos de PALMco&nbsp; y los cargos de su empresa de servicio p&uacute;blico. La factura debe ser pagada en el momento en que se recibe. Si usted no hace el pago cuando corresponda, PALMco&nbsp; puede, despu&eacute;s de 30 d&iacute;as del env&iacute;o de un aviso por escrito, terminar este Contrato; en el entendido, no obstante, de que usted seguir&aacute; teniendo la obligaci&oacute;n de pagar todo el servicio de suministro de gas natural y/o generaci&oacute;n el&eacute;ctrica que se le vendi&oacute; antes de dicha terminaci&oacute;n. Deber&aacute; pagar una multa por mora sobre cualquier monto impagado (incluyendo los montos adeudados y las multas por mora de los mismos) que PALMco&nbsp; no reciba en un plazo de 15 d&iacute;as de la fecha de la factura a una tasa de 1.5% por mes o el m&aacute;ximo monto permitido por ley, el que sea m&aacute;s bajo. Tambi&eacute;n deber&aacute; pagar los honorarios de abogados y dem&aacute;s cargos razonables incurridos por PALMco&nbsp; para procurar el cobro de los pagos que usted adeude.</p>

<p style="margin-left:.05in;"><strong><u>T&Iacute;TULO DE PROPIEDAD, RIESGO DE P&Eacute;RDIDA, ETC</u></strong><strong><u>. </u></strong>Usted y PALMco&nbsp; acuerdan que el t&iacute;tulo de propiedad, el control y el riesgo de p&eacute;rdida de las Cantidades de compra suministradas en virtud de este Contrato ser&aacute;n transferidos de PALMco&nbsp; a usted en el (los) Punto(s) de venta. PALMco&nbsp; y usted acuerdan que las transacciones en virtud de este Contrato se originan y se consuman fuera de los l&iacute;mites jurisdiccionales de la municipalidad, condado o de otra autoridad fiscal del lugar de su direcci&oacute;n de servicio.</p>

<p style="margin-left:.05in;"><strong><u>CARTA DE DIVULGACION AMBIENTAL ELECTRICA</u></strong><strong>.</strong> Si compra servicio de generaci&oacute;n el&eacute;ctrica de la fuente de poder PALMco, por favor visite www.palmcoenergy.com para obtener una descripci&oacute;n de las caracter&iacute;sticas ambientales de la electricidad. Esta informaci&oacute;n se actualiza peri&oacute;dicamente siguiendo los requisitos de la Junta de servicios p&uacute;blicos de Nueva Jersey.</p>

<p style="margin-left:.05in;"><strong><u>PROCEDIMIENTOS DE DISPUTA Y PREGUNTAS ACERCA DE SU SERVICIO</u></strong>. Si tiene preguntas o quejas sobre el servicio establecido en este Contrato, comun&iacute;quese con PALMco&nbsp; al 877-726-5862 o env&iacute;e un correo electr&oacute;nico a CustomerService@palmcoenergy.com. Si no est&aacute; satisfecho con la respuesta de PALMco, puede llamar a la Junta de Servicios P&uacute;blicos (Board of Public Utilities o BPU) de Nueva Jersey al 800-624-0241.</p>

<p style="margin-left:.05in;"><strong><u>RESOLUCI&Oacute;N DE DISPUTAS Y RENUNCIA A JUICIO CON JURADO. </u></strong><strong>HASTA DONDE LO PERMITAN LAS LEYES APLICABLES DE NEW JERSEY, EN CASO DE QUE HAYA UN PROBLEMA, RECLAMACI&Oacute;N O DISPUTA RELACIONADOS CON ESTE ACUERDO DE SUMINISTRO DE GAS NATURAL Y ENERG&Iacute;A EL&Eacute;CTRICA QUE DEBA RESOLVERSE Y NO PODEMOS HACERLO DE MANERA INFORMAL, DEBE RESOLVERSE A TRAV&Eacute;S DE UN ARBITRAJE VINCULANTE Y FINAL Y MUTUAMENTE RENUNCIAMOS AL DERECHO A RESOLVERLO EN UNA CORTE JUDICIAL. ESTO SE APLICA INDEPENDIENTEMENTE DE SI EL PROBLEMA, RECLAMACI&Oacute;N O DISPUTA INVOLUCRA ACTO IL&Iacute;CITO CIVIL, FRAUDE, VIOLACI&Oacute;N DE CONTRATO, DECLARACI&Oacute;N FALSA, RESPONSABILIDAD POR PRODUCTOS, NEGLIGENCIA, VIOLACI&Oacute;N DE ALG&Uacute;N ESTATUTO O CUALQUIER OTRA TEOR&Iacute;A LEGAL. SE INCLUYEN TODOS LOS PROBLEMAS, RECLAMACIONES Y DISPUTAS QUE SURJAN O SE RELACIONEN CON CUALQUIER ASPECTO DE SU PARTICIPACI&Oacute;N EN ESTE ACUERDO DE SUMINISTRO DE GAS NATURAL Y ENERG&Iacute;A EL&Eacute;CTRICA Y AUTORIZACI&Oacute;N PARA CAMBIAR EL SERVICIO DE SUMINISTRO DE GAS Y/O GENERACI&Oacute;N DE ENERG&Iacute;A EL&Eacute;CTRICA A PALMCO, INDEPENDIENTEMENTE DE SI SURGEN DURANTE O DESPU&Eacute;S DE SU PARTICIPACI&Oacute;N EN ESTE ACUERDO DE SUMINISTRO DE GAS NATURAL Y ENERG&Iacute;A EL&Eacute;CTRICA Y AUTORIZACI&Oacute;N PARA CAMBIAR EL SERVICIO DE SUMINISTRO DE GAS Y/O GENERACI&Oacute;N DE ENERG&Iacute;A EL&Eacute;CTRICA A PALMCO. TODOS LOS ARBITRAJES DEBEN SER CONDUCIDOS DE MANERA INDIVIDUAL (NO COLECTIVA) Y EL &Aacute;RBITRO NO TENDR&Aacute; AUTORIDAD PARA BUSCAR COMPENSACI&Oacute;N PARA UNA COMUNIDAD MAYOR. USTED RECONOCE Y ACEPTA QUE ESTO LE PROH&Iacute;BE ESPECIALMENTE COMENZAR PROCEDIMIENTOS DE ARBITRAJE COMO REPRESENTANTE DE OTROS O UNIRSE A CUALQUIER PROCEDIMIENTO DE ARBITRAJE QUE OTRA PERSONA LE PRESENTE. INDEPENDIENTEMENTE DE LO ANTERIOR, ESTE P&Aacute;RRAFO NO PROH&Iacute;BE QUE USTED PRESENTE UNA QUEJA RELATIVA A SU SERVICIO DE SUMINISTRO DE ELECTRICIDAD O GAS NATURAL ANTE PALMCO, EN CUMPLIMIENTO CON LAS LEYES DE SU ESTADO QUE RIGEN LA GENERACI&Oacute;N DE ELECTRICIDAD O EL SUMINISTRO DE GAS NATURAL AL POR MENOR, CON JURISDICCI&Oacute;N SOBRE LA GENERACI&Oacute;N DE ELECTRICIDAD O EL SUMINISTRO DE GAS NATURAL AL POR MENOR</strong><strong>.</strong></p>

<p style="margin-left:.05in;"><strong><u>LEGISLACI&Oacute;N APLICABLE, ETC</u></strong><strong><u>. </u></strong>Este Contrato queda sujeto a todas las leyes federales, estatales y legales vigentes y a todas las normas, reglas y reglamentos de los organismos gubernamentales que tengan jurisdicci&oacute;n sobre el asunto de este Contrato, incluyendo la BPU. <strong>ESTE CONTRATO SE REGIR&Aacute; E INTERPRETAR&Aacute; DE CONFORMIDAD CON LAS LEYES DEL ESTADO DE NUEVA JERSEY, SIN CONSIDERAR LOS PRINCIPIOS RELACIONADOS CON EL CONFLICTO DE LEYES</strong><strong>.</strong></p>

<p style="margin-left:.05in;"><strong><u>FUERZA MAYOR</u></strong><strong><u>. </u></strong>Ni PALMco&nbsp; ni usted ser&aacute;n responsables por el incumplimiento de este Contrato si dicho incumplimiento se debe a un caso de fuerza mayor. Un &ldquo;caso de fuerza mayor&rdquo; significa una ocurrencia material inevitable fuera del control de una parte, como incendios, actos fortuitos o de un enemigo p&uacute;blico, huelgas de trabajadores, cierres patronales u otros conflictos industriales, actos de terrorismo, acciones gubernamentales, acciones de empresas de servicios p&uacute;blicos, tormentas, huracanes, inundaciones, explosiones, escasez o indisponibilidad de establecimientos de transmisi&oacute;n y otros eventos que no pueden ser prevenidos ni superados por la normal debida diligencia. Un caso de fuerza mayor no incluye la incapacidad de pagar cualquier monto debido conforme a este Contrato.</p>

<p style="margin-left:.05in;"><strong><u>EXCLUSI&Oacute;N DE GARANT&Iacute;A</u></strong><strong><u>. </u></strong><strong>PALMCO&nbsp; NO EXPRESA GARANT&Iacute;AS, AFIRMACIONES DE HECHO O PROMESAS, IMPL&Iacute;CITAS O EXPL&Iacute;CITAS, QUE SE EXTIENDAN M&Aacute;S ALL&Aacute; DE LAS CONVENIDAS EN ESTE CONTRATO, INCLUYENDO, ENTRE OTRAS, GARANT&Iacute;AS DE COMERCIABILIDAD O IDONEIDAD PARA UN FIN PARTICULAR</strong><strong>.</strong></p>

<p style="margin-left:.05in;"><strong><u>DISPOSICIONES VARIAS</u></strong><strong><u>. </u></strong>Este Contrato contiene la totalidad del entendimiento entre usted y PALMco&nbsp; con respecto al asunto del mismo y no existen otros convenios, promesas o compromisos que los dispuestos expl&iacute;citamente en este Contrato. Este Contrato solo puede ser modificado mediante un escrito firmado por usted y por PALMco. Usted no puede ceder este Contrato sin el previo consentimiento por escrito de PALMco. PALMco&nbsp; puede vender, transferir, prometer o ceder las cuentas, ingresos o ganancias del presente, en relaci&oacute;n con cualquier acuerdo financiero y puede ceder este Contrato a otro proveedor de energ&iacute;a, empresa de servicios de energ&iacute;a u otra entidad en conformidad con los reglamentos y procedimientos de la Junta de Servicios P&uacute;blicos, si los hubiera, que rigen dichas transacciones. Este Contrato tendr&aacute; efecto y ser&aacute; vinculante para los sucesores y cesionarios de las partes.</p>

<p style="margin-left:.05in;"><strong><u>N&Uacute;MEROS DE TEL&Eacute;FONO DE ATENCI&Oacute;N AL CLIENTE</u></strong><strong><u>. </u></strong>Para atenci&oacute;n al cliente, puede llamar al 877-726-5862 para comunicarse con PALMco ; al 800-624-0241 para comunicarse con la Divisi&oacute;n de Relaciones con el Consumidor de BPU; al 800-242-5830 para comunicarse con Elizabethtown Gas; al 800-662-3115 para comunicarse con Jersey Central Power &amp; Light (JCP&amp;L); al 800-221-0051 para comunicarse con New Jersey Natural Gas; al 800-553-PSEG (7734) para comunicarse con Public Service Electric &amp; Gas (PSE&amp;G); al 877-434-4100 para comunicarse con Rockland Electric tambi&eacute;n conocido como Orange &amp; Rockland; al 888-766-9900 para comunicarse con South Jersey Gas; y al 800-642-3780 para comunicarse con Atlantic City Electric.</p>

<p><strong><u>N&Uacute;MEROS DE TEL&Eacute;FONO DE EMERGENCIA</u></strong><strong><u>. </u></strong><strong>EN CASO DE UNA EMERGENCIA RELACIONADA CON GAS O ELECTRICIDAD, COMO UN CORTE DE GAS O ELECTRICIDAD O UNA FUGA DE GAS, DEBER&Iacute;A COMUNICARSE INMEDIATAMENTE CON SU EMPRESA DE SERVICIO P&Uacute;BLICO LOCAL. PUEDE LLAMAR A ELIZABETHTOWN GAS AL 800-492-4009; JERSEY CENTRAL POWER &amp; LIGHT AL 888-LIGHTSS (888-544-4877); NEW JERSEY NATURAL GAS AL 800-GAS-LEAK (800-427-5325); PUBLIC SERVICE ELECTRIC &amp; GAS AL 800-436-PSEG (7734); ROCKLAND ELECTRIC, TAMBI&Eacute;N CONOCIDA COMO ORANGE &amp; ROCKLAND, AL 800-533-5325; SOUTH JERSEY GAS AL 800-582-7060 Y ATLANTIC CITY ELECTRIC AL 800-833-7476.</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

<p align="right"><strong>v.17-01.30</strong></p>',
                'created_at' => '2017-03-06 15:10:45',
                'updated_at' => '2017-03-06 15:10:45',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 22,
                'state_id' => 7,
                'template_type' => 'Terms of Service',
                'commodity_id' => 3,
                'locale_code' => 'es',
                'source_file_name' => 'OH T&Cs V.S.16-11.21.docx',
                'version' => 'V.S.16-11.21',
                'is_active' => false,
                'template_html' => '<p align="center">&nbsp;</p>

<p style="text-align: center;"><strong><u>T&Eacute;RMINOS Y CONDICIONES DE OHIO</u></strong></p>

<p>&nbsp;</p>

<p><strong><u>INTRODUCCI&Oacute;N:</u></strong> Este es un convenio, junto con su Carta de Confirmaci&oacute;n y cualquiera y todos los Avisos de Renovaci&oacute;n (si corresponde) (colectivamente, el &quot;Convenio&quot;), entre PALMco Energy OH, LLC (&ldquo;PALMco Energy&rdquo; o &ldquo;PALMco&rdquo;) y usted para el servicio de suministro de gas natural y/o PALMco Power OH, LLC (&ldquo;PALMco Power&rdquo; o &ldquo;PALMco&rdquo;) y usted para el servicio de suministro de electricidad en cada direcci&oacute;n del servicio de la cuenta indicada en su Carta de Confirmaci&oacute;n (o en un ap&eacute;ndice). Usted acepta autorizar un cambio de su servicio de suministro de gas natural y/o de electricidad a PALMco y comprar todo el gas natural y/o la electricidad para que le suministren el servicio a cada cuenta indicada en su Carta de Confirmaci&oacute;n (o enumerada en un ap&eacute;ndice) a un precio seg&uacute;n se describe en este Convenio.</p>

<p><strong><u>ACEPTACIONES.</u></strong> Usted admite lo siguiente: <strong>(A)</strong> Todos los representantes de ventas de PALMco con los que usted ha hablado representan a PALMco y no pertenecen a su empresa de utilidades ni est&aacute;n afiliados a su empresa de utilidades; <strong>(B)</strong> Usted es el cliente nombrado en cada una de las cuentas indicadas antes (o en cualquier anexo), o usted es c&oacute;nyuge del cliente nombrado en dichas cuentas, o usted es mayor de 18 a&ntilde;os y tiene autorizaci&oacute;n para tomar decisiones referentes a dichas cuentas. <strong>(C)</strong> PALMco no cobrar&aacute; ning&uacute;n cargo por cambiarse a PALMco como su proveedor de gas natural y/o electricidad. <strong>(D)</strong> Sus empresas de utilidades seguir&aacute;n entreg&aacute;ndole su gas natural y/o electricidad y le enviar&aacute;n a usted su factura de gas natural y/o electricidad, las cuales contendr&aacute;n tanto los cargos de su empresa de utilidades como los cargos de PALMco. <strong>(E)</strong> PALMco no garantiza ahorros ni promete tarifas m&aacute;s bajas que las de su empresa de utilidades. <strong>(F)</strong> Su actual empresa de utilidades de gas y/o electricidad podr&iacute;a cobrarle cargos por cambiarse de empresa. <strong>(G)</strong> No se cobran cargos por la cancelaci&oacute;n de este Convenio.</p>

<p><strong><u>AVISO DE CONFIRMACI&Oacute;N, SU DERECHO DE RESCISI&Oacute;N.</u></strong> USTED RECIBIR&Aacute; UN AVISO POR ESCRITO DE SUS EMPRESAS DE UTILIDADES DE GAS Y/O ELECTRICIDAD QUE CONFIRMA EL TRASPASO DE SU SERVICIO DE SUMINISTRO DE GAS Y/O ELECTRICIDAD A PALMCO LE INFORMA DE SU DERECHO DE RESCINDIR SU INSCRIPCI&Oacute;N EN PALMCO. USTED TIENE 7 D&Iacute;AS H&Aacute;BILES A PARTIR DE LA FECHA DEL SELLO POSTAL DEL AVISO PARA PODER RESCINDIR SIN SANCIONES ESTE CONVENIO Y SU INSCRIPCI&Oacute;N PARA GAS NATURAL Y/O ELECTRICIDAD CON PALMCO, COMUNIC&Aacute;NDOSE (EN FORMA ORAL O ESCRITA) CON SU EMPRESA DE UTILIDADES DE GAS O COMUNIC&Aacute;NDOSE (EN FORMA ORAL, ELECTR&Oacute;NICA O ESCRITA) CON SU EMPRESA DE UTILIDADES DE ELECTRICIDAD.</p>

<p><strong><u>DURACI&Oacute;N DEL CONVENIO Y TERMINACI&Oacute;N.</u></strong> Este Convenio comenzar&aacute; cuando su empresa local de utilidades cambie su cuenta a PALMco y seguir&aacute; en forma mensual hasta que usted o PALMco decida cancelarlo.&nbsp; Si PALMco decide cancelar el servicio, seg&uacute;n las disposiciones en este Convenio, le proporcionar&aacute; con antelaci&oacute;n un aviso por escrito a su Direcci&oacute;n de Servicio. Usted puede cancelar este Convenio en cualquier momento por medio de (a) una llamada telef&oacute;nica a PALMco al (877) 726-5862; (b) el env&iacute;o de una carta a PALMco a 8751 18<sup>th</sup> Avenue, Brooklyn, NY 11214; o (c) el env&iacute;o de un correo electr&oacute;nico a PALMco a CustomerService@PalmcoEnergy.com. Tras la terminaci&oacute;n, usted ser&aacute; regresado al servicio est&aacute;ndar de su empresa de utilidades o puede elegir a otro proveedor. En cualquier caso de que su servicio de suministro de gas natural y/o electricidad con PALMco se cancele, seg&uacute;n las disposiciones de este Convenio, usted permanecer&aacute; obligado a pagar a PALMco por todo el servicio de suministro de gas natural o electricidad prestado antes de la fecha de entrada en vigor de dicha terminaci&oacute;n. La fecha efectiva de terminaci&oacute;n ser&aacute; determinada por su empresa de utilidades. Su servicio de suministro de gas natural y/o electricidad de PALMco se dar&aacute; por terminado autom&aacute;ticamente sin sanciones para usted de ocurrir alguno de los siguientes hechos: (a) su empresa deja de prestar servicios en su Direcci&oacute;n de Servicio; (b) usted se muda fuera del &aacute;rea de servicio de su compa&ntilde;&iacute;a de servicio p&uacute;blico o se muda a un &aacute;rea no atendida por PALMco; (c) PALMco lo regresa a la tarifa de servicio aplicable a su empresa de utilidades en cumplimiento con los t&eacute;rminos de este Convenio. Usted puede cancelar su servicio de suministro de gas natural con PALMco Energy sin penalidad si reubica su direcci&oacute;n de servicio (a) fuera del territorio de servicio de su empresa de utilidades de gas o (b) dentro del territorio de servicio de su empresa de utilidades de gas, si esta &uacute;ltima no le permite transferir su contrato de PALMco Energy a la nueva Direcci&oacute;n de Servicio. Usted tambi&eacute;n puede cancelar este Convenio con PALMco Power sin penalidad si reubica su direcci&oacute;n de servicio a un &aacute;rea a la cual PALMco Power no surte de servicio o a un &aacute;rea en la que PALMco Power cobra una tarifa distinta por el servicio de suministro el&eacute;ctrico. En caso de reubicaci&oacute;n de la direcci&oacute;n de servicio, la cancelaci&oacute;n solamente valdr&aacute; para la direcci&oacute;n de servicio de la que se muda y no para ninguna otra direcci&oacute;n de servicio cubierta por este Convenio. Si usted voluntariamente regresa o vuelve a cambiarse a su empresa de utilidades de gas natural y/o electricidad despu&eacute;s de elegir a PALMco, es posible que no se le brinde servicio conforme a los mismos t&eacute;rminos, condiciones y tarifas que los disponibles para otros clientes atendidos por su empresa de utilidades de gas natural y/o electricidad.</p>

<p><strong><u>PRECIOS.</u></strong></p>

<p><strong><u>Precio Inicial de Gas Natural y/o Electricidad:</u></strong> Si recibe un servicio de suministro de gas natural y/o electricidad de PALMco, pagar&aacute; un precio inicial determinado en su Carta de Confirmaci&oacute;n por el periodo indicado en su Carta de Confirmaci&oacute;n, y en adelante, su precio por el servicio de suministro de gas natural y/o electricidad continuar&aacute; autom&aacute;ticamente de un mes a otro con un precio variable tal y como se describe abajo.</p>

<p><strong><u>Precio Variable del Gas Natural:</u></strong> Usted pagar&aacute; un precio por el servicio de suministro que variar&aacute; de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, de acuerdo con el precio correspondiente de cierre mensual del NYMEX para gas natural, los costos de transporte interestatal correspondientes, las funciones de suministro y gesti&oacute;n que PALMco desempe&ntilde;e para usted y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco. <strong><u>Precio Variable de la Electricidad:</u></strong> Usted pagar&aacute; un precio por el servicio de suministro el&eacute;ctrico que podr&iacute;a variar de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, basado sobre el precio marginal local de la zona (&ldquo;LMP&rdquo;, por las siglas en ingl&eacute;s) determinado en tiempo real o con un d&iacute;a de antelaci&oacute;n, las funciones de suministro y representaci&oacute;n que PALMco desempe&ntilde;e para usted, los costos de p&eacute;rdida de capacidad de l&iacute;nea, los costos de cumplimiento, ciertos costos de trasmisi&oacute;n, de capacidad, auxiliares y administrativos incurridos por PALMco y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco. No hay l&iacute;mite en la variaci&oacute;n de precios de su servicio de suministro de gas natural y/o electricidad de un ciclo de facturaci&oacute;n al siguiente, y su precio variable puede ser mayor o menor que el de la tarifa de oferta est&aacute;ndar de su empresa de utilidades en cualquier mes. PALMco no garantiza ahorros en ning&uacute;n mes ni por la duraci&oacute;n de este Convenio. Los precios actuales e hist&oacute;ricos de PALMco no son indicativos de los precios en el futuro.</p>

<p><strong><u>Otros cargos:</u></strong> Usted tambi&eacute;n tiene la responsabilidad de pagar y reembolsar a PALMco todos los impuestos que correspondan y los dem&aacute;s aranceles, grav&aacute;menes y cargos del gobierno, cualquiera sea su denominaci&oacute;n, que est&eacute;n relacionados con el servicio de suministro de gas o el&eacute;ctrico prestado en virtud de este Convenio. Esto podr&iacute;a incluir, a t&iacute;tulo enunciativo pero no limitativo, los impuestos de empresas de utilidades, sobre ingresos brutos y sobre la venta y uso que las autoridades federales, estatales y/o locales cobran a PALMco y/o a usted y que usted est&aacute; obligado a pagar o que PALMco le traspasa a usted. Si usted est&aacute; exento de impuestos, debe presentar el certificado de exenci&oacute;n a PALMco antes del comienzo del servicio. Este Convenio no incluye cargos de transporte, entrega u otros cargos que su empresa de utilidades de gas o electricidad pudiera imponer.</p>

<p><strong><u>COMBINACI&Oacute;N DE RECURSOS Y CARACTER&Iacute;STICAS AMBIENTALES.</u></strong> La procedente combinaci&oacute;n de recursos de generaci&oacute;n de energ&iacute;a y las caracter&iacute;sticas ambientales del suministro el&eacute;ctrico vendido por PALMco Power est&aacute;n disponibles en www.palmcoenergy.com. Esta informaci&oacute;n se actualiza en forma peri&oacute;dica, conforme a los requisitos de la Comisi&oacute;n de Empresas de Utilidades de Ohio.&nbsp;</p>

<p><strong><u>PAGO DE FACTURAS/CARGOS POR PAGO TARD&Iacute;O/FACTURACI&Oacute;N FIJA.</u></strong> <strong>Gas Natural y/o Electricidad:</strong> Su empresa de utilidades le facturar&aacute; a intervalos establecidos por ella misma. Usted pagar&aacute; a PALMco por el servicio de suministro de gas natural y/o electricidad en base a las lecturas del medidor y a la informaci&oacute;n de consumo que PALMco reciba de su empresa de utilidades (&ldquo;Cantidad a facturar&rdquo;). Usted recibir&aacute; una &uacute;nica factura mensual de su empresa de utilidades con los cargos tanto de PALMco como de su empresa de utilidades. El servicio de suministro de gas natural y/o electricidad debe pagarlo al recibir la factura. Usted deber&aacute; pagar una recargo por mora sobre cualquier monto impago (incluyendo los montos adeudados y las multas por mora de los mismos) que adeude y que PALMco no reciba en un plazo de 14 d&iacute;as calendario a partir de la fecha de la factura a una tarifa de 1.5% por mes o el m&aacute;ximo monto permitido por ley, el que sea m&aacute;s bajo. Tambi&eacute;n deber&aacute; pagar los honorarios de abogados y dem&aacute;s cargos razonables incurridos por PALMco para el cobro de los pagos que usted adeude. Si usted no paga su factura por el servicio de suministro de gas natural y/o electricidad, o no cumple con alguno de los arreglos de pago que haya aceptado, su empresa de utilidades podr&iacute;a desconectar su servicio conforme a las disposiciones de sus tarifas. Puede que se cancele autom&aacute;ticamente este convenio si su compa&ntilde;&iacute;a de servicio p&uacute;blico desconecta su servicio. Adicionalmente, si su pago por el servicio de suministro de gas natural y/o electricidad no se recibe oportunamente, PALMco puede, tras 14 d&iacute;as calendario de hacerle un aviso por escrito, terminar este convenio y el servicio de suministro de gas natural y/o electricidad. Usted tiene derecho a solicitar a PALMco, sin cargo, su historia de pago de hasta 24 meses cubriendo los servicios brindados por PALMco, sin cargo, dos veces dentro de cualquier periodo de 12 meses. La Facturaci&oacute;n fija (&ldquo;Budget Billing&rdquo;) est&aacute; disponible para las partes tanto de entrega como de servicio de suministro de gas natural y/o de electricidad de su factura. Si est&aacute; interesado en la Facturaci&oacute;n fija, debe comunicarse con su empresa de utilidades y solicitar que se le coloque en el plan de Facturaci&oacute;n fija. Si su empresa de utilidades de electricidad es Duke Energy, para solicitar la facturaci&oacute;n fija para la parte de servicio de suministro de electricidad de su factura de electricidad, debe comunicarse con PALMco y solicitar que se le coloque en el plan de facturaci&oacute;n fija.</p>

<p><strong><u>DIVULGACI&Oacute;N DE INFORMACI&Oacute;N DEL CLIENTE.</u></strong> Usted autoriza a PALMco a comenzar su inscripci&oacute;n, iniciar el servicio para las cuentas indicadas en su Carta de Confirmaci&oacute;n (o en cualquier anexo) y a obtener datos hist&oacute;ricos sobre facturaci&oacute;n y otra informaci&oacute;n acerca de usted (&ldquo;Informaci&oacute;n del cliente&rdquo;) de su empresa de utilidades de gas y/o electricidad, a fin de que PALMco pueda iniciar y continuar brind&aacute;ndole su servicio. PALMco se reserva el derecho a negarse a brindarle servicio a usted conforme a este Convenio si no puede obtener la Informaci&oacute;n de cliente necesaria o si obtiene Informaci&oacute;n de cliente que considera insatisfactoria. <strong>PALMco Energy </strong>no divulgar&aacute; su n&uacute;mero de Seguro Social, n&uacute;meros de cuenta, ni ninguna otra Informaci&oacute;n del cliente, sin su autorizaci&oacute;n expresa por escrito o electr&oacute;nica, excepto de acuerdo con las reglas 4901:1-28-04 y 4901:1-29-09 del C&oacute;digo Administrativo de Ohio (Ohio Administrative Code), o si vende o asigna este Convenio a un tercero proveedor. <strong>PALMco Power </strong>no divulgar&aacute; su n&uacute;mero de Seguro Social y/o sus n&uacute;meros de cuenta sin su autorizaci&oacute;n expresa por escrito o electr&oacute;nica, excepto a los programas de cobro y/o informes de cr&eacute;dito propios de PALMco con fondos del fondo universal de servicio, en cumplimiento de la secci&oacute;n 4928.52 del C&oacute;digo Revisado, o si vende o asigna este Convenio a un tercero proveedor.</p>

<p><strong><u>PROCEDIMIENTOS DE DISPUTA Y PREGUNTAS ACERCA DE SU SERVICIO.</u></strong> Si tiene preguntas o quejas sobre el servicio establecido en este Convenio, comun&iacute;quese con PALMco al 1-877-726-5862 (l&iacute;nea gratuita) entre las 8 a.m. y las 5 p.m., hora est&aacute;ndar del Este de Estados Unidos, por correo postal de EE. UU. a 8751 18th Avenue, Brooklyn, NY 11214, o env&iacute;e un correo electr&oacute;nico a CustomerService@PalmcoEnergy.com. Si su queja no se resuelve despu&eacute;s de comunicarse con PALMco, o si necesita informaci&oacute;n general sobre su empresa de utilidades, puede comunicarse con la Comisi&oacute;n de Empresas de Utilidades de Ohio (Public Utilities Commission of Ohio o PUCO) al 1-800-686-7826 (l&iacute;nea gratuita) de lunes a viernes de 8 a.m. a 5 p.m. o visitar http://www.puco.ohio.gov para obtener ayuda. Los clientes con dificultades de habla o audici&oacute;n pueden llamar a PUCO a trav&eacute;s del 7-1-1 (Servicio de retransmisi&oacute;n de llamadas de Ohio).&nbsp; El Consejo de Consumidores de Ohio (Ohio Consumers&rsquo; Counsel, u OCC) representa en asuntos ante PUCO a los clientes residenciales de las empresas de utilidades. Se puede comunicar con OCC al 1-877-742-5622 (l&iacute;nea gratuita) de lunes a viernes de 8:00 a.m. a 5:00 p.m. o visitar www.pickocc.org.</p>

<p><strong><u>FUERZA MAYOR.</u></strong> Ni PALMco ni usted ser&aacute;n responsables por el incumplimiento de este Convenio si dicho incumplimiento se debe a un evento de fuerza mayor. Un &ldquo;evento de fuerza mayor&rdquo; significa un incidente material inevitable fuera del control de una parte, como incendios, actos fortuitos o de un enemigo p&uacute;blico, huelgas, cierres patronales u otros conflictos industriales, actos de terrorismo, acciones gubernamentales, acciones de empresas de utilidades, tormenta, hurac&aacute;n, inundaci&oacute;n, explosi&oacute;n, escasez o indisponibilidad de establecimientos de transmisi&oacute;n, un cambio en la ley o en las reglas que afectan a este Convenio y otros eventos que no pueden ser prevenidos ni superados por la normal debida diligencia. Un caso de fuerza mayor no incluye la incapacidad de pagar cualquier monto adeudado en virtud de este Convenio.</p>

<p><strong><u>LIMITACI&Oacute;N DE RESPONSABILIDAD.</u></strong> HASTA DONDE LO PERMITAN LAS LEYES APLICABLES DE OHIO, NI USTED NI PALMCO TENDR&Aacute;N LA RESPONSABILIDAD ANTE EL OTRO POR DA&Ntilde;OS Y PERJUICIOS PUNITIVOS, EJEMPLARES, EMERGENTES, INDIRECTOS O ACCESORIOS QUE SURJAN DEL INCUMPLIMIENTO DE ESTE CONVENIO, INCLUYENDO, ENTRE OTROS, LUCRO CESANTE O P&Eacute;RDIDA DE INGRESOS.</p>

<p><strong><u>ARBITRAJE Y RENUNCIA A JUICIO CON JURADO</u></strong><strong>. HASTA DONDE LO PERMITAN LAS LEYES APLICABLES DE OHIO, EN CASO DE QUE HAYA UN PROBLEMA, RECLAMACI&Oacute;N O DISPUTA RELACIONADOS CON ESTE CONVENIO POR EL SERVICIO DE SUMINISTRO DE GAS NATURAL Y/O ELECTRICIDAD QUE DEBA RESOLVERSE Y NO PODAMOS HACERLO DE MANERA INFORMAL, DEBE RESOLVERSE A TRAV&Eacute;S DE UN ARBITRAJE VINCULANTE Y FINAL Y MUTUAMENTE RENUNCIAMOS AL DERECHO A RESOLVERLO EN UNA CORTE JUDICIAL. ESTO SE APLICA INDEPENDIENTEMENTE DE SI EL PROBLEMA, RECLAMACI&Oacute;N O DISPUTA INVOLUCRA ACTO IL&Iacute;CITO CIVIL, FRAUDE, VIOLACI&Oacute;N DE CONTRATO, DECLARACI&Oacute;N FALSA, RESPONSABILIDAD POR PRODUCTOS, NEGLIGENCIA Y VIOLACI&Oacute;N DE ALG&Uacute;N ESTATUTO O CUALQUIER OTRA TEOR&Iacute;A LEGAL. SE INCLUYEN TODOS LOS PROBLEMAS, RECLAMACIONES Y DISPUTAS QUE SURJAN O SE RELACIONEN CON CUALQUIER ASPECTO DE SU PARTICIPACI&Oacute;N EN ESTE CONVENIO POR SERVICIO DE SUMINISTRO DE GAS NATURAL Y/O ELECTRICIDAD, YA SEA QUE SURJAN DURANTE SU PARTICIPACI&Oacute;N EN ESTE CONVENIO POR SERVICIO DE SUMINISTRO DE GAS NATURAL Y/O ELECTRICIDAD O TRAS ELLA. TODOS LOS ARBITRAJES DEBEN SER CONDUCIDOS DE MANERA INDIVIDUAL (NO COLECTIVA) Y EL &Aacute;RBITRO NO TENDR&Aacute; AUTORIDAD PARA BUSCAR COMPENSACI&Oacute;N PARA UNA COMUNIDAD MAYOR. USTED RECONOCE Y ACEPTA QUE ESTO LE PROH&Iacute;BE ESPEC&Iacute;FICAMENTE COMENZAR PROCEDIMIENTOS DE ARBITRAJE COMO REPRESENTANTE DE OTROS O UNIRSE A CUALQUIER PROCEDIMIENTO DE ARBITRAJE QUE OTRA PERSONA LE PRESENTE. INDEPENDIENTEMENTE DE LO ANTERIOR, ESTE P&Aacute;RRAFO NO PROH&Iacute;BE QUE USTED PRESENTE UNA QUEJA RELATIVA A SU SERVICIO DE SUMINISTRO DE GAS NATURAL Y/O ELECTRICIDAD ANTE PALMCO, EN CUMPLIMIENTO CON LAS LEYES DE SU ESTADO QUE RIGEN EL SUMINISTRO DE GAS NATURAL Y/O ELECTRICIDAD AL POR MENOR, CON JURISDICCI&Oacute;N SOBRE EL SUMINISTRO DE GAS NATURAL Y/O ELECTRICIDAD AL POR MENOR.</strong></p>

<p><strong><u>EXCLUSI&Oacute;N DE GARANT&Iacute;A.</u></strong> NI PALMCO ENERGY NI PALMCO POWER EXPRESAN GARANT&Iacute;AS, AFIRMACIONES DE HECHO O PROMESAS, IMPL&Iacute;CITAS O EXPL&Iacute;CITAS, QUE SE EXTIENDAN M&Aacute;S ALL&Aacute; DE LAS CONVENIDAS EN ESTE CONVENIO, INCLUYENDO, ENTRE OTRAS, GARANT&Iacute;AS DE COMERCIABILIDAD O IDONEIDAD PARA UN FIN PARTICULAR.</p>

<p><strong><u>LEGISLACI&Oacute;N APLICABLE, ETC.</u></strong> Este Convenio queda sujeto a todas las leyes federales, estatales y legales vigentes y a todas las normas, reglas y reglamentos de los organismos gubernamentales que tengan jurisdicci&oacute;n sobre el asunto de este Convenio, incluyendo, sin limitarse, a la Comisi&oacute;n de Empresas de Utilidades de Ohio (Public Utilities Commission of Ohio). ESTE CONVENIO SE REGIR&Aacute; E INTERPRETAR&Aacute; DE CONFORMIDAD CON LAS LEYES DEL ESTADO DE OHIO, SIN CONSIDERAR LOS PRINCIPIOS RELACIONADOS CON EL CONFLICTO DE LEYES.</p>

<p><strong><u>DISPOSICIONES VARIAS.</u></strong> Este Convenio contiene la totalidad del entendimiento entre usted y PALMco con respecto al asunto contractual y no existen otros convenios, promesas o compromisos que los dispuestos expl&iacute;citamente en este Convenio. PALMco no har&aacute; cambios materiales a los t&eacute;rminos de este Convenio sin obtener primero su aceptaci&oacute;n por escrito o a trav&eacute;s de Verificaci&oacute;n de Terceros (TPV). Usted no puede ceder este Convenio sin el previo consentimiento por escrito de PALMco. PALMco puede vender, transferir, prometer o ceder las cuentas, ingresos o ganancias del presente, en relaci&oacute;n con cualquier acuerdo financiero y puede ceder este Convenio a otro proveedor de energ&iacute;a, empresa de servicios de energ&iacute;a u otra entidad en conformidad con los reglamentos y procedimientos de la PUCO, si los hubiera, que rigen dichas transacciones. Este Convenio tendr&aacute; efecto y ser&aacute; vinculante para los sucesores y cesionarios de las partes aqu&iacute; descritas. Ni la demora ni el incumplimiento por parte suya o de PALMco de ejercer un derecho o recurso que le corresponda a una de las partes por el presente constituir&aacute; una renuncia a dicho derecho o recurso.</p>

<p><strong><u>N&Uacute;MEROS DE TEL&Eacute;FONO DE EMERGENCIA. EN CASO DE UNA EMERGENCIA RELACIONADA CON GAS O ELECTRICIDAD, COMO UN CORTE DE GAS O ELECTRICIDAD O UNA FUGA DE GAS, DEBER&Iacute;A COMUNICARSE INMEDIATAMENTE CON SU EMPRESA LOCAL DE UTILIDADES.</u></strong></p>

<p>&nbsp;</p>

<p><strong>V.S.16-11.21</strong></p>',
                'created_at' => '2017-03-06 15:13:17',
                'updated_at' => '2017-03-06 15:13:17',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 25,
                'state_id' => 8,
                'template_type' => 'Terms of Service',
                'commodity_id' => 3,
                'locale_code' => 'es',
                'source_file_name' => 'PA T&C V.S.17-1-12.docx',
                'version' => 'v.17-01.12',
                'is_active' => false,
                'template_html' => '<p>&nbsp;
<p align="center"><strong><u>T&Eacute;RMINOS Y CONDICIONES DE PENNSYLVANIA</u></strong></p>
</p>

<p><strong><u>T&Eacute;RMINOS DE SERVICIO Y DIVULGACI&Oacute;N DE LA DECLARACI&Oacute;N</u></strong><strong><u>Introducci&oacute;n</u></strong><strong>:</strong> Este es un acuerdo, junto con su extracto de contrato, carta de confirmaci&oacute;n y todos los avisos de renovaci&oacute;n (si corresponde) (colectivamente, el &quot;acuerdo&quot;), entre PALMco energ&iacute;a PA, LLC (&quot;PALMco energ&iacute;a&quot; o &quot;PALMco&quot;) y por servicio de suministro de gas natural o energ&iacute;a PALMco PA, LLC (&quot;PALMco Power&quot; o &quot;PALMco&quot;) y por servicio de la fuente de generaci&oacute;n el&eacute;ctrica en cada una de las direcciones de cuenta figuran en su carta de confirmaci&oacute;n (o aparece en cualquier adici&oacute;n). Usted se compromete a autorizar a un interruptor de su gas natural y servicio de suministro el&eacute;ctrico a PALMco y compra todo el gas natural de PALMco energ&iacute;a o electricidad de la energ&iacute;a PALMco necesaria al servicio de cada una de las cuentas figuran en su carta de confirmaci&oacute;n (o aparece en cualquier adici&oacute;n) (&quot;cantidades de compra&quot;) a un precio tal como se describe en este acuerdo. <strong><u>INFORMACI&Oacute;N A REVELAR</u></strong>. Energ&iacute;a PALMco es licenciado por la Comisi&oacute;n de servicios p&uacute;blicos de Pensilvania (&quot;PUC&quot;) para ofrecer y proporcionar el servicio de suministro de gas en Pensilvania. N&uacute;mero de licencia PUC de PALMco energ&iacute;a es A-2009-2100320. PALMco energ&iacute;a establece el gas los precios y cargos que usted paga. La PUC regula servicios y precios de distribuci&oacute;n. Energ&iacute;a PALMco es licenciado por la PUC para ofrecer y proporcionar el servicio de suministro el&eacute;ctrico en Pennsylvania. N&uacute;mero de licencia PUC de PALMco energ&iacute;a es A-2009-2108338. PALMco poder establece las tarifas de servicio el&eacute;ctrico y cargos que usted paga. La Comisi&oacute;n reguladora Federal regula servicios y precios de transmisi&oacute;n.<strong><u>Derecho de rescisi&oacute;n</u>: Usted puede cancelar este contrato en cualquier momento antes de la medianoche del tercer d&iacute;a h&aacute;bil despu&eacute;s de recibir una copia de este contrato llamando al PALMco en (877) 726-5862, enviando un correo electr&oacute;nico a PALMco en: customerservice@palmcoenergy.com, o escribiendo PALMco en 8751 18 Avenue Brooklyn, NY 11214.<u>DEFINICIONES</u>:&nbsp; </strong>&ldquo;Generaci&oacute;n de carga&quot;significa que la carga para la producci&oacute;n de electricidad. &quot;Transmisi&oacute;n carga&quot; significa que la carga para pasar electricidad de alto voltaje de una planta de generaci&oacute;n a las l&iacute;neas de distribuci&oacute;n de la electricidad. &quot;Carga de los productos b&aacute;sicos&quot; significa que la carga para el gas natural que se vende, medido por volumen (Ccf, Mcf) o calefacci&oacute;n valor (dekatherms). <strong><u>FIJACI&Oacute;N DE PRECIOS</u>:</strong></p>

<p><strong>Introducci&oacute;n el&eacute;ctrico o Gas Natural precio.</strong> Si usted recibe el&eacute;ctrico o el servicio de suministro de gas natural de PALMco, usted pagar&aacute; un precio introductorio como conjunto adelante en su Resumen de contrato o carta de confirmaci&oacute;n para el per&iacute;odo de tiempo indicado en su Resumen de contrato o carta de confirmaci&oacute;n y despu&eacute;s de eso, el precio del gas natural o electricidad servicio continuar&aacute; autom&aacute;ticamente sobre una base mes a mes a un precio variable seg&uacute;n se describe a continuaci&oacute;n a menos que usted o PALMco termina este acuerdo. <strong>Precio variable de Gas Natural. </strong>Tendr&aacute; que pagar un precio por servicio de suministro de gas natural que puede variar de mes a mes seg&uacute;n lo determinado por PALMco seg&uacute;n su criterio basado en el NYMEX cierre Precio mensual aplicable para el gas natural, los costos de transporte interestatal aplicables, las funciones fuente y la agencia que realiza PALMco y otras condiciones de mercado, adem&aacute;s de PALMco los costos, gastos y m&aacute;rgenes. Usted recibir&aacute; notificaci&oacute;n de cualquier cambio de tarifa cuando usted recibe su factura refleja la tasa de nuevo despu&eacute;s de la terminaci&oacute;n de un ciclo de facturaci&oacute;n. Su precio puede ser mayor o menor tasa de su utilidad en un mes determinado, y no hay garant&iacute;a de ahorros. <strong>No hay l&iacute;mite en cu&aacute;nto el precio de su servicio de suministro de gas cambia de un per&iacute;odo de facturaci&oacute;n a la siguiente</strong>.</p>

<p><strong>Variable Electric Price. </strong>Tendr&aacute; que pagar un precio por servicio de suministro el&eacute;ctrico que puede variar de mes a mes seg&uacute;n lo determinado por PALMco basado en un precio marginal ubicaci&oacute;n zonal (&quot;LMP&quot;) determinado en el d&iacute;a por delante o en tiempo real en las funciones de mercado, cualquier suministro y agencia PJM PALMco realiza para usted l&iacute;nea p&eacute;rdida, los costos de cumplimiento, cierta transmisi&oacute;n a la discreci&oacute;n , capacidad, auxiliares y administrativos gastos por PALMco y otras condiciones de mercado vigentes, m&aacute;s los costos de PALMco, gastos y m&aacute;rgenes. Usted recibir&aacute; notificaci&oacute;n de cualquier cambio de tarifa cuando usted recibe su factura refleja la tasa de nuevo despu&eacute;s de la terminaci&oacute;n de un ciclo de facturaci&oacute;n. Su precio puede ser mayor o menor tasa de su utilidad en un mes determinado, y no hay garant&iacute;a de ahorros.&nbsp; <strong>No hay l&iacute;mite en cu&aacute;nto el precio de su servicio de suministro el&eacute;ctrico va a cambiar de un ciclo de facturaci&oacute;n al siguiente</strong><strong>. </strong></p>

<p><strong>El&eacute;ctrico fijo o precio de Gas Natural. </strong>Si usted recibe el&eacute;ctrico fijo o el servicio de suministro de gas natural de PALMco, usted paga un precio fijo como conjunto adelante en su Resumen de contrato o carta de confirmaci&oacute;n para el per&iacute;odo de tiempo indicado en su Resumen de contrato o carta de confirmaci&oacute;n. Despu&eacute;s de eso, a menos que se acuerde, el el&eacute;ctrico o el precio de suministro de gas natural se renovar&aacute; autom&aacute;ticamente sobre una base mes a mes a un precio variable seg&uacute;n lo descrito anteriormente y seg&uacute;n la renovaci&oacute;n prestaci&oacute;n o cambiar de acuerdo secci&oacute;n de t&eacute;rminos en este documento.</p>

<p><strong><u>IMPUESTOS.</u></strong> Son responsables del pago y reembolso de PALMco todos los impuestos, otros impuestos, cuotas y cargos, sin embargo se&ntilde;alado, relacionados con el servicio de suministro provisto bajo este Convenio. Si usted est&aacute; libre de impuestos, usted deber&aacute; suministrar PALMco un certificado de exenci&oacute;n antes de iniciar servicio.</p>

<p><strong>LONGITUD DE ACUERDO. </strong>Este acuerdo comenzar&aacute; con la primera metro leer por su utilidad despu&eacute;s de su inscripci&oacute;n con PALMco y continuar&aacute; por la longitud del t&eacute;rmino del contrato establecidos en el Resumen de contrato.</p>

<p><strong><u>PRESTACI&Oacute;N DE RENOVACI&Oacute;N/CAMBIO DE T&Eacute;RMINOS.&nbsp; </u></strong><strong>Servicio de suministro el&eacute;ctrico. </strong>Si usted tiene un contrato a plazo fijo el&eacute;ctrico acerc&aacute;ndose a la fecha de vencimiento, o cuando PALMco poder propone cambiar los t&eacute;rminos del servicio en cualquier tipo de contrato, recibir&aacute;s dos notificaciones independientes que preceden a la fecha de vencimiento o la fecha de vigencia de los cambios propuestos. Estas notificaciones le explicar&aacute; sus opciones de futuro. 45 a 60 d&iacute;as antes de la fecha de vencimiento de plazo fijo o la fecha efectiva del cambio propuesto en los t&eacute;rminos y un aviso de opciones por lo menos 30 d&iacute;as antes de la expiraci&oacute;n del plazo fijo o la fecha efectiva del cambio propuesto en t&eacute;rminos se proporcionar&aacute; un aviso inicial a usted. Si no responden a las opciones de aviso o en caso contrario rescindir el presente acuerdo notificando a PALMco conforme a la secci&oacute;n de terminaci&oacute;n en el presente, entonces usted se renovar&aacute; autom&aacute;ticamente en un acuerdo de mes a mes en la tarifa y en efecto y de conformidad con los t&eacute;rminos y condiciones establecidos en el aviso. Puede terminar el contrato durante el per&iacute;odo de renovaci&oacute;n sin incurrir en una tarifa por cancelaci&oacute;n.</p>

<p><strong>Servicio de suministro de Gas natural. </strong>Si tienes un contrato de duraci&oacute;n fija gas natural acerc&aacute;ndose a la fecha de vencimiento, o cuando PALMco energ&iacute;a propone cambiar los t&eacute;rminos de servicio, recibir&aacute; escrito notificaciones, dos por separado el primero cambia de aproximadamente 60 a 75 d&iacute;as de anticipaci&oacute;n y los segunda 45 d&iacute;as antes de la fecha de vencimiento o la fecha efectiva de la propuesta. Estas notificaciones le explicar&aacute; sus opciones de futuro.</p>

<p><strong><u>TERMINACI&Oacute;N. </u></strong>Usted puede cancelar este contrato por: (a) llamar a PALMco en (877) 726-5862; (b) enviando una carta a PALMco en 8751 18 Avenue Brooklyn, NY 11214; o (c) PALMco en customerservice@palmcoenergy.com. Usted quedar&aacute; obligado a pagar PALMco para todos gas natural o servicio de suministro el&eacute;ctrico proporcionado a usted antes de la fecha efectiva de dicha terminaci&oacute;n. Usted tambi&eacute;n ser&aacute; obligado a pagar cualquier honorarios razonables y cualquier costos y gastos incurridos por PALMco con respecto a su intento de recoger y recuperar igual. PALMco puede terminar este acuerdo en 15 d&iacute;as de aviso por escrito a usted si usted no puede cumplir con sus obligaciones bajo este acuerdo, su utilidad termina su servicio, o si PALMco ya no es capaz de servirle. La fecha efectiva de dicha terminaci&oacute;n se determinar&aacute; por su utilidad.</p>

<p><strong><u>CARGO POR CANCELACI&Oacute;N ANTICIPADA.</u></strong> Despu&eacute;s de este acuerdo entra en efecto, si usted termina te ser&aacute; responsable de pagar PALMco cualquier cargos por terminaci&oacute;n anticipada aplicable como conjunto adelante en su Resumen de contrato.</p>

<p><strong><u>COMUNICADO DE INFORMACI&Oacute;N AL CLIENTE</u></strong><strong>.</strong> Usted autoriza a PALMco para iniciar el servicio a las cuentas que figuran en su carta de confirmaci&oacute;n (o en cualquier anexo), para comenzar su inscripci&oacute;n y para obtener datos hist&oacute;ricos de facturaci&oacute;n y otra informaci&oacute;n sobre usted (&quot;informaci&oacute;n del cliente&quot;) de su gas o electricidad, por lo que PALMco puede iniciar y continuar su servicio a usted. PALMco reserva el derecho a negarse a prestar servicio a usted bajo este acuerdo si no es capaz de obtener la informaci&oacute;n necesaria del cliente.</p>

<p><strong><u>INFORMACI&Oacute;N DE PRECIOS HIST&Oacute;RICOS</u></strong><strong>.</strong> Usted puede obtener de PALMco mensual promedio de 24 meses de la anterior factura el&eacute;ctrica o gas natural fuente de precios de su tarifa clase y el&eacute;ctrico o gas natural utilidad servicio territorio PALMco llamar al (877) 726-5862 o visite www.palmcoenergy.com/contact, donde usted puede enviar Departamento de PALMco de servicio al cliente. Tenga en cuenta que no son indicativo de precios actuales o futuros precios hist&oacute;ricos.&nbsp;</p>

<p><strong><u>INFORMACI&Oacute;N DE LA ENERG&Iacute;A DISPONIBLE</u></strong><strong>. </strong>Si usted es un cliente de energ&iacute;a PALMco, energ&iacute;a eficiencia informaci&oacute;n y datos hist&oacute;ricos de facturaci&oacute;n est&aacute;n disponibles desde el servicio de gas o energ&iacute;a PALMco a petici&oacute;n. Si usted es un cliente de PALMco potencia, informaci&oacute;n sobre fuentes de generaci&oacute;n de energ&iacute;a, eficiencia energ&eacute;tica, impacto ambiental, y datos hist&oacute;ricos de facturaci&oacute;n de la electricidad o energ&iacute;a PALMco a petici&oacute;n.</p>

<p><strong><u>FACTURACI&Oacute;N Y PAGO.</u></strong> Este acuerdo no incluye transporte de utilidad, entrega u otros cargos que imponga su gas o electricidad. Usted recibir&aacute; un proyecto de ley de la utilidad de cada mes que incluir&aacute;n los cargos para gas natural o electricidad servicio de PALMco y por los servicios prestados por su utilidad. Usted har&aacute; el pago de estos servicios directamente a su utilidad.</p>

<p><strong><u>EN MOVIMIENTO. </u></strong>Usted puede cancelar este contrato si se aleja de la direcci&oacute;n de servicio proporcionando PALMco por lo menos de anticipaci&oacute;n 30 d&iacute;as escrito; pero la cancelaci&oacute;n se aplicar&aacute; &uacute;nicamente a las direcciones de servicio de movimiento de y no otras direcciones de servicio que puede ser para usted en este acuerdo.</p>

<p><strong><u>INCENTIVOS</u></strong>: En el momento de la inscripci&oacute;n, los clientes son elegibles para inscribirse en la tarjeta de regalo de Restaurant.com de PALMco y PALMco le importa. Mayores descuentos est&aacute;n disponibles. Despu&eacute;s de inscribirse con PALMco, todos los clientes son elegibles para inscribirse en del PALMco referido incentivo y programas de cr&eacute;dito de lealtad. Por favor visite www.PalmcoEnergy.com/Rewards para obtener m&aacute;s informaci&oacute;n acerca de programas de incentivos de PALMco.</p>

<p><strong><u>PROCEDIMIENTOS DE CONTROVERSIAS Y CUESTIONES RELATIVAS A SU SERVICIO</u></strong><strong>. </strong>Si usted est&aacute; recibiendo servicio de suministro de gas natural de la energ&iacute;a PALMco, debe contactar PALMco energ&iacute;a si usted tiene preguntas o quejas acerca de su servicio. Si usted tiene alguna pregunta o queja relacionada con su distribuci&oacute;n servicio de gas, facturaci&oacute;n, medici&oacute;n, u otros servicios proporcionados por su utilidad de gas, se debe directamente a su utilidad de gas. Si usted est&aacute; recibiendo servicio de suministro el&eacute;ctrico de energ&iacute;a PALMco, usted debe contactar poder PALMco si usted tiene preguntas o quejas acerca de su servicio. Si usted tiene alguna pregunta o queja relacionada con su servicio de distribuci&oacute;n el&eacute;ctrica, facturaci&oacute;n, medici&oacute;n, u otros servicios proporcionados por su compa&ntilde;&iacute;a el&eacute;ctrica, debe directamente su electricidad. Puede llamar a la Comisi&oacute;n de servicios p&uacute;blicos si usted no est&aacute; satisfecho despu&eacute;s de discutir estos asuntos con PALMco energ&iacute;a o poder PALMco. Quejas que corresponden a cap&iacute;tulo 56 (relativos a las normas y pr&aacute;cticas para el servicio residencial de facturaci&oacute;n) se maneja y resuelve con arreglo a las normas aplicables en el cap&iacute;tulo 56. PALMco dar&aacute; el acceso de la Comisi&oacute;n de servicios p&uacute;blicos a las declaraciones de divulgaci&oacute;n, facturaci&oacute;n y otro cliente recursos de informaci&oacute;n para las revisiones de cumplimiento seg&uacute;n lo considere necesario por la Comisi&oacute;n. Cuando las quejas se presentan y est&aacute;n presentadas ante la Comisi&oacute;n de servicios p&uacute;blicos para la resoluci&oacute;n, se extender&aacute; la obligaci&oacute;n de PALMco a la provisi&oacute;n de informaci&oacute;n sobre precios.</p>

<p><strong><u>ARBITRAJE Y RENUNCIA A JUICIO POR JURADO</u></strong><strong>. EN LA MAYOR MEDIDA PERMITIDA POR LA LEY DE PENNSYLVANIA APLICABLES, SI HAY ALG&Uacute;N PROBLEMA, RECLAMACI&Oacute;N O CONTROVERSIA RELATIVA A ESTE CONTRATO DE SUMINISTRO DE ENERG&Iacute;A EL&Eacute;CTRICA Y GAS NATURAL QUE NECESITA SER RESUELTO Y NO PODEMOS RESOLVER DE MANERA INFORMAL, DEBE SER RESUELTO A TRAV&Eacute;S DE LA FINAL, ARBITRAJE OBLIGATORIO Y RENUNCIAN MUTUAMENTE EL DERECHO A RESOLVER EN UNA CORTE DE LEY. ESTO SE APLICA INDEPENDIENTEMENTE DE SI EL PROBLEMA, RECLAMACI&Oacute;N O LITIGIO INVOLUCRA UN ACTO IL&Iacute;CITO, FRAUDE, INCUMPLIMIENTO DE CONTRATO, TERGIVERSACI&Oacute;N, RESPONSABILIDAD DE PRODUCTOS DEFECTUOSOS, NEGLIGENCIA Y VIOLACI&Oacute;N DE UN ESTATUTO O CUALQUIER OTRA TEOR&Iacute;A LEGAL. INCLUIDO SON TODAS LAS CUESTIONES, RECLAMACIONES Y CONTROVERSIAS QUE SURJAN DE O RELACIONADOS CON CUALQUIER ASPECTO DE SU PARTICIPACI&Oacute;N EN ESTE ACUERDO DE SUMINISTRO DE ENERG&Iacute;A EL&Eacute;CTRICA Y GAS NATURAL Y LA AUTORIZACI&Oacute;N AL SERVICIO DE CONMUTADOR SERVICIO DE SUMINISTRO DE GAS Y GENERACI&Oacute;N EL&Eacute;CTRICA A PALMCO YA SEA QUE SURJAN DURANTE O DESPU&Eacute;S DE SU PARTICIPACI&Oacute;N EN ESTE ACUERDO DE SUMINISTRO DE ENERG&Iacute;A EL&Eacute;CTRICA Y GAS NATURAL Y AUTORIZACI&Oacute;N PARA INTERRUPTOR GAS SUMINISTRAR SERVICIO SERVICIO O GENERACI&Oacute;N DE ELECTRICIDAD A PALMCO. TODOS LOS ARBITRAJES SE REALIZAR&Aacute;N EN UN INDIVIDUO (Y NO UNA CLASE AMPLIA) BASE Y EL &Aacute;RBITRO NO TENDR&Aacute; AUTORIDAD PARA ALIVIO DE TODA LA CLASE DE PREMIO. USTED RECONOCE Y ACEPTA QUE ESTE ESPEC&Iacute;FICAMENTE PROH&Iacute;BE INICIAR ARBITRAJE PROCEDIMIENTOS COMO REPRESENTANTE DE OTROS O UNIRSE A CUALQUIER PROCEDIMIENTO TRA&Iacute;DO POR CUALQUIER OTRA PERSONA. NO OBSTANTE LO ANTERIOR, ESTE APARTADO NO LE IMPIDE PRESENTAR UNA QUEJA REFERENTE A SU SERVICIO DE SUMINISTRO DE ELECTRICIDAD O GAS CON PALMCO CON ARREGLO A LAS LEYES QUE RIGEN LA VENTA POR MENOR PROVEEDOR EL&Eacute;CTRICO GENERACI&Oacute;N O GAS NATURAL EN SU ESTADO Y LOS REGLAMENTOS DE CUALQUIER AGENCIA EN SU ESTADO CON JURISDICCI&Oacute;N SOBRE PROVEEDORES DE GENERACI&Oacute;N O GAS NATURAL EL&Eacute;CTRICOS VENTA POR MENOR.</strong></p>

<p><strong><u>INFORMACI&Oacute;N DE CONTACTO</u></strong>. <strong>Servicio de gas: </strong>Nombre del proveedor del gas: Energ&iacute;a de PALMco PA, LLC; Gas distribuidor direcci&oacute;n: 8751 18 Avenue Brooklyn, NY 11214; N&uacute;mero de tel&eacute;fono de distribuidor de gas: (877) 726-5862; Direcci&oacute;n de Internet del proveedor de gas: http://www.PalmcoEnergy.com/.&nbsp; Informaci&oacute;n sobre las compras de un proveedor de gas est&aacute; disponible en www.PaGasSwitch.com y llamando al n&uacute;mero de tel&eacute;fono de la Comisi&oacute;n en 1-800-692-7830 y en <a href="http://www.oca.state.pa.us">www.oca.state.pa.us</a>.</p>

<p><strong>Servicio de electricidad:</strong> Nombre de la empresa de generaci&oacute;n el&eacute;ctrica: Energ&iacute;a de PALMco PA, LLC; Generaci&oacute;n el&eacute;ctrica proveedor direcci&oacute;n: 8751 18 Avenue Brooklyn, NY 11214; N&uacute;mero de tel&eacute;fono de proveedor de generaci&oacute;n el&eacute;ctrica: (877)726-5862; Direcci&oacute;n de Internet de empresa de generaci&oacute;n el&eacute;ctrica: http://www.PalmcoEnergy.com/. Direcci&oacute;n de la Comisi&oacute;n de servicios p&uacute;blicos (PUC): P.O. Box 3265, Harrisburg, PA. 17105-3228; N&uacute;mero de l&iacute;nea directa el&eacute;ctrica competencia: 1-888-782-3228.</p>

<p><strong><u>LEGISLACI&Oacute;N APLICABLE, ETC.</u></strong> Este acuerdo est&aacute; sujeto a las leyes locales, estatales y federales y las &oacute;rdenes, normas y reglamentos de las agencias gubernamentales con jurisdicci&oacute;n sobre la materia objeto de este acuerdo, incluyendo el PUC. Servicios proporcionados por su el&eacute;ctrico y utilidad de gas est&aacute; sujeta a todos estatales y leyes federales, &oacute;rdenes, reglas y regulaciones.</p>

<p><strong><u>FUERZA MAYOR</u></strong><strong>. </strong>Ni PALMco ni usted ser&aacute; responsable de un incumplimiento de este contrato si dicho incumplimiento se debe a un evento de fuerza mayor. Un &quot;evento de fuerza mayor&quot; significa un material, la ocurrencia inevitable m&aacute;s all&aacute; del control de una parte, como un incendio, la ley de Dios o enemigo p&uacute;blico, huelga, cierre u otra alteraci&oacute;n industrial, acto de terrorismo, acci&oacute;n de gobierno, gas o electricidad acci&oacute;n, tormenta, hurac&aacute;n, inundaci&oacute;n, explosi&oacute;n, escasez o falta de disponibilidad de instalaciones de transmisi&oacute;n y otros eventos que no puedan prevenir o superar por ordinario debido diligencia. Un evento de fuerza mayor no incluye la incapacidad para pagar cualquier monto debido en virtud de este acuerdo.</p>

<p><strong><u>CAMBIOS REGULATORIOS.</u></strong> Este acuerdo est&aacute; sujeto a la legislaci&oacute;n presente y futura, &oacute;rdenes, reglas, reglamentos o decisiones de una autoridad gubernamental debidamente constituida que tenga jurisdicci&oacute;n sobre este acuerdo o los servicios se proporcionan a continuaci&oacute;n. Si en un futuro haya un cambio en cualquier ley, regla, Reglamento, tarifa o estructura regulatoria (&quot;regulador del cambio&quot;) que afecta a cualquier t&eacute;rmino, condici&oacute;n o disposici&oacute;n de este acuerdo, incluyendo, sin limitarse a precio, PALMco tendr&aacute; derecho a cancelar o modificar este acuerdo para reflejar tal cambio regulatorios proporcionando aviso por escrito a usted.</p>

<p><strong><u>COMUNICACI&Oacute;N ELECTR&Oacute;NICA</u></strong><strong>. </strong>A menos que la ley exija lo contrario, si usted proporciona PALMco con tu direcci&oacute;n de correo electr&oacute;nico, usted acepta que PALMco puede transmitirle todas las notificaciones y otras comunicaciones, los requeridos en este acuerdo, electr&oacute;nicamente a la direcci&oacute;n de correo electr&oacute;nico proporcionada por usted incluidos. Usted ser&aacute; responsable de notificar a PALMco de cualquier cambio en la direcci&oacute;n de correo electr&oacute;nico o cualquier retiro de su consentimiento para comunicaciones electr&oacute;nicas. Avisos transmitidos a usted por correo electr&oacute;nico se considerar&aacute; recibido si transmite a usted en la direcci&oacute;n de correo electr&oacute;nico que suministr&oacute; PALMco usted.</p>

<p><strong><u>LIMITACI&Oacute;N DE RESPONSABILIDAD</u></strong><strong>. EN LA MEDIDA PERMITIDA POR LA LEY DE PENNSYLVANIA APLICABLES, PALMCO ENERG&Iacute;A NI PODER PALMCO SER&Aacute; RESPONSABLE ANTE USTED, Y USTED NO SER&Aacute; RESPONSABLE A PALMCO ENERG&Iacute;A O PODER PALMCO, PARA DA&Ntilde;OS CONSECUENTES, EJEMPLARES, PUNITIVOS, INCIDENTALES O INDIRECTOS, DERIVADOS DEL INCUMPLIMIENTO DE ESTE ACUERDO, INCLUYENDO, SIN LIMITACI&Oacute;N, P&Eacute;RDIDA DE BENEFICIOS O INGRESOS. </strong></p>

<p><strong><u>NO HAY GARANT&Iacute;AS</u></strong><strong>. PALMCO ENERG&Iacute;A NI PODER PALMCO HACE LAS GARANT&Iacute;AS, AFIRMACIONES DE HECHO O PROMESAS, EXPRESA O IMPL&Iacute;CITA, QUE SE EXTIENDEN M&Aacute;S ALL&Aacute; DE LA CARA DE ESTE ACUERDO, INCLUYENDO, SIN LIMITACI&Oacute;N, GARANT&Iacute;AS DE COMERCIABILIDAD O IDONEIDAD PARA UN PROP&Oacute;SITO EN PARTICULAR.</strong></p>

<p><strong><u>VARIOS</u></strong><strong>. </strong>Este acuerdo es el completo entendimiento entre usted y PALMco con respecto a la materia presente, y no hay promesas, pactos o compromisos que no sean los expresamente establecidos en este contrato. Excepto lo proporcionado en este documento, este acuerdo s&oacute;lo puede ser modificado por un escrito firmado por usted y PALMco. Usted no podr&aacute; ceder este contrato sin el previo consentimiento por escrito de PALMco. PALMco puede vender, transferir, comprometerse, o asignar las cuentas, ingresos o ganancias, en relaci&oacute;n con cualquier acuerdo financiero y puede ceder este acuerdo a otro proveedor de energ&iacute;a, empresa de servicios energ&eacute;ticos u otra entidad seg&uacute;n las normas PUC y procedimientos, si los hubiere, que rigen dichas operaciones. Este acuerdo redundar&aacute; a y ser vinculante para los sucesores y cesionarios de las partes. <strong>ESTE ACUERDO SER&Aacute; REGIDO E INTERPRETADO DE ACUERDO CON LA LEY DE PENSILVANIA, INDEPENDIENTEMENTE DE LOS PRINCIPIOS RELATIVOS AL CONFLICTOS DE LEYES.</strong></p>

<p><strong><u>EMERGENCIA</u></strong><strong>. SI USTED EST&Aacute; RECIBIENDO SERVICIO DE GAS DE PALMCO ENERG&Iacute;A BAJO ESTE CONVENIO, EN CASO DE EMERGENCIA, CORTE DE GAS O INTERRUPCI&Oacute;N DEL SERVICIO, SE DEBE CONTACTAR INMEDIATAMENTE A SU UTILIDAD DE GAS. SI USTED EST&Aacute; RECIBIENDO SERVICIO EL&Eacute;CTRICO DE ENERG&Iacute;A PALMCO BAJO ESTE CONVENIO, EN CASO DE EMERGENCIA, FALLA EL&Eacute;CTRICA O INTERRUPCI&Oacute;N DEL SERVICIO, SE DEBE CONTACTAR INMEDIATAMENTE SU ENERG&Iacute;A EL&Eacute;CTRICA.</strong></p>

<table border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="width:90px;">
<p align="center"><strong>Utilidad</strong></p>
</td>
<td style="width:96px;">
<p align="center"><strong>Direcci&oacute;n</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>N&uacute;mero de tel&eacute;fono de apagones y emergencias</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>Programa de servicio universal</strong></p>
</td>
</tr>
<tr>
<td style="width:90px;">
<p><strong>PPL Electric Utilities</strong></p>
</td>
<td style="width:96px;">
<p><strong>827 Hausman Rd</strong></p>

<p><strong>Allentown, PA 18104-9392</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>1-800-342-5775</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>OnTrack</strong></p>

<p align="center"><strong>1-800-358-6623</strong></p>
</td>
</tr>
<tr>
<td style="width:90px;">
<p><strong>PECO</strong></p>
</td>
<td style="width:96px;">
<p><strong>2301 Market St</strong></p>

<p><strong>Philadelphia, PA 19103</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>1-800-841-4141</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>CAP Rate</strong></p>

<p align="center"><strong>1-800-774-7040</strong></p>
</td>
</tr>
<tr>
<td style="width:90px;">
<p><strong>Duquesne </strong></p>

<p><strong>Light</strong></p>
</td>
<td style="width:96px;">
<p><strong>411 Seventh Avenue (6-1)</strong></p>

<p><strong>Pittsburgh, PA 15219</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>1-888-393-7000</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>CAP</strong></p>

<p align="center"><strong>1-888-393-7600</strong></p>
</td>
</tr>
<tr>
<td style="width:90px;">
<p><strong>Metropolitan Edison</strong></p>
</td>
<td style="width:96px;">
<p><strong>P.O. Box 3687</strong></p>

<p><strong>Akron, OH 44309</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>1-888-544-4877</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>PCAP</strong></p>

<p align="center"><strong>1-800-962-4848</strong></p>
</td>
</tr>
<tr>
<td style="width:90px;">
<p><strong>Penelec</strong></p>
</td>
<td style="width:96px;">
<p><strong>P.O. Box 3687</strong></p>

<p><strong>Akron, OH 44309</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>1-888-544-4877</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>PCAP</strong></p>

<p align="center"><strong>1-800-962-4848</strong></p>
</td>
</tr>
<tr>
<td style="width:90px;">
<p><strong>West Penn</strong></p>
</td>
<td style="width:96px;">
<p><strong>P.O. Box 3687</strong></p>

<p><strong>Akron, OH 44309</strong></p>
</td>
<td style="width:90px;">
<p align="center"><strong>1-888-544-4877</strong></p>
</td>
<td style="width:93px;">
<p align="center"><strong>LIPURP</strong></p>

<p align="center"><strong>1-800-207-1250</strong></p>
</td>
</tr>
</tbody>
</table>

<p align="right"><strong>v.17-01.12</strong></p>

<p>&nbsp;</p>',
                'created_at' => '2017-03-06 15:15:35',
                'updated_at' => '2017-03-06 15:15:35',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 27,
                'state_id' => 4,
                'template_type' => 'Contract Summary',
                'commodity_id' => 2,
                'locale_code' => 'es',
                'source_file_name' => 'PALMco Maryland Contract Summary - V.S.17-01.12 Spanish.docx',
                'version' => 'V.E.17-01.12',
                'is_active' => false,
                'template_html' => '<p align="center">Resumen del contrato para Maryland</p>

<table border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="width:168px;height:103px;">
<p>Informaci&oacute;n del proveedor de electricidad</p>

<p>Informaci&oacute;n del proveedor de gas</p>
</td>
<td style="width:486px;height:103px;">
<p>&nbsp;</p>

<p>PALMco Power MD, LLC &ndash; No. de Licencia IR-1804</p>

<p>PALMco Energy MD, LLC &ndash; No. de Licencia IR-1803 <a href="mailto:customerservice@palmcoenergy.com">customerservice@palmcoenergy.com</a> <a href="http://www.palmcoenergy.com/">www.palmcoenergy.com</a></p>

<p>(877) 726-5862</p>
</td>
</tr>
<tr>
<td style="width:168px;height:275px;">
<p>Estructura de precios</p>
</td>
<td style="width:486px;height:275px;">
<p>El precio variar&aacute; de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, basado en el precio marginal local de la zona (&quot;LMP&quot;, por las siglas en ingl&eacute;s) determinado en tiempo real o por el mercado diario, las funciones de suministro y representaci&oacute;n que PALMco desempe&ntilde;e para usted, la p&eacute;rdida de capacidad de l&iacute;nea, los costos de cumplimiento, ciertos costos de trasmisi&oacute;n, de capacidad, auxiliares y administrativos incurridos por PALMco y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco.</p>

<p>El precio puede variar de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, de acuerdo al precio correspondiente de cierre mensual del NYMEX para gas natural, los costos de transporte interestatal correspondientes, las funciones de suministro y gesti&oacute;n que PALMco desempe&ntilde;e para usted y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco.</p>

<p>Su servicio de suministro de electricidad y/o gas natural no incluye los impuestos y cargos aplicables, por los cuales usted es responsable. No hay l&iacute;mite en la variaci&oacute;n de precios de su servicio de suministro de electricidad y/o gas natural de un ciclo de facturaci&oacute;n al siguiente.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:192px;">
<p>Precio de suministro</p>
</td>
<td style="width:486px;height:192px;">
<p>Tarifa introductoria de electricidad: $ <u>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</u> por kWh por los dos primeros ciclos de facturaci&oacute;n. A partir del tercer ciclo de facturaci&oacute;n, su precio puede variar de un mes a otro de acuerdo con los factores variables de precio de electricidad descritos anteriormente.</p>

<p>Tarifa introductoria de gas natural: $ <u>[PRODUCT.RATE]</u> por termia por los [PRODUCT.TERM_MONTHS] primeros ciclos de facturaci&oacute;n. A partir del tercer ciclo de facturaci&oacute;n, su precio puede variar de un mes a otro de acuerdo con los factores variables de precio de gas natural descritos anteriormente.</p>

<p>Puede acceder a la tarifa estimada para el siguiente periodo de factura al menos 12 d&iacute;as antes del cierre de si [periodo de facturaci&oacute;n actual visitando el sitio web de PALMco en https:<a href="http://www.palmcoenergy.com/maryland-rates/">//w</a>w<a href="http://www.palmcoenergy.com/maryland-rates/">w.palmcoenergy.com/maryland-rates/</a></p>
</td>
</tr>
<tr>
<td style="width:168px;height:20px;">
<p>Declaraci&oacute;n sobre ahorros</p>
</td>
<td style="width:486px;height:20px;">
<p>PALMco no garantiza ni promete tarifas m&aacute;s bajas que las de su empresa de utilidad.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:118px;">
<p>Incentivos</p>
</td>
<td style="width:486px;height:118px;">
<p>Al momento de la inscripci&oacute;n, los clientes con un uso anual hist&oacute;rico de al menos 4,500 kWh y/o 450 termias ser&aacute;n elegibles para inscribirse en Restaurant.com Gift Card y PALMco Cares de PALMco. Hay descuentos disponibles para personas mayores. Tras inscribirse con PALMco, todos los clientes son elegibles a inscribirse para los programas de incentivo de recompensas PALMco de incentivo por referidos, y de cr&eacute;dito por lealtad. Por favor, visite <a href="http://www.PalmcoEnergy.com/Rewards">www.PalmcoEnergy.com/Rewards</a> para obtener m&aacute;s informaci&oacute;n acerca de los programas de incentivo de PALMco.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:54px;">
<p>Fecha de inicio del contrato</p>
</td>
<td style="width:486px;height:54px;">
<p>La fecha de inicio comenzar&aacute; con la primera lectura de su medidor por parte de su empresa de utilidad tras su inscripci&oacute;n en PALMco, usualmente de 1 a 2 ciclos de facturaci&oacute;n.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:36px;">
<p>T&eacute;rmino/duraci&oacute;n del contrato</p>
</td>
<td style="width:486px;height:36px;">
<p>De un mes a otro.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:36px;">
<p>Cargos de Cancelaci&oacute;n Terminaci&oacute;n anticipada</p>
</td>
<td style="width:486px;height:36px;">
<p>Ninguno.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:36px;">
<p>T&eacute;rminos de renovaci&oacute;n</p>
</td>
<td style="width:486px;height:36px;">
<p>Este acuerdo seguir&aacute; en forma mensual a partir de entonces y hasta que a menos que el cliente o PALMco lo cancelen.</p>
</td>
</tr>
</tbody>
</table>

<p style="margin-left:5.0pt;">Para m&aacute;s informaci&oacute;n, por favor consulte sus T&eacute;rminos y Condiciones. Por favor guarde este documento para sus registros. Si tiene alguna pregunta relacionada con este acuerdo, comun&iacute;quese con su proveedor competitivo usando la informaci&oacute;n de arriba.</p>

<p align="right">V.E.17-01.12</p>',
                'created_at' => '2017-03-06 15:17:09',
                'updated_at' => '2017-03-06 15:21:35',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 26,
                'state_id' => 4,
                'template_type' => 'Contract Summary',
                'commodity_id' => 1,
                'locale_code' => 'es',
                'source_file_name' => 'PALMco Maryland Contract Summary - V.S.17-01.12 Spanish.docx',
                'version' => 'V.E.17-01.12',
                'is_active' => false,
                'template_html' => '<p align="center">Resumen del contrato para Maryland</p>

<table border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="width:168px;height:103px;">
<p>Informaci&oacute;n del proveedor de electricidad</p>

<p>Informaci&oacute;n del proveedor de gas</p>
</td>
<td style="width:486px;height:103px;">
<p>&nbsp;</p>

<p>PALMco Power MD, LLC &ndash; No. de Licencia IR-1804</p>

<p>PALMco Energy MD, LLC &ndash; No. de Licencia IR-1803 <a href="mailto:customerservice@palmcoenergy.com">customerservice@palmcoenergy.com</a> <a href="http://www.palmcoenergy.com/">www.palmcoenergy.com</a></p>

<p>(877) 726-5862</p>
</td>
</tr>
<tr>
<td style="width:168px;height:275px;">
<p>Estructura de precios</p>
</td>
<td style="width:486px;height:275px;">
<p>El precio variar&aacute; de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, basado en el precio marginal local de la zona (&quot;LMP&quot;, por las siglas en ingl&eacute;s) determinado en tiempo real o por el mercado diario, las funciones de suministro y representaci&oacute;n que PALMco desempe&ntilde;e para usted, la p&eacute;rdida de capacidad de l&iacute;nea, los costos de cumplimiento, ciertos costos de trasmisi&oacute;n, de capacidad, auxiliares y administrativos incurridos por PALMco y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco.</p>

<p>El precio puede variar de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, de acuerdo al precio correspondiente de cierre mensual del NYMEX para gas natural, los costos de transporte interestatal correspondientes, las funciones de suministro y gesti&oacute;n que PALMco desempe&ntilde;e para usted y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco.</p>

<p>Su servicio de suministro de electricidad y/o gas natural no incluye los impuestos y cargos aplicables, por los cuales usted es responsable. No hay l&iacute;mite en la variaci&oacute;n de precios de su servicio de suministro de electricidad y/o gas natural de un ciclo de facturaci&oacute;n al siguiente.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:192px;">
<p>Precio de suministro</p>
</td>
<td style="width:486px;height:192px;">
<p>Tarifa introductoria de electricidad: $ <u>[PRODUCT.RATE]</u> por kWh por los [PRODUCT.TERM_MONTHS] primeros ciclos de facturaci&oacute;n. A partir del tercer ciclo de facturaci&oacute;n, su precio puede variar de un mes a otro de acuerdo con los factores variables de precio de electricidad descritos anteriormente.</p>

<p>Tarifa introductoria de gas natural: $ <u>_____</u> por termia por los dos primeros ciclos de facturaci&oacute;n. A partir del tercer ciclo de facturaci&oacute;n, su precio puede variar de un mes a otro de acuerdo con los factores variables de precio de gas natural descritos anteriormente.</p>

<p>Puede acceder a la tarifa estimada para el siguiente periodo de factura al menos 12 d&iacute;as antes del cierre de si [periodo de facturaci&oacute;n actual visitando el sitio web de PALMco en https:<a href="http://www.palmcoenergy.com/maryland-rates/">//w</a>w<a href="http://www.palmcoenergy.com/maryland-rates/">w.palmcoenergy.com/maryland-rates/</a></p>
</td>
</tr>
<tr>
<td style="width:168px;height:20px;">
<p>Declaraci&oacute;n sobre ahorros</p>
</td>
<td style="width:486px;height:20px;">
<p>PALMco no garantiza ni promete tarifas m&aacute;s bajas que las de su empresa de utilidad.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:118px;">
<p>Incentivos</p>
</td>
<td style="width:486px;height:118px;">
<p>Al momento de la inscripci&oacute;n, los clientes con un uso anual hist&oacute;rico de al menos 4,500 kWh y/o 450 termias ser&aacute;n elegibles para inscribirse en Restaurant.com Gift Card y PALMco Cares de PALMco. Hay descuentos disponibles para personas mayores. Tras inscribirse con PALMco, todos los clientes son elegibles a inscribirse para los programas de incentivo de recompensas PALMco de incentivo por referidos, y de cr&eacute;dito por lealtad. Por favor, visite <a href="http://www.PalmcoEnergy.com/Rewards">www.PalmcoEnergy.com/Rewards</a> para obtener m&aacute;s informaci&oacute;n acerca de los programas de incentivo de PALMco.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:54px;">
<p>Fecha de inicio del contrato</p>
</td>
<td style="width:486px;height:54px;">
<p>La fecha de inicio comenzar&aacute; con la primera lectura de su medidor por parte de su empresa de utilidad tras su inscripci&oacute;n en PALMco, usualmente de 1 a 2 ciclos de facturaci&oacute;n.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:36px;">
<p>T&eacute;rmino/duraci&oacute;n del contrato</p>
</td>
<td style="width:486px;height:36px;">
<p>De un mes a otro.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:36px;">
<p>Cargos de Cancelaci&oacute;n Terminaci&oacute;n anticipada</p>
</td>
<td style="width:486px;height:36px;">
<p>Ninguno.</p>
</td>
</tr>
<tr>
<td style="width:168px;height:36px;">
<p>T&eacute;rminos de renovaci&oacute;n</p>
</td>
<td style="width:486px;height:36px;">
<p>Este acuerdo seguir&aacute; en forma mensual a partir de entonces y hasta que a menos que el cliente o PALMco lo cancelen.</p>
</td>
</tr>
</tbody>
</table>

<p style="margin-left:5.0pt;">Para m&aacute;s informaci&oacute;n, por favor consulte sus T&eacute;rminos y Condiciones. Por favor guarde este documento para sus registros. Si tiene alguna pregunta relacionada con este acuerdo, comun&iacute;quese con su proveedor competitivo usando la informaci&oacute;n de arriba.</p>

<p align="right">V.E.17-01.12</p>',
                'created_at' => '2017-03-06 15:16:32',
                'updated_at' => '2017-03-06 15:22:03',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 21,
                'state_id' => 5,
                'template_type' => 'Contract Summary',
                'commodity_id' => 2,
                'locale_code' => 'es',
                'source_file_name' => 'NJ TPS Gas Contract Summary - Res & Comm - V.S.17-01.12 Spanish.docx',
                'version' => 'v. 17-01.12',
                'is_active' => false,
                'template_html' => '<p style="text-align: center;"><strong>RESUMEN DE CONTRATO DE PALMCO ENERGY NJ, LLC</strong></p>

<p align="center">&nbsp;</p>

<table border="1" cellpadding="0" cellspacing="0" style="width:768px;" width="768">
<tbody>
<tr>
<td style="width:212px;">
<p>Informaci&oacute;n de proveedores terceros:</p>

<p><strong>Al celebrar este contrato, usted acepta comprar su suministro de gas a este proveedor.</strong></p>
</td>
<td style="width:556px;">
<p style="margin-left:-.7pt;">PALMco Energy NJ, LLC. Tel&eacute;fono: (877) 726-5862, Sitio web: <a href="http://www.PalmcoEnergy.com">www.PalmcoEnergy.com</a>,</p>

<p style="margin-left:-.7pt;">Correo electr&oacute;nico: <a href="mailto:CustomerService@PALMcoEnergy.com">CustomerService@PALMcoEnergy.com</a>,</p>

<p style="margin-left:-.7pt;">Direcci&oacute;n de correo postal: 10,000 Lincoln Drive East &ndash; Suite 201, Marlton, NJ 08053.</p>

<p style="margin-left:-.7pt;">Direcci&oacute;n de la oficina principal: 8751 18<sup>th</sup> Avenue, Brooklyn, NY 11214; N&uacute;m. de licencia BPU: GSL0033.</p>

<p style="margin-left:-.7pt;">PALMco es responsable de su suministro de gas natural.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Estructura de precios</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;"><strong>Variable.</strong> Usted pagar&aacute; un precio inicial de $ [PRODUCT.RATE] por termia durante los [PRODUCT.TERM_MONTHS] primeros ciclos de facturaci&oacute;n. A partir del tercer ciclo de facturaci&oacute;n, usted pagar&aacute; un precio que variar&aacute; de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, de acuerdo al precio correspondiente de cierre mensual del NYMEX para gas natural, los costos de transporte interestatal correspondientes, las funciones de suministro y gesti&oacute;n que PALMco desempe&ntilde;e para usted y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco. No hay l&iacute;mite ni tarifa m&aacute;xima por termia que pueda cobrar PALMco, ni l&iacute;mite en la variaci&oacute;n de precios de su servicio de suministro de gas natural de un ciclo de facturaci&oacute;n al siguiente. Usted tiene la responsabilidad de pagar y reembolsar a PALMco todos los impuestos que correspondan y los dem&aacute;s aranceles, grav&aacute;menes y cargos del gobierno, cualquiera sea su denominaci&oacute;n, que est&eacute;n relacionados con el servicio de suministro de gas natural.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Precio de generaci&oacute;n/suministro</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.7pt;">$ [PRODUCT.RATE] por termia. Esta es una tarifa introductoria &uacute;nicamente para los [PRODUCT.TERM_MONTHS] primeros ciclos de facturaci&oacute;n.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Declaraci&oacute;n sobre los ahorros</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.7pt;">El precio de suministro de gas natural de PALMco puede que no siempre le proporcione ahorros.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>La cantidad de tiempo requerido para regresar de TPS al servicio regular o a otro servicio TPS</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;">Si usted cancela el servicio con PALMco, el tiempo requerido para cambiar de PALMco al servicio regular o a otro proveedor lo determinar&aacute; su empresa de utilidad de gas natural. PALMco estima que tomar&aacute; alrededor de 1 o 2 ciclos de facturaci&oacute;n a partir de la fecha de su solicitud de cancelaci&oacute;n.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Incentivos</p>
</td>
<td style="width:556px;">
<p>Al momento de la inscripci&oacute;n, los clientes con un uso anual hist&oacute;rico de al menos 450 termias ser&aacute;n elegibles para inscribirse en Restaurant.com Gift Card y PALMco Cares de PALMco.&nbsp; Hay descuentos disponibles para personas mayores.&nbsp; Tras inscribirse con PALMco, todos los clientes son elegibles a inscribirse para los programas de incentivo de recompensas PALMco incentivo por referidos, y de cr&eacute;dito por lealtad.&nbsp; Por favor visite <a href="http://www.PalmcoEnergy.com/Rewards">www.PalmcoEnergy.com/Rewards</a> para obtener m&aacute;s informaci&oacute;n acerca de los programas de incentivo de PALMco.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Derecho a cancelar/rescindir</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;">Usted tiene 7 d&iacute;as calendario a partir de la fecha del aviso de confirmaci&oacute;n de su empresa de utilidad para comunicarse con ella y cancelar este contrato y su selecci&oacute;n de PALMco como su proveedor de servicio de gas natural.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Fecha de inicio del contrato</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;">La fecha de inicio de su servicio de suministro de gas natural de PALMco ser&aacute; la fecha fijada por su empresa de utilidad de gas natural, la cual debe ser de entre uno y dos ciclos de facturaci&oacute;n tras la inscripci&oacute;n.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>T&eacute;rmino/duraci&oacute;n del contrato</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;">De un mes a otro.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Cargos de cancelaci&oacute;n/terminaci&oacute;n anticipada</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;">No.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>T&eacute;rminos de renovaci&oacute;n</p>
</td>
<td style="width:556px;">
<p style="margin-left:-.9pt;">Su contrato se renovar&aacute; autom&aacute;ticamente cada mes bajo los mismos t&eacute;rminos y condiciones (con el precio del servicio de suministro de gas natural de PALMco igual, m&aacute;s bajo o m&aacute;s alto), salvo que usted o PALMco den por terminado este Contrato proporcion&aacute;ndole al otro un aviso de 30 d&iacute;as.</p>
</td>
</tr>
<tr>
<td style="width:212px;height:67px;">
<p>Informaci&oacute;n de la compa&ntilde;&iacute;a de distribuci&oacute;n</p>
</td>
<td style="width:556px;height:67px;">
<p style="margin-left:-.9pt;">Tome en cuenta la informaci&oacute;n de contacto correcta de su empresa de utilidad de gas natural en la lista a continuaci&oacute;n.</p>

<ol>
<li><strong>Elizabethtown Gas</strong>: Tel&eacute;fono de emergencia: (800) 492-4009, tel&eacute;fono de servicio al cliente: (800) 242-5830, Sitio web: <a href="http://www.elizabethtowngas.com/">http://www.elizabethtowngas.com/</a></li>
<li><strong>New Jersey Natural Gas</strong>: Tel&eacute;fono de emergencia: (800) 427-5325, tel&eacute;fono de servicio al cliente: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(800) 221-0051, Sitio web: <a href="http://www.njng.com/">http://www.njng.com/</a></li>
<li><strong>Public Service Electric &amp; Gas</strong><strong>:</strong> Tel&eacute;fono de servicio al cliente y emergencias: (800) 436-7734, &nbsp;&nbsp;&nbsp;Sitio web: <a href="https://www.pseg.com/">https://www.pseg.com/</a></li>
<li><strong>South Jersey Gas</strong>: Tel&eacute;fono de emergencia: (800) 582-7060, tel&eacute;fono de servicio al cliente: (888) 766-9900, Sitio web: <a href="http://www.southjerseygas.com/">http://www.southjerseygas.com/</a></li>
</ol>

<p style="margin-left:-.9pt;">Su empresa de utilidad de gas natural seguir&aacute; suministr&aacute;ndole gas natural y usted continuar&aacute; pagando el servicio por dicho suministro. Deber&aacute; comunicarse inmediatamente con su empresa de utilidad de gas natural en caso de una emergencia, un corte de gas natural o interrupci&oacute;n del servicio.</p>
</td>
</tr>
<tr>
<td style="width:212px;height:76px;">
<p>&nbsp;</p>
</td>
<td style="width:556px;height:76px;">
<p align="right"><strong>v. </strong><strong>17</strong><strong>-</strong><strong>01</strong><strong>.</strong><strong>12</strong></p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>',
                'created_at' => '2017-03-06 15:12:31',
                'updated_at' => '2017-03-06 15:23:07',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 20,
                'state_id' => 5,
                'template_type' => 'Contract Summary',
                'commodity_id' => 1,
                'locale_code' => 'es',
                'source_file_name' => 'NJ TPS Elec Contract Summary - Res & Comm - V.S.17-01.12 Spanish.docx',
                'version' => 'v. 17-01.12',
                'is_active' => false,
                'template_html' => '<p>&nbsp;</p>

<p align="center"><strong>RESUMEN DE CONTRATO DE PALMCO POWER NJ, LLC</strong></p>

<p>&nbsp;</p>

<p align="center">&nbsp;</p>

<table border="1" cellpadding="0" cellspacing="0" style="width:762px;" width="762">
<tbody>
<tr>
<td style="width:212px;">
<p>Informaci&oacute;n de proveedores terceros:<strong> Al celebrar este contrato, usted acepta comprar su suministro el&eacute;ctrico a este proveedor.</strong></p>
</td>
<td style="width:550px;">
<p style="margin-left:-.7pt;">PALMco Power NJ, LLC Tel&eacute;fono: (877) 726-5862, Sitio web: <a href="http://www.PalmcoEnergy.com">www.PalmcoEnergy.com</a>,</p>

<p style="margin-left:-.7pt;">Correo electr&oacute;nico: <a href="mailto:CustomerService@PALMcoEnergy.com">CustomerService@PALMcoEnergy.com</a>,</p>

<p style="margin-left:-.7pt;">Direcci&oacute;n de correo postal: 10,000 Lincoln Drive East &ndash; Suite 201, Marlton, NJ 08053.</p>

<p style="margin-left:-.7pt;">Direcci&oacute;n de la oficina principal: 8751 18<sup>th</sup> Avenue, Brooklyn, NY 11214; N&uacute;m. de licencia BPU: ESL0049.</p>

<p style="margin-left:-.7pt;">PALMco es responsable de su suministro el&eacute;ctrico.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Estructura de precios</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;"><strong>Variable.</strong> Usted pagar&aacute; un precio inicial de $ [PRODUCT.RATE] por kWh durante los [PRODUCT.TERM_MONTHS] primeros ciclos de facturaci&oacute;n. A partir del tercer ciclo de facturaci&oacute;n, usted pagar&aacute; un precio que variar&aacute; de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, basado en el precio marginal local de la zona (&ldquo;LMP&rdquo;, por las siglas en ingl&eacute;s) determinado en tiempo real o por el mercado diario, las funciones de suministro y representaci&oacute;n que PALMco desempe&ntilde;e para usted, la p&eacute;rdida de capacidad de l&iacute;nea, los costos de cumplimiento, ciertos costos de trasmisi&oacute;n, de capacidad, auxiliares y administrativos incurridos por PALMco y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco.&nbsp; No hay l&iacute;mite en la variaci&oacute;n de precios de su servicio de suministro de electricidad de un ciclo de facturaci&oacute;n al siguiente. Usted tiene la responsabilidad de pagar y reembolsar a PALMco todos los impuestos que correspondan y los dem&aacute;s aranceles, grav&aacute;menes y cargos del gobierno, cualquiera sea su denominaci&oacute;n, que est&eacute;n relacionados con el servicio de suministro el&eacute;ctrico.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Precio de generaci&oacute;n/suministro</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">$ [PRODUCT.RATE] por kWh. Esta es una tarifa introductoria &uacute;nicamente para los [PRODUCT.TERM_MONTHS] primeros ciclos de facturaci&oacute;n.&nbsp;</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Declaraci&oacute;n sobre los ahorros</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">El precio de suministro el&eacute;ctrico de PALMco puede que no siempre le proporcione ahorros.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>La cantidad de tiempo requerido para regresar de TPS al servicio regular o a otro servicio TPS</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">Si usted cancela el servicio con PALMco, el tiempo requerido para cambiar de PALMco al servicio regular o a otro proveedor lo determinar&aacute; su empresa de utilidad de electricidad. PALMco estima que tomar&aacute; alrededor de 1 o 2 ciclos de facturaci&oacute;n a partir de la fecha de su solicitud de cancelaci&oacute;n.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Incentivos</p>
</td>
<td style="width:550px;">
<p>Al momento de la inscripci&oacute;n, los clientes con un uso anual hist&oacute;rico de al menos 4,500 kWh ser&aacute;n elegibles para inscribirse en Restaurant.com Gift Card y PALMco Cares de PALMco.&nbsp; Hay descuentos disponibles para personas mayores.&nbsp; Tras inscribirse con PALMco, todos los clientes son elegibles a inscribirse para los programas de incentivo de recompensas PALMco incentivo por referidos, y de cr&eacute;dito por lealtad. Por favor visite <a href="http://www.PalmcoEnergy.com/Rewards">www.PalmcoEnergy.com/Rewards</a> para obtener m&aacute;s informaci&oacute;n acerca de los programas de incentivo de PALMco.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Derecho a cancelar/rescindir</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">Usted tiene 7 d&iacute;as calendario a partir de la fecha del aviso de confirmaci&oacute;n de su empresa de utilidad para comunicarse con ella y cancelar este contrato y su selecci&oacute;n de PALMco como su proveedor de servicio el&eacute;ctrico.&nbsp;</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Fecha de inicio del contrato</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">La fecha de inicio de su servicio de suministro el&eacute;ctrico de PALMco ser&aacute; la fecha fijada por su empresa de utilidad de electricidad, la cual debe ser de entre uno y dos ciclos de facturaci&oacute;n tras su inscripci&oacute;n.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>T&eacute;rmino/duraci&oacute;n del contrato</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">De un mes a otro.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>Cargos de cancelaci&oacute;n/terminaci&oacute;n anticipada</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">No.</p>
</td>
</tr>
<tr>
<td style="width:212px;">
<p>T&eacute;rminos de renovaci&oacute;n</p>
</td>
<td style="width:550px;">
<p style="margin-left:-.9pt;">Su contrato se renovar&aacute; autom&aacute;ticamente cada mes bajo los mismos t&eacute;rminos y condiciones (con el precio del servicio el&eacute;ctrico de PALMco igual, m&aacute;s bajo o m&aacute;s alto), salvo que usted o PALMco den por terminado el Contrato proporcion&aacute;ndole al otro un aviso de 30 d&iacute;as.</p>
</td>
</tr>
<tr>
<td style="width:212px;height:67px;">
<p>Informaci&oacute;n de la compa&ntilde;&iacute;a de distribuci&oacute;n</p>
</td>
<td style="width:550px;height:67px;">
<p style="margin-left:-.9pt;">Tome en cuenta la informaci&oacute;n de contacto correcta de su empresa de utilidad de electricidad en la lista a continuaci&oacute;n.</p>

<ol>
<li><strong>Jersey Central Power &amp; Light</strong>: Tel&eacute;fono de emergencia: (888) 544-4877, tel&eacute;fono de servicio al cliente: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(800) 662-3115, &nbsp;&nbsp;Sitio web: <a href="https://www.firstenergycorp.com/content/customer/jersey_central_power_light.html">https://www.firstenergycorp.com/content/customer/jersey_central_power_light.html</a></li>
<li><strong>Public Service Electric &amp; Gas</strong><strong>:</strong> Tel&eacute;fono de servicio al cliente y emergencias: (800) 436-7734, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sitio web: <a href="https://www.pseg.com/">https://www.pseg.com/</a></li>
<li><strong>Rockland Electric</strong>/<strong>Orange &amp; Rockland</strong>: Tel&eacute;fono de servicio al cliente y emergencias: (877) 434-4100, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sitio web: <a href="http://www.oru.com/index.html">http://www.oru.com/index.html</a></li>
<li><strong>Atlantic City Electric</strong>: Tel&eacute;fono de emergencia: (800) 833-7476, tel&eacute;fono de servicio al cliente: (800) 642-3780, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sitio web: <a href="https://www.atlanticcityelectric.com/">https://www.atlanticcityelectric.com/</a></li>
</ol>

<p style="margin-left:-.9pt;">Su empresa de utilidad de electricidad seguir&aacute; suministr&aacute;ndole electricidad y usted continuar&aacute; pagando el servicio por dicho suministro. Deber&aacute; comunicarse inmediatamente con su empresa de utilidad de electricidad en caso de una emergencia, un corte de electricidad o interrupci&oacute;n del servicio.</p>
</td>
</tr>
<tr>
<td style="width:212px;height:91px;">
<p>&nbsp;</p>
</td>
<td style="width:550px;height:91px;">
<p align="right"><strong>v.</strong> <strong>17</strong><strong>-</strong><strong>01</strong><strong>.</strong><strong>12</strong></p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>',
                'created_at' => '2017-03-06 15:11:43',
                'updated_at' => '2017-03-06 15:23:54',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 24,
                'state_id' => 8,
                'template_type' => 'Contract Summary',
                'commodity_id' => 2,
                'locale_code' => 'es',
                'source_file_name' => 'PA Gas Contract Summary V.S.17-1.12.docx',
                'version' => 'V.S 17.01-12',
                'is_active' => false,
                'template_html' => '<p align="center"><strong>RESUMEN DEL CONTRATO CON PALMCO ENERGY &ndash; S&Oacute;LO PARA CLIENTES DEL SERVICIO DE GAS NATURAL </strong></p>

<p align="center">&nbsp;</p>

<table border="1" cellpadding="0" cellspacing="0" style="width:648px;" width="648">
<tbody>
<tr>
<td style="width:196px;height:59px;">
<p>Informaci&oacute;n del Proveedor de Gas Natural</p>
</td>
<td style="width:452px;height:59px;">
<p style="margin-left:-.9pt;">PALMco Energy PA, LLC, 8751 18<sup>th</sup> Avenue Brooklyn, NY 11214</p>

<p style="margin-left:-.9pt;">Tel&eacute;fono: (877) 726-5862,</p>

<p style="margin-left:-.9pt;">Sitio web: www.PalmcoEnergy.com</p>

<p style="margin-left:-.9pt;">PALMco Energy (&ldquo;PALMco&rdquo;) es responsable de los cargos por su suministro de gas natural.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:63px;">
<p>Estructura de Precios</p>
</td>
<td style="width:452px;height:63px;">
<p style="margin-left:-.9pt;">Variable. Usted pagar&aacute; un precio introductorio de $ [PRODUCT.RATE] por <u>[PRODUCT.UNIT_OF_MEASURE]</u> durante los [PRODUCT.TERM_MONTHS] primeros ciclos de facturaci&oacute;n de este Contrato. A partir del cuarto ciclo de facturaci&oacute;n, usted pagar&aacute; un precio de $ <u>[NEXT_PRODUCT.RATE]</u> por [NEXT_PRODUCT.UNIT_OF_MEASURE]<u>,</u>&nbsp; y en adelante, pagar&aacute; un precio por el servicio de suministro de gas natural que podr&iacute;a variar de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, de acuerdo al precio correspondiente de cierre mensual del NYMEX para gas natural, los costos de transporte interestatal correspondientes, las funciones de suministro y gesti&oacute;n que PALMco desempe&ntilde;e para usted y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco. Usted recibir&aacute; notificaci&oacute;n de cualquier cambio de tarifa al recibir la factura que refleja la nueva tarifa luego de completarse un ciclo de facturaci&oacute;n. No hay l&iacute;mite de cu&aacute;nto variar&aacute; el precio de su servicio de suministro de gas natural de un ciclo de facturaci&oacute;n al siguiente. Usted tambi&eacute;n tiene la responsabilidad de pagar y reembolsar a PALMco todos los impuestos que correspondan y los dem&aacute;s aranceles, grav&aacute;menes y cargos del gobierno, cualquiera sea su denominaci&oacute;n, que est&eacute;n relacionados con la utilidad de gas natural prestado en virtud de su Contrato. Esto podr&iacute;a incluir, sin limitarse a, los impuestos sobre servicios p&uacute;blicos, ingresos brutos, ventas o uso que se cobran a PALMco y/o a usted por las autoridades federales, estatales y/o locales, o que PALMco traspasa a usted. Este Contrato no incluye cargos de transporte, entrega u otros cargos que su empresa de utilidad de gas natural pudiera imponer.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:31px;">
<p>Precio de Suministro de Gas Natural</p>
</td>
<td style="width:452px;height:31px;">
<p style="margin-left:-.9pt;">$ <u>[PRODUCT.RATE]</u> por [PRODUCT.UNIT_OF_MEASURE]. Esta es una tarifa introductoria s&oacute;lo para los [PRODUCT.TERM_MONTHS] primeros ciclos de facturaci&oacute;n. A partir del cuarto ciclo de facturaci&oacute;n, pagar&aacute; un precio de $ <u>[NEXT_PRODUCT.RATE]</u> por <u>[NEXT_PRODUCT.UNIT_OF_MEASURE]</u>, ya continuaci&oacute;n, su tarifa variar&aacute; como se describi&oacute; anteriormente.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:29px;">
<p>Declaraci&oacute;n Sobre Ahorros</p>
</td>
<td style="width:452px;height:29px;">
<p style="margin-left:-.9pt;">No se garantizan ahorros.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:26px;">
<p>Exigencias de Dep&oacute;sito</p>
</td>
<td style="width:452px;height:26px;">
<p>Ninguna.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:46px;">
<p>Incentivos</p>
</td>
<td style="width:452px;height:46px;">
<p style="margin-left:-.9pt;">Al momento de la inscripci&oacute;n, ser&aacute;n elegibles para inscribirse en Restaurant.com Gift Card y PALMco Cares de PALMco. Hay descuentos disponibles para personas mayores. Tras inscribirse con PALMco, todos los clientes son elegibles a inscribirse para los programas de incentivo de recompensas PALMco de incentivo por referidos, y de cr&eacute;dito por lealtad. Por favor, visite www.PalmcoEnergy.com/Rewards para obtener m&aacute;s informaci&oacute;n acerca de los programas de incentivo de PALMco.</p>

<p style="margin-left:-.9pt;">&nbsp;</p>
</td>
</tr>
<tr>
<td style="width:196px;height:29px;">
<p>Fecha de Inicio del Contrato</p>
</td>
<td style="width:452px;height:29px;">
<p style="margin-left:-.9pt;">La fecha de inicio comenzar&aacute; con la primera lectura de su medidor por parte de su empresa de utilidad local tras su inscripci&oacute;n en PALMco, usualmente de 1 a 2 ciclos de facturaci&oacute;n.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:31px;">
<p>T&eacute;rmino/Duraci&oacute;n del Contrato</p>
</td>
<td style="width:452px;height:31px;">
<p style="margin-left:-.9pt;">Mes-a-mes.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:58px;">
<p>Cargos de Cancelaci&oacute;n/Terminaci&oacute;n Anticipada</p>
</td>
<td style="width:452px;height:58px;">
<p style="margin-left:-.9pt;">Ninguna.</p>
</td>
</tr>
<tr>
<td style="width:196px;height:58px;">
<p>Fin del Contrato:</p>
</td>
<td style="width:452px;height:58px;">
<p style="margin-left:-.9pt;">Este Contrato se renovar&aacute; autom&aacute;ticamente de mes en mes bajo los mismos t&eacute;rminos y condiciones, o con cambios que le beneficien a usted (con igual, menor o mayor precio por el suministro de gas), a menos que usted o PALMco den por terminado el Contrato.</p>
</td>
</tr>
</tbody>
</table>

<p align="center">&nbsp;</p>

<p align="right"><strong>V.S 17.01-12</strong></p>',
                'created_at' => '2017-03-06 15:14:40',
                'updated_at' => '2017-03-06 15:28:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 23,
                'state_id' => 8,
                'template_type' => 'Contract Summary',
                'commodity_id' => 1,
                'locale_code' => 'es',
                'source_file_name' => 'PA Electric Contract Summary V.S.17-01.12.docx',
                'version' => 'v. 17-01.12',
                'is_active' => false,
                'template_html' => '<p align="center"><strong>PALMCO POWER CONTRACT RESUMEN - SOLO PARA CLIENTES EL&Eacute;CTRICOS</strong></p>

<table align="center" border="1" cellpadding="0" cellspacing="0" style="width:768px;" width="768">
<tbody>
<tr>
<td style="width:209px;">
<p>Informaci&oacute;n del Proveedor de Generaci&oacute;n Electricidad</p>
</td>
<td style="width:559px;">
<p style="margin-left:-.9pt;">PALMco Power PA, LLC, 8751 18th Avenue Brooklyn, NY 11214</p>

<p style="margin-left:-.9pt;">Tel&eacute;fono: (877) 726-5862,</p>

<p style="margin-left:-.9pt;">Sitio web: www.PalmcoEnergy.comPALMco Power (&quot;PALMco&quot;) es responsable por sus cargos de generaci&oacute;n el&eacute;ctrica.</p>
</td>
</tr>
<tr>
<td style="width:209px;height:255px;">
<p>Estructura de precios</p>
</td>
<td style="width:559px;height:255px;">
<p style="margin-left:-.7pt;">Variable. Usted pagar&aacute; un precio introductorio de $ [PRODUCT.RATE] por kWh durante los [PRODUCT.TERM_MONTHS] primeros ciclos de facturaci&oacute;n de este Contrato. A partir del cuarto ciclo de facturaci&oacute;n, usted pagar&aacute; un precio de $ [NEXT_PRODUCT.RATE] por kWh, y en adelante, pagar&aacute; un precio por el servicio de suministro el&eacute;ctrico que podr&iacute;a variar de un mes a otro seg&uacute;n lo determine PALMco a su sola discreci&oacute;n, basado sobre el precio marginal local de la zona (&ldquo;LMP&rdquo;, por las siglas en ingl&eacute;s) determinado en tiempo real o por el mercado diario, las funciones de suministro y representaci&oacute;n que PALMco desempe&ntilde;e para usted, los costos de p&eacute;rdida de capacidad de l&iacute;nea, los costos de cumplimiento, ciertos costos de trasmisi&oacute;n, de capacidad, auxiliares y administrativos incurridos por PALMco y dem&aacute;s condiciones prevalecientes del mercado, adem&aacute;s de los costos, gastos e ingresos correspondientes a PALMco. Usted recibir&aacute; notificaci&oacute;n de cualquier cambio de tarifa al recibir la factura que refleja la nueva tarifa luego de completarse un ciclo de facturaci&oacute;n. No hay l&iacute;mite en la variaci&oacute;n de precios de su servicio de suministro de electricidad de un ciclo de facturaci&oacute;n al siguiente. Usted tambi&eacute;n tiene la responsabilidad de pagar y reembolsar a PALMco todos los impuestos que correspondan y los dem&aacute;s aranceles, grav&aacute;menes y cargos del gobierno, cualquiera sea su denominaci&oacute;n, que est&eacute;n relacionados con el servicio de suministro de generaci&oacute;n el&eacute;ctrica prestado en virtud de su Contrato. Esto podr&iacute;a incluir, sin limitarse a, los impuestos sobre servicios p&uacute;blicos, ingresos brutos, ventas o uso que se cobran a PALMco y/o a usted por las autoridades federales, estatales y/o locales, o que PALMco traspasa a usted. Este Contrato no incluye cargos de transporte, entrega u otros cargos que su empresa de utilidad de electricidad pudiera imponer.</p>
</td>
</tr>
<tr>
<td style="width:209px;">
<p>Precio de Generaci&oacute;n/Suministro</p>
</td>
<td style="width:559px;">
<p style="margin-left:-.9pt;">$ [PRODUCT.RATE] por kWh. Esta es una tasa introductoria para los [PRODUCT.TERM_MONTHS] primeros ciclos de facturaci&oacute;n solamente. Comenzando en el cuarto ciclo de facturaci&oacute;n, usted pagar&aacute; un precio de $ [NEXT_PRODUCT.RATE] por kWh, y despu&eacute;s de eso, su tasa variar&aacute; de mes a mes seg&uacute;n los factores descritos anteriormente.</p>
</td>
</tr>
<tr>
<td style="width:209px;">
<p>Declaraci&oacute;n Sobre Ahorros</p>
</td>
<td style="width:559px;">
<p style="margin-left:-.9pt;">No se garantizan ahorros.</p>
</td>
</tr>
<tr>
<td style="width:209px;">
<p>Exigencias de Dep&oacute;sito</p>
</td>
<td style="width:559px;">
<p style="margin-left:-.9pt;">Ninguna.</p>
</td>
</tr>
<tr>
<td style="width:209px;">
<p>Incentivos</p>
</td>
<td style="width:559px;">
<p>En el momento de la inscripci&oacute;n, los clientes son elegibles para inscribirse en la tarjeta de regalo de Restaurant.com de PALMco y los cuidados de PALMco. Hay descuentos disponibles para personas mayores Despu&eacute;s de inscribirse con PALMco, todos los clientes son elegibles para inscribirse en los programas de Incentivos de Referencia y Cr&eacute;ditos de Lealtad de PALMco. Visite www.PalmcoEnergy.com/Rewards para obtener m&aacute;s informaci&oacute;n sobre los programas de incentivos de PALMco.</p>
</td>
</tr>
<tr>
<td style="width:209px;">
<p>Fecha de Inicio del Contrato</p>
</td>
<td style="width:559px;">
<p style="margin-left:-.9pt;">La fecha de inicio ser&aacute; aquella fijada por su compa&ntilde;&iacute;a de utilidad de electricidad.</p>
</td>
</tr>
<tr>
<td style="width:209px;">
<p>T&eacute;rmino / duraci&oacute;n del contrato</p>
</td>
<td style="width:559px;">
<p style="margin-left:-.9pt;">Mes-a-mes.</p>
</td>
</tr>
<tr>
<td style="width:209px;">
<p>Cargos de Cancelaci&oacute;n/Terminaci&oacute;n Anticipada</p>
</td>
<td style="width:559px;">
<p style="margin-left:-.9pt;">Ninguno.</p>
</td>
</tr>
<tr>
<td style="width:209px;">
<p>T&eacute;rminos de Renovaci&oacute;n</p>
</td>
<td style="width:559px;">
<p style="margin-left:-.9pt;">El Contrato se renovar&aacute; autom&aacute;ticamente mes a mes en los mismos t&eacute;rminos o con cambios en su beneficio (con el precio del servicio el&eacute;ctrico permaneciendo igual, decreciente o en aumento), a menos que usted o PALMco Power rescindan el Contrato.</p>
</td>
</tr>
<tr>
<td style="width:209px;height:74px;">
<p>Cambios en los T&eacute;rminos del Contrato</p>
</td>
<td style="width:559px;height:74px;">
<p style="margin-left:-.9pt;">Excepto en caso de cambio de su beneficio, siempre que PALMco Power proponga cambiar los t&eacute;rminos de servicio (salvo el precio del servicio de suministro de electricidad), usted recibir&aacute; dos avisos separados por escrito: uno inicial y otro de opciones. Usted recibir&aacute; un aviso inicial con 45 a 60 d&iacute;as de antelaci&oacute;n a la fecha de entrada en vigor del cambio propuesto y un aviso de opciones con al menos 30 d&iacute;as de antelaci&oacute;n a dicha fecha. Estos avisos explicar&aacute;n sus opciones para seguir adelante.</p>
</td>
</tr>
<tr>
<td style="width:209px;height:67px;">
<p>Informaci&oacute;n Sobre la Compa&ntilde;&iacute;a (Servicio P&uacute;blico) de Distribuci&oacute;n de Electricidad</p>
</td>
<td style="width:559px;height:67px;">
<p>Duquesne Light - Centro de Servicio al Cliente, Tel&eacute;fono: 1 (412) 393-7100, Sitio web: https://www.duquesnelight.com/</p>

<p>Met-Ed - Centro de Servicio al Cliente, Tel&eacute;fono: 1 (800) 545-7741, Sitio web: https://www.firstenergycorp.com/content/customer/met_edison.html</p>

<p>PECO - Centro de Servicio al Cliente, Tel&eacute;fono: 1 (800) 494-4000, Sitio web: https://www.peco.com/</p>

<p>Penelec - Centro de Servicio al Cliente, Tel&eacute;fono: 1 (800) 545-7411, Sitio web: https://www.firstenergycorp.com/content/customer/penelec.html</p>

<p>PPL Electric&nbsp; - Centro de Servicio al Cliente, Tel&eacute;fono: 1 (800) 342-5775, Sitio web: https://www.pplelectric.com/</p>

<p>West Penn Power - Centro de Servicio al Cliente, Tel&eacute;fono: 1 (800) 686-0021, Sitio web: https://www.firstenergycorp.com/content/customer/west_penn_power.html</p>

<p>Su empresa de utilidad es responsable de sus cargos de distribuci&oacute;n, lectura de su contador, emergencias, cortes de electricidad e interrupciones del servicio.</p>
</td>
</tr>
<tr>
<td style="width:209px;height:35px;">
<p>&nbsp;</p>
</td>
<td style="width:559px;height:35px;">
<p align="right"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; v. 17-01.12</strong></p>
</td>
</tr>
</tbody>
</table>

<div style="clear:both;">&nbsp;</div>

<p>&nbsp;</p>',
                'created_at' => '2017-03-06 15:13:52',
                'updated_at' => '2017-03-06 15:29:33',
                'deleted_at' => NULL,
            ),
        ));
        
        \DB::statement("SELECT setval('legal_templates_id_seq', COALESCE((SELECT MAX(id)+1 FROM legal_templates), 1), false)");
    }
}