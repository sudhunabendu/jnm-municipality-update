
@if(session('success'))
<div id="toastsContainerTopRight" class="toasts-top-right fixed">
  <div class="toast bg-success fade show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <h5 class="mr-auto">Success</h5>
      <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="toast-body">{{session('success')}}</div>
  </div>
</div>
@elseif(session('error'))
<div id="toastsContainerTopRight" class="toasts-top-right fixed">
  <div class="toast bg-danger fade show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <h5 class="mr-auto">Error</h5>
      <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="toast-body">{{session('error')}}</div>
  </div>
</div>

@endif

<script>
  document.addEventListener('DOMContentLoaded', function() {
      const toast = document.querySelector('.toast');
      if (toast) {
          // Auto-dismiss after 5 seconds
          setTimeout(function() {
              toast.classList.remove('show');
              setTimeout(function() {
                  toast.remove();
              }, 500); // Wait for fade-out animation
          }, 5000);

          // Manual close button functionality
          const closeBtn = toast.querySelector('.close');
          if (closeBtn) {
              closeBtn.addEventListener('click', function() {
                  toast.classList.remove('show');
                  setTimeout(function() {
                      toast.remove();
                  }, 500);
              });
          }
      }
  });
</script>