<table border="1">
    <tr>
        <td>Utility</td>
        <td>Utility Rate / Therms</td>
        <td>INDRA Into-rate / Therms</td>
        <td>Utility 50 Therms</td>
        <td>INDRA 50 Therms</td>
        <td>Utility 100 Therms</td>
        <td>INDRA 100 Therms</td>
        <td>Utility 150 Therms</td>
        <td>INDRA 150 Therms</td>
        <td>Utility 200 Therms</td>
        <td>INDRA 200 Therms</td>
    </tr>
    @foreach($table as $c)
        <tr>
            <td>
                {{ $c['utility'] }}
            </td>
            <td>
                {{ $c['utility_rate'] }}
            </td>
            <td>
                {{ $c['pe_rate'] }}
            </td>
            <td>
                {{ $c['utility_50'] }}
            </td>
            <td>
                {{ $c['pe_50'] }}
            </td>
            <td>
                {{ $c['utility_100'] }}
            </td>
            <td>
                {{ $c['pe_100'] }}
            </td>
            <td>
                {{ $c['utility_150'] }}
            </td>
            <td>
                {{ $c['pe_150'] }}
            </td>
            <td>
                {{ $c['utility_200'] }}
            </td>
            <td>
                {{ $c['pe_200'] }}
            </td>
        </tr>
    @endforeach
</table>