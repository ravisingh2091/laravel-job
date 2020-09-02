<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Marketer</th>
        <th>State</th>
        <th>Doc Type</th>
        <th>Link Type</th>
        <th>Commodity</th>
        <th>Renewable Type</th>
        <th>Customer Type</th>
        <th>Locale</th>
        <td>Product Type</td>
        <th>Name</th>
        <th>Url</th>
        <td>Source File Name</td>
        <td>Version</td>
        <th>Enabled</th>
        <th>Show on Product Details</th>
        <th>Show on Signup Form</th>
        <th>Last Updated</th>
        <th>Link</th>
    </tr>
    </thead>
    <tbody>
    @foreach($state_document_urls as $sdu)
        <tr>
            <td>{{ $sdu->id }}</td>
            <td>{{ $sdu->marketer->code }}</td>
            <td>{{ $sdu->state->code }}</td>
            <td>{{ $sdu->template_type }}</td>
            <td>{{ $sdu->type }}</td>
            <td>{{ $sdu->commodity->symbol ?? '' }}</td>
            <td>{{ $sdu->renewable_type }}</td>
            <td>{{ $sdu->revenue_class }}</td>
            <td>{{ $sdu->locale_code }}</td>
            <td>{{ $sdu->productType->name ?? ''}}</td>
            <td>{{ $sdu->name }}</td>
            <td>{{ $sdu->url }}</td>
            <td>{{ $sdu->source_file_name }}</td>
            <td>{{ $sdu->version }}</td>
            <td>@if ($sdu->enabled)
                    YES
                @else
                    NO
                @endif
            </td>
            <td>@if ($sdu->show_on_product_details)
                    YES
                @else
                    NO
                @endif
            </td>
            <td>@if ($sdu->show_on_signup_form)
                    YES
                @else
                    NO
                @endif
            </td>
            <td>{{ $sdu->updated_at }}</td>
            <td>
                <a href="{{ route('state-document-urls.show',$sdu) }}">
                    Link
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>