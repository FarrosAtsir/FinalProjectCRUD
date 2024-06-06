<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail | CatatWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    {{-- navbar --}}
    <div class="navbar bg-primary text-primary-content mb-2">
        <button class="btn btn-ghost text-xl">Deatil Catatanmu</button>
    </div>

    <div class="container mx-auto py-12">
        <div class="card bg-primary border border-primary shadow-xl mb-8">
            <figure><img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" /></figure>
            <div class="card-body text-black">
              <h2 class="card-title text-2xl mb-2">{{ $post->title }}</h2>
              <p class="text-start">{{ $post->description }}</p>
              <div class="prose max-w-none">
                {!! $post->content !!}
                </div>
              <div class="card-actions justify-end mt-8">
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info">Edit</a>
                <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-error">Hapus</button>
                </form>
              </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
