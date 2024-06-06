<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah | CatatWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    {{-- navbar --}}
    <div class="navbar bg-primary text-primary-content mb-8">
        <button class="btn btn-ghost text-xl">Tambah Catatanmu</button>
    </div>

    <div class="container mx-auto p-8">
        <form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-6">
            <!-- Input Gambar -->
            @csrf
            @method('post')
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
                    <input type="text" id="title" name="title" placeholder="Type here" class="input input-primary input-bordered w-full" />
                </label>
            </div>


            <!-- Input Deskripsi -->
            <div>
                <label for="description" class="form-control">
                    <div class="label">
                      <span class="label-text text-white">Deskripsi</span>
                    </div>
                    <textarea id="description" name="description" class="textarea textarea-primary textarea-bordered h-24" placeholder="Bio"></textarea>
                </label>
            </div>


            <!-- Input Konten -->
            <div>
                <label for="content" class="form-control">
                    <div class="label">
                      <span class="label-text text-white">Konten</span>
                    </div>
                    <textarea id="content" name="content" class="textarea textarea-primary textarea-bordered h-24" placeholder="Bio"></textarea>
                </label>
            </div>
            <!-- Tombol Submit -->
            <div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
