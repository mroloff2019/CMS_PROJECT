 </div>
    <!-- /#wrapper -->

   
   
    <script src="js/jquery.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>   
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 
    <script>
    	$(document).ready(function(){    
        ClassicEditor
        .create(document.querySelector( '#body' ) )
        .catch(error => {
            console.error(error );
        } );
});
    </script>
    

</body>

</html>
