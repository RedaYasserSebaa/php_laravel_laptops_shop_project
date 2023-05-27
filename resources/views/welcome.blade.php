@extends('layouts.app')
@section('title', 'Laptops Shop')
@section('content')

<style>
        .my_style{
            background-color:  rgb(0, 27, 74);
        }
        .font_style{
            font-weight: bold;
        }
        .my-custom-class {
        text-align: left;
        font-weight: bold;
        font-size: 16px;
        }
        .price{
        font-weight: bold;
        font-size: 21px;
        border-radius: 10px;
        color: white;
        }
</style>

    <div class="container-fluid">
        <div class="row m-3 ">
        @foreach ($laptops as $item)
      
            <div class="col-sm-4 text-center justify-content-center">
                <div class="card my-card mb-4">
                    <div class="card-header my_style">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="img/{{$item->Brand}}" width="{{$item->wid}}" class="d-flex">
                            </div>
                            <div class="col-sm-10">
                                <h3 class="text-light font_style">{{$item->Name}}</h3>   
                            </div>
                        </div>
                        
                        
                    </div>
    
                    <div class="card-body bg-dark-subtle">
                         <div class="row">
                            <div class="col">
                                <img src="img/{{$item->Image}}" width="220">
                                <div class="price my_style mt-3">
                                    {{$item->Price}} SR
                                </div>
                                
                            </div>
    
                            <div class="col">
                                <ul class=" my-custom-class">
                                     <li>{{$item->Display}}</li>
                                     <li>{{$item->CPU}}</li>
                                     <li>{{$item->GPU}}</li>
                                     <li>{{$item->RAM}}</li>
                                     <li>{{$item->Storage}}</li>
                                </ul>

                                
                              </div>
                         </div>
                    </div>

                    <div class="card-footer my_style">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                        <a class="btn text-light" href="checkout/{{$item->id}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                              </svg>
                                        </a>
                                </div>
                                <div class="col">
                                    <a class="btn text-light" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-bookmark-heart" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z"/>
                                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                          </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                     </div>

                </div>
            </div>
       
        @endforeach
        </div>
    </div>

@endsection