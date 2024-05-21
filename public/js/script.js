
$('#summernote').summernote({
  placeholder: 'Hello Bootstrap 5',
  tabsize: 2,
  height: 100,
  toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'underline', 'clear']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['table', ['table']],
    ['insert', ['link', 'picture', 'video']],
    ['view', ['fullscreen', 'codeview', 'help']]
  ]
});


// notification 
// Function to show notification
function showNotification() {
  $.notify({
      message: "Notification message here"
  },{
      type: "info",
      placement: {
          from: "top",
          align: "right"
      },
      delay: 2000
  });
}

// Event listener for bell icon click
$(document).ready(function() {
  $('#bellIcon').click(function(event) {
      event.preventDefault(); // Prevent the default action (e.g., following the link)
      showNotification(); // Call the function to show the notification
  });
});


