@if ($messages->count() == 0)
<div class="shadow-none p-3 mb-5 bg-light rounded">
<h4>Aucun message, c'est le début d'une grande aventure !</h4>
<br />
<pre>
          /\
         /**\
        /****\   /\
       /      \ /**\
      /  /\    /    \        /\    /\  /\      /\            /\/\/\  /\
     /  /  \  /      \      /  \/\/  \/  \  /\/  \/\  /\  /\/ / /  \/  \
    /  /    \/ /\     \    /    \ \  /    \/ /   /  \/  \/  \  /    \   \
   /  /      \/  \/\   \  /      \    /   /    \
__/__/_______/___/__\___\__________________________________________________<pre/>
</div>
@else
<ul class="list-group">
    @foreach ($messages as $message)
    <div class="shadow-none p-3 mb-5 bg-light rounded">
        <div class="media">
            <a class="js-user-profile-link js-nav" href="{{ route('users.show', $message->user) }}">
                @if ($message->user->profile_picture)
                <img src="{{ $message->user->profile_picture }}" class="profile-picture mr-3">
                @else
                <img src="/img/profile.jpg" class="profile-picture mr-3">
                @endif
            </a>
            <div class="media-body message">
                <a class="js-user-profile-link js-nav"  
                    href="{{ route('users.show', $message->user) }}">
                    <h5 class="mt-0"><b>{{ $message->user->name }}</b></h5>
                </a>
                <div class="float-right">
                    <div class="p-2 bd-highlight">
                        <h6><i>{{ $message->created_at }}</i>
                            @if ($message->created_at != $message->updated_at)
                            <br /><i>Édité à : {{ $message->updated_at }}</i>
                            @endif
                    </div>
                </div>
                </h6>
                <div class="message-content">{{ $message->content }}</div>
            </div>
        </div>
        <br />
        @if ($message->user == Auth::user())
        <div class="btn-group" role="group">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                    Supprimer
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('messages.destroy', $message) }}">
                                @method('DELETE')
                                @csrf
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Supprimer Le message ?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <a href="{{ route('messages.edit', $message) }}" class="btn btn-sm btn-info">Editer</a>
        </div>
        @endif
    </div>
    @endforeach
</ul>
{{ $messages->links() }}
@endif