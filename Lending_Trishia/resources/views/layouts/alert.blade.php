@if(Session::has('success'))
<div class="bg-green-100 border border-green-400 mb-4 text-green-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('success')}}</div>
@endif
@if(Session::has('fail'))
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">{{ Session::get('fail')}}</div>
@endif