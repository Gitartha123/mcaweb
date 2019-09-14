<link rel="stylesheet" href="{{ asset('public/css/a1style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="a1-container a1-card-4 a1-light-gray a1-margin a1-text-blue">
    {!! Form::open(['Route'=>'post.add','method'=>'post']) !!}
    <h2 class="a1-center ">ADD NEWS</h2>
    <div class="a1-row a1-section">
        <div class="a1-col" style="width: 130px;">
            {!! Form::label('News Title','News Title') !!}
        </div>
        <div class="a1-rest">
            {!!  Form::text('title','',['class'=>'a1-input a1-border a1-round', 'placeholder'=>"Enter news title"]) !!}
        </div>
    </div>
    <div class="a1-row a1-section">
        <div class="a1-col a1-xxlarge a1-left a1-margin" style="width: 100px;"><i class="fa fa-pencil a1-right"></i>
        </div>
        <div class="a1-rest">
            {!! Form::textarea('details','',['class'=>'a1-input a1-border a1-round','placeholder'=>'Enter details']) !!}
        </div>
    </div>
    {!! Form::submit('Submit',['class'=>"a1-round a1-right a1-hover-red a1-button a1-block a1-section a1-blue a1-ripple a1-padding",'style'=>'width:100px;']) !!}
    {!! Form::close() !!}
</div>
