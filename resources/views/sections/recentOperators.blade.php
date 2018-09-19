@foreach ($posts as $post)

<div class="operator_container default_ctu large-6 medium-6 small-6">
    <img class="post" src="{{ asset( 'images/posts/' . $post->image ) }}" />
</div>

@endforeach