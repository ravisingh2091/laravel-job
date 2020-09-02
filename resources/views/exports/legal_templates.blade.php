<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Marketer</th>
            <th>State</th>
            <th>Type</th>
            <th>Commodity</th>
            <th>Renewable Type</th>
            <th>Customer Type</th>
            <th>Locale</th>
            <th>Product Type</th>
            <th>Utility Territory</th>
            <th>Source File Name</th>
            <th>Version</th>
            <th>Active</th>
            <th>Last Updated</th>
            <th>Link</th>
        </tr>
    </thead>
    <tbody>
    @foreach($legal_templates as $lt)
        <tr>
            <td>{{ $lt->id }}</td>
            <td>{{ $lt->marketer->code }}</td>
            <td>{{ $lt->state->code }}</td>
            <td>{{ $lt->template_type }}</td>
            <td>{{ $lt->commodity->symbol }}</td>
            <td>{{ $lt->renewable_type }}</td>
            <td>{{ $lt->customer_type }}</td>
            <td>{{ $lt->locale_code }}</td>
            <td>@if ($lt->productType)
                    {{ \Illuminate\Support\Str::title($lt->productType->code) }}
                @else
                    All
                @endif
            </td>
            <td>
                @if ($lt->utilityTerritory)
                    {{ \Illuminate\Support\Str::title($lt->utilityTerritory->territory_code) }}
                @else
                    All
                @endif
            </td>

            <td>{{ $lt->source_file_name }}</td>
            <td>{{ $lt->version }}</td>
            <td>@if ($lt->is_active)
                    YES
                @else
                    NO
                @endif
            </td>
            <td>{{ $lt->updated_at }}</td>
            <td>
                <a href="{{ route('legal-templates.show',$lt) }}">
                    Link
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>