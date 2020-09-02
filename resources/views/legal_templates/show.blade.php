@extends('layouts.app')

@section('title', 'Legal Templates')
@section('page-header', 'Legal Templates')
@section('page-subheader', 'Legal document template management')
@section('page-style')
@endsection

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">Template ID: {{ $legal_template->id }}</div>
                <div class="panel-body">
                    <dl class="dl-horizontal">
                        <dt>Marketer</dt>
                        <dd>{{ $legal_template->marketer->name }}</dd>
                        <dt>State</dt>
                        <dd>{{ $legal_template->state->name }}</dd>
                        <dt>Template Type</dt>
                        <dd>{{ $legal_template->template_type }}</dd>
                        <dt>Commodity</dt>
                        <dd>{{ $legal_template->commodity->name }}</dd>
                        <dt>Renewable Type</dt>
                        <dd>{{ $legal_template->renewable_type }}</dd>
                        <dt>Language</dt>
                        <dd>{{ $legal_template->locale_code }}</dd>
                        <dt>Source File Name</dt>
                        <dd>{{ $legal_template->source_file_name }}</dd>
                        <dt>Version</dt>
                        <dd>{{ $legal_template->version }}</dd>
                        <dt>Template Contents</dt>
                        <dd>{!! $legal_template->template_html !!}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection