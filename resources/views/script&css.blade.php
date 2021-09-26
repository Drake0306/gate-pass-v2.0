<link href="{{url('../public/style.css')}}" rel="stylesheet">
<link href="{{url('../public/main.css')}}" rel="stylesheet">
<link href="{{url('../public/bot5.css')}}" rel="stylesheet">
<script type="text/javascript" src="{{url('../public/assets/scripts/main.js')}}"></script>
<!-- <script type="text/javascript" src="{{url('../public/script.js')}}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<!-- <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"> -->
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">
a {
    color: #0d6efd;
    text-decoration: none;
}
.preloader {
    background-color: rgb(255, 255, 255,0.9);
    width:100%;
    height:100%;
    position: fixed;
    z-index:9999;
    align-items: center;
}
.spinner-border {
    width: 4rem;
    height: 4rem;
}
.form-floating>.form-control {
    margin-top: 10px;
    padding: 1rem .75rem;
}
</style>



<script>
    $(document).ready(function() {
        setTimeout(function(){ 
            $('#preloader').hide();
            document.getElementById('preloader').style.color = '#fefefe';
            document.getElementById('preloader').style.zIndex = '0';
        }, 500);
    });
</script>