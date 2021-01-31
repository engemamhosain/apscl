 <style type="text/css">
 
.toast.show {

    display: block;
    opacity: 1;

}
.toast {

    max-width: 350px;
    overflow: hidden;
    font-size: 0.875rem;
    background-color: 

rgba(255, 255, 255, 0.85);

background-clip: padding-box;

border: 1px solid
rgba(0, 0, 0, 0.1);

box-shadow: 0 0.25rem 0.75rem

    rgba(0, 0, 0, 0.1);
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    border-radius: 0.25rem;

}
.fade {

    transition: opacity 0.15s linear;

}


.toast-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding: 0.25rem 0.75rem;
    color:#6c757d;
    background-color:rgba(255, 255, 255, 0.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}
 </style>
 
   
       <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
         <div class="toast-header">
          <svg class=" rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
            focusable="false" role="img">
            <rect fill="#007aff" width="100%" height="100%" /></svg>
          <strong class="mr-auto">Bootstrap</strong>
          <small class="text-muted">11 mins ago</small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          Hello, world! This is a toast message.
        </div>
      </div>
 