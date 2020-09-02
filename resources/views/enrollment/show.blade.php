@extends('layouts.app')

@section('title', 'Enrollment')
@section('page-header', 'Enrollment Details')
@section('page-subheader', 'Enrollment details and status')


@section('content')

    <div class="profile-container">
        <div class="profile-section">
            <div class="profile-left">
                <div class="profile-highlight">
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Enrollment ID</h4>
                            <div>{{ $enrollment->id}}<br>({{$enrollment->external_id}})</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 m-t-15">
                            <h4>GF Entry ID</h4>
                            <div>{{ $enrollment->entry_id}}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 m-t-15">
                            <h4>Marketer</h4>
                            <div>{{ $enrollment->marketer->code }} - {{ $enrollment->marketer->name }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 m-t-15">
                            <h4>Created</h4>
                            <div>{{ $enrollment->created_at->format('m-d-Y H:m') }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 m-t-15">
                            <h4>Status</h4>
                            <div>{{ $enrollment->status }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 m-t-15">
                            <h4>Export Date</h4>
                            <div>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $enrollment->postpone_date)->format('m-d-Y') }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 m-t-15">
                            <form method="POST"
                                  action="{{ URL::route('enrollments.request-confirmation', $enrollment ) }}">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-default btn-sm">Send Confirmation</button>
                            </form>
                        </div>
                    </div>
                </div>

                @if ($enrollment->referralCode)
                <div class="profile-highlight">
                    <div class="row">
                        <div class="col-xs-12">
                            <h4>Refer A Friend</h4>
                            <div>
                                {{ $enrollment->referralCode->code }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 m-t-15">
                            <form method="POST"
                                  action="{{ URL::route('referral.request-referral-code', $enrollment->referralCode ) }}">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-default btn-sm">Send Referral Code</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="profile-right">
                <div class="profile-info">
                    <div class="table-responsive">
                        <table class="table table-profile">
                            <tbody>
                            <tr>
                                <td colspan="2">
                                    <h4>Enrollment</h4>
                                </td>
                            </tr>
                            <tr>
                                <td class="field">Utility</td>
                                <td>
                                    @if(str_is('internal', $enrollment->edi_provider))
                                        {{ $enrollment->product->utilityTerritory->name }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="field ">Account Number</td>
                                <td><strong>{{ $enrollment->utility_account_number }}</strong></td>
                            </tr>
                            @if ($enrollment->product && $enrollment->product->utilityTerritory->requires_name_key)
                                <tr>
                                    <td class="field ">Name Key</td>
                                    <td>{{ $enrollment->name_key }}</td>
                                </tr>
                            @endif
                            <tr>
                                <td class="field">Commodity</td>
                                <td>
                                    @if ($enrollment->product)
                                        {{ $enrollment->product->commodity->name }}
                                    @elseif ($enrollment->commodityName())
                                        {{ $enrollment->commodityName() }}
                                    @else
                                        Cannot determine commodity (missing product)
                                    @endif
                                </td>

                            </tr>
                            <tr>
                                <td class="field">Product</td>
                                <td>
                                    @if ($enrollment->product)
                                        {{ $enrollment->product->displayName() }}
                                    @else
                                        Cannot determine product
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="field">Revenue Class</td>
                                <td>{{ title_case($enrollment->revenue_class) }}</td>
                            </tr>
                            <tr class="divider">
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><h4>Customer</h4></td>
                            </tr>
                            <tr>
                                <td class="field">Name</td>
                                <td>{{ $enrollment->displayName() }}</td>
                            </tr>
                            <tr>
                                <td class="field">Service Address</td>
                                <td>
                                    {{ $enrollment->service_address_1 }} {{ $enrollment->service_address_2 }}<br>
                                    {{ $enrollment->service_city }}, {{ $enrollment->service_state }}<br>
                                    {{ $enrollment->service_zip }}
                                </td>
                            </tr>
                            @if ($enrollment->billing_address_different)
                                <tr>
                                    <td class="field">Billing Address</td>
                                    <td>
                                        {{ $enrollment->billing_address_1 }} {{ $enrollment->billing_address_2 }}<br>
                                        {{ $enrollment->billing_city }}, {{ $enrollment->billing_state }}<br>
                                        {{ $enrollment->billing_zip }}
                                    </td>
                                </tr>
                            @endif
                            <tr>
                                <td class="field">Email</td>
                                <td>{{ $enrollment->email }}</td>
                            </tr>
                            <tr>
                                <td class="field">Primary Phone</td>
                                <td>{{ $enrollment->primary_phone }}</td>
                            </tr>
                            <tr class="divider">
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><h4>Marketing</h4></td>
                            </tr>
                            <tr>
                                <td class="field">Promo Code</td>
                                <td>{{ $enrollment->promo_code }}</td>
                            </tr>
                            <tr>
                                <td class="field">Referral Code</td>
                                <td>
                                    @if ($enrollment->referral)
                                        <a href="#">{{ $enrollment->referral_code }}</a>
                                        <form method="POST"
                                              action="{{ URL::route('referral.request-referral-notification', $enrollment->referral ) }}">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-default btn-sm">Send Referral Notification</button>
                                        </form>
                                    @else
                                        {{ $enrollment->referral_code }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="field">Landing Page</td>
                                <td>{{ $enrollment->landing_page }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"><h4>Enrollment Logs</h4></td>
                            </tr>
                            <tr>
                                <table class="table">
                                    <tr>
                                        <th>Date</th><th>Content</th>
                                    </tr>
                                    @foreach ($enrollment->logs as $log)
                                    <tr>
                                        <td class="col-md-2">{{ $log->created_at }}</td>
                                        <td>{{ $log->content }}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-inverse overflow-hidden">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse"
                           data-parent="#accordion" href="#collapseTerms" aria-expanded="false">
                            <i class="fa fa-plus-circle pull-right"></i>
                            SPA Json
                        </a>
                    </h3>
                </div>
                <div id="collapseTerms" class="panel-collapse collapse" aria-expanded="false">
                    <div class="panel-body">
                        <pre>{!! $enrollment->jsonPayload() !!}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-inverse overflow-hidden">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse"
                           data-parent="#accordion" href="#collapseTerms" aria-expanded="false">
                            <i class="fa fa-plus-circle pull-right"></i>
                            Contract Summary and Terms of Service
                        </a>
                    </h3>
                </div>
                <div id="collapseTerms" class="panel-collapse collapse" aria-expanded="false">
                    <div class="panel-body">
                        {!! $enrollment->product_terms_html !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
