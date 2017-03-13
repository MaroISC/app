<hi>{{$category->name}}</hi>
<ul>
    @foreach($category -> articles as $article)
    <li>{{$article->title}}</li>
    @endforeach
</ul>

