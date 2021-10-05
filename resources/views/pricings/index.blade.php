@extends('layouts.app')

@section('content')

<div class="container">
    <table>
    <tr>
        <th>PRINTER</th>
        <th>PRICE</th>
    
    <tr>
        <th>HP DeskJet 4155e <p></p>
            <img src="/HP.png" alt=""></th>
        <th>₱22, 750.00</th>
        
    </tr>
    <tr>
        <th>EPSON L5190 <p></p>
            <img src="/Epson-L5190.png" alt=""></th>
        <th>₱21, 500.00</th>
        
    </tr>
    <tr>
        <th>BROTHER HL-T400DW <p></p>
            <img src="/HL-T4000DW.png" alt=""></th>
        <th>₱30, 500.00</th>
        
    </tr>
    <tr>
        <th>CANON PRINTER G1010 <p></p>
            <img src="/Cannon.png" alt=""></th>
        <th>₱19, 750.00</th>
    </tr>
    <tr>
        <th> <img src="/design-icon.png" alt=""><p></p>
            Design Service</th>
        <th>₱300-₱500 per page</th>
    </tr>
    <tr>
        <th>
            <img src="/repair-icon.png" alt=""><p></p>
            Repair Service</th>
        <th>₱500-₱1,500</th>
    </tr>
    <tr>
        <th>
            <img src="/print-icon.jpg" alt=""><p></p>
            Print Service</th>
        <th>₱5-₱1,500</th>
    </tr>
</table>
</div>
    </tr>
@endsection
<style>

table, th, td{
    border:1px solid black;
    padding:10px;
    background-color: grays;
    width: 900px;
    height: 150px;
    text-align: center;
    }
   img{
       width: 150px;
       height: 100px;
   }
</style>


