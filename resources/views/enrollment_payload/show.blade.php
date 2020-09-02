@extends('layouts.app')

@section('title', 'Enrollment Payloads')
@section('page-header', 'Enrollment Payloads')
@section('page-subheader', 'Raw JSON enrollment payloads from website')

@section('content')
    <div class="profile-container">
        <div class="profile-section">
            <div class="profile-left">
                Left Side
            </div>
            <div class="profile-right">
                <div class="profile-info">
                    <div class="table-responsive">
                        <table class="table table-profile">
                            <tbody>
                            <tr>
                                <td class="field wide">ID</td>
                                <td>{{ $enrollment_payload->id }}</td>
                            </tr>
                            <tr>
                                <td class="field">Electric Status</td>
                                <td>{{ $enrollment_payload->electric_status }}</td>
                            </tr>
                            <tr>
                                <td class="field ">Electric Processed</td>
                                <td>{{ $enrollment_payload->electric_processed_at }}</td>
                            </tr>
                            <tr>
                                <td class="field">Gas Status</td>
                                <td>{{ $enrollment_payload->gas_status }}</td>
                            </tr>
                            <tr>
                                <td class="field">Gas Processed</td>
                                <td>{{ $enrollment_payload->gas_processed_at }}</td>
                            </tr>
                            <tr>
                                <td class="field">JSON Payload</td>
                                <td>
                                    <pre>
                                        {{ json_encode(json_decode($enrollment_payload->json_payload, true), JSON_PRETTY_PRINT) }}
                                    </pre>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection