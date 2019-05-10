<html>
<body>
<h2>今日のプロ野球速報 5/9(木)</h2>
<table>
    <tbody>
    <tr>
        @foreach ($header as $head)
            <th>
                {{ $head }}
            </th>
        @endforeach
    </tr>
    <tr>
        <td>{{ $team1_name }}</td>
        @foreach ($team1_score as $score)
            <td>
                {{ $score }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td>{{ $team2_name }}</td>
        @foreach ($team2_score as $score)
            <td>
                {{ $score }}
            </td>
        @endforeach
    </tr>
    </tbody>
</table>


<br>


<table>
    <tbody>
    <tr>
        @foreach ($header_02 as $head)
            <th>
                {{ $head }}
            </th>
        @endforeach
    </tr>
    <tr>
        <td>{{ $team1_name_02 }}</td>
        @foreach ($team1_score_02 as $score)
            <td>
                {{ $score }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td>{{ $team2_name_02 }}</td>
        @foreach ($team2_score_02 as $score)
            <td>
                {{ $score }}
            </td>
        @endforeach
    </tr>
    </tbody>
</table>

<br>

<table>
    <tbody>
    <tr>
        @foreach ($header_03 as $head)
            <th>
                {{ $head }}
            </th>
        @endforeach
    </tr>
    <tr>
        <td>{{ $team1_name_03 }}</td>
        @foreach ($team1_score_03 as $score)
            <td>
                {{ $score }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td>{{ $team2_name_03 }}</td>
        @foreach ($team2_score_03 as $score)
            <td>
                {{ $score }}
            </td>
        @endforeach
    </tr>
    </tbody>
</table>

</body>

</html>