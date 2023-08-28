<div class="table-responsive">
    <table class="table border mb-0">
      <thead class="table-light fw-semibold">
        <tr class="align-middle">
          <th class="text-center">
            <svg class="icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
            </svg>
          </th>
          <th>Usuario</th>
          <th>E-mail</th>
          <th>Ultimo Login</th>
          <th>Ação</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr class="align-middle">
            <td class="text-center">
              <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('assets/img/avatars/1.jpg')}}" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
            </td>
            <td>
              <div>{{$user->name}}</div>
            </td>
            <td>
                <div>{{$user->email}}</div>
              </td>
            @if ($user->logins->count() > 0)
                <td>
                    <div class="fw-semibold">{{ $user->logins->last()->login_at }}</div>
                </td>
            @else
                <td>
                    <div class="fw-semibold">Nenhum Registro</div>
                </td>
            @endif
            <td>
              <div class="dropdown">
                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg class="icon">
                    <use xlink:href="{{asset('vendors/@coreui/icons/svg/free.svg#cil-options')}}"></use>
                  </svg>
                </button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
              </div>
            </td>

        @endforeach
      </tbody>
    </table>
  </div>
