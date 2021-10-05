@extends('layouts.app')

@section('content')

<div class="container">
    <table>
    <tr>
        <th>PRINTER</th>
        <th>SALES</th>
    
    <tr>
        <th>HP DeskJet 4155e <p></p>
            <img src="/HP.png" alt=""></th>
        <th>2 SOLD</th>
        
    </tr>
    <tr>
        <th>EPSON L5190 <p></p>
            <img src="/Epson-L5190.png" alt=""></th>
        <th>100 SOLD</th>
        
    </tr>
    <tr>
        <th>BROTHER HL-T400DW <p></p>
            <img src="/HL-T4000DW.png" alt=""></th>
        <th>359 SOLD</th>
        
    </tr>
    <tr>
        <th>CANON PRINTER G1010 <p></p>
            <img src="/Cannon.png" alt=""></th>
        <th>50 SOLD</th>
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


