<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <title>Home | CatatWeb</title>
</head>


<body>
    {{-- navbar --}}
    <div class="navbar bg-primary text-primary-content">
        <button class="btn btn-ghost text-xl">CatatWeb</button>
    </div>

    {{-- tombol tambah --}}
    <div class="container mx-auto p-auto text-center mt-4">
        <a href="{{ route('post.create') }}" class="btn btn-accent w-full mt-8 mb-4">Tambah</a>

        {{-- card --}}
        <div class="flex flex-wrap justify-center mt-4 gap-6">
            <!-- Card 1 -->
            @forelse($post as $p)
                   
            <div class="card w-96 bg-primary border border-primary shadow-xl mb-8 text-center">
                <figure><img src="{{ Storage::url($p->image) }}" alt="Shoes" /></figure>
                <div class="card-body text-black">
                  <h2 class="font-bold text-2xl mb-2">{{ $p->title }}</h2>
                  <p>{{ $p->description }}</p>
                  <div class="card-actions justify-center mt-8">
                    <a href="{{ route('post.show',$p->id) }}" class="btn btn-accent">Lihat</a>
                    <a href="{{ route('post.edit', $p->id) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('post.destroy', $p->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-error">Hapus</button>
                    </form>
                  </div>
                </div>
            </div>
            @empty
            <p class="text-5xl mt-16">Data Tidak tersedia</p>
            @endforelse ($post as $p)
     
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
