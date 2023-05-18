@extends('layouts.app')

@section('content')
<section id="basic-input">
    <div class="container">

    <div class="row">
        <div class="col-md-6 col-12">
            <div class="card" style="">
                <div class="card-header">
                    <h4 class="card-title">{{__('Edit')}}</h4>
                </div>

                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{route('products.update',$product->id)}}"
                            method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-body">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Name')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="contact-info"
                                                    class="form-control my-2 py-2"
                                                    name="name" value={{$product->name}}>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Brand')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="custom-select form-control my-2" id="location"
                                                    name="brand_id" aria-invalid="false">
                                                    @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}">
                                                        {{$brand->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                   
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Color')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="contact-info"
                                                    class="form-control my-2 py-2" 
                                                    name="color" value={{$product->color}}>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Price')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" id="contact-info"
                                                    class="form-control my-2 py-2"
                                                    name="price" value={{$product->price}}>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Date')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="date" id="contact-info"
                                                    class="form-control my-2 py-2"
                                                    name="date_of_year" value={{$product->date_of_year}}>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Millage')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" id="contact-info"
                                                    class="form-control my-2 py-2"
                                                    name="millage" value={{$product->millage}}>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Transmission')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                               <select class="form-control my-2" name="transmission">
                                                <option selected value="{{$product->transmission}}">{{$product->transmission}}</option>
                                                <option value="Mexanika">Mexanika</option>
                                                <option value="Avtomat">Avtomat</option>
                                               </select>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Oil Type')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                               <select class="form-control my-2" name="oil_type" >
                                                <option value="{{$product->oil_type}}" selected>{{$product->oil_type}}</option>
                                                <option value="Benzin">Benzin</option>
                                                <option value="Gaz">Gaz</option>
                                                <option value="Dizel">Dizel</option>
                                                <option value="Elektron">Elektron</option>
                                               </select>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Condition')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                               <select class="form-control my-2" name="condition" id="">
                                                <option value="{{$product->condition}}" selected>{{$product->condition}}</option>
                                                <option value="Alo">Alo</option>
                                                <option value="Yaxshi">Yaxshi</option>
                                                <option value="Yomon">Yomon</option>
                                               </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Address')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="contact-info"
                                                    class="form-control my-2 py-2"
                                                    name="address" value={{$product->address}}>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Paragraph')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="form-control my-2 py-2"" name="paragraph" id="contact-info" cols="30" rows="6">
{{$product->paragraph}}
                                                </textarea>

                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 my-4">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Image')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" name="images[]" id="formFile" multiple>
                                            </div>
                                        </div>
                                    </div>

                                 
                                
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit"
                                            class="btn btn-primary mr-1 mb-1 waves-effect waves-light">{{__('Submit')}}</button>
                                        <button type="reset"
                                            class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">{{__('Reset')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- @include('../inc/__messages') --}}
        </div>
    </div>         
</div>
</section>

@endsection