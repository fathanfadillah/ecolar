@extends('layout.app')

@section('style')
  <style>
      #item-product {
        max-width: 200px;
        max-height: 500px;
        object-fit: contain;
      }
  </style>
@endsection

@section('content')
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
      <div class="my-3">
        <div class="accordion" id="accordionExample">
          @foreach ($categories as $category)
            <div class="card my-3 border border-dark">
              <a href="{{route('products_category', $category->id)}}">
                <div class="card-header bg-black" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <span class="text-uppercase font-weight-bolder text-light">{{$category->name}}</span>
                    </button>
                  </h2>
                </div>
              </a>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="row container">
                  @foreach ($products as $product)
                    <div class="col-sm-6 col-md-6 col-lg-4 ftco-animate d-flex">
                      <div class="product d-flex flex-column border border-black">
                        <a href="{{route('products.show', $product->id)}}" class="img-prod"
                          ><img
                            id="img-product"
                            class="img-fluid w-100"
                            src="{{asset('image/product/'. $product->photo)}}"
                            alt="Responsive image Colorlib Template"
                            width="200" 
                            height="500"
                          />
                          <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                          <div class="d-flex">
                            <div class="cat">
                              <span>{{$product->category->name}}</span>
                            </div>
                            {{-- <div class="rating">
                              <p class="text-right mb-0">
                                <a href="#"
                                  ><span class="ion-ios-star-outline"></span
                                ></a>
                                <a href="#"
                                  ><span class="ion-ios-star-outline"></span
                                ></a>
                                <a href="#"
                                  ><span class="ion-ios-star-outline"></span
                                ></a>
                                <a href="#"
                                  ><span class="ion-ios-star-outline"></span
                                ></a>
                                <a href="#"
                                  ><span class="ion-ios-star-outline"></span
                                ></a>
                              </p>
                            </div> --}}
                          </div>
                          <h3><a href="#">{{$product->name}}</a></h3>
                          <div class="pricing">
                            <p class="price"><span>${{$product->price}}</span></p>
                          </div>
                          <p class="bottom-area d-flex px-3">
                            <a href="{{route('products.show', $product->id)}}" class="add-to-cart text-center py-2 mr-1"
                              ><span
                                >Detail<i class="ion-ios-arrow-dropright-circle ml-1"></i></span
                            ></a>
                            <a href="https://www.tokopedia.com/rekomendasi/2065300901?ref=googleshopping&c=12266693939&m=379158253&p=2065300901&txsc=google&gclid=EAIaIQobChMIrfnNx_ue9AIVzyMrCh1wqwXGEAQYASABEgJcsfD_BwE&gclsrc=aw.ds" class="buy-now text-center py-2"
                              >Buy now<span><i class="ion-ios-cart ml-1"></i></span
                            ></a>
                          </p>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
                </div>
              </div>
            </div>
          @endforeach
          {{-- <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Collapsible Group Item #2
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Collapsible Group Item #3
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div> --}}
        </div>
      </div>
        <div class="row no-gutters ftco-services">
  <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services p-4 py-md-5">
      <div class="icon d-flex justify-content-center align-items-center mb-4">
            <span class="flaticon-bag"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">Free Shipping</h3>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>      
  </div>
  <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services p-4 py-md-5">
      <div class="icon d-flex justify-content-center align-items-center mb-4">
            <span class="flaticon-customer-service"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">Support Customer</h3>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>    
  </div>
  <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
    <div class="media block-6 services p-4 py-md-5">
      <div class="icon d-flex justify-content-center align-items-center mb-4">
            <span class="flaticon-payment-security"></span>
      </div>
      <div class="media-body">
        <h3 class="heading">Secure Payments</h3>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>      
  </div>
</div>
    </div>
</section>
@endsection