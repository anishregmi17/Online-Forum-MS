@include('frontend.header')
@include('frontend.leftsidebar')

<!-- Post (Middle Column) -->
<div class="col-md-6">
    <div class="content">
        <h2>Forum Feed</h2>
        <!-- Post Content Goes Here -->

        @foreach ($posts as $post)
            <div class="card mb-3" style="max-width: 3000px">
                <div class="card-body">
                    <div class="profile-section">
                        <a href="#">
                            <img src="{{ asset($post->profileimage) }}" alt="pic"
                                style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;" />
                            <!-- Profile icon -->
                            <span style="font-weight: bold; color: #070606">{{ $post->username }}</span>
                            <!-- Username -->
                        </a>
                        <span><small class="text-muted">Last updated at {{ $post->updated_at }}</small></span>
                    </div>
                    <div style="color: black">
                        <h5 class="card-title">
                            {{ $post->title }}
                        </h5>
                        <p class="card-text" id="firstParagraph">
                            {{ $post->description }}
                        </p>
                    </div>

                    <img src="{{ asset($post->image) }}" class="card-img-top" alt="..." />
                    <div class="d-flex align-items-center icon1">
                        <div>
                            <a href="#" class="like-button" data-post-id="{{ $post->id }}"><i
                                    class="fa-regular fa-heart me-3 p-2"></i></a>
                            <!-- Heart icon -->
                            <a href="#" class="comment-button" data-post-id="{{ $post->id }}"><i
                                    class="far fa-comment me-3 p-2"></i></a>
                            <!-- Comment icon -->
                        </div>
                        <div></div>
                    </div>

                    <!-- Comment Section -->
                    <div class="comment-section" style="display: none;">
                        <!-- Existing Comments -->
                        <div class="existing-comments">
                            <h5>Comments:</h5>
                            @foreach ($post->comments as $comment)
                                <div class="comment">
                                    <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->body }}</p>
                                </div>
                            @endforeach
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <form class="new-comment-form" data-post-id="{{ $post->id }}">
                                <textarea name="body" required></textarea>
                                <button type="submit">Comment</button>
                            </form>
                            <div class="comment-success" style="display: none; color: green;">
                                Comment posted successfully.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



<!-- Comment Popup Modal -->
<div id="commentModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form id="commentForm">
            <textarea name="body" required></textarea>
            <button type="submit">Comment</button>
        </form>
    </div>
</div>

<style>
    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    textarea {
        width: 100%;
        height: 100px;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const likeButtons = document.querySelectorAll('.like-button');
        const commentButtons = document.querySelectorAll('.comment-button');
        const commentModal = document.getElementById('commentModal');
        const commentForm = document.getElementById('commentForm');
        const newCommentForms = document.querySelectorAll('.new-comment-form');
        const commentSuccessMessages = document.querySelectorAll('.comment-success');

        likeButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const postId = this.dataset.postId;
                fetch(`/post/${postId}/like`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector(
                                'meta[name="csrf-token"]').getAttribute('content'),
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            if (this.querySelector('i').classList.contains('fa-regular')) {
                                this.querySelector('i').classList.remove('fa-regular');
                                this.querySelector('i').classList.add('fa-solid');
                                this.querySelector('i').style.color =
                                    'red'; // Change heart color to red
                            } else {
                                this.querySelector('i').classList.remove('fa-solid');
                                this.querySelector('i').classList.add('fa-regular');
                                this.querySelector('i').style.color =
                                    ''; // Reset color to default
                            }
                        }
                    });
            });
        });

        commentButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const postId = this.dataset.postId;
                const commentSection = this.closest('.card-body').querySelector(
                    '.comment-section');
                if (commentSection.style.display === 'none' || commentSection.style.display ===
                    '') {
                    commentSection.style.display = 'block';
                    fetch(`/post/${postId}/comments`, {
                            method: 'GET',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute('content'),
                                'Content-Type': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            // Clear existing comments if any
                            commentSection.querySelector('.existing-comments').innerHTML =
                                '';

                            // Display fetched comments
                            data.comments.forEach(comment => {
                                const commentDiv = document.createElement('div');
                                commentDiv.classList.add('comment');
                                commentDiv.innerHTML =
                                    `<p><strong>${comment.user.name}</strong>: ${comment.body}</p>`;
                                commentSection.querySelector('.existing-comments')
                                    .appendChild(commentDiv);
                            });
                        });
                } else {
                    commentSection.style.display = 'none';
                }
            });
        });

        commentForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            const postId = this.closest('.comment-section').querySelector('.new-comment-form').dataset
                .postId;
            fetch(`/post/${postId}/comment`, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const commentSection = this.closest('.comment-section');
                        const commentSuccessMessage = commentSection.querySelector(
                            '.comment-success');
                        commentSuccessMessage.style.display = 'block';
                        setTimeout(() => {
                            commentSuccessMessage.style.display = 'none';
                        }, 2000); // Hide success message after 2 seconds
                        // Optionally update the comment list dynamically here
                        this.querySelector('textarea').value =
                            ''; // Clear textarea after comment submission
                    }
                });
        });

        // Close the modal
        document.querySelector('.close').onclick = function() {
            commentModal.style.display = 'none';
        };

        window.onclick = function(event) {
            if (event.target == commentModal) {
                commentModal.style.display = 'none';
            }
        };

        // Toggle comment forms
        newCommentForms.forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                const postId = this.dataset.postId;
                const formData = new FormData(this);
                fetch(`/post/${postId}/comment`, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector(
                                'meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Optionally update the comment list dynamically here
                            this.querySelector('textarea').value =
                                ''; // Clear textarea after comment submission
                        }
                    });
            });
        });
    });
</script>


@include('frontend.communities')
@include('frontend.footers')
