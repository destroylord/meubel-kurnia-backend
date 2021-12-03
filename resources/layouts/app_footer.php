        <!-- footer content -->
        <?php include_once '../layouts/utilities/footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>
      <?php include_once '../layouts/utilities/script.php'; ?>

      <script>

          // update
        $(document).on("click","#update", function(e){
          e.preventDefault();

          var id = $('#id').val();
          var nama = $('#nama').val();

          $.ajax({
            type: "POST",
            url : "<?=url()?>models/category/update.php",
            data: {
              id: id,
              nama: nama
            },
            dataType: 'JSON',
            success: function(res) {
              $('.modal').modal("hide");
              toastr.success(res.msg, res.title)
              location.reload();
            }
          })
        })


        $(function(){
          // Format Currency
          $( '#price' ).mask('000.000.000', {reverse: true});


          // funtion for insert category furniture
          $(document).on("click","#save",function(e){

              e.preventDefault();
              var name = $('#nama').val();
              var url = "<?=url()?>models/category/store.php"

              // Validation
              if (name == "") {
                $('#err').html('Nama Harus di isi');
              }

              if(name != "") {
                $.ajax({
                  type: 'POST',
                  url: url,
                  data: {
                    nama: name
                  },
                  dataType: "JSON",
                  success: function(res) {
                    $('.modal').modal("hide");
                    toastr.success(res.msg, res.title);
                    location.reload();
                  },error: function (err) {
                    console.log(err);
                  }
                });
              }
          });
        }); 

        function ButtonEdit(id) {          
          var url = "<?=url()?>models/category/update.php";

          $('#demo-form').attr("action", url)
          $(".modal-title").html("Edit Category")
          $(".edit").html("Update")
          $("#save").attr("id", "update");
          
          $(".modal").modal("show")


          $.ajax({
            type: "GET",
            url: url,
            data: {id:id},
            success: function(res){
              var categoryData=JSON.parse(res);
              $('#id').val(categoryData.id)
              $('#nama').val(categoryData.nama)
            }
          })
        }

      </script>

      <!-- Preview images -->
      <script>
        imgInp.onchange = evt => {
          const [file] = imgInp.files
          if (file) {
            blah.src = URL.createObjectURL(file)
          }
        }
      </script>
  </body>
</html>