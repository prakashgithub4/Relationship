<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style>
.note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
</style>
    <div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Address Details</p>
                </div>

                <div class="form-content">
                    <form method="post" action="{{ url('address')}}" >
                        @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="pin" placeholder="Pincode" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="area" placeholder="Area Name" value=""/>
                            </div>
                        </div>
                       
                         <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="city" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name = "country" placeholder="country" value=""/>
                            </div>
                        </div>
                         <div class="col-md-12">
                           <textarea name="address" id="editor1"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btnSubmit">Submit</button>
                    <a href="#">Skip</a>
                </div>
            </div>
          
        </form>
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="{{asset('public/templateEditor/ckeditor/ckeditor.js')}}"></script>
   
   <script type="text/javascript">  
     CKEDITOR.replace( 'editor1' );  
  </script>