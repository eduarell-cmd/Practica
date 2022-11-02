<?php
use App\Http\Controllers\Pruebascontroller;
?>
<navbar><p>
@section('navbar')
    <ol class="list-disc ml-10">
    <li><a href="{{action([Pruebascontroller::class,'Practica'],['v'=>6,'b'=>-19,'c'=>7])}}">Practica</a></li>
    </ol>
    @show
    </p></navbar>
    <br>