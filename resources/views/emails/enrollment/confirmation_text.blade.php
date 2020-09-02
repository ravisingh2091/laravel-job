{{ $enrollment->marketer->short_name }} Energy

Enrollment Submission Confirmation

Hello {{ $enrollment->displayName() }},

Thank you for choosing {{ $enrollment->marketer->short_name }} as your energy supplier. This message
confirms the submission of your enrollment request with the following details.

Customer IP Address: {{ $enrollment->ip }}
Customer Enrollment Request Date: {{ $enrollment->date_created }}
Name: {{ $enrollment->displayName() }}
Email: {{ $enrollment->email }}
Primary Telephone: {{ $enrollment->primary_phone }}
Service Address: {{  $enrollment->serviceAddress() }}
Billing Address: {{  $enrollment->billingAddress() }}
Promo Code: {{ strtoupper($enrollment->promo_code) }}

{{ $enrollment->product->commodity->name }} Enrollment Details
Utility: {{ $enrollment->product->utilityTerritory->name }}
Account Number: {{ $enrollment->accountNumber() }}
Plan:
@if (str_is('fixed', $enrollment->product->productType->code))
    Fixed Rate of
@else
    Introductory Rate of
@endif
 ${{ $enrollment->product->rate }} / {{ $enrollment->product->unit_of_measure }} for {{ $enrollment->product->term_months }} Billing Cycles.
@if (! is_null($enrollment->product->secondary_rate))
    Followed by ${{ $enrollment->product->secondary_rate }} / {{ $enrollment->product->unit_of_measure }} for {{ $enrollment->product->secondary_term_months }} billing cycles.
@endif
Budget Billing: {{ $enrollment->budgetBilling() }}

Description: {{ $enrollment->product->website_description }}

To receive the benefits of Rewards and Referral programs, you
will need to create a customer profile at https://{{ $enrollment->marketer->portal_url }}#/Home.

If your enrollment request is approved, you will receive a letter from your utility
confirming your selection of {{ $enrollment->marketer->short_name }} as your new energy supplier, as well as a welcome
package from {{ $enrollment->marketer->short_name }} that includes a copy of our Terms and Conditions, and a welcome
letter with information on your service with us and some Frequently Asked Questions.

{{ $enrollment->marketer->name }} 8751 18th Avenue Brooklyn, NY 11214 www.{{ $enrollment->marketer->website_url }}

You are receiving this e-mail because you are a {{ $enrollment->marketer->short_name }} customer. This email was sent
to you by {{ $enrollment->marketer->short_name }}. You may receive account servicing or notifications emails even if
you have requested not to receive marketing offers by email for your {{ $enrollment->marketer->short_name }} Account.
This is an unmonitored email box. Please do not reply to this email. Privacy: We
respect your privacy. Visit https://www.{{ $enrollment->marketer->website_url }}/privacy-policy
to read our Privacy Policy.

If you have questions regarding your enrollment with {{ $enrollment->marketer->name }}, please feel
free to call us at {{ $enrollment->marketer->support_phone_number }}, Monday through Friday 8:00AM - 6:00PM ET. You
can also email us at {{ $enrollment->marketer->support_email }}. This email is an
automated notification. Please do not reply to this message. Replies to
this message are routed to an unmonitored mailbox. You may unsubscribe from
email notifications by visiting https://{{ $enrollment->marketer->portal_url }}#/Unsubscribe.
