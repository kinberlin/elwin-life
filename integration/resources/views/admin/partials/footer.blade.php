
<script src="{!! url('js/quill.js') !!}"></script>
<script src="{!! url('js/aapp.js') !!}"></script>
<script src="{!! url('js/datatables.js') !!}"></script>

<script>
document.addEventListener("DOMContentLoaded", function(event) { 
setTimeout(function(){
  if(localStorage.getItem('popState') !== 'shown'){
    window.notyf.open({
      type: "success",
      message: "Get access to all 500+ components and 45+ pages with AdminKit PRO. <u><a class=\"text-white\" href=\"https://adminkit.io/pricing\" target=\"_blank\">More info</a></u> 🚀",
      duration: 5000,
      ripple: true,
      dismissible: false,
      position: {
        x: "left",
        y: "bottom"
      }
    });

    localStorage.setItem('popState','shown');
  }
}, 1500);
});
</script>