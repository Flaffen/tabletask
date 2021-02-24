<body>
    <style>
        table, th, td {
            border: 1px solid black; 
        }
    </style>
    <table>
        <tr>
            <th>Date</th>
            <th>Name</th>
            <th>Sum</th>
        </tr>
        @foreach ($things as $thing)
        <tr>
            <td>
                {{ $thing->date }}
            </td>
            <td>
                {{ $thing->name }}
            </td>
            <td>
                {{ $thing->sum }}
            </td>
        </tr>
        @endforeach
    </table>

    <form action="/things" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="sheet" id ="sheetFile">
        <input type="submit">
    </form>

    <form action="/things" method="POST">
        @csrf()
        @method('DELETE')
        <button type="submit">Delete this table</button>
    </form>
</body>