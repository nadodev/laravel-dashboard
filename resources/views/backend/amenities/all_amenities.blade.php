@extends('admin.dashboard')
@section('admin')
    <div class="card mb-4">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div>
              <h4 class="card-title mb-0">All Types</h4>
            </div>
              <div>
                  <a href="{{ route('index.amenities') }}" class="btn btn-outline-primary">add Types</a>
              </div>
          </div>
        </div>
        <div class="card-footer">
            <x-custom-table
                :tableName="'amenities'"
                :columns="['amenities_name' => 'nome','created_at' => 'criado em']"
                :edit="'update.amenities'"
                :delete="'delete.amenities'"
                :id="'id'"
            >

            </x-custom-table>
        </div>
    </div>
  <!-- /.card.mb-4-->
@endsection
