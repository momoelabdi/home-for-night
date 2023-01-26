@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3500)" x-show="show"
  class="flash-mesage">
  <p class="session-msg">
    {{session('message')}}
  </p>
</div>
@endif