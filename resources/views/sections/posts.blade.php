@foreach ($posts as $post)

<div class="operator_container default_ctu large-2 medium-4 small-6">
    <img class="post" src="{{ asset( 'images/posts/' . $post->image ) }}" />
    <a href="{{ route($postPageRoute, $id = $post->id ) }}">
        <div class='overlay'>
        <h4> {{ $post->title }}</h4>
        </div>
    </a>
</div>

@endforeach