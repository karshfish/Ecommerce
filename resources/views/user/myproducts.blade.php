<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          @foreach($data as $product)
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img height="300" width="150" src="/productimage/{{$product->img}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <h6>${{$product->price}}</h6>
                <p>{{$product->description}}</p>

                <form action="{{route('add.Cart',$product->id)}}" methode="POST">
                  @csrf
                  <input type="number" value="1" min="1" class="form-control" style="width:100px">
                  <br>
                  <input class="btn btn-primary" type="submit" value="Add Cart">
                </form>
              </div>
            </div>
          </div>
          @endforeach

          <div calss ="d-flex justify-content-center">
          {!! $data->links() !!}
          </div>
        </div>
      </div>
    </div>