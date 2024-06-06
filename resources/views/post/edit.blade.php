<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | CatatWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="font-sans antialiased">
    {{-- navbar --}}
    <div class="navbar bg-primary text-primary-content mb-8">
        <button class="btn btn-ghost text-xl">Edit Catatanmu</button>
    </div>

    <div class="container mx-auto p-8">
        <form action="{{ route('post.update' , $post->id)}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6">
            <!-- Input Gambar -->
            @csrf
            @method('put')
            <div>
                <label for="image" class="block text-white">Gambar</label>
                <input type="file" id="image" name="image" class="file-input file-input-bordered file-input-primary w-full" required/>
            </div>


            <!-- Input Judul -->
            <div>
                <label for="title" class="form-control w-full">
                    <div class="label">
                      <span class="label-text text-white">Judul</span>
                    </div>
                    <input type="text" id="title" name="title" value="{{ $post->title }}" placeholder="Type here" class="input input-primary input-bordered w-full" />
                </label>
            </div>


            <!-- Input Deskripsi -->
            <div>
                <label for="description" class="form-control">
                    <div class="label">
                      <span class="label-text text-white">Deskripsi</span>
                    </div>
                    <textarea id="description" name="description" class="textarea textarea-primary textarea-bordered h-24" placeholder="Bio">{{ $post->description }}</textarea>
                </label>
            </div>


            <!-- Input Konten -->
            <div>
                <label for="content" class="form-control">
                    <div class="label">
                      <span class="label-text text-white">Konten</span>
                    </div>
                    <textarea id="content" name="content" class="textarea textarea-primary textarea-bordered h-24" placeholder="Bio">{{ $post->content }}</textarea>
                </label>
            </div>


            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
