@extends('pages.index')
@section('content')

<div class="container">
    <div class="main-body mt-5">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>А.Бөх-Эрдэнэ</h4> 
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                </ul>
              </div>
            </div>

              <div class="col-md-8">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Нэр :</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <li style="list-style-type:none;">Бөх-Эрдэнэ</li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Имэйл :</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                         <li style="list-style-type:none;">bekiybekiy60@gmail.com</li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Утасны дугаар : </h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <li style="list-style-type:none;">88120579</li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Гэрийн хаяг :</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <li style="list-style-type:none;"> БЗД 13-хороо 45-байр</li>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-12">
                        <a class="btn btn-info" href="#">Засах</a>
                        <a class="btn btn-danger" href="#">Устгах</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection