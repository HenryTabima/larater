
<img class="img-thumbnail" src="{{ $message->image }}">
<p class="card-text">
  <div class="text-muted">Escrito por: 
    <a href="/{{ $message->user->username }}">{{ $message->user->name }}</a>
  </div>
  <div>
    {{ $message->content }}
  </div>
  <a href="/messages/{{ $message->id }}">Leer más</a>
  <div class="card-text text-muted float-right">
    {{ $message->created_at }}
  </div>
</p>