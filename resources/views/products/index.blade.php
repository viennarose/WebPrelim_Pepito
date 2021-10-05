@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <img src="/HL-T4000DW.png" alt="">
        <div>
            <h4>BROTHER HL-T400DW</h4>
            <p>Efficiency Engineered - A3 Refill Ink Tank Printer with Wireless & Ethernet Connectivity, 
                Low Cost High Photo Quality with Ultra High Yield Ink Bottles, 
                Wi-Fi Direct, Mobile & USB Print</p> 
            
        </div>
    </div>
    <div class="row">
    <img src="/Epson-L5190.png" alt="">
        <div>
            <h4>EPSON L5190</h4>
            <p>Print, Scan, Copy, Fax with ADF, Compact integrated tank design, High yield ink bottles
                Spill-free, error-free refilling, Print, scan, copy, fax with ADF, Wi-Fi, Wi-Fi Direct, Epson Connect, 
                Auto Fit Function, Maximum Copy Size:Legal, ISO 29183, A4</p> 
        </div>

    </div>
    
    <div class="row">
    <img src="/Cannon.png" alt="">
        <div>
            <h4>CANON PRINTER G1010</h4>
            <p>Refillable Ink Tank Printer for High Volume Printing
                Designed for high volume printing at low running cost
                Print
                ISO Standard print speed (A4): up to 8.8 ipm (black) / 5.0 ipm (colour)
                Recommended monthly print volume: 150 - 1500 pages</p> 
        </div>
    </div>
    <div class="row">
    <img src="/HP.png" alt="">
        <div>
            <h4>HP DeskJet 4155e</h4>
            <p>Print, copy, scan in color, auto doc feeder, mobile/wireless printing
                Basic color documents like recipes, forms, and travel documents
                6 free months Instant Ink and more with optional HP+ printing system
               </p> 
               
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
        width:250px;
        height:150px;
        margin-top: 10px;
        margin-left: 5px;
    }
    .row{
        width:250px;
        height:150px;
        padding: 10px 10px 10px 30px;

    }
    p{
        font-size:12px
    }
    a:hover{
        background-color:gray;
        margin-top:180px;
    }
    .price{
        padding-top: 230px;
    }
</style>

