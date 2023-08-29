@extends('admin.dashboard')
@section('admin')
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>
                    <h4 class="card-title mb-0">Todos os Usuarios</h4>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <x-custom-table
                    :tableName="'users'"
                    :columns="['name' => 'nome', 'email' => 'e-mail', 'created_at' => 'criado em']"
                    :edit="'update.type'"
                    :delete="'delete.type'"
                    :id="'id'"
            />
        </div>
    </div>
@endsection
