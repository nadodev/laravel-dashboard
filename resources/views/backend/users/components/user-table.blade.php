<div class="table-responsive">
    <table class="table border mb-0">
        <thead class="table-light fw-semibold">
        <tr class="align-middle">
            @foreach($columns as $column)
                <th>{{ $column }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
            @foreach(DB::table($tableName)->get() as $row)
                <tr class="align-middle">
                    @foreach($columns as $column)
                        <td>
                            <div>{{ $row->$column }}</div>
                        </td>
                     @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
