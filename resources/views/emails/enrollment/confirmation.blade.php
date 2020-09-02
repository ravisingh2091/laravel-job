<!DOCTYPE html>
<html>
<head>
    <title>{{ $enrollment->marketer->short_name }} Enrollment Confirmation</title>
    <style type="text/css">
        v: * {
            behavior: url(#default#VML);
            display: inline-block;
        }

        /*-----HEADER-----*/
        .headers {
            font-size: 14px;
            color: #4c4c4c;
        }

        .headers .headline {
            font-size: 20px;
            color: #4c4c4c;
            padding: 0;
            font-weight: 900;
            line-height: 1.5em;
        }

        .headers h1, h2, h3, h4, h5, h6 {
            font-size: 20px !important;
            color: #505E67 !important;
            font-family: Helvetica, Arial, sans-serif;
            line-height: 1.5em;
            margin: 0 !important;
            padding: 0 !important;
            font-weight: 900;
        }

        .headers .paragraph {
            font-size: 14px;
            color: #4c4c4c;
            line-height: 1.5em;
        }

        .headers p {
            font-size: 14px !important;
            color: #505E67 !important;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: 100;
            line-height: 1.5em !important;
            margin: 0;
            padding: 0;
        }

        .headers img {
            padding: 0;
        }

        .headers a {
            color: #3498db;
        }

        /*-----MAIN BODY-----*/
        .main {
            font-size: 14px;
            color: #4c4c4c;
        }

        .main .headline {
            font-size: 20px;
            color: #4c4c4c;
            padding: 0;
            font-weight: 900;
            line-height: 1.5em;
        }

        .main h1, h2, h3, h4, h5, h6 {
            font-size: 20px !important;
            color: #505E67 !important;
            font-family: Helvetica, Arial, sans-serif;
            line-height: 1.5em;
            margin: 0 !important;
            padding: 0 !important;
            font-weight: 900;
        }

        .main .paragraph {
            font-size: 14px;
            color: #4c4c4c;
            line-height: 1.5em;
        }

        .main p {
            font-size: 14px !important;
            color: #505E67 !important;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: 100;
            line-height: 1.5em !important;
            margin: 0;
            padding: 0;
        }

        .main a {
            color: #3498db;
        }

        /*-----ARTICLE-----*/
        .article {
            font-size: 14px;
            color: #4c4c4c;
            padding: 15px 0;
        }

        .article .headline {
            font-size: 20px;
            color: #4c4c4c;
            padding: 0;
            font-weight: 900;
            line-height: 1.5em;
        }

        .article .paragraph {
            font-size: 14px;
            color: #4c4c4c;
            margin: 5px 0;
            line-height: 1.5em;
        }

        .article img {
            padding: 5px;
            margin: 5px;
        }

        .article .text {
            padding: 12px;
        }

        .article .permalink {
            text-align: right;
        }

        .article a {
            color: #3498db;
        }

        /*-----ARTICLE LEFT-----*/
        .article {
            font-size: 14px;
            color: #4c4c4c;
            padding: 15px 0;
        }

        .article .headline {
            font-size: 20px;
            color: #4c4c4c;
            padding: 0;
            font-weight: 900;
            line-height: 1.5em;
        }

        .article .paragraph {
            font-size: 14px;
            color: #4c4c4c;
            margin: 5px 0;
            line-height: 1.5em;
        }

        .article img {
            padding: 5px;
            margin: 5px;
        }

        .article .text {
            padding: 12px;
        }

        .article .permalink {
            text-align: right;
        }

        .article a {
            color: #3498db;
        }

        /*-----ARTICLE RIGHT-----*/
        .article {
            font-size: 14px;
            color: #4c4c4c;
            padding: 15px 0;
        }

        .article .headline {
            font-size: 20px;
            color: #4c4c4c;
            padding: 0;
            font-weight: 900;
            line-height: 1.5em;
        }

        .article .paragraph {
            font-size: 14px;
            color: #4c4c4c;
            margin: 5px 0;
            line-height: 1.5em;
        }

        .article img {
            padding: 5px;
            margin: 5px;
        }

        .article .text {
            padding: 12px;
        }

        .article .permalink {
            text-align: right;
        }

        .article a {
            color: #3498db;
        }

        /*-----FOOTER-----*/
        .footers {
            font-size: 12px;
            color: #4c4c4c;
        }

        .footers .headline {
            font-size: 16px;
            color: #4c4c4c;
            padding: 0px;
            font-weight: 900;
            line-height: 1.5em;
            text-align: center !important;
        }

        .footers h1, h2, h3, h4, h5, h6 {
            font-size: 20px !important;
            color: #505E67 !important;
            font-family: Helvetica, Arial, sans-serif;
            line-height: 1.5em;
            margin: 0 !important;
            padding: 0 !important;
            font-weight: 900;
        }

        .footers .paragraph {
            font-size: 12px;
            color: #4c4c4c;
            margin: 5px 0;
            line-height: 1.5em;
            text-align: center !important;
        }

        .footers p {
            font-size: 14px !important;
            color: #505E67 !important;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: 100;
            line-height: 1.5em !important;
            margin: 0;
            padding: 0;
        }

        .footers a {
            color: #3498db;
        }

        /*-----OVERALL STYLES-----*/
        body {
            max-width: 600px;
            margin: auto;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: 100;
            background-color: #ffffff;
            -webkit-font-smoothing: antialiased;
        }

        td {
            border-spacing: 0;
        }

        tr {
            border-spacing: 0;
        }

        table {
            max-width: 600px !important;
            border-spacing: 0 !important;
            border: none;
        }

        strong {
            font-weight: 700 !important;
        }

        .containerbox {
            width: 100%;
            max-width: 600px !important;
            font-family: Helvetica, Arial, sans-serif;
            background-color: #ffffff;
            font-weight: 100;
        }

        a {
            color: #3498db;
        }

        br {
            line-height: 1.5em !important;
        }

        img {
            height: auto !important;
            max-width: 100%;
        }

        /* Removes unwanted borders around hyperlinked images */
        a img {
            border: 0;
            outline: none;
            text-decoration: none;
        }

        #aweber_rem {
            margin: 0 auto;
        }

        /*-----MEDIA QUERIES-----*/
        /* -Smaller Mobile Devices- */
        @media only screen and (min-width: 10px) and (max-width: 400px) {
            .containerbox {
                width: 100% !important;
                margin: auto;
                clear: both !important;
                display: block;
            }

            table {
                width: 100%;
            }

            .headline {
                font-size: 22px !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .paragraph {
                font-size: 18px !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .footers .headline {
                font-size: 20px !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .footers .paragraph {
                font-size: 18px !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            img {
                height: auto !important;
                max-height: 300%;
                max-width: 100%;
            }

            .share img {
                width: 20px !important;
                height: auto !important;
                display: inline-block;
            }

            td {
                width: 100% !important;
                float: left;
                display: block !important;
                padding-left: 0;
                padding-right: 0;
                box-sizing: border-box;
            }
        }

        /* -Larger Mobile Devices- */
        @media only screen and (min-width: 401px) and (max-width: 500px) {
            .containerbox {
                width: 100% !important;
                margin: auto;
                clear: both !important;
                display: block;
            }

            table {
                width: 100%;
            }

            .headline {
                font-size: 26px !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .paragraph {
                font-size: 22px !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .footers .headline {
                font-size: 20px !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .footers .paragraph {
                font-size: 18px !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            img {
                height: auto !important;
                max-height: 300%;
                max-width: 100%;
            }

            .share img {
                width: 20px !important;
                height: auto !important;
                display: inline-block;
            }

            td {
                width: 100% !important;
                float: left;
                display: block !important;
                padding-left: 0;
                padding-right: 0;
                box-sizing: border-box;
            }
        }

    </style>
</head>
<body>
<center>
    <div align="center">
        <div class="containerbox"
             style="width: 100%; max-width: 600px; font-family: Helvetica, Arial, sans-serif; background-color:rgb(255, 255, 255); font-weight: 100;">
            <center>
                <!--[if !mso]><!-->
                <table bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                       style="width: 100%; font-family: Helvetica, Arial, sans-serif; font-weight: 100; max-width: 600px; border-spacing: 0px;border-width: medium; border-style: none;">
                    <!--<![endif]-->
                    <!--[if gte mso 9]>
                    <table bgcolor="#ffffff" cellpadding="0" cellspacing="0" width="600"
                           style="font-family: Helvetica,Arial, sans-serif; font-weight: 100; ">
                    <![endif]-->
                    <!--Header-->
                    <tbody>
                    <tr style="border-spacing: 0px;">
                        <td style="border-spacing: 0px;">
                            <table align="left" cellpadding="0" cellspacing="0" width="100%"
                                   style="max-width: 600px; border-spacing: 0px; border-width: medium; border-style: none;">
                                <tbody>
                                <tr style="border-spacing: 0px;">
                                    <td class="headers"
                                        style="text-align: left; font-size: 14px; color: rgb(76, 76, 76); border-spacing: 0px;">
                                        <div class="region">
                                            <div>
                                                <table class="row"
                                                       style="width: 100%; max-width: 600px; border-spacing: 0px; border-width: medium; border-style: none;">
                                                    <tbody>
                                                    <tr style="border-spacing: 0px;">
                                                        <td class="container"
                                                            width="auto" valign="top"
                                                            style="width: auto; border-spacing: 0px;"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <!--End Header-->
                    <!--Body-->
                    <tr style="border-spacing: 0px;">
                        <td style="border-spacing: 0px;">
                            <table align="left" cellpadding="20" cellspacing="0" width="100%"
                                   style="max-width: 600px; border-spacing: 0px; border-width: medium; border-style: none;">
                                <tbody>
                                <tr style="border-spacing: 0px;">
                                    <td class="main"
                                        style="text-align: left; font-size: 14px;color: rgb(76, 76, 76); border-spacing: 0px;">
                                        <div class="region">
                                            <div>
                                                <table class="row"
                                                       style="width: 100%; max-width: 600px; border-spacing: 0px; border-width: medium; border-style: none;">
                                                    <tbody>
                                                    <tr style="border-spacing: 0px;">
                                                        <td class="container" width="auto" valign="top"
                                                            style="width: auto; border-spacing: 0px;">
                                                            <div class="definition-parent"><!--Headline-->
                                                                <div class="headline"
                                                                     style="font-size: 20px; color: rgb(76, 76, 76); padding: 0px; font-weight: 900; line-height: 1.5em;">
                                                                    <div>
                                                                        <div style="text-align: right;"><span
                                                                                    style="font-family:tahoma"><span
                                                                                        style="color:{{ $color }}">ENROLLMENT CONFIRMATION</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="definition-parent">
                                                                <div class="divider">
                                                                    <table cellpadding="0" cellspacing="0" width="100%"
                                                                           style="max-width: 600px; border-spacing: 0px; border-width: medium; border-style: none;">
                                                                        <tbody>
                                                                        <tr style="border-spacing: 0px;">
                                                                            <td style="padding: 10px 0px; border-spacing: 0px;">
                                                                                <table style="border-spacing: 0px; max-width: 600px; border-width: medium; border-style: none;"
                                                                                       width="100%">
                                                                                    <tbody>
                                                                                    <tr style="border-spacing: 0px;">
                                                                                        <td style="border-collapse: collapse; border-top: 2px solid rgb(238, 238, 238); font-size: 4px; border-spacing: 0px;">
                                                                                            &nbsp;
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="definition-parent"><!--Paragraph-->
                                                                <div class="paragraph"
                                                                     style="font-size: 14px; color: rgb(76, 76, 76); line-height: 1.5em;">
                                                                    <div aw-variable="value">
                                                                        <div>
                                                                            <div>Dear {{ $enrollment->displayName() }}
                                                                                ,<br style="line-height: 1.5em;"><br
                                                                                        style="line-height: 1.5em;">
                                                                                Thank you for
                                                                                choosing {{ $enrollment->marketer->short_name }}
                                                                                as your
                                                                                energy
                                                                                supplier. We look forward to
                                                                                serving you as one of our preferred
                                                                                customers.
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;"></div>
                                                                            <div>This letter is confirming your
                                                                                selection of
                                                                                {{ $enrollment->marketer->short_name }}
                                                                                as
                                                                                your {{ $enrollment->commodityName() }}
                                                                                supplier.
                                                                                @if (str_is('internal', $enrollment->edi_provider))
                                                                                    This package contains a copy of
                                                                                    @if ($enrollment->product->utilityTerritory->state->confirmation_terms_of_service)
                                                                                        the <strong
                                                                                                style="font-weight: 700;">
                                                                                            Terms and
                                                                                            Conditions</strong>,
                                                                                    @endif
                                                                                    @if ($enrollment->product->utilityTerritory->state->confirmation_contract_summary)
                                                                                        and a <strong
                                                                                                style="font-weight: 700;">Contract
                                                                                            Summary</strong>&nbsp;with
                                                                                        key
                                                                                        elements
                                                                                        of your service
                                                                                        with {{ $enrollment->marketer->short_name }}
                                                                                    @endif
                                                                                    @if ($enrollment->product->utilityTerritory->state->confirmation_utility_supplement)
                                                                                        &nbsp;and a
                                                                                        <strong style="font-weight: 700;">Residential
                                                                                            Customer Bill
                                                                                            Comparison</strong>
                                                                                    @endif
                                                                                    .
                                                                                @endif
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;">
                                                                            </div>
                                                                            <div><span style="color:{{ $color }}"><span
                                                                                            style="font-size:15px">WE ARE CURRENTLY PROCESSING YOUR ENROLLMENT</span></span>
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;"></div>
                                                                            <div>Your enrollment request is currently
                                                                                being
                                                                                processed and will be sent
                                                                                to your utility. You will receive a
                                                                                confirmation notice
                                                                                from your utility confirming
                                                                                your selection
                                                                                of {{ $enrollment->marketer->short_name }}
                                                                                as
                                                                                your {{ $enrollment->commodityName() }}
                                                                                supplier. Your service will begin with
                                                                                your
                                                                                first meter read by
                                                                                your utility after your enrollment is
                                                                                accepted, and may take up to 1-2 billing
                                                                                cycles.
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;">
                                                                            </div>
                                                                            <div>If, for any reason, we are unable to
                                                                                enroll
                                                                                your account we will be sure to contact
                                                                                you
                                                                                to resolve the issue.&nbsp;
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;"></div>
                                                                            <div><span style="color:{{ $color }}"><span
                                                                                            style="font-size:15px">CANCELLATION OF SERVICE</span></span>
                                                                            </div>
                                                                            <div><br style="line-height:1.5em;">
                                                                            </div>
                                                                            <div>After you have begun receiving service
                                                                                from
                                                                                {{ $enrollment->marketer->short_name }},
                                                                                you may opt out or cancel your
                                                                                service with
                                                                                {{ $enrollment->marketer->short_name }}
                                                                                at any time.&nbsp; It typically
                                                                                takes
                                                                                between one to two billing cycles
                                                                                (approximately 30 to 60 days) for you to
                                                                                be
                                                                                switched back to your utility
                                                                                or another supplier after you opt out or
                                                                                cancel your service
                                                                                with {{ $enrollment->marketer->short_name }}
                                                                                .&nbsp;
                                                                                During this
                                                                                time, {{ $enrollment->marketer->short_name }}
                                                                                will continue
                                                                                to
                                                                                supply and charge you for the
                                                                                service you receive
                                                                                at {{ $enrollment->marketer->short_name }}
                                                                                's rates in
                                                                                effect at that time.
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;">
                                                                            </div>
                                                                            <div>Below is a summary of your service
                                                                                account
                                                                                with {{ $enrollment->marketer->short_name }}
                                                                                :
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;"></div>
                                                                            <div><span style="color:{{ $color }}">CONTACT INFORMATION</span>
                                                                            </div>
                                                                            <div style="margin-left:.5in;"><br
                                                                                        style="line-height: 1.5em;">
                                                                            </div>
                                                                            <div style="margin-left:.5in;"><strong
                                                                                        style="font-weight: 700;">Customer
                                                                                    Enrollment Request Date:</strong>
                                                                                {{ $enrollment->date_created }}
                                                                            </div>
                                                                            <div style="margin-left:.5in;"><strong
                                                                                        style="font-weight: 700;">
                                                                                    Customer
                                                                                    Name:</strong> {{ $enrollment->displayName() }}
                                                                            </div>
                                                                            <div style="margin-left:.5in;"><strong
                                                                                        style="font-weight:700;">Primary
                                                                                    Email Address:</strong>
                                                                                {{ $enrollment->email }}
                                                                            </div>
                                                                            <div style="margin-left:.5in;"><strong
                                                                                        style="font-weight: 700;">Primary
                                                                                    Telephone Number:</strong>
                                                                                &nbsp;{{ $enrollment->primary_phone }}
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;">
                                                                            </div>
                                                                            <div>
                                                                                <span style="color:{{ $color }}">PLAN DETAILS</span>
                                                                            </div>
                                                                            <div style="margin-left:.5in;"><br
                                                                                        style="line-height: 1.5em;">
                                                                            </div>
                                                                            <div style="margin-left:.5in;">
                                                                                <strong style="font-weight: 700;">Utility:</strong>
                                                                                {{ $enrollment->product->utilityTerritory->name }}
                                                                            </div>
                                                                            <div style="margin-left:.5in;"><strong
                                                                                        style="font-weight: 700;">Utility
                                                                                    Account Number:</strong>
                                                                                {{ $enrollment->utility_account_number }}
                                                                            </div>
                                                                            <div style="margin-left:.5in;"><strong
                                                                                        style="font-weight: 700;">Rate
                                                                                    Plan:</strong>
                                                                                @if (str_is('fixed', $enrollment->product->productType->code))
                                                                                    Fixed Rate of
                                                                                @else
                                                                                    Introductory Rate of
                                                                                @endif
                                                                                    &nbsp;${{ $enrollment->product->rate }}
                                                                                / {{ $enrollment->product->unit_of_measure }}
                                                                                for {{ $enrollment->product->term_months }}
                                                                                Billing Cycles.
                                                                                @if ($enrollment->product->secondary_rate > 0)
                                                                                    Followed by
                                                                                    ${{ $enrollment->product->secondary_rate }}
                                                                                    / {{ $enrollment->product->unit_of_measure }}
                                                                                    for {{ $enrollment->product->secondary_term_months }}
                                                                                    billing cycles.
                                                                                @endif
                                                                            </div>
                                                                            <div style="margin-left:.5in;"><strong
                                                                                        style="font-weight: 700;">Enrollment
                                                                                    Fees:</strong> None
                                                                            </div>
                                                                            <div style="margin-left:.5in;"><strong
                                                                                        style="font-weight: 700;">Cancellation
                                                                                    Fees:</strong>
                                                                                $ {{ $enrollment->product->cancel_fee }}
                                                                            </div>
                                                                            <div style="margin-left:.5in;"><strong
                                                                                        style="font-weight: 700;">Budget
                                                                                    Billing:</strong> Available upon
                                                                                request.
                                                                            </div>
                                                                            <div style="margin-left:.5in;"><strong
                                                                                        style="font-weight: 700;">Description:</strong> {{ $enrollment->product->website_description }}
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;">
                                                                            </div>
                                                                            <div><span style="color:{{ $color }}">YOUR FEEDBACK IS IMPORTANT TO US</span>
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;"></div>
                                                                            <div>You may receive a phone call from us to
                                                                                obtain your feedback
                                                                                regarding your enrollment experience.
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;"></div>
                                                                            <div>If not, we'd love to get your feedback,
                                                                                so
                                                                                please call us at the number below and
                                                                                tell
                                                                                us:
                                                                            </div>
                                                                            <ul>
                                                                                <li>About your overall sales experience.
                                                                                </li>
                                                                                <li>Any questions about the pricing plan
                                                                                    or the supply service you signed up
                                                                                    for.
                                                                                </li>
                                                                                <li>Anything we could have done to
                                                                                    improve your enrollment experience.
                                                                                </li>
                                                                            </ul>
                                                                            <div><br style="line-height: 1.5em;">
                                                                            </div>
                                                                            <div><span style="color:{{ $color }}">QUESTIONS?<br
                                                                                            style="line-height: 1.5em;"></span><br
                                                                                        style="line-height: 1.5em;">
                                                                            </div>
                                                                            <div>
                                                                                <span style="color:{{ $color }}"> </span>
                                                                            </div>
                                                                            <div>If you have any questions, please feel
                                                                                free
                                                                                to contact us at
                                                                                {{ $enrollment->marketer->support_phone_number }} weekdays 8:00 am to 7:00 pm
                                                                                or
                                                                                email us
                                                                                at {{ $enrollment->marketer->support_email }}
                                                                                <em>.</em>
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;">
                                                                            </div>
                                                                            <div>Thank you again for choosing us as
                                                                                your energy supplier!
                                                                            </div>
                                                                            <div><br style="line-height: 1.5em;"></div>
                                                                            <div>Sincerely,
                                                                            </div>
                                                                            <div><br style="line-height:1.5em;">
                                                                            </div>
                                                                            <div>{{ $enrollment->marketer->short_name }}
                                                                                Customer Service
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="definition-parent">
                                                                <div class="divider">
                                                                    <table cellpadding="0" cellspacing="0" width="100%"
                                                                           style="max-width: 600px; border-spacing: 0px; border-width: medium; border-style: none;">
                                                                        <tbody>
                                                                        <tr style="border-spacing: 0px;">
                                                                            <td style="padding: 10px 0px; border-spacing: 0px;">
                                                                                <table style="border-spacing: 0px; max-width: 600px; border-width: medium; border-style: none;"
                                                                                       width="100%">
                                                                                    <tbody>
                                                                                    <tr style="border-spacing: 0px;">
                                                                                        <td style="border-collapse: collapse; border-top: 2px solid rgb(238, 238, 238); font-size: 4px;border-spacing: 0px;">
                                                                                            &nbsp;
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <!--End Body-->
                    <!--Footer-->
                    <tr style="border-spacing: 0px;">
                        <td style="border-spacing: 0px;">
                            <table align="left" cellpadding="0" cellspacing="0" width="100%"
                                   style="max-width: 600px; border-spacing: 0px; border-width: medium; border-style: none;">
                                <tbody>
                                <tr style="border-spacing: 0px;">
                                    <td class="footers"
                                        style="padding-bottom: 20px; font-size: 12px; color: rgb(76, 76, 76); border-spacing: 0px;">
                                        <div class="region">
                                            <div>
                                                <table class="row"
                                                       style="width: 100%; max-width: 600px; border-spacing: 0px; border-width: medium; border-style: none;">
                                                    <tbody>
                                                    <tr style="border-spacing: 0px;">
                                                        <td class="container" width="auto" valign="top"
                                                            style="width: auto; border-spacing: 0px;">
                                                            {!! $enrollment->product_terms_html !!}
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <!--End Footer-->
                    </tbody>
                </table>
            </center>
        </div>
    </div>
</center>

</body>
</html>