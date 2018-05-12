@extends('layouts.dash') @section('content')
<div class="col-md-12">
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Planes', 'pdf' => route('pdf.usuarios')])


    <div id="app">
        {{$indicador}}
    </div>

    
    @include('partials.modal-help-usuario') @endcomponent
   

</div>
@endsection @push('styles')



<script src="/assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>


@endpush


@push('functions')



<script src="/assets/global/plugins/jquery-repeater/jquery.repeater.js"></script>
<script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.14/vue.js"></script>
<script src="/assets/pages/scripts/form-repeater.min.js"></script>
<script src="/assets/pages/scripts/components-date-time-pickers.min.js" ></script>
<script src="/js/indicadores.js"></script>



           
@endpush