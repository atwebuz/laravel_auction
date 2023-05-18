@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="carousel-inner" role="listbox">
                    @forelse($product->images as $key => $image)
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-keyboard" data-slide-to="{{$loop->index}}" class="{{$key == 0 ? 'active' : '' }}"></li>
                        {{-- <li data-target="#carousel-keyboard" data-slide-to="{{$loop->index}}" class=""></li> --}}
                    </ol>
                        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                            <img class="img-fluids w-100" height="700px !important" src="{{$image->images ? asset('image/' . $image->images) : asset('assets/images/no-image.avif')}}" alt="image not-founds" />
                        </div>
                        @empty
                            
                        <img class="img-fluid" src="{{asset('image/no-image.avif')}}" alt="image not-founded" />

                    @endforelse 
                </div>
            </div>

            <div class="col-6">

                <div class="right_block">
                    <h3 class="text-bold text-center ny-2">My Product Details</h3>
                    <div class="form-group">
                        <label class="font-weight-bold">{{__('Brand Name')}}</label>
                        {{$product->name}}
                    </div>

                 
                    <div class="product_details">          
                        <hr>
                        <div class="form-group col-6">
                            <label class="font-weight-bold">{{__('Color')}}</label>
                            {{$product->color}}
                        </div>
                        <hr>
                        <div class="form-group col-6">
                            <label class="font-weight-bold">{{__('Date')}}</label>
                            {{$product->date_of_year}}
                        </div>
                        <hr>

                        <div class="form-group col-6">
                            <label class="font-weight-bold">{{__('Millage')}}</label>
                            {{$product->millage}}
                        </div>
                        <hr>


                        <div class="form-group col-6">
                            <label class="font-weight-bold">{{__('Transmission')}}</label>
                            {{$product->transmission}}
                        </div>
                        <hr>

                        <div class="form-group col-6">
                            <label class="font-weight-bold">{{__('Oil Type')}}</label>
                            {{$product->oil_type}}
                        </div>
                        <hr>

                        <div class="form-group col-6">
                            <label class="font-weight-bold">{{__('Condition')}}</label>
                            {{$product->condition}}
                        </div>
                        <hr>

                        <div class="form-group col-6">
                            <label class="font-weight-bold">{{__('Address')}}</label>
                            {{$product->address}}
                        </div>
                            <hr>
                        <div class="form-group col-6">
                            <label class="font-weight-bold">{{__('Created at')}}</label>
                            {{$product->created_at}}
                        </div>
                    
                    </div>

            
                    <div class="form-group ">
                        <label class="font-weight-bold">{{__('Paragrah')}}</label>
                        {{$product->paragraph}}
                    </div>  

                    @auth
                    @canany(['update', 'delete'], $product)
                    <form class="my-3" action="{{ route('products.destroy',$product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                        
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">{{__('Edit')}}</a>
                            <button type="submit" class="btn btn-danger">{{__('Delete')}}</button>

                    </form>
                    @endcanany
                    @endauth

                    <hr>
                    <button class="btn btn-primary my-2">Start a bid</button>
                    <button class="btn btn-primary my-2">Add To wishlist</button>
                </div>
                
            </div>
        </div>
    </div>
</section>

@endsection