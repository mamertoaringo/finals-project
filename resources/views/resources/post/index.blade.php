<x-app-layout>

    <div class="pagetitle">
        <h1>{{ __('Post') }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{  ('dashboard')  }}">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item active">{{ __('Post') }}</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-5">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary floa"><i class="bi bi-earmark-plus-fill me-1"></i>Add a New Post</button>
                        <hr class="my-5" />
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Post</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($posts) @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->subject}}</td>
                                    <td>{{$post->post}}</td>
                                    <td>{{$post->status}}</td>
                                    <td>
                                        <button type="button" class="btn btn-dark m-1"><i class="bi bi-folder-symlink"></i></button>
                                        <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="bi bi-trash2-fill"></i></button>
                                    </td>
                                </tr>
                                @endforeach @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
