    @include('partials.head')
        @include('partials.sidebar')
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('partials.header')
          <div class="body flex-grow-1 px-3">
            <div class="container-lg">
              <div class="row">
              </div>
              <!-- /.row-->
                    @include('partials.table', ['users' => $users])
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
