@section ('title')
Category
@endsection

@section('content')
<div class='swiper product-slider'>
    @foreach ($category as $cate)   
    <div class='swiper-wrapper'>

        <a href="{{url('view-category/.$cate->slug')}}">
            <div class=' box'>
               <img src='./image/Ratthi The Musuwa Bib 250G.jpeg' alt=''>
               <h3>Ratthi The Musuwa 250G</h3>
                <div class='price'> Rs.815.00 </div>
                < a href='#' class='btn'>add to cart</a>
                </div>'
            </div>
    </div>      
</div>