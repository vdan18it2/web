
@extends('layouts.be')
 @section('navbar')
 <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
 <ul class="site-menu js-clone-nav d-none d-lg-block">
   <li >
     <a href="/blog/public">Trang chủ</a>
   </li>
   <li class="active"><a href="/blog/public/sukien">Sự kiện</a></li>
   <li><a href="/blog/public/datphong">Đặt phòng</a></li>
   <li><a href="/blog/public/contact">Liên hệ</a></li>
 </ul>
</div>  

@endsection 


@section('body')
    <div class="container">
      <div class="row">              
              <h2>{{$page->title}}</h2>
              <p>{{$page->content}}</p> 
      </div>
      <div class="row" style="height='1000px'">
      @isset($page->myfile)
      
          <img src="{!! url('uploads',$page->myfile)!!}" alt="" style="width:100%; height:50% ">
      
      @endisset
    </div>
    </div>
<hr>
@endsection 
