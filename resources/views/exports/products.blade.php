<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>State</th>
            <th>Enabled</th>
            <th>Commodity</th>
            <th>Renewable</th>
            <th>Revenue Class</th>
            <th>Utility</th>
            <th>Utility Code</th>
            <th>Rate</th>
            <th>Unit</th>
            <th>Type</th>
            <th>Term</th>
            <th>Secondary Rate</th>
            <th>Secondary Term</th>
            <th>Website Description</th>
            <th>SPA CODE</th>
            <th>ESCO</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->utilityTerritory->state->code }}</td>
            <td>@if ($p->enabled)
                    Yes
                @else
                    No
                @endif</td>
            <td>{{ $p->commodity->symbol }}</td>
            <td>{{ $p->renewable_type }}</td>
            <td>{{ $p->revenue_class }}</td>
            <td>{{ $p->utilityTerritory->name }}</td>
            <td>{{ $p->utilityTerritory->territory_code }}</td>
            <td>{{ $p->rate }}</td>
            <td>{{ $p->unit_of_measure }}</td>
            <td>{{ $p->productType->name }}</td>
            <td>{{ $p->term_months }}</td>
            <td>{{ $p->secondary_rate }}</td>
            <td>{{ $p->secondary_term_months }}</td>
            <td>{{ $p->website_description }}</td>
            <td>{{ $p->foreign_code }}</td>
            <td>{{ $p->marketer->code }}</td>
            <td>{{ $p->created_at }}</td>
            <td>{{ $p->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>