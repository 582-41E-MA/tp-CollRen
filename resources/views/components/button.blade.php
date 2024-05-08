
<button  @class([
    'bg-blue-500 text-clr-mid-100 font-bold py-2 px-4 border border-clr-mid-900 hover:opacity-70 rounded',
    'bg-red-500' =>$type=='danger',
    'text-clr-fonce-900 bg-clr-mid-100' =>$type=='warning',
    'bg-green-500' =>$type=='success',
    'text-clr-mid-900 bg-clr-mid-100' =>$type=='acheter',
    'text-clr-mid-600 bg-clr-mid-500' =>$type=='calltoaction',
])>
  {{ $slot }}
</button>
