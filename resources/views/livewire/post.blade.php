<div>
  <form class="my-4 flex" wire:submit.prevent="submit">
   <input type="text" 
    wire:model="title"
    class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="Bạn nghĩ gì vậy">
   <button type="submit">Submit</button>
  </form>
  <ul>
    @foreach ($listPost as $item)
        <li>{{$item->title}}</li>
    @endforeach
  </ul>
</div>
