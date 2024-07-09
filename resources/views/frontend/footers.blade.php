<!-- footer part for online forum -->
@foreach ($footers as $footer)
    <footer style="
    text-align: center;
    padding: 0.1px;
    background-color: rgb(213, 200, 202);
  ">
        <p>
            {{-- &copy;  --}}
            {{ $footer->title }}|
            <a href="{{ route('contentpolicy') }}">Content Policy</a> |
            <a href="{{ route('privacypolicy') }}">Privacy Policy</a> |
            <a href="{{ route('useragreement') }}">User Agreement</a>
        </p>
    </footer>
@endforeach
<!-- javascript link part -->
<script src="https://kit.fontawesome.com/3110fbbca9.js" crossorigin="anonymous"></script>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>

</html>


<!-- footer part ends here -->
