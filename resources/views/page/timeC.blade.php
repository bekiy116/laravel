@extends('pages.index')
@section('content')
<form action="/news" method="POST">
    @csrf
    <br>
    <div class="container">

        <div class="alert alert-warning">

            Хэрэв та бүртгэлтэй хэрэглэгч бол 

            <a href="#" class="btn btn-primary btn-sm">Нэвтрэх</a>

        </div>

       <div class="card mb-4">

           <div class="card-header">Цаг авах Хуудас</div>

           <div class="card-body">

                   <div class="row gx-3 mb-2">

                       <div class="col-md-2">

                           <label class="small mb-1">Ерөнхий мэдээлэл</label>
                           <input class="form-control" name="name" type="text" placeholder="Овог Нэр">
                           <input class="form-control" name="register" type="text" placeholder="Регистер">
                           {{-- <input class="form-control" name="register" type="gender" placeholder="Хүйс"> --}}

                           <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                          
                            <div class="btn-group" role="group">
                              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Хүйс
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" href="#">Эр</a></li>
                                <li><a class="dropdown-item" href="#">Эм</a></li>
                              </ul>
                            </div>
                          </div>


                       </div>

                       <div class="col-md-4">

                            <label class="small mb-1">Холбоо барих мэдээлэл</label>
                            <input class="form-control" name="email" type="text" placeholder="И-мэйл">
                            <input class="form-control" name="phone_number" type="text" placeholder="Утасны дугаар">
                            <input class="form-control" name="name" type="text" placeholder="Хаяг">

                       </div>


                       <div class="col-md-4">

                            <label class="small mb-1">Цагийн мэдээлэл</label>
                            <input id="datePicker" class="form-control" name="date" type="date" placeholder="Огноо">
                            <input class="form-control" name="time_choose" type="text"  placeholder="Цаг сонгох">
                            {{-- <textarea name="note" placeholder="Тэмдэглэл" cols="39" rows="3" class=""></textarea> --}}

                       </div>

                   </div>

               <button class="btn btn-primary btn-sm">Хадгалах</button>
               <a href="/news/" class="btn btn-dark btn-sm">Буцах</a>

           </div>
       </div>
    </div>
</form>
@endsection