
@include('partials.head')
@include('partials.sidebar')
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
@include('partials.header')
  <div class="body flex-grow-1 px-3">
    <div class="container-lg">
          <!-- /.row-->
          <div class="">
            <div class="py-12">
                <div class="mx-auto sm:px-6 lg:px-8 space-y-6">
                    <div class="p-6 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <h2 class="text-2xl">Perfil do usuario</h2>
                        <div class="">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
      <!-- /.card.mb-4-->
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- /.row-->
    </div>
  </div>
@include('partials.footer')
