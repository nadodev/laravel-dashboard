@props(['edit', 'delete', 'id'])

<div class="table-responsive">
    <table class="table border mb-0">
        <thead class="table-light fw-semibold">
        <tr class="align-middle">
            @foreach($columns as $originalName => $displayName)
                <th>{{ ucfirst($displayName) }}</th>
            @endforeach
                <th>Ação</th>

        </tr>
        </thead>
        <tbody>
            @foreach(DB::table($tableName)->get() as $row)

                <tr class="align-middle">
                    @foreach($columns as $originalName => $displayName)
                        <td>
                            <div> {{ $row->$originalName }}</div>
                        </td>
                    @endforeach
                        <td class="flex space-x-4">
                            <a href="{{ route($edit, $row->$id) }}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{ route($delete, $row->$id) }}" class="btn btn-outline-danger">Deletar</a>
                        </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
