@extends('layouts.app')

@section('content')
<section id="basic-input">
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="card" style="">
                <div class="card-header">
                    <h4 class="card-title">{{__('Create')}}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{route('products.store')}}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Title')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="contact-info"
                                                    class="form-control py-2"
                                                    name="title" placeholder="Sarlavha">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Category')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <select class="custom-select form-control" id="location"
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
                                                    class="form-control py-2" 
                                                    name="color" placeholder="Rangi">
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
                                                    class="form-control py-2"
                                                    name="price" placeholder="Narxi">
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
                                                    class="form-control py-2"
                                                    name="date_of_year" placeholder="Yili">
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
                                                    class="form-control py-2"
                                                    name="millage" placeholder="Millage">
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Transmission')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                               <select class="form-control" name="transmission" id="">
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
                                               <select class="form-control" name="oil_type" id="">
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
                                               <select class="form-control" name="condition" id="">
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
                                                    class="form-control py-2"
                                                    name="address" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>{{__('Paragraph')}}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="form-control py-2"" name="paragraph" id="contact-info" cols="30" rows="6" placeholder="Describe yourself here...">
                                                
                                                </textarea>

                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
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
</section>

@endsection