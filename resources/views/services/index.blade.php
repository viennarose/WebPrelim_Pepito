@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <img src="/design-icon.png" alt="">
        <div class="title">
            <h4>DESIGN</h4>
            <p>Logo | Tarpaulin | Invitations | Souvenirs | Labels</p> 
            
        </div>
    </div>
    <div class="row">
    <img src="/print-icon.png" alt="">
        <div class="title">
            <h4>PRINT</h4>
            <p>Print | Scan | Copy | Fax </p> 
        </div>

    </div>
    
    <div class="row">
    <img src="/repair-icon.png" alt="">
        <div class="title">
            <h4>REPAIR</h4>
            <p>Cleaning | Adjustments | Troubleshooting</p> 
        </div>
    </div>
    
</div>
<div class="price">
    <a rel="stylesheet" href="/pricings">Click here for Prices</a>
</div>

@endsection
    
<style>
    .container{
        display:flex;
        width:750px;
        height:150px;
    }
    img{
        width:240px;
        height:150px;
        margin-top: 10px;
        margin-left: 5px;
    }
    .row{
        width:350px;
        height:150px;
        padding: 20px 10px 10px 30px;

    }
    p{
        font-size:12px
    }
    a:hover{
        background-color:gray;
        margin-top:180px;
    }
    .price{
        padding-top: 140px;
    }
    .title{
        margin-left:50px;
        width:500px;
    }
    
</style>

