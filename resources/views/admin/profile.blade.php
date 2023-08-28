    @include('partials.head')
        @include('partials.sidebar')
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('partials.header')
          <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                  <!-- /.row-->
              <div class="card mb-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h4 class="card-title mb-0">Perfil do usuario</h4>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row row-cols-1 row-cols-md-5 text-center">
                    @include('partials.profile')
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
