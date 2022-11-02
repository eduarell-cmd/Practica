@extends('templates.master')

@section ('title', 'formula general problema')

@section('header')
Problema con la formula General.
@stop

@section('navbar')
Problema formula general
<center><img  src="https://www.neurochispas.com/wp-content/uploads/2022/07/Resolver-ecuaciones-con-la-formula-cuadratica.png" width="500px" height="350px"></center>
@stop
<br>
@section('content')
<p>El valor de a es:{{$a}}<br>
El valor de b es:{{$b}}<br>
El valor de c es:{{$c}}<br>
El resultado es:  {{ (-($b) - ( sqrt(($b**2)-(4*$a*$c) ) ) ) / (2*$a)  }}  <br>
El resultado es:  {{ (-($b) + ( sqrt(($b**2)-(4*$a*$c) ) ) ) / (2*$a)  }}  
</p>
@stop