@include('frontend.header')

<!-- main section starts here -->
@include('frontend.leftsidebar')

<!-- Post (Middle Column) -->
<div class="col-md-6">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <h1>Create New Sport</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.sports.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="profileimage">Profile Image</label>
                        <input type="file" name="profileimage" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Create Sport</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- popular communities -->
@include('frontend.communities')
</div>
</div>

<!-- footer part for online forum -->
@include('frontend.footers')
