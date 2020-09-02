<table border="1">
    <tr>
        <td>Utility</td>
        <td>Utility Rate / kWh</td>
        <td>INDRA Into-rate / kWh</td>
        <td>Utility 500 kWh</td>
        <td>INDRA 500 kWh</td>
        <td>Utility 1000 kWh</td>
        <td>INDRA 1000 kWh</td>
        <td>Utility 1500 kWh</td>
        <td>INDRA 1500 kWh</td>
        <td>Utility 2000 kWh</td>
        <td>INDRA 2000 kWh</td>
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
                {{ $c['utility_500'] }}
            </td>
            <td>
                {{ $c['pe_500'] }}
            </td>
            <td>
                {{ $c['utility_1000'] }}
            </td>
            <td>
                {{ $c['pe_1000'] }}
            </td>
            <td>
                {{ $c['utility_1500'] }}
            </td>
            <td>
                {{ $c['pe_1500'] }}
            </td>
            <td>
                {{ $c['utility_2000'] }}
            </td>
            <td>
                {{ $c['pe_2000'] }}
            </td>

        </tr>
    @endforeach
</table>