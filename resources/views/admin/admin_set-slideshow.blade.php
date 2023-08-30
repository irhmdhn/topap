<x-admin-layout title="{{ $title }}">
    @if (Session::has('success'))
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <strong>{!! Session::get('success') !!}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="row">
        <div class="col-12 col-md-8 mb-3">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Banner</th>
                                <th>Status</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($slideshow as $no => $banner)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td><img src="{{ asset('storage/'.$banner->banner_img) }}" class="rounded" width="400" alt=""></td>
                                <td>{{ $banner->banner_status }}</td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card">
                <form action="{{ route('slideshow.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-2">
                        <label for="banner">Upload banner</label><br>
                        <small class="text-secondary">file accept .jpg/.png/.webp || Aspect ratio 21:6</small>
                        <input id="banner" name="banner" type="file" class="form-control my-2" accept="jpg,jpeg,png,webp">
                        @error('banner')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="my-2">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option class="text-dark" value="inactive">Non active</option>
                            <option class="text-dark" value="active">Active</option>
                        </select>
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                        <button type="submit" class="btn btn-primary float-end my-2 mb-4">Upload</button>
                </form>
            </div>
        </div>
        
    </div>

</x-admin-layout>