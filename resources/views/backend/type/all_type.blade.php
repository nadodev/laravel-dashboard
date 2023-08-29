@extends('admin.dashboard')
@section('admin')
    <div class="card mb-4">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div>
              <h4 class="card-title mb-0">All Types</h4>
            </div>
              <div>
                  <a href="{{ route('add.type') }}" class="btn btn-outline-primary">add Types</a>
              </div>
          </div>
        </div>
        <div class="card-footer">
            <x-custom-table
                    :tableName="'property_types'"
                    :columns="['type_name' => 'nome', 'type_icon' => 'icones', 'created_at' => 'criado em']"
                    :edit="'update.type'"
                    :delete="'delete.type'"
                    :id="'id'"
            />
        </div>
    </div>
  <!-- /.card.mb-4-->
@endsection
